<?php

namespace udumpparser;

use KoKoKo\assert\Assert;

// TODO: spoiler
// TODO: smiles
// TODO: images
// TODO: html enities
// TODO: attachments
// TODO: url replacement

abstract class ModuleScheme implements ModuleSchemeFields
{

    /**
     * @var string
     */
    private $basePath;

    /**
     * @return array mapping index=>assocIndex
     */
    abstract protected function getFieldsMap();

    /**
     * @param string $basePath path to directory with dump data
     */
    public function __construct($basePath)
    {
        Assert::assert($basePath, 'basePath')->notEmpty()->string();
        if (!is_dir($basePath)) {
            throw new \InvalidArgumentException("The `$basePath` does not exist or is not readable");
        }

        $this->basePath = $basePath;
    }

    public function convert()
    {
        $dumpPath = $this->getDumpPath();

        if (!is_file($dumpPath)) {
            throw new \DomainException("Can not open file $dumpPath");
        }
        if (!is_readable($dumpPath)) {
            throw new \DomainException("Can not read file $dumpPath");
        }

        $data = file_get_contents($dumpPath);

        $data = trim($data);

        // (?<!\\\\) - ignore escaped entities (e.g. \|)
        $data = preg_split('/(?<!\\\\)\n/', $data);
        $data = array_map(function ($item) {
            return preg_split(
                '/(?<!\\\\)\|/',
                preg_replace('/\\\\\n/', "\n", $item)
            );
        }, $data);

        $map = $this->getFieldsMap();

        return array_map(function ($entry) use ($map) {
            return $this->mapEntry($map, $entry);
        }, $data);
    }

    private function mapEntry($map, $entry)
    {
        Assert::assert($map, 'map')->isArray();
        Assert::assert($entry, 'entry')->isArray();

        $newEntry = [];
        foreach ($entry as $key => $value) {
            if (isset($map[$key])) {
                $key = $map[$key];
            }

            $newEntry[$key] = $value;
        }

        // invoke transforms
        $transforms = [
            new \udumpparser\transforms\Cut(),
            new \udumpparser\transforms\MysqlDate(),
            new \udumpparser\transforms\Attachments(),
        ];
        foreach ($newEntry as $field => $value) {
            foreach ($transforms as $transform) {
                if ($transform->canAccept($field)) {
                    $transform->visit($field, $newEntry, $this);
                }
            }
        }

        return $newEntry;
    }

    public function getDumpPath()
    {
        if (!defined('static::DUMP')) {
            throw new \DomainException('Each scheme must define DUMP constant');
        }

        $path = $this->basePath . '/_s1/' . static::DUMP;

        if (!is_file($path)) {
            throw new \DomainException('Dump file does not exist');
        }

        return realpath($path);
    }

    public function getUploadsPath()
    {
        if (!defined('static::UPLOADS')) {
            return null;
        }

        $path = $this->basePath . '/' . static::UPLOADS;

        if (!is_dir($path)) {
            throw new \DomainException('Uploads directory does not exist');
        }

        return realpath($path);
    }

    protected function getCatFileName()
    {
        return false;
    }

    protected function getCatKeys()
    {
        return false;
    }
}

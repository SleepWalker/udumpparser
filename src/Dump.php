<?php

namespace udumpparser;

use KoKoKo\assert\Assert;

class Dump
{
    /**
     * @var string
     */
    private $basePath;

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

    public function get($moduleId)
    {
        Assert::assert($moduleId, 'moduleId')->notEmpty()->string();

        $className = __NAMESPACE__ . '\\schemes\\' . ucfirst($moduleId);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException("Module `$moduleId` does not supported");
        }

        $scheme = new $className($this->basePath);

        return $scheme->convert();
    }
}

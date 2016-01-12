<?php
/**
 * Converts date timestamps to mysql format
 */

namespace udumpparser\transforms;

use udumpparser\Transform;
use udumpparser\ModuleScheme;

class Attachments extends Transform
{
    public function canAccept($field)
    {
        return $field === ModuleScheme::ATTACHMENTS;
    }

    public function visit($field, &$fields, $scheme)
    {
        $images = explode('\\|', $fields[$field]);

        $fields[$field] = &$images;

        foreach ($images as &$image) {
            $image = explode('`', $image);
            if (count($image) == 6) {
                $keys = array_merge([
                    'name',
                    'extension',
                    'fullWidth',
                    'fullHeight',
                    'thumbWidth',
                    'thumbHeight',
                ]);
                $image = array_combine($keys, $image);
                $image['filename'] = $image['name'] . '.' . $image['extension'];
                $image['filepath'] = $scheme->getUploadsPath() . '/' . $image['filename'];
            }
        }
    }
}

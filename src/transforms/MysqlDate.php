<?php
/**
 * Converts date timestamps to mysql format
 */

namespace udumpparser\transforms;

use udumpparser\Transform;
use udumpparser\ModuleScheme;

class MysqlDate extends Transform
{
    public function canAccept($field)
    {
        return in_array(
            $field,
            [
                ModuleScheme::DATE_CREATE,
                ModuleScheme::DATE_UPDATE,
                ModuleScheme::DATE_VISIT,
            ],
            true
        );
    }

    public function visit($field, &$fields, $scheme)
    {
        $fields[$field] = date('Y-m-d G:i:s', $fields[$field]);
    }
}

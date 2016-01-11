<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class BoardCategories extends ModuleScheme
{
    const DUMP = 'bd_bd.txt';

    protected function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::PARENT_CAT_ID,
            2 => self::IS_SECTION,
            5 => self::TITLE,
            6 => self::DESCRIPTION,
            10 => self::URL_ALIAS,
        ];
    }
}

<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class NewsCategories extends ModuleScheme
{
    const DUMP = 'nw_nw.txt';

    protected function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::PARENT_CAT_ID,
            2 => self::IS_SECTION,
            3 => self::TITLE,
            4 => self::DESCRIPTION,
        ];
    }
}

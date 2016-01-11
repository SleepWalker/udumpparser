<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class ForumCategories extends ModuleScheme
{
    const DUMP = 'fr_fr.txt';

    protected function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::PARENT_ID,
            4 => self::DATE_CREATE,
            5 => self::TITLE,
            6 => self::DESCRIPTION,
            9 => self::THEMES_COUNT,
            10 => self::POSTS_COUNT,
            11 => self::DATE_UPDATE,
            15 => self::AUTHOR_NAME,
            16 => self::LAST_THEME_ID,
            17 => self::THEME_NAME,
        ];
    }
}

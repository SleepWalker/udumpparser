<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Forum extends ModuleScheme
{
    const DUMP = 'forum.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::CAT_ID,
            2 => self::HAS_POLL,
            3 => self::IS_PINNED,
            4 => self::DATE_CREATE,
            5 => self::IS_LOCKED,
            6 => self::POSTS_COUNT,
            7 => self::VIEWS_COUNT,
            8 => self::TITLE,
            9 => self::DESCRIPTION,
            10 => self::USERNAME,
            12 => self::AUTHOR_NAME,
            15 => self::USER_ID,
        ];
    }
}

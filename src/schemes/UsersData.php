<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class UsersData extends ModuleScheme
{
    const DUMP = 'ugen.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::USER_ID,
            1 => self::USERNAME,
            2 => self::GROUP_ID,
            3 => self::IS_LOCKED,
            6 => self::TOTAL_MATERIALS,
            7 => self::REPUTATION_COUNT,
            8 => self::REPUTATION_SOURCES,
            9 => self::POSTS_COUNT,
            10 => self::COMMENTS_COUNT,
            11 => self::BLOG_COUNT,
            12 => self::NEWS_COUNT,
            13 => self::PUB_COUNT,
            14 => self::LOAD_COUNT,
            16 => self::BOARD_COUNT,
            18 => self::DATE_VISIT,
            19 => self::PHOTO_COUNT,
        ];
    }
}

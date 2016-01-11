<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Publ extends ModuleScheme
{
    const DUMP = 'publ.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::PARENT_CAT_ID,
            2 => self::CAT_ID,
            5 => self::DATE_CREATE,
            7 => self::COMMENTS_ENABLED,
            8 => self::COMMENTS_NUM,
            9 => self::RATING_SCORE,
            10 => self::RATING_VOTES,
            13 => self::TITLE,
            14 => self::SNIPPET,
            15 => self::USERNAME,
            16 => self::VIEWS_COUNT,
            17 => self::AUTHOR_NAME,
            19 => self::WEBSITE,
            20 => self::MESSAGE,
            21 => self::AUTHOR_EMAIL,
            22 => self::USER_ID,
            25 => self::URL_ALIAS,
            26 => self::DATE_UPDATE,
        ];
    }
}

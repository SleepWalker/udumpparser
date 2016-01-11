<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Photo extends ModuleScheme
{
    const DUMP = 'photo.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::PARENT_CAT_ID,
            2 => self::CAT_ID,
            3 => self::PHOTO_FILENAME,
            4 => self::EXT,
            5 => self::COMMENTS_ENABLED,
            6 => self::DATE_CREATE,
            7 => self::COMMENTS_NUM,
            8 => self::TITLE,
            9 => self::MESSAGE,
            11 => self::WIDTH,
            12 => self::HEIGHT,
            13 => self::RATING_SCORE,
            14 => self::RATING_VOTES,
            16 => self::IP,
            18 => self::USERNAME,
            20 => self::VIEWS_COUNT,
            21 => self::USER_ID,
            27 => self::URL_ALIAS,
            28 => self::OTHER1,
            29 => self::OTHER2,
            30 => self::OTHER3,
            31 => self::OTHER4,
            32 => self::OTHER5,
            33 => self::DATE_UPDATE,
        ];
    }
}

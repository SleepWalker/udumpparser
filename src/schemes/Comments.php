<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Comments extends ModuleScheme
{
    const DUMP = 'comments.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::MODULE_ID,
            2 => self::POST_ID,
            4 => self::DATE_CREATE,
            5 => self::USERNAME,
            6 => self::FULL_NAME,
            7 => self::EMAIL,
            8 => self::WEBSITE,
            9 => self::IP,
            10 => self::MESSAGE,
            11 => self::ANSWER,
            12 => self::USER_ID,
            13 => self::PARENT_ID,
            14 => self::LIKES,
            15 => self::LIKES_USER_IDS,
        ];
    }
}

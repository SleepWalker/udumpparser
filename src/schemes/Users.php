<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Users extends ModuleScheme
{
    const DUMP = 'users.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::USERNAME,
            2 => self::PASSWORD,
            3 => self::AVATAR_URL,
            5 => self::FULL_NAME,
            6 => self::GENDER_ID,
            7 => self::EMAIL,
            8 => self::WEBSITE,
            9 => self::ICQ,
            10 => self::COUNTRY_ID,
            11 => self::REGION,
            12 => self::CITY,
            13 => self::SIGNATURE,
            14 => self::TITLE,
            15 => self::DATE_CREATE,
            16 => self::IP,
            17 => self::REGISTRATION_SERVER,
            21 => self::IS_BANNED,
            22 => self::BIRTHDAY,
            23 => self::NEED_ACTIVATION,
            25 => self::DATE_UPDATE,
        ];
    }
}

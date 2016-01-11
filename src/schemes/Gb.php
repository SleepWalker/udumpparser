<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Gb extends ModuleScheme
{
    const DUMP = 'gb.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::FULL_NAME,
            2 => self::EMAIL,
            3 => self::WEBSITE,
            8 => self::DATE_CREATE,
            9 => self::IP,
            10 => self::MESSAGE,
            12 => self::USERNAME,
            14 => self::USER_ID,
            17 => self::DATE_UPDATE,
        ];
    }
}

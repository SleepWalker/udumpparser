<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Repute extends ModuleScheme
{
    const DUMP = 'repute.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::TO_ID,
            2 => self::FROM_ID,
            3 => self::AMOUNT,
            4 => self::DATE_CREATE,
            5 => self::MESSAGE,
            6 => self::SOURCE_URL,
            7 => self::ANSWER,
        ];
    }
}

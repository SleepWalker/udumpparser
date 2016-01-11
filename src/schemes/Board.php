<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Board extends ModuleScheme
{
    const DUMP = 'board.txt';

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
            12 => self::IP,
            13 => self::VIEWS_COUNT,
            15 => self::TITLE,
            17 => self::SNIPPET,
            22 => self::USERNAME,
            27 => self::OTHER1,
            28 => self::OTHER2,
            29 => self::OTHER3,
            30 => self::OTHER4,
            31 => self::OTHER5,
            32 => self::MESSAGE,
            36 => self::USER_ID,
            39 => self::URL_ALIAS,
            40 => self::DATE_UPDATE,
        ];
    }
}

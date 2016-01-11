<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Polls extends ModuleScheme
{
    const DUMP = 'po_po.txt';

    protected function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::INPUT_TYPE,
            2 => self::IS_ACTIVE,
            3 => self::DATE_POLL_START,
            4 => self::DATE_POLL_END,
            5 => self::BUTTON_NAME,
            6 => self::ANSWER1,
            7 => self::ANSWER2,
            8 => self::ANSWER3,
            9 => self::ANSWER4,
            10 => self::ANSWER5,
            11 => self::ANSWER6,
            12 => self::ANSWER7,
            13 => self::ANSWER8,
            14 => self::ANSWER9,
            15 => self::ANSWER10,
            16 => self::ANSWER11,
            17 => self::ANSWER12,
            18 => self::ANSWER13,
            19 => self::ANSWER14,
            20 => self::ANSWER15,
            21 => self::ANSWER1_COUNT,
            22 => self::ANSWER2_COUNT,
            23 => self::ANSWER3_COUNT,
            24 => self::ANSWER4_COUNT,
            25 => self::ANSWER5_COUNT,
            26 => self::ANSWER6_COUNT,
            27 => self::ANSWER7_COUNT,
            28 => self::ANSWER8_COUNT,
            29 => self::ANSWER9_COUNT,
            30 => self::ANSWER10_COUNT,
            31 => self::ANSWER11_COUNT,
            32 => self::ANSWER12_COUNT,
            33 => self::ANSWER13_COUNT,
            34 => self::ANSWER14_COUNT,
            35 => self::ANSWER15_COUNT,
            36 => self::TOTAL_ANSWERS,
            37 => self::TOTAL_ANSWERS
        ];
    }
}

<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Load extends ModuleScheme
{
    const DUMP = 'loads.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::PARENT_CAT_ID,
            2 => self::CAT_ID,
            4 => self::IS_PINNED,
            5 => self::DATE_CREATE,
            7 => self::COMMENTS_ENABLED,
            6 => self::IS_DRAFT,
            8 => self::COMMENTS_NUM,
            9 => self::RATING_SCORE,
            10 => self::RATING_VOTES,
            13 => self::VIEWS_COUNT,
            14 => self::DOWNLOADS_COUNT,
            15 => self::TITLE,
            16 => self::SNIPPET,
            22 => self::DOWNLOAD_EXTERNAL_URL,
            23 => self::DOWNLOAD_SIZE,
            24 => self::DOWNLOAD_FILENAME,
            26 => self::USERNAME,
            27 => self::OTHER1,
            28 => self::OTHER2,
            29 => self::OTHER3,
            30 => self::OTHER4,
            31 => self::OTHER5,
            32 => self::MESSAGE,
            35 => self::USER_ID,
            38 => self::URL_ALIAS,
            39 => self::DATE_UPDATE,
        ];
    }
}

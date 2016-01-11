<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class News extends ModuleScheme
{
    const DUMP = 'news.txt';
    const UPLOADS = '_nw';

    protected function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::CAT_ID,
            2 => self::URL_YEAR,
            3 => self::URL_MONTH,
            4 => self::URL_DAY,
            5 => self::IS_DRAFT,
            6 => self::IS_PINNED,
            7 => self::COMMENTS_ENABLED,
            8 => self::DATE_CREATE,
            9 => self::COMMENTS_NUM,
            10 => self::USERNAME,
            11 => self::TITLE,
            12 => self::SNIPPET,
            13 => self::MESSAGE, //with $CUT$
            14 => self::SHOW_ATTACHMENTS,
            15 => self::ATTACHMENTS,
            16 => self::VIEWS_COUNT,
            17 => self::RATING_SCORE,
            18 => self::RATING_VOTES,
            20 => self::IP,
            21 => self::OTHER1,
            22 => self::OTHER2,
            23 => self::OTHER3,
            24 => self::OTHER4,
            25 => self::OTHER5,
            26 => self::IS_HTML,
            27 => self::COMMENTS_SUBSCRIBE,
            28 => self::URL_ALIAS,
            29 => self::DATE_UPDATE,
        ];
    }
}

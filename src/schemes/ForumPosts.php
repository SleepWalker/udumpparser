<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class ForumPosts extends ModuleScheme
{
    const DUMP = 'forump.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::CAT_ID,
            2 => self::DATE_CREATE,
            3 => self::IS_HTML,
            4 => self::MESSAGE,
            6 => self::USERNAME,
            10 => self::ATTACHMENTS,
            12 => self::IP,
            14 => self::POLL,
            15 => self::USER_ID,
            16 => self::DATE_UPDATE,
        ];
    }
}

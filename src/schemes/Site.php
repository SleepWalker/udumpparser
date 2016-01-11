<?php

namespace udumpparser\schemes;

use udumpparser\ModuleScheme;

class Site extends ModuleScheme
{
    const DUMP = 'site.txt';

    public function getFieldsMap()
    {
        return [
            0 => self::ID,
            1 => self::HAS_OWN_TEMPLATE,
            2 => self::IS_DRAFT,
            3 => self::ALLOWED_GROUPS,
            4 => self::TITLE,
            5 => self::ATTACHMENTS,
            6 => self::CODE,
            7 => self::DATE_CREATE,
            8 => self::PROXY_URLS,
            9 => self::URL_ALIAS,
        ];
    }
}

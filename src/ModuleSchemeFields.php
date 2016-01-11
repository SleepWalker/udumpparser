<?php

namespace udumpparser;

interface ModuleSchemeFields
{
    const ID = 'id'; // int
    /**
     * 1 -> blog
     * 2 -> news
     * 3 -> publ
     * 4 -> photo
     * 5 -> load
     * 6 -> Каталог сайтов
     * 7 -> Доска объявлений
     * 8 -> Онлайн игры
     * 9 -> Интернет-магазин
     * 10 -> Видео
     * 11 -> Видео-Каналы
     */
    const MODULE_ID = 'moduleId'; // int
    const CAT_ID = 'catId'; // int
    const PARENT_CAT_ID = 'parentCatId'; // int
    const URL_YEAR = 'urlYear';
    const URL_MONTH = 'urlMonth';
    const URL_DAY = 'urlDay';
    const URL_ALIAS = 'urlAlias';
    const IS_DRAFT = 'isDraft'; // bool
    const COMMENTS_ENABLED = 'isCommentsEnabled'; // bool
    const DATE_CREATE = 'dateCreate';
    const DATE_UPDATE = 'dateUpdate';
    const COMMENTS_NUM = 'commentsCount'; // int
    const USERNAME = 'username';
    const USER_ID = 'userId';
    const TITLE = 'title';
    const SNIPPET = 'snippet';
    const MESSAGE = 'message';
    const SHOW_ATTACHMENTS = 'showAttachments'; // bool
    const ATTACHMENTS = 'attachments';
    const VIEWS_COUNT = 'viewsCount'; // int
    const RATING_SCORE = 'ratingScore'; // int
    const RATING_VOTES = 'ratingVotes'; // int
    const IP = 'ip';
    const OTHER1 = 'other1';
    const OTHER2 = 'other2';
    const OTHER3 = 'other3';
    const OTHER4 = 'other4';
    const OTHER5 = 'other5';
    const IS_HTML = 'isHtml'; // bool
    const COMMENTS_SUBSCRIBE = '??commentsSubscribe';

    const DOWNLOAD_FILENAME = 'downloadFilename';
    const DOWNLOAD_EXTERNAL_URL = 'downloadExternalUrl';
    const DOWNLOAD_SIZE = 'downloadSize';
    const DOWNLOADS_COUNT = 'downloadsCount'; // int

    const AUTHOR_NAME = 'authorName';
    const AUTHOR_EMAIL = 'authorEmail';

    const BIRTHDAY = 'birthday';
    const AVATAR_URL = 'avatarUrl';
    const EMAIL = 'email';
    const FULL_NAME = 'fullName';
    const ICQ = 'icq';
    const PASSWORD = 'password';
    const SIGNATURE = 'signature';
    const WEBSITE = 'website';
    const REGISTRATION_SERVER = 'registrationServer';
    const COUNTRY_ID = 'countryId';
    const CITY = 'city';
    const REGION = 'region';
    const GENDER_ID = 'genderId'; // 1 -> m, 2 -> f
    const IS_BANNED = 'isBanned'; // bool
    const NEED_ACTIVATION = 'needActivation'; // bool

    const WIDTH = 'width';
    const HEIGHT = 'height';
    const EXT = 'ext';
    const PHOTO_FILENAME = 'photoFilename';

    const DESCRIPTION = 'description';
    const IS_PINNED = 'isPinned'; // bool
    const IS_LOCKED = 'isLocked'; // bool
    const HAS_POLL = 'hasPoll'; // bool
    const POLL = 'poll'; // 'Don&#39;t Answer it`Answer1`Answer2`Answer3`Answer4`Answer5``````0`0`0`0`0`0`0`0`0`0`0``0`0'

    const POST_ID = 'postId'; // int
    const QUESTION = 'question';
    const ANSWER = 'answer';
    const LIKES = 'likes'; // int
    const LIKES_USER_IDS = 'likesUserIds';
    const PARENT_ID = 'parentId'; // int

    const SOURCE_URL = 'sourceUrl';
    const AMOUNT = 'amount';
    const FROM_ID = 'fromId';
    const TO_ID = 'toId';

    const CODE = 'code';
    const ALLOWED_GROUPS = 'allowedGroups';
    const HAS_OWN_TEMPLATE = 'hasOwnTemplate';
    const PROXY_URLS = 'proxyUrls';

    const LAST_THEME_ID = 'lastThemeId';
    const THEMES_COUNT = 'themesCount';
    const THEME_NAME = 'themeName';

    const IS_SECTION = 'isSection'; // bool

    /**
     * 1 -> Пользователи
     * 2 -> Проверенные
     * 3 -> Глобальный модератор
     * 4 -> Администраторы
     * 5 -> Модераторы
     * 251 -> Друзья
     * 255 -> Заблокированные
     */
    const GROUP_ID = 'groupId';
    const DATE_VISIT = 'dateVisit';
    const POSTS_COUNT = 'postsCount'; // int
    const COMMENTS_COUNT = 'commentsCount'; // int
    const PUB_COUNT = 'pubCount'; // int
    const PHOTO_COUNT = 'photoCount'; // int
    const NEWS_COUNT = 'newsCount'; // int
    const BLOG_COUNT = 'blogCount'; // int
    const LOAD_COUNT = 'loadCount'; // int
    const BOARD_COUNT = 'boardCount'; // int
    const TOTAL_MATERIALS = 'totalMaterials'; // int
    const REPUTATION_COUNT = 'reputationCount'; // int
    const REPUTATION_SOURCES = 'reputationSources';

    /**
     * 1 -> Radio
     * 2 -> Checkbox
     * 3 -> Select
     * 4 -> Select (multiple)
     * 5 -> Links
     */
    const INPUT_TYPE = 'inputType';
    const IS_ACTIVE = 'isActive';
    const DATE_POLL_START = 'datePollStart';
    const DATE_POLL_END = 'datePollEnd';
    const BUTTON_NAME = 'buttonName';
    const ANSWER1 = 'answer1';
    const ANSWER2 = 'answer2';
    const ANSWER3 = 'answer3';
    const ANSWER4 = 'answer4';
    const ANSWER5 = 'answer5';
    const ANSWER6 = 'answer6';
    const ANSWER7 = 'answer7';
    const ANSWER8 = 'answer8';
    const ANSWER9 = 'answer9';
    const ANSWER10 = 'answer10';
    const ANSWER11 = 'answer11';
    const ANSWER12 = 'answer12';
    const ANSWER13 = 'answer13';
    const ANSWER14 = 'answer14';
    const ANSWER15 = 'answer15';
    const ANSWER1_COUNT = 'answer1Count';
    const ANSWER2_COUNT = 'answer2Count';
    const ANSWER3_COUNT = 'answer3Count';
    const ANSWER4_COUNT = 'answer4Count';
    const ANSWER5_COUNT = 'answer5Count';
    const ANSWER6_COUNT = 'answer6Count';
    const ANSWER7_COUNT = 'answer7Count';
    const ANSWER8_COUNT = 'answer8Count';
    const ANSWER9_COUNT = 'answer9Count';
    const ANSWER10_COUNT = 'answer10Count';
    const ANSWER11_COUNT = 'answer11Count';
    const ANSWER12_COUNT = 'answer12Count';
    const ANSWER13_COUNT = 'answer13Count';
    const ANSWER14_COUNT = 'answer14Count';
    const ANSWER15_COUNT = 'answer15Count';
    const TOTAL_ANSWERS = 'totalAnswers';
}

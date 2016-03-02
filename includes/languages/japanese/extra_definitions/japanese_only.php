<?php

mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_http_output("UTF-8");

// EMAIL config
define('EMAIL_CHARSET', 'ISO-2022-JP');
define('EMAIL_ENCODING', '7bit');
define('EMAIL_MIMEHEADER', 'B');
define('EMAIL_IS_MULTIBYTE', TRUE);

// furikana
define('ENTRY_FIRST_NAME_KANA', '姓ふりがな:');
define('ENTRY_FIRST_NAME_KANA_ERROR', '姓ふりがなは最低' . ENTRY_FIRST_NAME_MIN_LENGTH . '文字以上入力してください');
define('ENTRY_FIRST_NAME_KANA_TEXT', '*');
define('ENTRY_LAST_NAME_KANA', '名ふりがな:');
define('ENTRY_LAST_NAME_KANA_ERROR', '名ふりがなは最低' . ENTRY_LAST_NAME_MIN_LENGTH . '文字以上入力してください');
define('ENTRY_LAST_NAME_KANA_TEXT', '*');

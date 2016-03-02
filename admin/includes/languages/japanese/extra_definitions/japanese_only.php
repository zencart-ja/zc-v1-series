<?php

// Japanese only definitions

mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

// EMAIL config
define('EMAIL_CHARSET', 'ISO-2022-JP');
define('EMAIL_ENCODING', '7bit');
define('EMAIL_MIMEHEADER', 'B');
define('EMAIL_IS_MULTIBYTE', TRUE);

define('HEADER_TITLE_SUPPORT_SITE_JP', 'Zen Cart.JP');

// furikana
define('JS_FIRST_NAME_KANA', '* 姓(ふりがな)を入力してください。' . ENTRY_FIRST_NAME_MIN_LENGTH . '文字以上\n');
define('JS_LAST_NAME_KANA', '* 名(ふりがな)を入力してください。' . ENTRY_LAST_NAME_MIN_LENGTH . '文字以上\n');
define('ENTRY_FIRST_NAME_KANA', '姓ふりがな:');
define('ENTRY_FIRST_NAME_KANA_ERROR', '&nbsp;<span class="errorText">' . ENTRY_FIRST_NAME_MIN_LENGTH . '文字以上</span>');
define('ENTRY_LAST_NAME_KANA', '名ふりがな:');
define('ENTRY_LAST_NAME_KANA_ERROR', '&nbsp;<span class="errorText">' . ENTRY_LAST_NAME_MIN_LENGTH . '文字以上</span>');

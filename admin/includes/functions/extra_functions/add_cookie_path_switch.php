<?php
/**
 * @package patches
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: add_cookie_path_switch.php 18695 2011-05-04 05:24:19Z drbyte $
 */
if (!defined('SESSION_USE_ROOT_COOKIE_PATH') || !defined('SESSION_ADD_PERIOD_PREFIX'))
{
  $sql = "SELECT configuration_group_id FROM " . TABLE_CONFIGURATION_GROUP . " 
          WHERE configuration_group_title = 'Sessions'";
  $result = $db->execute($sql);
  if ($result->RecordCount() > 0)
  {
    $id = $result->fields['configuration_group_id'];
  } else 
  {
    $id = 15;    
  }
  if (!defined('SESSION_USE_ROOT_COOKIE_PATH'))
  {
    $sql = "INSERT INTO " . TABLE_CONFIGURATION . " 
           SET configuration_key = 'SESSION_USE_ROOT_COOKIE_PATH',
                sort_order =  '999', 
                configuration_title = 'クッキーパスのrootパス利用', 
                configuration_value = 'False',
                configuration_description = '通常のZen Cartでは、クッキーパスとして、ショップが存在するディレクトリを使用します。これは問題を引き起こす場合があります。この設定は、ショップディレクトリではなく、サーバーの根本にクッキーパスを設定していることになります。あなたのサーバーがセッションに関する問題があったとした場合は、それが利用されることがあります。<strong>通常の設定 = False</strong><br /><br /><strong>この設定を変更する場合は、あなたのサイトがセッションに関する問題があることを意味するかもしれません。もし、問題があるならばブラウザクッキーを利用しないようにするべきです。</strong>' ,
                configuration_group_id = " . (int)$id . ",
                set_function = 'zen_cfg_select_option(array(\'True\', \'False\'), '
                 " ;
    $result = $db->execute($sql);
  }
  if (!defined('SESSION_ADD_PERIOD_PREFIX'))
  {
    $sql = "INSERT INTO " . TABLE_CONFIGURATION . " 
           SET configuration_key = 'SESSION_ADD_PERIOD_PREFIX',
                sort_order =  '999', 
                configuration_title = 'クッキードメインへの接頭語追加', 
                configuration_value = 'True',
                configuration_description = '通常Zen Cartでは、クッキードメインに接頭語として（例えば.www.mydomain.com）を加えます。ただし、これはサーバーによっては問題を引き起こす場合があります。セッションに問題がある場合は、加えないようにした方がいいでしょう。<strong>通常の設定 = True</strong>',
                configuration_group_id = " . (int)$id . ",
                set_function = 'zen_cfg_select_option(array(\'True\', \'False\'), '
                 " ;
    $result = $db->execute($sql);
  }
}
<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysql',
    'db_port' => '3306',
    'db_hostname' => 'db2.webtizen.kr',
    'db_userid' => 'cshians',
    'db_password' => '1043dcmslab!',
    'db_database' => 'cshians_db',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysql',
      'db_port' => '3306',
      'db_hostname' => 'db2.webtizen.kr',
      'db_userid' => 'cshians',
      'db_password' => '1043dcmslab!',
      'db_database' => 'cshians_db',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://cshians.net/',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
);
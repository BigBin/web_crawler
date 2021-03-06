<?php
// 
define("COMMON_DOCUMENT_ROOT","/home/ozeki/html/");

// Includeパス
ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.COMMON_DOCUMENT_ROOT);
ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.COMMON_DOCUMENT_ROOT.'apps/');
ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.COMMON_DOCUMENT_ROOT.'apps/lib/PEAR/');

// インクルード
require_once('util/common_function.php');
require_once('class/Process/BaseDao_cls.php');

// 実行設定
set_time_limit(6000);
ini_set("memory_limit","512M"); 

// DB設定
$aDBInfo[1]['DB_NAME'] = 'snoopy';
$aDBInfo[1]['DB_USER'] = '*******';
$aDBInfo[1]['DB_PASS'] = '*******';
$aDBInfo[1]['DB_HOST'] = 'localhost';
$aDBInfo[1]['DB_PORT'] = 5432;
$aDBInfo[1]['DB_KIND'] = 'postgres';

// 定義
// 使用DB定義
define("URL_DB",1);
define("HTML_DATA_DB",1);

// URLステータス
define("URL_STATUS_WAIT"   ,0);
define("URL_STATUS_NOW"    ,1);
define("URL_STATUS_END"    ,2);
define("URL_STATUS_FAILED" ,3);

// 共通オブジェクト
$oDbConnMng = new DBConnMng($aDBInfo);
?>
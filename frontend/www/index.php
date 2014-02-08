<?php

$root=dirname(__FILE__).'/..';
$common=$root.'/../common';

if ($_SERVER['SERVER_NAME'] == 'localhost') {
	defined('YII_DEBUG') or define('YII_DEBUG',true);
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

	$config=$root.'/config/main-local.php';
}
else
	$config=$root.'/config/main.php';

require_once($common.'/lib/yii/framework/yiilite.php');

Yii::createWebApplication($config)->run();

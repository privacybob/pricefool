<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

$root=dirname(__FILE__).'/..';
$common=$root.'/../common';
$config=$root.'/config/test.php';

require_once($common.'/lib/yii/framework/yii.php');

Yii::createWebApplication($config)->run();

<?php

defined('YII_DEBUG') or define('YII_DEBUG',true);

$root=dirname(__FILE__);

$config=$root.'/config/main-local.php';

require_once($root.'/../common/lib/global.php');
require_once($root.'/../common/lib/yii/framework/yiic.php');

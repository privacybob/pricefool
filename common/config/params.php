<?php

$root=realpath(dirname(__FILE__).'/../..');
Yii::setPathOfAlias('site',$root);

/**
 * Parameters shared by all applications.
 * Please put environment-sensitive parameters in params-local.php
 */
return array_merge(array(
	// main DB connection configurations
	'db.connectionString'=>'mysql:host=127.0.0.1;dbname=[YOUR-MAIN-DB-NAME]', //your db name
	'db.username'=>'[YOUR-MAIN-DB-USERNAME]', //your db username
    'db.password'=>'[YOUR-MAIN-DB-PASSWORD]', //your db password
	
	'appname.long' => 'Yii Bolerplate: A Skeleton App To Jumpstart your Yii Web Applications', 
	'appname.short' => 'Yii BoilerPlate', 
	
	'email.admin'=>'admin@yourdomain.com', 

	'cache.core'=>extension_loaded('apc') ?
		array(
			'class' => 'CApcCache',
		) :
		array(
			'class' => 'CDbCache',
			'connectionID' => 'db',
			'autoCreateCacheTable' => false,
			'cacheTableName' => 'tbl_cache',
		),
	'cache.content' => array(
		'class' => 'CDbCache',
		'connectionID' => 'db',
		'autoCreateCacheTable' => false,
		'cacheTableName' => 'tbl_cache',
	),

), require($root.'/common/config/params-local.php'));

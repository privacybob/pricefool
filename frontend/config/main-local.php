<?php
/**
 * This is the configuration used during development.
 * This file should only contain settings that are specific to your
 * development environment. Any settings that would be used for production
 * should be specified in config/main.php. This file should be copied over to
 * frontend/config/ directory when deploying to your development environment
 */
return CMap::mergeArray(require(dirname(__FILE__).'/main.php'), array(
	'components'=>array(
		'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=',
				'emulatePrepare' => true,
				'username' => '',
				'password' => '',
				'charset' => 'utf8',
				'enableParamLogging'=>true,
			),
/*
			'log'=>array(
					'class'=>'CLogRouter',
					'routes'=>array(
							array(
									'class'=>'CFileLogRoute',
									'levels'=>'trace',
									'categories'=>'system.db.*',
									'logFile'=>'sql.log',
							),
							)),
/*			
			'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
				),
			),
		),*/
	),
));

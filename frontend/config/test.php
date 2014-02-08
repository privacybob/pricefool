<?php
/**
 * This file contains application parameters that are specific to your development testing environment.
 * this will be included when you come in through the index-test.php entry script, typically used
 * for unit and functional testing
 * When deploying to a development (or otherwise testing) environment, this file should be copied over 
 * to the frontend/config/ directory.The copied file, i.e. frontend/config/test.php, should not be added 
 * to source control.
 */
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
		),
	)
);
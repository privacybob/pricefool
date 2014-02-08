<?php
/**
 * This is the configuration used during development.
 * This file should only contain settings that are specific to your
 * development environment. Any settings that would be used for production
 * should be specified in config/main.php.
 */
return CMap::mergeArray(require(dirname(__FILE__).'/main.php'), array(
		'components'=>array(

		)
));

<?php
/**
 * Parameters that are specific to the development environment.
 * When you deploy the common application and specify 'development' environment, this will be copied
 * to common/config/. Once deployed to common/config, DO NOT put this file under source control.
 */
return array(
	// main DB connection configurations
	//'db.connectionString'=>'mysql:host=127.0.0.1;dbname=[YOUR-DEV-DB-NAME]',
	//'db.username'=>'[YOUR-DEV-DB-USERNAME]',
	//'db.password'=>'[YOUR-DEV-DB-PASSWORD]',
	
	'frontend.url'=>'http://[www.your-local-dev-site.com]',
);

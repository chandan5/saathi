<?php
$default_controller = 'home';
$default_method = 'index';

$_base_url = '';

define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASS', 'password');
define('DB_NAME', 'dbname');

// Keep following as it is, if you are not sure about the change
define('SYSPATH', realpath(dirname(__FILE__) . '/../sys') . '/');
define('APPPATH', realpath(dirname(__FILE__)) . '/');

// Uncomment the following to customize the deployment settings
$deployment_settings = array(

	/* 'disasters' => array(
		//'fire',
		//'earthquake',
		//'epidemic',
		//'cyclone',
	)
	*/

	// 'missing_person' => false,

	// 'request_asset' => false,

	'notif_email_id' => 'saathi.mailer@gmail.com',

	'notif_email_password' => 'password'
);

<?php
	ini_set('display_errors', 'On');
	error_reporting(-1);

	
	define("ROOT", dirname(__FILE__)."/");
	define("CORE", ROOT."core/");
	define("BASE_APP", ROOT."application/");
	define("BASE_URL", dirname($_SERVER['SCRIPT_NAME']));
	define("CSS", BASE_URL."/asset/css");
	define("IMG", BASE_URL."/asset/img");

	require CORE."helper/debug.php";
	require CORE."auth/identifiant.php";
	require CORE."controller.php";
	require CORE."db.php";
	require CORE."model.php";
	require CORE."router.php";
	
	Router::run();
?>



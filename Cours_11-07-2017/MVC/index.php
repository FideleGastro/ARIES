<?php
	ini_set('display_errors', 'On');
	error_reporting(-1);

	if(!empty($_GET)){
		$url = explode('/', $_GET['url']);
		echo '<pre>'; 
		var_dump($url);
		echo '</pre>';
	}

	define("ROOT", dirname(__FILE__)."/");
	define("CORE", ROOT."core/");
	define("BASE_APP", ROOT."application/");
	define("BASE_URL", dirname($_SERVER['SCRIPT_NAME']));
	define("CSS", BASE_URL."asset/css");
	define("IMG", BASE_URL."asset/img");

	require CORE."helper/debug.php";
	require CORE."helper/router.php";
	
	Router::run();
?>



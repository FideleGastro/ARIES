<?php

// -------------- Constantes de chemin

define("ROOT", dirname(__FILE__)."/");
define("CORE", ROOT."core/");
define("BASE_APP", ROOT."application/");
define("BASE_URL",dirname($_SERVER['SCRIPT_NAME']));
define("CSS", BASE_URL."/assets/css/");
define("IMG", BASE_URL."/assets/img/");
define("JS", BASE_URL."/assets/js/");


// require 
require "vendor/autoload.php";
session_start();

//vd(BASE_URL);
// exécute router
core\Router::run();




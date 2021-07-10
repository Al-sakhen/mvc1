<?php

// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER['QUERY_STRING'];
// require_once("../app/core/app.php");

// DS ==>DIRECTORY SEPERATOR ==> RETURN / OR \
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
// in widows directory work with '/'  but in linux it is work with '\' and that is a problem 
define("APP" ,ROOT.DS.'app');
define("CONFIG",APP.DS.'config'.DS);
define("CONTROLLERS",APP.DS.'controolers'.DS);
define("CORE",APP.DS.'core'.DS);
define("MODELS",APP.DS.'models'.DS);
define("VIEW",APP.DS.'views'.DS);


//  Config
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","ecommerce_1");
define("DATABASE_TYPE", "mysql");
define("DOMAIN_NAME","http://mvc.test/");







// echo CONFIG;
// require_once("../app/core/app.php");
// require_once(CORE."/app.php");
// after insatlling composer and acticate the auto load we delete the up and use this:
require_once ("../vendor/autoload.php");
// $spp = new app();
$spp = new MVC\core\app();






?>
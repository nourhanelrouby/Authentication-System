<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'App');
define("CONFIG",APP.DS.'Config');
define("CONTROLLERS",APP.DS.'Controllers');
define("CORE",APP.DS.'Core');
define("MODELS",APP.DS.'Models');
define("VIEWS",APP.DS.'Views');

require '../vendor/autoload.php';

$obj = new MVC\Core\app();
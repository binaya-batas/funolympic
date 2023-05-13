<?php

spl_autoload_register(function ($class) {
    require __DIR__ . "/src/$class.php";
});

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
header("Content-type: application/json; charset=UTF-8");

set_exception_handler("ErrorHandler::handleException");

$url = $_SERVER['REQUEST_URI'];
$parts = explode("/", $url);
$route = $parts[3];

//switch case for routing
switch ($route) {
    case '':
        echo "index";
        break;
    
    default:
        echo "Invalid Route.";
        break;
}

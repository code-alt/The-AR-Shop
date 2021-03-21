<?php 

// create a router via REQUEST URI

$router = $_SERVER["REQUEST_URI"];

switch ($router) { // define routes
case '':
require __DIR__ . "/index2.php";
break;
case '/': // if you don't make two routes for /, it's not gonna work.
require __DIR__ . "/index2.php";
case '/get':
require __DIR__ . "/get.php";
break;
default: 
require __DIR__ . "/404.php";
break;
} // and we are done!
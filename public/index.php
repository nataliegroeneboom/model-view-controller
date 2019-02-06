<?php

/**
 * Front Controller
 * 
 * Php version 7.3
 */


/**
 * Autoloader
 */

spl_autoload_register(function($class){
   $root = dirname(__DIR__);
   var_dump($root);
   $file = $root . '/'. str_replace('\\','/', $class) . '.php';
   var_dump($file);
   if(is_readable($file)){
       require $root . '/' . str_replace('\\', '/', $class) . '.php';
   }
});
//require '../App/Controllers/Posts.php';

/**
 * Routing
 */
//require '../Core/Router.php';

$router = new Core\Router();

//add the routes
$url = $_SERVER['QUERY_STRING'];
$url = ltrim($url, 'q=/');
$url = rtrim($url, '&');


$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

//echo $url;
$router->dispatch($url);





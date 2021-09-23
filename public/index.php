<?php

use App\Controllers\BlogController;
use Router\Router;
use App\Controllers;
require "../vendor/autoload.php";

if(!empty($_GET['url']))
{
  $router=new Router($_GET['url']);
}else
{
  $router=new Router($_SERVER['REQUEST_URI']);
}

$router->get('/','App\Controllers\BlogController@index');
$router->get('/contact','App\Controllers\BlogController@contact');
$router->get('/about','App\Controllers\BlogController@about');
$router->get('/posts/:id','App\Controllers\BlogController@show');

$router->run();
?>
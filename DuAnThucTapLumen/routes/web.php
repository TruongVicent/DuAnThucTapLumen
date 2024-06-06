<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\Client\IndexController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/','Client\IndexController@index');
$router->get('/','Client\HomeController@index');
$router->get('/product','Client\ProductController@index');
$router->get('/product-detail','Client\ProductDetailController@index');
$router->get('/about','Client\AboutController@index');
$router->get('/contact','Client\ContactController@index');
$router->get('/blog','Client\BlogController@index');

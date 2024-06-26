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
$router->get('/', 'Client\IndexController@index');
$router->get('/', 'Client\HomeController@index');
$router->get('/product', 'Client\ProductController@index');
$router->get('/product-detail', 'Client\ProductDetailController@index');
$router->get('/about', 'Client\AboutController@index');
$router->get('/contact', 'Client\ContactController@index');
$router->get('/blog', 'Client\BlogController@index');


//------------------------TEST-----------------------//
$router->get('cart', ['as' => 'cart', 'uses' => 'Client\CartController@index']);

$router->get('cart/{id}', ['as' => 'cart.show', 'uses' => 'Client\CartController@show']);

$router->post('cart', ['as' => 'cart.store', 'uses' => 'Client\CartController@store']);
$router->put('cart/{id}', ['as' => 'cart.update', 'uses' => 'Client\CartController@update']);
$router->delete('cart/{id}', ['as' => 'cart.delete', 'uses' => 'Client\CartController@delete']);


$router->post('register', 'AuthController@register');

$router->post('login', 'AuthController@login');


$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
  });

//------------------------ADMIN-----------------------//



// $router->get('dashboard','Admin\DashboardController@dashboard');



$router->group(['prefix' => 'dashboard'], function () use ($router) {
    $router->get('/', 'Admin\DashboardController@dashboard');

    $router->get('user', 'Admin\UserController@index');
    $router->get('adduser', 'Admin\UserController@add');
    $router->get('edituser', 'Admin\UserController@edit');


    $router->get('theme', 'Admin\ThemeController@index');
    $router->get('addtheme', 'Admin\ThemeController@add');
    $router->get('edittheme', 'Admin\ThemeController@edit');


    $router->get('cate', 'Admin\CategoryController@index');
    $router->get('addcate', 'Admin\CategoryController@add');
    $router->get('editcate', 'Admin\CategoryController@edit');


    $router->get('license', 'Admin\LicensesController@index');
    $router->get('addlicense', 'Admin\LicensesController@add');
    $router->get('editlicense', 'Admin\LicensesController@edit');

    $router->get('order', 'Admin\OrderController@index');
    $router->get('editorder', 'Admin\OrderController@edit');
});

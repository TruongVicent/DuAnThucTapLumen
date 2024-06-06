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



//------------------------ADMIN-----------------------//

$router->get('/admin-dashboard','Admin\DashboardController@dashboard');


$router->get('/admin-user','Admin\UserController@index');
$router->get('/admin-adduser','Admin\UserController@add');
$router->get('/admin-edituser','Admin\UserController@edit');


$router->get('/admin-theme','Admin\ThemeController@index');
$router->get('/admin-addtheme','Admin\ThemeController@add');
$router->get('/admin-edittheme','Admin\ThemeController@edit');


$router->get('/admin-cate','Admin\CategoryController@index');
$router->get('/admin-addcate','Admin\CategoryController@add');
$router->get('/admin-editcate','Admin\CategoryController@edit');


$router->get('/admin-license','Admin\LicensesController@index');
$router->get('/admin-addlicense','Admin\LicensesController@add');
$router->get('/admin-editlicense','Admin\LicensesController@edit');

$router->get('/admin-order','Admin\OrderController@index');
$router->get('/admin-editorder','Admin\OrderController@edit');

// $router->group(['prefix' => 'admin'], function () use ($router) {
//     $router->get('dashboard', 'Admin\DashboardController@dashboard');
// });
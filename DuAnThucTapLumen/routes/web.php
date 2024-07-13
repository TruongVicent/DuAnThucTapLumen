<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/home', 'Client\IndexController@index');
$router->get('/', 'Client\HomeController@index');
$router->get('/product', 'Client\ProductController@index');
$router->get('/product-detail', 'Client\ProductDetailController@index');
$router->get('/about', 'Client\AboutController@index');
$router->get('/contact', 'Client\ContactController@index');
$router->get('/blog', 'Client\BlogController@index');

//------------------------TEST-----------------------//
// $router->get('/cart', 'Client\CartController@list');
// $router->get('/cart/{id}', ['as' => 'cart.show', 'uses' => 'Client\CartController@show']);
// $router->post('/cart', ['as' => 'cart.store', 'uses' => 'Client\CartController@store']);
// $router->put('/cart/{id}', ['as' => 'cart.update', 'uses' => 'Client\CartController@update']);
// $router->delete('/cart/{id}', ['as' => 'cart.delete', 'uses' => 'Client\CartController@delete']);

//------------------------AUTH-----------------------//
$router->get('/signin', 'Admin\UserController@signin');
$router->post('/login', 'AuthController@login');
$router->post('/register', 'AuthController@register');
// $router->get('/profile', 'AuthController@show');
// $router->post('/logout', 'AuthController@logout');
$router->get('/profile', 'AuthController@show');
$router->post('/logout', 'AuthController@logout');
$router->group(['middleware' => 'auth'], function () use ($router) {
   
});

//------------------------ADMIN-----------------------//
$router->group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () use ($router) {
    $router->get('/', 'Admin\DashboardController@dashboard');

    $router->get('user', 'Admin\UserController@index');
    $router->get('adduser', 'Admin\UserController@add');
    $router->get('edituser', 'Admin\UserController@edit');


    $router->get('theme', 'Admin\ThemeController@index');
    $router->get('addtheme', 'Admin\ThemeController@add');
    $router->post('add-theme', 'Admin\ThemeController@addTheme');
    $router->get('edit/{id}', 'Admin\ThemeController@edit');
    $router->post('update/{id}', 'Admin\ThemeController@update');
    $router->delete('deletetheme/{id}', 'Admin\ThemeController@delete');

    $router->get('cate', 'Admin\CategoryController@index');
    $router->get('addcate', 'Admin\CategoryController@add');
    $router->post('add-category', 'Admin\CategoryController@addCategory');
    $router->get('editcate{id}', 'Admin\CategoryController@edit');
    $router->post('update/{id}', 'Admin\CategoryController@update');
    $router->delete('delete/{id}', 'Admin\CategoryController@delete');


    $router->get('/license', 'Admin\LicensesController@index');
    $router->get('/license/add', 'Admin\LicensesController@show');
    $router->post('/license/adds', 'Admin\LicensesController@store');
    $router->get('/license/edit/{id}', 'Admin\LicensesController@edit');
    $router->post('/license/update/{id}', 'Admin\LicensesController@update');
    $router->delete('/license/delete/{id}', 'Admin\LicensesController@delete');


    $router->get('order', 'Admin\OrderController@index');
    $router->get('editorder', 'Admin\OrderController@edit');
});
// $router->get('dashboard','Admin\DashboardController@dashboard');

<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'mobils'], function () use ($router) {
    $router->get('/', 'MobilController@index');
    $router->post('/', 'MobilController@store');
    $router->get('/{id}', 'MobilController@show');
    $router->put('/{id}', 'MobilController@update');
    $router->delete('/{id}', 'MobilController@destroy');
});

// $router->group(['middleware' => 'auth'], function () use ($router) {
//     $router->get('/mobils', 'MobilController@index');
//     $router->post('/mobils', 'MobilController@store');
//     $router->get('/mobils/{id}', 'MobilController@show');
//     $router->put('/mobils/{id}', 'MobilController@update');
//     $router->delete('/mobils/{id}', 'MobilController@destroy');
// });

$router->get('/mobils', 'MobilController@index');
$router->post('/mobils', 'MobilController@store');
$router->get('/mobils/{id}', 'MobilController@show');
$router->put('/mobils/{id}', 'MobilController@update');
$router->delete('/mobils/{id}', 'MobilController@destroy');
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
    return view('index', ['name' => 'Lindoes']);
});

$router->get('/login', function () use ($router) {
    return view('login');
});

$router->get('/cadastro', function () use ($router) {
    return view('cadastro', ['email' => 'leo@gmail.com']);
});

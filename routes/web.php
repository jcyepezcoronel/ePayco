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


$router->post('customer', [
    'as' => 'customer.create', 'uses' => 'CustomerController@createCustomer'
]);

$router->post('deposit', [
    'as' => 'deposit.create', 'uses' => 'WalletController@depositMoneyCustomer'
]);

$router->post('pay', [
    'as' => 'payment.create', 'uses' => 'WalletController@paymentMoneyCustomer'
]);

$router->get('balance', [
    'as' => 'balance.get', 'uses' => 'WalletController@balanceMoneyCustomer'
]);


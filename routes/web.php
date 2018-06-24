<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'domain' => env('DOMAIN_TOOLS', 'lucky.laravel.com'),
    'namespace' => 'Api',
    'prefix' => 'api',
    'middleware' => ['web']
], function() {
    Route::get('/table/test', 'ApiController@test');
});
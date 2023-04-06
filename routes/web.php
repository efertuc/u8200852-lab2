<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('customers');
});

Route::get('/customers', ['as' => 'customer', 'uses' => 'App\Http\Controllers\MyController@filter']);

Route::get('/customers/{id}', ['as' => 'customerInfo', 'uses' => 'App\Http\Controllers\MyController@show']);
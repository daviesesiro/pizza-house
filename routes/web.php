<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function(){
    $pizzas = [
        ['type'=> 'huwaiian', 'base'=> 'sdfsdf'],
        ['type'=> 'volcano', 'base'=> 'jkj'],
        ['type'=> 'some', 'base'=> 'kjlk']
    ];
    return view('pizzas', ['pizzas'=>$pizzas]);
});

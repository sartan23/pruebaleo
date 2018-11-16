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

Route::get('/', function () {
    return view('welcome');

}
);

Route::get('/Hmundo','HolaM@mostrar');


Route::get('/Mihola','Mihola@mostrar');
Route::get('/Mimundo','Mi_laravel@mostrar');
Route::get('/Laravel','Mi_mundo@mostrar');

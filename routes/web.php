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
Route::get('/iqbal', function(){
    dd('iqbal');
});
Route::get('/iqbal/delete', function(){
    dd('delete');
});
Route::get('/main', function () {
    dd('main');
});
Route::get('/fatul', function () {
    dd('fatul');
});
Route::get('/fatul/push', function () {
    dd('fatul push');
});

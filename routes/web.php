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
})->name('begin');
Route::get('admin2', function () {
    return view('anhmv');
})->name('test');
Route::get('admin',function(){
    return view('anhmv');
});
Route::get('login', function () {
    return view('anhmv');
})->name('login');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('user', function () {
        return "oke";
    });
});
Route::get('/',function(){
    return "oke";
});

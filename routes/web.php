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

Route::get('/form',function() {
    return view('form');
 });

 Route::get('/stud_create',function() {
    return view('stud_create');
 });

 Route::get('insert','App\Http\Controllers\StudInsertController@insert');
Route::post('create','App\Http\Controllers\StudInsertController@create');
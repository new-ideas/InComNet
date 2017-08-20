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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::group(['middleware' => ['role:super_admin|moderator'],'prefix'=>'admin'], function () {
    Route::get('/logout','Auth\LoginController@Logout')->name('logout');

    Route::get('/', function (){
       return redirect()->to('/dashboard');
    });

    Route::get('/dashboard', 'HomeController@index')->name('home');
});



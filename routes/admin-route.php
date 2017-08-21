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

Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
//    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
//    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register');
    Route::get('home', 'HomeController@index');
});

//Route::group(['namespace' => 'Admin','prefix'=>'admin'], function () {
//    Route::get('login', 'AdminController@AdminLoginForm')->name('admin.login');
//    Route::post('login', 'AdminController@login')->name('admin.login');
//
//});


Route::group(['middleware' => ['role:super_admin|moderator'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/logout', 'AdminController@Logout')->name('admin.logout');
    Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');
});



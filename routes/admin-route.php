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

    // Skills
    Route::get('skill/add-edit/{id?}', 'SkillController@AddEdit')->name('skill.add.edit');
    Route::resource('skill', 'SkillController');

    //social-link
    Route::get('sociallink/add-edit/{id?}', 'SociallinkController@addEdit')->name('socail-link.add.edit');
    Route::get('sociallink-delete/{id}', 'SociallinkController@delete')->name('socaillink-delete');
    Route::resource('social-link', 'SociallinkController');


    //country info
    Route::resource('country', 'CountryController');
    Route::get('country-add', 'CountryController@countryAdd')->name('country.add');
    Route::post('country-store', 'CountryController@countryStore')->name('country.store');
    Route::get('country-edit/{id}', 'CountryController@countryEdit')->name('country.edit');
    Route::post('country-update', 'CountryController@countryUpdate')->name('country.update');
    Route::get('delete/{id}', 'CountryController@countryDelete')->name('country.delete');

    // Language Info

    Route::get('language', 'languageController@index');
    Route::get('language-add', 'languageController@languageAdd')->name('language.add');
    Route::get('language-edit/{id}', 'languageController@languageEdit')->name('language.edit');
    Route::post('store', 'languageController@store');
    Route::post('update', 'languageController@update');
    Route::get('delete/{id}', 'languageController@delete');

});



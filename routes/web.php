<?php
Auth::routes();
Route::group(['middleware' => ['role:super_admin|moderator'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::group(['prefix' => 'category'], function () {
        Route::get('/all', 'CategoryController@index')->name('category.all');
        Route::get('/add-edit', 'CategoryController@create')->name('category.add');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/store', 'CategoryController@store')->name('category.store');
    });

});
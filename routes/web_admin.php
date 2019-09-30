<?php
Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin')->name('admin.login');
Route::get('logout','AdminController@logout');

Route::group(['prefix'=>'admin','namespace' => 'Admin','middleware'=>'adminmiddleware'], function () {
    Route::get('','AdminController@index')->name('admin.get.dashboard');
    Route::group(['prefix' => 'menu'], function (){
        Route::get('','AdminMenuController@index')->name('admin.get.menu.list');
        Route::get('create','AdminMenuController@create')->name('admin.get.menu.create');
        Route::post('create','AdminMenuController@store');
    });
    Route::group(['prefix' => 'location'], function (){
        Route::get('','AdminLocationController@index')->name('admin.get.location.list');
    });
    Route::group(['prefix' => 'motel'], function (){
        Route::get('','AdminMotelController@index')->name('admin.get.motel.list');
        Route::get('create','AdminMotelController@create')->name('admin.get.motel.create');
        Route::post('create','AdminMotelController@store');
        Route::get('update/{id}','AdminMotelController@edit')->name('admin.get.motel.edit');
        Route::post('update/{id}','AdminMotelController@update');
        Route::get('delete/{id}','AdminMotelController@delete')->name('admin.get.motel.delete');
        Route::get('action/{type}/{id}','AdminMotelController@action')->name('admin.get.motel.action');
        Route::get('location','AdminMotelController@getLocationByParent')->name('ajax_admin.get.location.by_parent');
    });
});

Route::get('thongke','AdminController@getThongke');
Route::get('report','AdminController@getReport');
Route::group(['prefix'=>'users'],function(){
    Route::get('list','AdminController@getListUser');
    Route::get('edit/{id}','AdminController@getUpdateUser');
    Route::post('edit/{id}','AdminController@postUpdateUser')->name('admin.user.edit');
    Route::get('del/{id}','AdminController@DeleteUser');
});
Route::group(['prefix'=>'motelrooms'],function(){
    Route::get('list','AdminController@getListMotel');
    Route::get('approve/{id}','AdminController@ApproveMotelroom');
    Route::get('unapprove/{id}','AdminController@UnApproveMotelroom');
    Route::get('del/{id}','AdminController@DelMotelroom');
});
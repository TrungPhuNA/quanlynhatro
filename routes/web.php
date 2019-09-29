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
use App\Categories;
use App\Motelroom;

Route::get('/','HomeController@index')->name('get.home');
Route::get('/chi-tiet-nha-tro','MotelDetailController@motelDetail')->name('get.motel.detail');
Route::get('category/{id}','MotelController@getMotelByCategoryId');
/* Admin */
include 'web_admin.php';

/* End Admin */
Route::get('/phongtro/{slug}',function($slug){
    $room = Motelroom::findBySlug($slug);
    $room->count_view = $room->count_view +1;
    $room->save();
    $categories = Categories::all();
    return view('home.detail',['motelroom'=>$room, 'categories'=>$categories]);
});
Route::get('/report/{id}','MotelController@userReport')->name('user.report');
Route::get('/motelroom/del/{id}','MotelController@user_del_motel');
/* User */
Route::group(['prefix'=>'user'], function () {
    Route::get('register','UserController@get_register');
    Route::post('register','UserController@post_register')->name('user.register');

    Route::get('login','UserController@get_login');
    Route::post('login','UserController@post_login')->name('user.login');
    Route::get('logout','UserController@logout');

    Route::get('dangtin','UserController@get_dangtin')->middleware('dangtinmiddleware');
    Route::post('dangtin','UserController@post_dangtin')->name('user.dangtin')->middleware('dangtinmiddleware');

    Route::get('profile','UserController@getprofile')->middleware('dangtinmiddleware');
    Route::get('profile/edit','UserController@getEditprofile')->middleware('dangtinmiddleware');
    Route::post('profile/edit','UserController@postEditprofile')->name('user.edit')->middleware('dangtinmiddleware');
});
/* ----*/

Route::post('searchmotel','MotelController@SearchMotelAjax');

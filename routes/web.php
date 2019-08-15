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
// trang điều hướng chính
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//film controller
Route::get('/taophim', 'MovieController@taophim')->name('taophim');
Route::post('taophim', 'MovieController@taophim2');
Route::get('phim/{id}',[
			'as'=>'chitiet',
			'uses'=>'MovieController@chitiet']);
Route::get('/taogiochieu', 'ScreenController@taogio')->name('taogiochieu');
Route::post('taogiochieu', 'ScreenController@taogio2');



//user controller
Route::get('/userlist', 'UserController@getlist')->name('userlist');
Route::delete('user/{id}/delete', ['middleware' => ['admin'],
                                   'uses' => 'UserController@delete'])->name('userdelete');
Route::post('setrole/{id}',['middleware' => ['admin'],
                                   'uses' => 'UserController@setRole'])->name('phanquyen');

Route::get('user/update/{id}',['middleware' => ['auth'],'uses'=> 'UserController@getupdate']);
Route::post('user/update/{id}',['middleware' => ['auth'],
                                   'uses' => 'UserController@update'])->name('update2');
Route::get('admin_dashboard',['middleware'=>['admin'],'uses'=>'HomeController@adminboard']);
Route::get('profile/{id}','UserController@profile');
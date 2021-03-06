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

Route::get('/', function () {
    return redirect('/home');
});
Route::get('home', function (){
    return view('widget.index');
});
Route::get('aboutus', function () {
    return view('widget.aboutus');
});
Route::get('contact', function () {
    return view('widget.contact');
});
Route::get('news', function () {
    return view('widget.news');
});

Route::get('admin/login','useradController@getlogin');
Route::post('admin/login','useradController@postlogin')->name('admin/login');

Route::get('create','useradController@getcreate');
Route::post('create','useradController@postcreate')->name('create');
Route::get('updatelogin','useradController@postupdate');

Route::get('admin/logout','useradController@logout');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
	Route::get('/','useradController@index');
	Route::get('laixe','useradController@getlaixe');
	Route::get('chitiet','useradController@getchitiet');
	Route::get('contact','useradController@getcontact');
	Route::get('admin','useradController@getadmin');
	Route::get('chitietad','useradController@getchitietad');
});

Route::get('testhome',function(){
	return view('testhome');
});
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/Admin', 'HomeController@index')->name('home');

/*----------------------website-----------------------*/

Route::get('/','IndexController@index');
Route::get('/Login','IndexController@login');
Route::get('/Post-job','IndexController@post_job');
Route::get('/About','IndexController@about');
Route::get('/Contact','IndexController@contact');
Route::get('/Blogs','IndexController@blogs');
Route::get('/Show','IndexController@blogs_show');
Route::get('/Gallery','IndexController@gallery');
Route::get('/Services','IndexController@services');
Route::get('/Portfolio','IndexController@portfolio');
Route::post('/save','IndexController@savesubscribe');
Route::post('/save','IndexController@savecontact');
Route::get('/Online-Exam','IndexController@onlineexam');
Route::get('/Web-Design','IndexController@webdesign');
/*news*/
Route::get('/resize','NewsController@index');
Route::post('/resize/resize_image','NewsController@resize_image');
/*Route::post('/resize_image','NewsController@store');*/





/*---------------------Admin Panel------------------------------------*/
Route::group(['namespace'=>'Admin'],function(){
Route::get('/Subscribe','SubscribeController@index');
Route::get('/Profile','SubscribeController@profile');
Route::get('/Register','RegisterController@index');
Route::post('/Store','RegisterController@store');
Route::get('/List-Contact','ContactController@index');
Route::get('/Users','UsersController@index');
Route::get('About-Us','AboutController@index');

/////////////////////////////////////////////////////////////////////////
Route::get('/Blog','BlogController@index');
Route::get('/Add','BlogController@create');
Route::post('/Add','BlogController@store');
Route::get('/Add/delete/{id}','BlogController@destroy');
Route::get('/Add/update/{id}','BlogController@edit');
Route::post('/Add/update/{id}','BlogController@update');


});


Route::get('/Maps','MapsController@index');
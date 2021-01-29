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
Route::get('/','DisplayController@index' );
Route::get('/about','RoutingController@about');
Route::get('/contact','RoutingController@contact');
// Route::get('/about','RoutingController@about');
Route::get('/mission','RoutingController@mission');
Route::get('/nuesagallery','RoutingController@nuesagallery');
Route::get('/login','RoutingController@login');
Route::get('/recommendation','RoutingController@recommend');
Route::get('/adminlogin','RoutingController@adminlogin');
Route::get('/adminregister','RoutingController@adminregister');
Route::get('/dashboard','RoutingController@dashboard');
Route::get('/forumsetting','RoutingController@forumsetting');
Route::get('/chat','RoutingController@chat');
Route::get('/comingsoon','RoutingController@comingsoon');
Route::get('/nuesachapters','RoutingController@nchapters');
Route::get('/getidcard','RoutingController@idcard');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::resource('/chapter','UserController');
Route::resource('/productdetail','DisplayController');


//end shopping cart
Route::get('/showuser','UserController@index');
Route::POST('/profile','UserController@updateprofile');
// Route::resource('/home','UserController');
Route::get('/chapters','ChaptersController@create');
Route::get('/allchapters','ChaptersController@index');
Route::get('/success','ChaptersController@success');
Route::POST('/chapters','ChaptersController@store');
Route::PUT('/chapters','ChaptersController@forumsetting');

Route::POST('chatprocess','ChaptersController@storechat');
Route::POST('recommendproces','ChaptersController@showrecommend');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

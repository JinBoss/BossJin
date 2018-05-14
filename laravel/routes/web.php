<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/', 'Admin\AdminController@index');
Route::get('/admin/index', 'Admin\AdminController@index');
Route::get('/admin/captcha/{tem}', 'Admin\AdminController@captcha');
Route::get('/', 'Home\HomeController@index');
Route::get('/home/', 'Home\HomeController@index');
Route::get('/login/', 'Home\LoginController@login');
Route::get('/home/index', 'Home\HomeController@index');
Route::get('/Login/login', 'Home\LoginController@login');
Route::get('/home/about', 'Home\HomeController@about');
Route::post('/Home/login/LoginCheck', 'Home\LoginController@LoginCheck');
Route::get('/Home/home/index', 'Home\HomeController@index');
Route::get('/Home/home/about', 'Home\HomeController@about');
Route::get('/Home/home/shop', 'Home\HomeController@shop');
Route::get('/Home/home/footer', 'Home\HomeController@footer');
Route::get('/Home/home/contact', 'Home\HomeController@contact');
Route::get('/Home/home/prompt', 'Home\HomeController@prompt');
Route::get('/home/captcha/{tem}', 'Home\HomeController@captcha');

Route::get('/admin/left', 'Admin\AdminController@left');
Route::get('/admin/main', 'Admin\AdminController@main');
Route::get('/admin/head', 'Admin\AdminController@head');
Route::get('/admin/head2', 'Admin\AdminController@head2');
Route::post('/home/add/','Home\HomeController@add');
Route::post('/admin/add/','Admin\AdminController@add');
Route::get('/admin/login/index','Admin\LoginController@index');
Route::get('/admin/login/','Admin\LoginController@index');
Route::any('/admin/login/login','Admin\LoginController@login');
Route::post('/admin/book_add/','Admin\BookController@index');
Route::any('/admin/login/checkcode','Admin\LoginController@checkCode');
Route::get('/admin/register/','Admin\RegisterController@index');
Route::get('/admin/index','Admin\AdminController@index');
Route::get('/admin/message','Admin\AdminController@message');
Route::get('/admin/tab','Admin\AdminController@tab');
Route::get('/admin/user/add','Admin\UserController@add');
Route::post('/admin/user/check_name','Admin\UserController@check_name');
Route::post('/admin/user/add_do','Admin\UserController@add_do');
Route::any('/admin/user/show','Admin\UserController@show');
Route::post('/admin/user/ajaxP','Admin\UserController@ajaxP');
Route::post('/admin/user/del','Admin\UserController@del');
Route::post('/admin/user/update','Admin\UserController@update');



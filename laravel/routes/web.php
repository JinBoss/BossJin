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
<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 791cfa32f971c0dec67f174505bfd1b8b35d1baa
Route::get('/admin/', 'Admin\AdminController@index');
Route::get('/admin/index', 'Admin\AdminController@index');
Route::get('/admin/captcha/{tem}', 'Admin\AdminController@captcha');
Route::get('/', 'Home\HomeController@index');
Route::get('/home/', 'Home\HomeController@index');
Route::get('/login/', 'Home\LoginController@login');
Route::get('/home/index', 'Home\HomeController@index');
Route::get('/home/about', 'Home\HomeController@about');
Route::get('/home/captcha/{tem}', 'Home\HomeController@captcha');
// Route::post('/home/add/', 'Home\HomeController@add');
Route::post('home/add/','Home\HomeController@add');
Route::post('admin/add/','Admin\AdminController@add');
Route::get('admin/login/index','Admin\LoginController@index');
Route::get('admin/login/','Admin\LoginController@index');
Route::get('admin/register/','Admin\RegisterController@index');
Route::get('admin/calendar/','Admin\CalendarController@index');
Route::get('admin/calendar/add','Admin\CalendarController@add');

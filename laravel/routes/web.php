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
Route::get('/admin/login/captcha/{tem}', 'Admin\LoginController@captcha');
Route::get('/', 'Home\HomeController@index');
Route::get('/user/usershow', 'Home\UserController@UserShow');
Route::post('/user/userupdate', 'Home\UserController@UserUpdate');
Route::get('/user/userout', 'Home\UserController@UserOut');
Route::post('/Home/login/LoginCheck', 'Home\LoginController@LoginCheck');
Route::get('/home/', 'Home\HomeController@index');
Route::get('/login/', 'Home\LoginController@login');
Route::get('/home/index', 'Home\HomeController@index');
Route::get('/Login/login', 'Home\LoginController@login');
Route::get('/home/about', 'Home\HomeController@about');
Route::post('/Home/login/LoginCheck', 'Home\LoginController@LoginCheck');
Route::post('/Home/Home/ContactMessage', 'Home\HomeController@ContactMessage');
Route::get('/Home/home/index', 'Home\HomeController@index');
Route::get('/Home/home/about', 'Home\HomeController@about');
Route::get('/Home/home/shop', 'Home\HomeController@shop');
Route::post('/Home/home/BorrowBooks', 'Home\HomeController@BorrowBooks');
Route::post('/Home/home/UserBorrowBooks', 'Home\HomeController@UserBorrowBooks');
Route::get('/Home/home/footer', 'Home\HomeController@footer');
Route::get('/Home/home/contact', 'Home\HomeController@contact');
Route::get('/home/captcha/{tem}', 'Home\HomeController@captcha');

Route::get('/admin/left', 'Admin\AdminController@left');
Route::get('/admin/main', 'Admin\AdminController@main');
Route::get('/admin/cash', 'Admin\AdminController@cash');
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
Route::get('/admin/book/index','Admin\BookController@index');
Route::any('/admin/book/show','Admin\BookController@show');
Route::post('/admin/book/book_add','Admin\BookController@book_add');
Route::get('/admin/book/book_del/{id}','Admin\BookController@book_del');
Route::post('/admin/book/book_up','Admin\BookController@book_up');
Route::get('/admin/activity/index/','Admin\ActivityController@index');
Route::get('/admin/activity/show/','Admin\ActivityController@show');
Route::post('/admin/activity/activity_add','Admin\ActivityController@activity_add');
Route::get('/admin/vip/show','Admin\VipController@show');
Route::get('/admin/vip/del/{tem}','Admin\VipController@del');
Route::get('/admin/integral/show','Admin\IntegralController@show');
Route::get('/admin/user/up_pwd','Admin\UserController@up_pwd');
Route::get('/admin/user/quit','Admin\UserController@quit');
Route::post('/admin/user/update_pwd','Admin\UserController@update_pwd');
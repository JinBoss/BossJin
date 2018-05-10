<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;  
// use Gregwar\Captcha\CaptchaBuilder;
use Session;
// use App\Http\Models\Home\HomeModel;  
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Request;
// use App\Http\Requests;
use Request;
class LoginController extends Controller
{
    /**登录页面*/
    public function login()
    {
        return view('Home/Login');
    }
}
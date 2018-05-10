<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;  
use Illuminate\Support\Facades\Input;
use App\Http\Models\Home\LoginModel;  
use Session;
use Request;
class LoginController extends Controller
{
    /**登录页面*/
    public function login()
    {
        return view('Home/Login');
    }
    /**登录进行检索*/
    public function LoginCheck()
    {
    	//判断是否表单提交
    	if(request::isMethod('post')){
    		//接收所有提交信息
    		$UserPostData = input::all();
    		$UserData = LoginModel::login_check($UserPostData);
    		echo $UserData;
    		
		}
    }
}
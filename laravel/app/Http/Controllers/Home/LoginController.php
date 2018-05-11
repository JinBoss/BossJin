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
            //查询用户信息
    		$UserData = LoginModel::login_check($UserPostData);
            //判断信息是否存在
            if (!empty($UserData)) {
                return redirect('home/index');
            }else{
                return redirect('Login/login');
            }	
		}
    }


}
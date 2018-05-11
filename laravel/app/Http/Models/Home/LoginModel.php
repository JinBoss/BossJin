<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class LoginModel extends Model
{
    /**
	 * 查询登陆用户信息
	 * @param username password
	 * @return array
	 */
    public static function login_check($UserPostData)
    {
    	//将用户密码进行Crype加密（当前密码匹配当前用户）+Sha1加密
    	$pwd = sha1(crypt($UserPostData['password'],$UserPostData['username']));
    	//字符串转换为32位
    	$user_pwd  = substr($pwd,0,-8);
    	//查询用户信息
    	$user = DB::table('user')->where('u_name',$UserPostData['username'])->where('u_pwd',$user_pwd)->first();
    	//用户信息存入SESSION中
    	Session::put('UserData', $user);
    	return $user;
    }
}
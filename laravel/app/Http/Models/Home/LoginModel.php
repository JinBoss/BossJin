<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoginModel extends Model
{
    /**
	 * 查询登陆用户信息
	 * @param username password
	 * @return array
	 */
    public static function login_check($UserPostData)
    {
    	var_dump($UserPostData);die;
    }
}
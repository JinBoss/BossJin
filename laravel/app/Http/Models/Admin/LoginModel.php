<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoginModel extends Model
{
    /**
	 * 查询登陆用户信息
	 * @param username password
	 * @return array
	 */
    public static function login_check($data)
    {
    	return DB::table('admin_user')->where('au_name',$data['u_name'])->get()->toArray();  
    }
}
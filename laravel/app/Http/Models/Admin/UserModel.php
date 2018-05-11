<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class UserModel extends Model
{
    /**
	 * 查询登陆用户信息
	 * @param username password
	 * @return array
	 */
    public static function name_check($name)
    {
    	return DB::table('admin_user')->where('au_name',$name)->get()->toArray();  
    }
    public static function add_user($data)
    {
    	$data['au_pwd'] = md5(sha1($data['au_pwd']));
    	$data['addtime'] = time();
    	return DB::table('admin_user')->insertGetId($data);
    }
    public static function list()
    {
    	return DB::table('admin_user')->get();
    }
    public static function up($data)
    {  
    	return DB::table('admin_user')->where('au_id',$data['id'])->update(['au_name'=>$data['name']]);
    }
    public static function del($id)
    {  
    	return DB::table('admin_user')->where('au_id',$id)->delete();
    }
}
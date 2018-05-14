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
        $data = DB::table('admin_user')->paginate(3);
    	return json_decode(json_encode($data) ,true);
    }
    public static function up($data)
    {  
    	return DB::table('admin_user')->where('au_id',$data['id'])->update(['au_name'=>$data['name']]);
    }
    public static function del($id)
    {  
    	return DB::table('admin_user')->where('au_id',$id)->delete();
    }
    public static function list_page($page=1,$size=5)
    {
        $num = DB::select('select count(*) as num from admin_user');
        $last = ceil($num[0]->num/$size);
        $offset = ($page-1)*$size;
        $data = DB::select("select * from admin_user limit $offset,$size");
        $up = $page-1<1 ? 1 : $page-1;
        $next = $page+1>$last ? $last : $page+1;
        $listdata = array('data'=>$data,'up'=>$up,'next'=>$next,'last'=>$last);
        return $listdata;
    }

}
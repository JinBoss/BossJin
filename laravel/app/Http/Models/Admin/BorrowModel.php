<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class BorrowModel extends Model
{
    /**
	 * 查询登陆用户信息
	 * @param username password
	 * @return array
	 */
    public static function list()
    {
    	$sql = 'select borrow.u_id,borrow.b_id,u_name,b_time,re_time,b_state,b_name from `user`,borrow,book where `user`.u_id = borrow.u_id AND book.b_id=borrow.b_id';
        $data = DB::select($sql);
    	return json_decode(json_encode($data) ,true);
    }
    public static function up($data)
    {
        return DB::transaction(function () use ($data) {
            DB::table('borrow')->where('u_id',$data['u_id'])->where('b_id',$data['b_id'])->update(['b_state'=>$data['state']]);
            DB::update("update book set `b_num`=`b_num`+1 where b_id= :id",['id'=>$data['b_id']]);
        });
    }
    public static function up_de($data)
    {  
        return DB::transaction(function () use ($data) {
            DB::table('borrow')->where('u_id',$data['u_id'])->where('b_id',$data['b_id'])->update(['b_state'=>$data['state']]);
            DB::update("update book set `b_borrow`=`b_borrow`+1 where b_id=:id",['id'=>$data['b_id']]);
        });
    }
}
<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class BookModel extends Model
{
    /**
	 * 查询图书分类信息
	 * @param NULL
	 * @return array
	 */
    public static function type_data()
    {
        //查询图书分类信息,查询8条
        $BookTypeData = DB::table("book_type")->limit(8)->select("*")->get();
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($BookTypeData), true);
   }
}
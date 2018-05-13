<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class LibraryModel extends Model
{
    //对象转数组
   public function objectToArray($object) {
        //先编码成json字符串，再解码成数组
        
    }
    /**
     * 查询图书馆信息
     * @param null
     * @return array
     */
    public static function library_data()
    {
        //查询图书馆信息
        $LibraryData = DB::table('library')->where("is_statc","1")->select('*')->get();
        //查询图书馆的标签
        $LableData = DB::table('library')->join('library_lable', 'library.library_id', '=', 'library_lable.library_id')->select('lable_name')->get();
        $data = array('LibraryData'=>$LibraryData,'LableData'=>$LableData);
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
    }

}
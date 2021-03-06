<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class LibraryModel extends Model
{
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
    /**
     * 查询图书馆信息
     * @param null
     * @return array
     */
    public static function library_img_data()
    {
        //查询图书馆图片信息前4条
        $LibraryDataOne = DB::table('library_img')->where('library_img_id','<','5')->select('*')->get();
        //查询图书馆图片信息后4条
        $LibraryDataTwo = DB::table('library_img')->where('library_img_id','>','4')->select('*')->get();
        $data = array('LibraryDataOne'=>$LibraryDataOne,'LibraryDataTwo'=>$LibraryDataTwo);
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
    }

}
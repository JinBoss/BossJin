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
        $LibraryData = DB::table('library')->select('*')->get()->toArray();
        //查询图书馆的标签
<<<<<<< HEAD
        $LableData = DB::table('library')->join('library_lable', 'library.library_id', '=', 'library_lable.library_id')->select('lable_name')->get();
        $data = array('LibraryData'=>$LibraryData,'LableData'=>$LableData);
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
=======
        $LibraryData['LableData'] = DB::table('library')->join('library_lable', 'library.library_id', '=', 'library_lable.library_id')->select('lable_name')->get()->toArray();
        return $LibraryData;
        //先把对象转化json格式在解码成数组格式
        // return json_decode(json_encode($LibraryData), true);
>>>>>>> b6c74edcbdb9e1fb4798b5539bdb938ab48ff59f
    }

}
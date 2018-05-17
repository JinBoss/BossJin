<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;  
use Illuminate\Support\Facades\Input;
use App\Http\Models\Home\BookModel;  
use Session;
use Request;
class BookController extends Controller
{
    /**登录进行检索*/
    public function PageShow()
    {
    	//判断是否表单提交
        if(request::isMethod('post')){
            //接收所有提交信息
            $page = Request::input('page',1);
            $search = Request::input('search','');
            $new_str = Request::input('new_str','');
            $ThreeDay = Request::input('ThreeDay','');
            $OneWeek = Request::input('OneWeek','');
            $OneMouth = Request::input('OneMouth','');
            //模型层处理分页数据
            $BookData = BookModel::page_data($page,$search,$offset=8,$new_str,$ThreeDay,$OneWeek,$OneMouth);
            return view("/Home/NewShop",['BookData'=>$BookData]);
        }
    }


}
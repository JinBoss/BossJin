<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Models\Home\HomeModel;  
use App\Http\Models\Home\LibraryModel; 
use App\Http\Models\Home\BookModel;  
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Request;
// use App\Http\Requests;
use Request;
class HomeController extends Controller
{
    /**验证码*/
    public function captcha($tem)
    {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        $phrase = $builder->getPhrase();
        Session::flash('milkcaptcha', $phrase); 
        ob_clean();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
    public function add()
    {
        $data =  Request::file('img');
        var_dump($data);
    }
    /**首页*/
    public function index()
    {
        //查询图书馆全部信息
        $LibraryData = LibraryModel::library_data();
        //查询书籍的分类信息
        $BookTypeData = BookModel::type_data();
        return view('Home/index')->with('LibraryData',$LibraryData)->with('BookTypeData',$BookTypeData);
    }
    /**图书馆*/
    public function about()
    {
        //查询图书馆全部信息
        $LibraryData = LibraryModel::library_data();
        return view("Home/about")->with('LibraryData',$LibraryData);
    }
    /**商品页面*/
    public function shop()
    {
        return view("Home/shop");
    }
    /**活动页面*/
    public function footer()
    {
        return view("Home/footer");
    }
    public function option(){
        $option = Request::input('option');
        print_r($option);die;
    }
    /**联系我们*/
    public function contact()
    {
        return view("Home/contact");
    }
}
<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Models\Home\HomeModel;  
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
        return view('Home/index');
    }
    /**图书馆*/
    public function about()
    {
        return view("Home/about");
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
    /**联系我们*/
    public function contact()
    {
        return view("Home/contact");
    }
}
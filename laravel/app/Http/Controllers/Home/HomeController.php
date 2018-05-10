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
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function index()
    {
        echo "123";die;
        // $data = HomeModel::ce();
        return view('Home/index');
    }
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
    public function about()
    {
        return view("Home/about");
    }
}
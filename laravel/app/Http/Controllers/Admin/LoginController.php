<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Models\Admin\AdminModel;  
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Request;
// use App\Http\Requests;
use Request;
class LoginController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function index()
    {
        $data = AdminModel::ce();
        return view('Admin/page-login');
    }
    public function checkCode()
    {
        echo  session('code');
    }
    public function login()
    {
        // 接值
        $data = Request::all();
        // 判断验证吗
        // if($data['code'] != session('code'))
        // {
        //     echo '验证码不正确';
        //     $url = url('/admin/login');
        //     header("Refresh:2;url=$url");
        // }
        print_r($data);
    }
    public function add()
    {
        $data =  Request::file('img');
        var_dump($data);
    }
}


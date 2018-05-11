<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session; 
use App\Http\Models\Admin\LoginModel; 
use Illuminate\Support\Facades\Storage;
use Request;
class LoginController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    // 加载
    public function index()
    {
        return view('Admin/login');
    }
    public function checkCode()
    {
        echo  session('code');
    }
    public function login()
    {
        // 接值
        $data = Request::all();
        // 判断验证码
        if($data['code'] != session('code'))
        {
            echo '验证码不正确.....';
            $url = url('/admin/login');
            header("Refresh:2;url=$url");
        }
        // 获取登录信息
        $arr = LoginModel::login_check($data);
        // 判断用户名是否为空
        if(empty($arr))
        {
            echo '用户名不存在....';
            $url = url('/admin/login');
            header("Refresh:2;url=$url");
        }
        // 不为空
        else
        {
            // 密码是否正确
            if($arr[0]->au_pwd != md5(sha1($data['u_pwd'])))
            {

                echo '密码不正确....';
                $url = url('/admin/login');
                header("Refresh:2;url=$url");
            }
            // 密码正确
            else
            {
                // 登录信息存入session
                session(['user'=>$arr['0']]);
                echo '登录成功....';
                $url = url('/admin/index');
                header("Refresh:2;url=$url");
                
            }
        }
    }
}


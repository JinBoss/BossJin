<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Models\Home\UserModel;  
use Session;
use Request;
class UserController extends Controller
{
    /**个人资料显示*/
    public function UserShow()
    {
        //获取当前登陆用户的所有信息
        $UserData = Session::get('UserData');
        //判断是否为登陆状态访问
        if (!empty($UserData['u_id'])) {
            return view('Home/usershow')->with("UserData",$UserData);
        }else{
            return view('Home/Login');
        }
    }
    //修改个人资料
    public function UserUpdate()
    {
        //判断用户是否post提交
        if(request::isMethod('post')){
            //接收所有提交信息
            $UpdateUserData = input::all();
            if (!empty($_FILES['file']['name'])) {
                $img = $_FILES['file'];
            }else{
                $img = "";
            }
            //抛给模型层去处理x
            $res = UserModel::user_update($UpdateUserData,$img);
            //执行成功
            if ($res) {
                //获取用户信息
                $NewUserData = UserModel::user_select();
                Session::put('UserData', $NewUserData);
                echo '修改成功....';
                $url = url('/user/usershow');
                header("Refresh:2;url=$url");
            }else{
                echo '修改失败....';
                $url = url('/user/usershow');
                header("Refresh:2;url=$url");
            }
        }
    }
    //退出当前用户
    public function UserOut()
    {
        //判断用户是否get请求
        if(request::isMethod('get')){
            //判断是否是恶意删除信息
            if (!empty(Session::has('UserData'))) {
                //抓取当前用户信息（进行提示）
                $UserData = Session::get('UserData');
                echo "退出".$UserData['u_name']."用户成功....";
                //删除当前用户登陆信息
                Session::forget('UserData');
                $url = url('/login');
                header("Refresh:2;url=$url");
            }else{
                echo '非法请求....';
                $url = url('/login');
                header("Refresh:2;url=$url");
            }
        }
    }
}
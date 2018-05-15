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
        //判断是否为登陆状态访问
        if (!empty($_GET['id'])) {
            //获取当前登陆用户的所有信息
            $UserData = Session::get("UserData");
            return view('Home/usershow')->with("UserData",$UserData);
        }else{
            return view('Home/Login');
        }
    }
    //修改个人资料
    public function userupdate()
    {
        //判断用户是否post提交
        if(request::isMethod('post')){
            //接收所有提交信息
            $UpdateUserData = input::all();
            $img = $_FILES['file'];
            var_dump($img);die;
            //抛给模型层去处理x
            $res = UserModel::user_update($UpdateUserData);
        }
    }
}
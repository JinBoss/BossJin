<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Admin\UserModel;
use Request;
class UserController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function add()
    {
        return view('Admin/useradd');
    }
    public function check_name()
    {
        $name = Request::input('name');
        $data = UserModel::name_check($name);
        if(empty($data))
            return json_encode(array('state'=>true,'msg'=>"名称可以使用"));
        else
            return json_encode(array('state'=>false,'msg'=>"名称已存在"));
    }
    public function add_do()
    {
        $post = Request::all();
        $id = UserModel::add_user($post);
        if(empty($id))
            return json_encode(array('state'=>true,'msg'=>"添加成功"));
        else
            return json_encode(array('state'=>false,'msg'=>"添加失败"));
    }
    public function show()
    {
        $page = Request::input('page',1);

        $data = UserModel::list_page($page,$offset=5);
        // print_r($data);die; 
        if(Request::isMethod('post')){
         // 要执行的代码
            return $data;
        }
        return view('Admin/user',['data'=>$data]);
    }
    public function ajaxP()
    {
        if($request->isMethod('post')){
         // 要执行的代码
        }
    }
    public function del()
    {
        $id = Request::input('id');
        $user = session('user')->au_id;
        if($id == $user)
            return json_encode(array('state'=>false,'msg'=>"不能删除自己"));
        else if(UserModel::del($id))
            return json_encode(array('state'=>true,'msg'=>"删除成功"));
        else
            return json_encode(array('state'=>false,'msg'=>"删除失败"));

    }
    public function update()
    {
        $data = Request::all();
        if(UserModel::up($data))
            return json_encode(array('state'=>true,'msg'=>"修改成功"));
        else
            return json_encode(array('state'=>false,'msg'=>"修改失败"));
    }
}


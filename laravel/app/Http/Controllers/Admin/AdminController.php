<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\CommentController;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Models\Admin\AdminModel;  
use Illuminate\Support\Facades\Storage;
use Request;
use DB;
class AdminController extends CommentController
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // var_dump(session('user'));die;
        return view('Admin/index');
    }
    public function left()
    {
        return view('Admin/left');
    }
    public function head()
    {
        return view('Admin/head');
    }
    public function head2()
    {
        return view('Admin/head2');
    }
    public function main()
    {
        return view('Admin/main');
    }

    public function message(){
        return view('Admin/message');
    }
    public function tab(){
        return view('Admin/tab');
    }
    public function cash()
    {
        $data = DB::select('select `u_name`,`c_num` from `user`,`cash` WHERE user.u_id = cash.u_id ');
        return view('Admin/cash',['data'=>$data]);
    }
}


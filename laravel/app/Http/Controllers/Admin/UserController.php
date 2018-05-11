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
        print_r($name);
    }
}


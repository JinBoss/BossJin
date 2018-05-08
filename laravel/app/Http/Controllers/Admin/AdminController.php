<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Models\Admin\AdminModel;  

class AdminController extends Controller
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
        return view('Admin/Admin',['data'=>$data]);
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
}


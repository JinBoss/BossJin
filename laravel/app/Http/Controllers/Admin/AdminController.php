<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Models\Admin\AdminModel;  
use Illuminate\Support\Facades\Storage;
use Request;
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
    public function captcha($tem)
    {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        $phrase = $builder->getPhrase();
        Session::flash('code', $phrase); 
        ob_clean();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
     public function add()
    {
        $data =  Request::file('img');
        var_dump($data);
    }
}


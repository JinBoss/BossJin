<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Admin\UserModel;
use Request;
use DB;
class ActivityController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function index(){
        return view('Admin/activity');
    }
    public function show()
    {
        return view('Admin/tab');
    }

    public function activity_add(){
        $a_name = Request::input('a_name');
        $a_desc = Request::input('a_desc');
        $addtime = strtotime(Request::input('addtime'));
        $endtime = strtotime(Request::input('endtime'));
        $sql = "insert into activity(a_name,a_desc,addtime,endtime) values('$a_name','$a_desc','$addtime','$endtime')";
        $res = DB::insert($sql);''
        if($res){
            return redirect('/admin/activity/index');
        }else{
            return redirect('/admin/activity/index');
        }
    }
}
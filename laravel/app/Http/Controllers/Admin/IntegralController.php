<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Admin\UserModel;
use Request;
use DB;
class IntegralController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function show()
    {
        $sql = "select * from integral inner join `user` on integral.u_id = user.u_id";
        $data = DB::select($sql);
        $res = json_decode(json_encode($data),true);
        // print_r($res);die;
        return view('Admin/integral',['res'=>$res]);
    }

    public function del($id){
        // print_r($id);die;
        $res = DB::table('integral')->where('i_id',"$id")->delete();
        if($res){
            return redirect('/admin/integral/show');
        }else{
            return redirect('/admin/integral/show');
        }
    }
}


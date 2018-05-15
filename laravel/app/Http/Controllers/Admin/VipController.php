<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Admin\UserModel;
use Request;
use DB;
class VipController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function show()
    {
        $sql = "select * from member inner join `user` on member.u_id = user.u_id";
        $data = DB::select($sql);
        $res = json_decode(json_encode($data),true);
        // print_r($res);die;
        return view('Admin/vip',['res'=>$res]);
    }

    public function del($id){
        // print_r($id);die;
        $res = DB::table('member')->where('m_id',"$id")->delete();
        if($res){
            return redirect('/admin/admin/show');
        }else{
            return redirect('/admin/admin/show');
        }
    }
}


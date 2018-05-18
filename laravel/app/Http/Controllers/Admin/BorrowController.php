<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Admin\BorrowModel;
use Request;
use DB;
class BorrowController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function show()
    {
        $data = BorrowModel::list();
        // print_r($data);die;
        return view('Admin/borrow',['data'=>$data]);
    }

    public function up(){
        $data = Request::all();
        $data['reason'] = Request::input('reason','');
        if($data['state'] == '1')
            $res = BorrowModel::up_de($data);
        else
            $res = BorrowModel::up($data);
        // return json_encode($res);
        if($res=='')
        {
            if($data['state'] == '1')
                return json_encode(array('state'=>true,'msg'=>'审核通过'));
            else if($data['state'] == '2') 
                return json_encode(array('state'=>true,'msg'=>'拒绝成功'));     
        }
        else
        {
            return json_encode(array('state'=>false,'msg'=>'审核失败'));
        }
    }
}


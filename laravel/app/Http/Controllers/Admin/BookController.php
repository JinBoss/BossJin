<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Storage;
use Request;
use DB;
class BookController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function index()
    {
        return view('Admin/p1');
    }

    public function show(){
        $page = Request::input('page',1);
        $seach = Request::input('seach','');
        $res = $this->list_page($page,$seach,$offset=5);
        if(Request::isMethod('post'))
        {
            return view('Admin/book',['res'=>$res,'seach'=>$seach,'page'=>$page]);
        }
        return view('Admin/p3',['res'=>$res]);
    }

    public function book_add(){
        $b_name = Request::input('b_name');
        $b_auther = Request::input('b_auther');
        $img = $_FILES['b_img'];
        $b_img = $this->getimage($img);
        $b_desc = Request::input('b_desc');
        $adtime =strtotime(Request::input('adtime'));
        $a_id = Request::input('a_id');
        $b_num = Request::input('b_num');
        $b_shelf = Request::input('b_shelf');
        $sql = "insert into book(b_name,b_auther,b_img,b_desc,adtime,a_id,b_num,b_shelf) values('$b_name','$b_auther','$b_img','$b_desc','$adtime','1','$b_num','$b_shelf')";
        // $res = DB::insert('insert into `book`(b_name,b_auther,b_img,b_desc,adtime,a_id,b_num,b_shelf) values(?,?,?,?,?,?,?,?)',["$b_name","$b_auther","$b_img","$b_desc","$adtime","$a_id","$b_num","$b_shelf"]);
        $res = DB::insert($sql);
        if($res){
            return redirect('/admin/book/show');
        }else{
            return redirect('/admin/book/index');
        }

    }
    function getimage($img){
        $arr = array('image/jpg','image/jpeg','image/gif','image/bmp','image/png');
        if(in_array($img['type'],$arr)){
            $postfix = substr($img['name'],strpos($img['name'],'.'));
            $ad_content = "images/".time()."-".rand(1000,9999).$postfix;
            move_uploaded_file($img["tmp_name"],  $ad_content);
            return $ad_content;
        }else{
            return 1;die;
        }
    }

    public function book_del($id){
        // print_r($id);die;
        $res = DB::table('book')->where("b_id","$id")->delete();
        // print_r($res);die;
        if($res){
            return redirect('/admin/book/show');
        }else{
            return redirect('/admin/book/show');
        }
    }

    public function book_up(){
        $up_shelf = $_POST['up_shelf'];
        $id = $_POST['id'];
        $res = DB::table('book')->where('b_id',$id)->update(['b_shelf'=>$up_shelf]);
        if($res){
            return json_encode(array('state'=>true,'msg'=>"修改成功"));
        }else{
            return json_encode(array('state'=>false,'msg'=>"修改失败"));
        }
    }
    public static function list_page($page=1,$where='',$size=5)
    {
        $num = DB::select("select count(*) as num from book where b_name like '%$where%'");
        $last = ceil($num[0]->num/$size);
        $offset = ($page-1)*$size;
        $data = DB::select("select * from book where b_name like '%$where%' limit $offset,$size");
        $up = $page-1<1 ? 1 : $page-1;
        $next = $page+1>$last ? $last : $page+1;
        $listdata = array('data'=>$data,'up'=>$up,'next'=>$next,'last'=>$last);
        return $listdata;
    }
}


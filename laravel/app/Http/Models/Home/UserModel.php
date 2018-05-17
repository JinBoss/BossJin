<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class UserModel extends Model
{
    /**
     * 修改用户资料
     * @param u_id u_tel u_email u_img
     * @return 
     */
    public static function user_update($InputeData,$img="")
    {
        $u_tel = isset($InputeData['u_tel'])?$InputeData['u_tel']:"";
        $u_email = isset($InputeData['u_email'])?$InputeData['u_email']:"";
        //用户提交数据赋给新的变量
        $u_id = $InputeData['u_id'];
        //判断用户头像是否为空
        if (!empty($img)&&!empty($u_tel)&&!empty($u_email)) {
            //处理用户图片
            $arr = array('image/jpg','image/jpeg','image/gif','image/bmp','image/png');
            if(in_array($img['type'],$arr)){
                $postfix = substr($img['name'],strpos($img['name'],'.'));
                $ad_content = "images/".time()."-".rand(1000,9999).$postfix;
                move_uploaded_file($img["tmp_name"],  $ad_content);
                $sql = "UPDATE `user` SET u_img = '$ad_content',u_tel = '$u_tel',u_email = '$u_email' WHERE u_id = '$u_id'";
            }else{
                return 1;
            }
        }elseif(!empty($img)&&!empty($u_tel)&&empty($u_email)){
            //处理用户图片
            $arr = array('image/jpg','image/jpeg','image/gif','image/bmp','image/png');
            if(in_array($img['type'],$arr)){
                $postfix = substr($img['name'],strpos($img['name'],'.'));
                $ad_content = "images/".time()."-".rand(1000,9999).$postfix;
                move_uploaded_file($img["tmp_name"],  $ad_content);
                $sql = "UPDATE `user` SET u_img = '$ad_content',u_tel = '$u_tel' WHERE u_id = '$u_id'";
            }else{
                return 1;
            }
        }elseif(!empty($img)&&empty($u_tel)&&!empty($u_email)){
            //处理用户图片
            $arr = array('image/jpg','image/jpeg','image/gif','image/bmp','image/png');
            if(in_array($img['type'],$arr)){
                $postfix = substr($img['name'],strpos($img['name'],'.'));
                $ad_content = "images/".time()."-".rand(1000,9999).$postfix;
                move_uploaded_file($img["tmp_name"],  $ad_content);
                $sql = "UPDATE `user` SET u_img = '$ad_content',u_email = '$u_email' WHERE u_id = '$u_id'";
            }else{
                return 1;
            }
        }elseif(!empty($img)&&empty($u_tel)&&empty($u_email)){
            //处理用户图片
            $arr = array('image/jpg','image/jpeg','image/gif','image/bmp','image/png');
            if(in_array($img['type'],$arr)){
                $postfix = substr($img['name'],strpos($img['name'],'.'));
                $ad_content = "images/".time()."-".rand(1000,9999).$postfix;
                move_uploaded_file($img["tmp_name"],  $ad_content);
                $sql = "UPDATE `user` SET u_img = '$ad_content' WHERE u_id = '$u_id'";
            }else{
                return 1;
            }
        }elseif(empty($img)&&!empty($u_tel)&&!empty($u_email)){
            $sql = "UPDATE `user` SET u_tel = '$u_tel',u_email = '$u_email' WHERE u_id = '$u_id'";
        }elseif(empty($img)&&empty($u_tel)&&!empty($u_email)){
            $sql = "UPDATE `user` SET u_email = '$u_email' WHERE u_id = '$u_id'";
        }elseif(empty($img)&&!empty($u_tel)&&empty($u_email)){
            $sql = "UPDATE `user` SET u_tel = '$u_tel' WHERE u_id = '$u_id'";
        }else{
            return DB::table('user')->where('u_id',$u_id)->first();
        }
        return DB::insert($sql);
    }
    /**
     * 查询新的用户资料
     * @param u_id
     * @return $array 
     */
    public static function user_select()
    {
        $UserData = Session::get("UserData");
        $NewData =  DB::table('user')->where('u_id',$UserData['u_id'])->first();
        //对象转化为数组
        return json_decode(json_encode($NewData), true);
    }
    /**
     * 查询团队的信息左1
     * @param u_id
     * @return $array 
     */
    public static function user_data_one()
    {
        $TeamData =  DB::table('team')->where('team_u_id', '=', '1')->select('*')->get();
        // print_r($TeamData);die;
        //对象转化为数组
        return json_decode(json_encode($TeamData), true);
    }
    /**
     * 查询团队的信息左2
     * @param u_id
     * @return $array 
     */
    public static function user_data_two()
    {
        $TeamData =  DB::table('team')->where('team_u_id', '=', '2')->select('*')->get();
        // print_r($TeamData);die;
        //对象转化为数组
        return json_decode(json_encode($TeamData), true);
    }
     /**
     * 查询团队的信息右1
     * @param u_id
     * @return $array 
     */
    public static function user_data_three()
    {
        $TeamData =  DB::table('team')->where('team_u_id', '=', '3')->select('*')->get();
        // print_r($TeamData);die;
        //对象转化为数组
        return json_decode(json_encode($TeamData), true);
    }
     /**
     * 查询团队的信息右2
     * @param u_id
     * @return $array 
     */
    public static function user_data_four()
    {
        $TeamData =  DB::table('team')->where('team_u_id', '=', '4')->select('*')->get();
        // print_r($TeamData);die;
        //对象转化为数组
        return json_decode(json_encode($TeamData), true);
    }
}
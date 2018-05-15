<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class UserModel extends Model
{
    /**
     * 处理用户图片
     * @param u_img
     * @return true(添加位置) false(1)
     */
     public function getimage($img){
        $arr = array('image/jpg','image/jpeg','image/gif','image/bmp','image/png');
        if(in_array($img['type'],$arr)){
            $postfix = substr($img['name'],strpos($img['name'],'.'));
            $ad_content = "images/".time()."-".rand(1000,9999).$postfix;
            move_uploaded_file($img["tmp_name"],  $ad_content);
            return $ad_content;
        }else{
            return 1;
        }
    }
    /**
     * 处理数据格式（对象转数组）
     * @param Object
     * @return array
     */
    public function ObjectAsArray($data)
    {
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
    }
    /**
     * 修改用户资料
     * @param u_id u_tel u_email u_img
     * @return 
     */
    public static function user_update($InputeData)
    {
        //判断用户头像是否修改
        if (!empty($InputeData['file'])) {
            var_dump($InputeData['file']);die;
            $img = json_decode(json_encode($InputeData['file']), true);
            var_dump($img);die;
            //对象转换数组
            $imgData = $this->ObjectAsArray($InputeData['file']);
            var_dump($imgData);die;
            $img = $this->getimage($InputeData['file']);
            var_dump($img);die;
        }
    }

}
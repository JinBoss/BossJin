<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class BookModel extends Model
{
    /**
	 * 查询图书分类信息
	 * @param NULL
	 * @return array
	 */
    public static function type_data()
    {
        //查询图书分类信息,查询8条
        $BookTypeData = DB::table("book_type")->limit(8)->select("*")->get();
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($BookTypeData), true);
   }
    /**
     * 查询图书信息
     * @param null
     * @return array
     */
    public static function book_data()
    {
        //查询图书信息
        $BookData = DB::table('book')->where("b_shelf","1")->select('*')->get();
        //查询图书的分类信息
        $TypeData = DB::table('book')->join('book_type', 'book.b_type_id', '=', 'book_type.type_id')->select('type_name')->get();
        // print_r($TypeData);die;
        $data = array('BookData'=>$BookData,'TypeData'=>$TypeData);
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
    }
    /**
     * 查询单个图书详情信息
     * @param null
     * @return array
     */
    public static function book_first($BookId)
    {
        //查询图书信息
        $BookData = DB::table('book')->where("b_id",$BookId['b_id'])->select('*')->get();
        //查询图书的分类信息
        $TypeData = DB::table('book')->join('book_type', 'book.b_type_id', '=', 'book_type.type_id')->where("book.b_id",$BookId['b_id'])->select('type_name')->get();
        // print_r($TypeData);die;
        $data = array('BookData'=>$BookData,'TypeData'=>$TypeData);
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
    }
    /**
     * 推荐最热的四本书
     * @param null
     * @return array
     */
    public static function book_hot($BookId)
    {
        //查询图书信息
        $BookData = DB::table('book')->where("is_hot",'1')->where('b_id','<>',$BookId['b_id'])->limit(4)->select('*')->get();
        //查询图书的分类信息
        $TypeData = DB::table('book')->join('book_type', 'book.b_type_id', '=', 'book_type.type_id')->select('type_name')->get();
        // print_r($TypeData);die;
        $data = array('BookData'=>$BookData,'TypeData'=>$TypeData);
        //先把对象转化json格式在解码成数组格式
        return json_decode(json_encode($data), true);
    }
     /**
     * 借书
     * @param null
     * @return array
     */
    public static function book_borrow($BookId)
    {
        /**
         * 1.u_id 用户id
         * 2.b_id 图书id
         * 3.借还时间
         * 4.审核状态 默认为0
         */
        $UserData = Session::get('UserData');
        $u_id = $UserData['u_id'];
        $b_id = $BookId['b_id'];
        $b_time = time();
        // $re_time = '';
        $b_state = '0';
        //查询当前用户借书次数
        $UserBookNum = DB::table('user')->where("u_id",$u_id)->select('b_num')->first();
        $num = json_decode(json_encode($UserBookNum), true);
        if($num['b_num']>0 && $num['b_num']<=5){
            //查询当前图书是否借过
            $NextBook = DB::table('borrow')->where("b_id",$b_id)->where("u_id",$u_id)->select('*')->first();
            $NewBookData = json_decode(json_encode($NextBook), true);
            //为空的时候用户可以借书
            if (empty($NewBookData)) {
                //查询当前借阅数据的库存数量
                $SelectBookNum = DB::table('book')->where("b_id",$b_id)->select('b_num')->first();
                $num = json_decode(json_encode($SelectBookNum), true);
                //数量大于0可借阅
                if($num['b_num']>0){
                    //记录借阅
                    $InsertSql = "INSERT INTO `borrow` VALUES('$b_id','$b_time','0','$u_id','$b_state')";
                    if(DB::insert($InsertSql)){
                        //查询图书的数量-1
                        $UpdateSql ="UPDATE book SET b_num=b_num-1 WHERE b_id = $b_id";
                        if(DB::insert($UpdateSql)){
                            //用户借书成功之后借书次数减1
                            $UpdateUserSql ="UPDATE user SET b_num=b_num-1 WHERE u_id = $u_id";
                            if (DB::insert($UpdateUserSql)){
                                //借书成功
                                return '1';
                            }else{
                                //非法借书
                                return '-4';
                            }
                        }else{
                            //非法借书
                            return '-1';
                        }
                    }else{
                        //非法借书
                        return '0';
                    }
                }else{
                    //数量不够
                    return '-2';
                } 
            }else{
                //已经借过该书
                return '-3';
            }
        }else{
            //当前用户已借阅5本
            return '-5';
        }
       
    }
}
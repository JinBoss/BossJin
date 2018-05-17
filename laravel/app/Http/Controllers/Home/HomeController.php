<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;  
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use DB;
use App\Http\Models\Home\HomeModel;  
use App\Http\Models\Home\LibraryModel; 
use App\Http\Models\Home\BookModel;
use App\Http\Models\Home\UserModel;
use App\Http\Models\Home\MessageModel;  
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

// use Illuminate\Http\Request;
// use App\Http\Requests;
use Request;
class HomeController extends Controller
{
    /**验证码*/
    public function captcha($tem)
    {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        $phrase = $builder->getPhrase();
        Session::flash('milkcaptcha', $phrase); 
        ob_clean();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
    public function add()
    {
        $data =  Request::file('img');
        var_dump($data);
    }
    /**首页*/
    public function index()
    {
        //查询图书馆全部信息
        $LibraryData = LibraryModel::library_data();
        //查询书籍的分类信息
        $BookTypeData = BookModel::type_data();
        //查询我们的团队
        $AllData['UserDataOne'] = UserModel::user_data_one();
        $AllData['UserDataTwo'] = UserModel::user_data_two();
        $AllData['UserDataThree'] = UserModel::user_data_three();
        $AllData['UserDataFour'] = UserModel::user_data_four();
        // print_r($AllData);die;
        return view('Home/index')->with('LibraryData',$LibraryData)->with('BookTypeData',$BookTypeData)->with('AllData',$AllData);
    }
    /**图书馆*/
    public function about()
    {
        //查询图书馆全部信息
        $LibraryData = LibraryModel::library_data();
        //查询图书馆图片
        $LibraryImgData = LibraryModel::library_img_data();
        // print_r($LibraryImgData);die;
        return view("Home/about")->with('LibraryData',$LibraryData)->with('LibraryImgData',$LibraryImgData);
    }
    /**商品页面*/
    public function shop()
    {
        //查询图书全部信息
        $BookData = BookModel::book_data();
        //查询图书分类信息
        $BookData['TypeData'] = BookModel::type_data();
        //获取分页的条数
        $last = BookModel::one_page();
        return view("Home/shop")->with('BookData',$BookData)->with("last",$last);  
    }
    /**图书目录页面借书的操作*/
    public function BorrowBooks()
    {
        //判断是否表单提交
        if(request::isMethod('post')){
            //接收图书id
            $BookId = input::only("b_id");
            //查询图书全部数量
            $BookData = BookModel::book_first($BookId);
            //查询图书全部信息
            $BookHotData = BookModel::book_hot($BookId);
            // print_r($BookHotData);die;
            return view("Home/single_product")->with('BookData',$BookData)->with('BookHotData',$BookHotData);
        } 
    }
    /**用户借书详情页面*/
    public function UserBorrowBooks()
    {
        /**判断借书用户是否登录**/
        if(!empty(Session::get('UserData')) && request::isMethod('post')){ 
            //接收图书id
            $BookId = input::only("b_id");
            //借书
            $BookData = BookModel::book_borrow($BookId);
            switch ($BookData) {
                case '0':
                    echo '非法借书.....';
                    $url = url('/home');
                    header("Refresh:2;url=$url");
                    break;
                case '1':
                    echo '借书成功，等待管理员审核.....';
                    $url = url('/Home/home/shop');
                    header("Refresh:2;url=$url");
                    break;
                case '-1':
                    echo '非法借书.....';
                    $url = url('/home');
                    header("Refresh:2;url=$url");
                    break;
                case '-2':
                    echo '该书数量不足.....';
                    $url = url('/Home/home/shop');
                    header("Refresh:2;url=$url");
                    break;
                case '-3':
                    echo '已经借过该书.....';
                    $url = url('/Home/home/shop');
                    header("Refresh:2;url=$url");
                    break;
                case '-4':
                    echo '非法借书.....';
                    $url = url('/Home/home/shop');
                    header("Refresh:2;url=$url");
                    break;
                case '-5':
                    echo '当前用户已借阅5本.....';
                    $url = url('/Home/home/shop');
                    header("Refresh:2;url=$url");
                    break;
    
                default:
                    echo '非法借书.....';
                    $url = url('/home');
                    header("Refresh:2;url=$url");
                    break;
            }

        }else{
            echo '请先登录之后再借.....';
            $url = url('/login');
            header("Refresh:2;url=$url");
        }
    }
    /**还书页面*/
    public function checkout()
    {
        // echo "string";
        //判断当前用户是否登录
        if(!empty(Session::get('UserData'))){
            //查询当前用户已借图书
            $UserBorrowData = BookModel::borrow_user();
            // print_r($UserBorrowData);die;
            return view("Home/checkout")->with('UserBorrowData',$UserBorrowData);
        }       
    }
    /**还书页面*/
    public function checkoutDel()
    {
        //判断是否get提交
        if(request::isMethod('get')){
            //接收图书id
            $BookId = input::only("b_id");
            //修改还书状态
            $res = BookModel::borrow_delete($BookId);
            if($res==1){
                echo '还书成功.....';
                $url = url('/Home/home/checkout');
                header("Refresh:2;url=$url");
            }else{
                echo '还书失败.....';
                $url = url('/Home/home/checkout');
                header("Refresh:2;url=$url"); 
            }
        } 
    }
    /**活动页面*/
    public function footer()
    {
        return view("Home/footer");
    }
    /**联系我们*/
    public function contact()
    {
        return view("Home/contact");
    }
    /**联系我们留言*/
    public function ContactMessage()
    {
        //判断是否表单提交
        if(request::isMethod('post')){
            //接收所有提交信息
            $MessagePostData = input::all();
            //查询用户信息
            $MessageData = MessageModel::message_check($MessagePostData);
            // var_dump($MessageData);die;
            //判断信息是否存在
            if (!empty($MessageData)) {
                echo '留言成功.....';
                $url = url('/Home/home/contact');
                header("Refresh:2;url=$url");
            }else{
                echo '留言失败.....';
                $url = url('/Home/home/contact');
                header("Refresh:2;url=$url");
            }   
        }
    }
   
}
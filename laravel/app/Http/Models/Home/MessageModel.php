<?php
namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class MessageModel extends Model
{
    /**
	 * 
	 * @param username password
	 * @return array
	 */
    public static function message_check($MessagePostData)
    {
        // print_r($MessagePostData);die;
        $UserData = Session::get("UserData");
        unset($MessagePostData['_token']);
        $message_id = "NULL";
        if (!empty($UserData['u_id'])) {
            $u_id= $UserData['u_id'];
            $message_ip= "NULL";
        }else{
            $u_id= "NULL";
            //
            if (isset($_ENV["HOSTNAME"])){
                $MachineName = $_ENV["HOSTNAME"];
            } else if(isset($_ENV["COMPUTERNAME"])){
                $MachineName = $_ENV["COMPUTERNAME"];
            }else{
                $MachineName = "";
            }
            $message_ip= gethostbyname($MachineName);
        }
        $message_name= $MessagePostData['message_name'];
        $message_email= $MessagePostData['message_email'];
        $message_content= $MessagePostData['message_content'];
        $message_time= time();
        $sql = "insert into `message` VALUES (NULL,$u_id,'$message_name', '$message_email', '$message_content', '$message_time', '$message_ip')";
        return DB::insert($sql);  
    }   
}
<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  
use Session;
class CommentController extends Controller
{
	public function __construct()
	{
		 $this->middleware(function ($request, $next) {
	    	if(!$request->session()->get('user'))
	    	{
	    		echo '请先登录....';
		        $url = url('/admin/login');
		        header("Refresh:2;url=$url");
	    	}
	    	return $next($request);
   		});
	}
}
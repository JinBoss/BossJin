<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<style type="text/css">
</style>
<body>
	<center>
		<form action="{{ url('/user/userupdate') }}" method="post" enctype="multipart/form-data">
		{{csrf_field()}} 
		<div style=" width: 800px; height: 800px; border: 1px solid black;">
			<h2>欢迎{{ session('UserData')['u_name'] }}查看您的资料</h2>
			<div style="width: 300px;height: 300px; float: left; margin-top: 200px; margin-left: 23px;" id="fileAs">
				<img src="{{URL::asset(session('UserData')['u_img'])}}" width="300" height="300" id="portrait">
				<input type="file" name="file"  style="margin-top: 20px;" onchange="showPreview(this)">
			</div>
			<div style="width: 400px; height: 400px; margin-left: 290px;">
				<ul id="_ul" style="margin-top: 150px; line-height: 80px; font-weight: bold; list-style-type: none;">
					<li>你的名字：{{ session('UserData')['u_name'] }}</li>
					<li>你的年龄：{{ session('UserData')['u_age'] }}</li>
					@if(session('UserData')['u_age'] == "1")
						<li>你的性别：女</li>
					@elseif(session('UserData')['u_age'] == "2")
						<li>你的性别：男</li>
					@endif
					@if(session('UserData')['u_tel'] == "")
						<li>你的电话：<input type="text" placeholder="请写上您的电话" name="u_tel"></li>
					@else
						<li>你的电话：{{ session('UserData')['u_tel'] }}</li>
					@endif
					@if(session('UserData')['u_tel'] == "")
						<li>你的邮箱：<input type="email" placeholder="请写上您的邮箱" name="u_email"></li>
					@else
						<li>你的邮箱：{{ session('UserData')['u_email'] }}</li>
					@endif
				</ul>
			</div>
			<input type="hidden" name="u_id" value="{{ session('UserData')['u_id'] }}">
			<button type="submit" value="修改我的资料" id="submit">修改我的资料</button>
		</div>
		</form>
		<a href="{{ url('/home') }}"><button>进入首页</button></a>
		<a href="{{ url('/Home/home/checkout') }}"><button>管理我的图书</button></a>
		<a href="{{ url('/user/userout') }}"><button>退出当前用户</button></a>
	</center>
</body>
<script type="text/javascript">  
    function showPreview(source) {  
        var file = source.files[0];  
        if(window.FileReader) {  
            var fr = new FileReader(); 
            //当它执行的时候就触发，不管成功或者失败（onload） 
            fr.onloadend = function(e) {  
                document.getElementById("portrait").src = e.target.result;  
            };  
            //转储成一个Data对象，获取的URL地址
            fr.readAsDataURL(file);  
        }  
    }  
    submit.onclick=function(){
    	var submit = document.getElementById("submit");
    	//获取电话
    	var u_tel = document.getElementsByName("u_tel")[0].value;
    	//获取邮箱
    	var u_email = document.getElementsByName("u_email")[0].value;
    	// var u_email = document.getElementsByName("u_email").val();
    	if (u_tel=="" || u_email=="") {
    		alert("请完整您的个人资料")
			return false;
    	}else{
    		return true;
    	}
    }
</script>  
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加用户</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/css.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.min.js') }}"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="{{ URL::asset('/back/assets/img/coin02.png') }}" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;意见管理
			</div>
		</div>
		<div class="page ">
			<!-- 会员注册页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>添加用户</span>
				</div>
				<div class="baBody">
					<div class="bbD">
						&nbsp;&nbsp;用户名：
						<input type="text" class="input3" id="u_name"  /> <span id="check"></span>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码：<input type="password"
						id='pwd'	class="input3" />
					</div>
					<div class="bbD">
						用户等级：	<select id="type" class="input3">
										<option value="1">普通管理</option>
										<option value="2">超级管理</option>
									</select>
					</div>
					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" href="javascript:;">提交</button>
							<a class="btn_ok btn_no" href="javascript:;">取消</a>
						</p>
					</div>
				</div>
			</div>

			<!-- 会员注册页面样式end -->
		</div>
	</div>
</body>
</html>
<script>
$('.input3').blur(function(){
	var name = $('#u_name').val();
	// console.log(name);
	if(name == '')
		$('#check').text('请输入用户名').css('color','red');
	else
	{
		$.ajax({
			type:"post",
			url:"{{url('/admin/user/check_name') }}",
			data:{user_name:name},
			success:function(msg){
				if(msg.state == 0)
					$('#check').text(msg.msg).css('color','red');
				else
					$('#check').text(msg.msg).css('color','green');
				// console.log(msg)
			}
		})
	}
	
});
$('.btn_yes').click(function(){
	var name = $('#u_name').val();
	var pwd = $('#pwd').val();
	var type = $('#type').val();
	$.ajax({
		type:"post",
		url:"{:url('user/add')}",
		data:{user_name:name,user_pwd:pwd,type:type},
		success:function(msg){
			alert(msg.msg)
		}
	})
});
</script>
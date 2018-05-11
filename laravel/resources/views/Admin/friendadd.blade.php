<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加用户</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/css.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.min.js') }}"></script>
</head>
<body>
<form action="{:url('index/friendadd')}" method="post" enctype="multipart/form-data">
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="{{ URL::asset('/back/assets/img/coin02.png') }}" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">友情链接</a>&nbsp;-</span>&nbsp;添加链接
			</div>
		</div>
		<div class="page ">
			<!-- 会员注册页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>友情链接</span>
				</div>
				<div class="baBody">
					<div class="bbD">
					&nbsp;&nbsp;连接类型：
						<select id="type" class="input3">
							<option value="1">文字</option>
							<option value="2">图片</option>
						</select>
				</div>	
					<div class="bbD">
						&nbsp;&nbsp;连接名称：
						<input type="text" class="input3" name="friend_name" id="u_name"  /> <span id="check"></span>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;连接地址：<input type="text"
						id='friend_url' name="friend_url" class="input3" />
					</div>
					<div class="bbD">
						<p class="bbDP">
						<input type="submit" class="btn_ok btn_yes" value="提交" />
							<!-- <button class="btn_ok btn_yes" href="javascript:;">提交</button> -->
							<a class="btn_ok btn_no" href="javascript:;">取消</a>
						</p>
					</div>
				</div>
			</div>

			<!-- 会员注册页面样式end -->
		</div>
	</div>
	</form>
</body>
</html>
<script>
$('#type').change(function (){ 
	var v = $(this).val();
	// alert(v)
	if(v == 1)
	{
		$('#u_name').attr('type','text');
		$('#u_name').attr('name','friend_name');
	}
	else
	{
		$('#u_name').attr('type','file');
		$('#u_name').attr('class','');
		$('#u_name').attr('name','friend_img');
	}
});
// $('.input3').blur(function(){
// 	var name = $('#u_name').val();
// 	// console.log(name);
// 	if(name == '')
// 		$('#check').text('请输入用户名').css('color','red');
// 	else
// 	{
// 		$.ajax({
// 			type:"post",
// 			url:"{:url('user/vic')}",
// 			data:{user_name:name},
// 			success:function(msg){
// 				if(msg.state == 0)
// 					$('#check').text(msg.msg).css('color','red');
// 				else
// 					$('#check').text(msg.msg).css('color','green');
// 				// console.log(msg)
// 			}
// 		})
// 	}
	
// });
// $('.btn_yes').click(function(){
// 	var name = $('#u_name').val();
// 	var pwd = $('#pwd').val();
// 	var type = $('#type').val();
// 	$.ajax({
// 		type:"post",
// 		url:"{:url('user/add')}",
// 		data:{user_name:name,user_pwd:pwd,type:type},
// 		success:function(msg){
// 			alert(msg.msg)
// 		}
// 	})
// });
</script>
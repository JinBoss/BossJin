<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
<link rel="stylesheet" type="text/css" href="/static/css/css.css" />
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/static/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;修改密码
			</div>
		</div>
		<div class="page ">
			<!-- 修改密码页面样式 -->
			<div class="bacen">
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;&nbsp;管理员UID：&nbsp;&nbsp;&nbsp;&nbsp;{$data['user_id']}</div>
				<div class="bbD">管理员用户名：&nbsp;&nbsp;&nbsp;&nbsp;{$data['user_name']}</div>
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;&nbsp;输入旧密码：<input type="password" class="input3"
						onblur="checkpwd1()" id="pwd1" placeholder="密码六至十二位" /> <img class="imga"
						src="/static/img/ok.png" /><img class="imgb" src="/static/img/no.png" />
				</div>
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;&nbsp;输入新密码：<input type="password" class="input3"
						onblur="checkpwd2()" id="pwd2"   placeholder="密码六至十二位" /> <img class="imga"
						src="/static/img/ok.png" /><img class="imgb" src="/static/img/no.png" />
				</div>
				<div class="bbD">
					再次确认密码：<input type="password" class="input3" onblur="checkpwd3()"
						id="pwd3"  placeholder="密码六至十二位" /> <img class="imga" src="/static/img/ok.png" /><img
						class="imgb" src="/static/img/no.png" />
				</div>
				<div class="bbD">
					<p class="bbDP">
						<button class="btn_ok btn_yes" u_id="{$data['user_id']}">提交</button>
						<a class="btn_ok btn_no" href="#">取消</a>
					</p>
				</div>
			</div>
			<!-- 修改密码页面样式end -->
		</div>
	</div>
</body>
<script type="text/javascript">
function checkpwd1(){
var user = document.getElementById('pwd1').value.trim();
 if (user.length >= 6 && user.length <= 12) {
  $("#pwd1").parent().find(".imga").show();
  $("#pwd1").parent().find(".imgb").hide();
  return true;
 }else{
  $("#pwd1").parent().find(".imgb").show();
  $("#pwd1").parent().find(".imga").hide();
  return false;
 };
}
function checkpwd2(){
var user = document.getElementById('pwd2').value.trim();
var user1 = document.getElementById('pwd1').value.trim();
if(user1 != user)
{
 if (user.length >= 6 && user.length <= 12) {
  $("#pwd2").parent().find(".imga").show();
  $("#pwd2").parent().find(".imgb").hide();
  return true;
 }
 else{
  $("#pwd2").parent().find(".imgb").show();
  $("#pwd2").parent().find(".imga").hide();
  return false;
 };
}else{
  $("#pwd2").parent().find(".imgb").show();
  $("#pwd2").parent().find(".imga").hide();
  return false;
 };
}
function checkpwd3(){
var user = document.getElementById('pwd3').value.trim();
var pwd = document.getElementById('pwd2').value.trim();
 if (user.length >= 6 && user.length <= 12 && user == pwd) {
  $("#pwd3").parent().find(".imga").show();
  $("#pwd3").parent().find(".imgb").hide();
  return true;
 }else{
   $("#pwd3").parent().find(".imgb").show();
  $("#pwd3").parent().find(".imga").hide();
  return false;
 };
}
$('.btn_yes').click(function(){
	var id = $(this).attr('u_id');
	var pwdy = $("#pwd1").val();
	var pwdn = $("#pwd2").val();
	var pwdv = $("#pwd3").val();
	if(checkpwd1() & checkpwd2() & checkpwd3())
	{
		$.ajax({
			type:'post',
			url:"{:url('/index/user/uppwd')}",
			data:{id:id,pwdy:pwdy,pwdn:pwdn,pwdv:pwdv},
			dataType:'json',
			success:function(msg)
			{
				alert(msg.msg);
			}
		})
	}
	
})
</script>
</html>
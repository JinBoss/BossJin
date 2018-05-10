<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link rel="stylesheet" type="text/css" href="/static/css/public.css" />
<link rel="stylesheet" type="text/css" href="/static/css/page.css" />
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/public.js"></script>
</head>
<body>

	<!-- 登录body -->
	<div class="logDiv">
		<img class="logBanner" src="/static/img/logBanner.png" />
		<div class="logGet">
			<!-- 头部提示信息 -->
			<form action="{:url('Admin/login_add')}" method="post">
				<div class="logD logDtip">
					<p class="p1">登录</p>
				</div>
				<!-- 输入框 -->
				<div class="lgD">
					<img class="img1" src="/static/img/logName.png" /><input type="text"
						placeholder="输入用户名" name="user_name" />
				</div>
				<div class="lgD">
					<img class="img1" src="/static/img/logPwd.png" /><input type="password"
						placeholder="输入用户密码" name="user_pwd" />
				</div>
				<div class="logC">
					<a href="#" target="_self"><button type="submit">登 录</button></a>
				</div>
			</form>
		</div>
	</div>
	<!-- 登录body  end -->

	<!-- 登录页面底部 -->
	<div class="logFoot">
		<p class="p1">版权所有：JJH科技有限公司</p>
	</div>
	<!-- 登录页面底部end -->
   
</body>
</html>
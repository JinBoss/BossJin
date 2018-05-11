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
				<img src="{{ URL::asset('/back/assets/img/coin02.png') }}" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a href="#">成员管理</a>&nbsp;-</span>&nbsp;添加成员
			</div>
		</div>
		<div class="page">
			<!-- 会员注册页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>用户注册</span>
				</div>
				<form action="{:url('Admin/enroll_add')}" method="post">
					<div class="baBody">
						<div class="bbD">
							&nbsp;&nbsp;&nbsp;用户名：<input type="text" class="input3" name="user_name" />
						</div>
						<div class="bbD">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码：<input type="password"
								class="input3" name="user_pwd" />
						</div>
						<div class="bbD">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱：<input type="email"
								class="input3" name="user_email" />
						</div>
						<div class="bbD">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人电话：<input type="tel"
								class="input3" name="user_tel" />
						</div>
						<div class="bbD">
							<p class="bbDP">
							<input type="submit" value="注册" class="btn_ok btn_yes" />
								
								<a class="btn_ok btn_no" href="#">取消</a>
							</p>
						</div>
					</div>
				</form>
			</div>

			<!-- 会员注册页面样式end -->
		</div>
	</div>
</body>
</html>
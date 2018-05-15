<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/page.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/public.js') }}"></script>
</head>
<body>

	<!-- 登录body -->
	<div class="logDiv" >
		<img class="logBanner" src="{{ URL::asset('/back/assets/img/logBanner.png') }}" />
		<div class="logGet">
			<!-- 头部提示信息 -->
			<form action="{{ url('admin/login/login') }}" method="post">
			{{csrf_field()}} 
				<div class="logD logDtip">
					<p class="p1">登录</p>
				</div>
				<!-- 输入框 -->
				<div class="lgD">
					<img class="img1" src="{{ URL::asset('/back/assets/img/logName.png') }}" /><input type="text"
						placeholder="输入用户名" name="u_name" /><span></span>
				</div>
				<div class="lgD">
					<img class="img1" src="{{ URL::asset('/back/assets/img/logPwd.png') }}" /><input type="password"
						placeholder="输入用户密码" name="u_pwd" /><span></span>
				</div>
				<div class="lgD">
				<?php $url = url('admin/captcha/'); ?>
					<img class="img1" src="{{ URL::asset('/back/assets/img/logPwd.png') }}" />
					<input type="text"
						 name="code" placeholder="请输入验证码" /><span></span>
						<img style="margin-right:1px;" class="" src="{{ url('admin/login/captcha/1') }}" onclick="this.src='{{ $url }}/'+Math.random()" />
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
<script type="text/javascript">
window.flog=false;
window.flog1=false;
window.flog2=false;
	$('[name=u_name]').blur(function(){
		var name = $(this).val();
		if(name== '')
		{
			$(this).attr('placeholder','用户名不能为空');
			window.flog=false;
		}
		else
		window.flog=true;
	})
	$('[name=u_pwd]').blur(function(){
		var name = $(this).val();
		if(name== '')
		{
			$(this).attr('placeholder','密码不能为空');
			window.flog1=false;
		}
		else
		window.flog1=true;
	})
	$('[name=code]').blur(function(){
		var name = $(this).val();
		if(name== '')
		{
			$(this).attr('placeholder','验证码不能为空');
			window.flog2=false;
		}
		else
		window.flog2=true;
	})
	$('form').submit(function(){
		$('[name=u_name]').trigger('blur');
		$('[name=u_pwd]').trigger('blur');
		$('[name=code]').trigger('blur');
		if(window.flog & window.flog1 & window.flog2)
		{
			return true;
		}
		else
		{
			return false;
		}
	})
</script>
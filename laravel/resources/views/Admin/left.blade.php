<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/public.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/public.js') }}"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="{{url('admin/main')}}" target="main"><div class="line">
					<img src="{{ URL::asset('/back/assets/img/coin01.png') }}" />&nbsp;&nbsp;首页
				</div></a>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin03.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin04.png') }}" /> 用户管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a class="cks" href="{{url('admin/user/add')}}"
						target="main">添加用户</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a class="cks" href="{{url('admin/user/show')}}"
						target="main">用户展示</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin07.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin08.png') }}" /> 图书管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{{ url('/admin/book/index')}}" target="main"
						class="cks">添加图书</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{{ url('/admin/book/show')}}" target="main"
						class="cks">图书总汇</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin07.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin08.png') }}" /> 会员管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{{ url('/admin/vip/show')}}" target="main"
						class="cks">会员展示</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin11.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin12.png') }}" /> 积分管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{:url('content/addcon')}" target="main"
						class="cks">积分总数</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin14.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin13.png') }}" /> 借阅管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a class="cks">图书审核</a><img class="icon5" src="/assets/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin17.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin18.png') }}" /> 押金管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{:url('goods/show')}" target="main" class="cks">用户押金列表</a><img class="icon5"
						src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coin15.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coin16.png') }}" />活动管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{{ url('/admin/activity/index')}}" target="main"
						class="cks">添加活动</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{{ url('/admin/activity/show')}}" target="main"
						class="cks">活动获奖人员</a><img class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/assets/img/coinL1.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/assets/img/coinL2.png') }}" /> 系统管理<img class="icon3"
						src="{{ URL::asset('/back/assets/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/assets/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{:url('user/uppwd')}"
						target="main" class="cks">修改密码</a><img class="icon5"
						src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/assets/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/assets/img/coin222.png') }}" /><a href="{:url('user/ex')}"
						target="_Top" class="cks">退出</a><img
						class="icon5" src="{{ URL::asset('/back/assets/img/coin21.png') }}" />
				</dd>
			</dl>

		</div>

	</div>
</body>
</html>

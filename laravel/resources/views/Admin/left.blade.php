<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/static/css/public.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/static/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/back/static/js/public.js') }}"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="main.html" target="main"><div class="line">
					<img src="{{ URL::asset('/back/static/img/coin01.png') }}" />&nbsp;&nbsp;首页
				</div></a>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/static/img/coin03.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/static/img/coin04.png') }}" /> 基本设置<img class="icon3"
						src="{{ URL::asset('/back/static/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/static/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a class="cks" href="{:url('index/message')}"
						target="main">留言管理</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a class="cks" href="{:url('index/company')}"
						target="main">公司管理</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
			</dl>
			<!--
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/img/coin01.png" /><img class="icon2"
						src="/static/img/coin02.png" /> 公共管理<img class="icon3"
						src="/static/img/coin19.png" /><img class="icon4"
						src="/static/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks" href="p3.html"
						target="main">友情链接</a><img class="icon5" src="/static/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks" href="p2.html"
						target="main">留言管理</a><img class="icon5" src="/static/img/coin21.png" />
				</dd> -->
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/static/img/coin07.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/static/img/coin08.png') }}" /> 成员管理<img class="icon3"
						src="{{ URL::asset('/back/static/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/static/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('user/add')}" target="main"
						class="cks">添加成员</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('user/show')}" target="main"
						class="cks">成员列表</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<!-- <dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a href="{:url('user/show')}" target="main"
						class="cks">用户列表</a><img class="icon5" src="/static/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/img/coin10.png" /><img class="icon2"
						src="/static/img/coin09.png" /> 其他管理<img class="icon3"
						src="/static/img/coin19.png" /><img class="icon4"
						src="/static/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks">其他管理</a><img class="icon5"
						src="/static/img/coin21.png" />
				</dd> -->
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/static/img/coin07.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/static/img/coin08.png') }}" /> 友情链接<img class="icon3"
						src="{{ URL::asset('/back/static/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/static/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('index/friendadd')}" target="main"
						class="cks">添加链接</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('index/friend')}" target="main"
						class="cks">链接列表</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<!-- <dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a href="{:url('user/show')}" target="main"
						class="cks">用户列表</a><img class="icon5" src="/static/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/img/coin10.png" /><img class="icon2"
						src="/static/img/coin09.png" /> 其他管理<img class="icon3"
						src="/static/img/coin19.png" /><img class="icon4"
						src="/static/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks">其他管理</a><img class="icon5"
						src="/static/img/coin21.png" />
				</dd> -->
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/static/img/coin11.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/static/img/coin12.png') }}" /> 文章管理<img class="icon3"
						src="{{ URL::asset('/back/static/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/static/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('content/addcon')}" target="main"
						class="cks">添加文章</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('content/show')}" target="main"
						class="cks">文章列表</a><img class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<!-- <dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks">新闻管理</a><img class="icon5" src="/static/img/coin21.png" />
				</dd> -->
			</dl>
			<!-- <dl class="system_log">
				<dt>
					<img class="icon1" src="/static/img/coin14.png" /><img class="icon2"
						src="/static/img/coin13.png" /> 心愿管理<img class="icon3"
						src="/static/img/coin19.png" /><img class="icon4"
						src="/static/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks">心愿管理</a><img class="icon5" src="/static/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/img/coin15.png" /><img class="icon2"
						src="/static/img/coin16.png" /> 预警管理<img class="icon3"
						src="/static/img/coin19.png" /><img class="icon4"
						src="/static/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/img/coin111.png" /><img class="coin22"
						src="/static/img/coin222.png" /><a class="cks">预警管理</a><img class="icon5"
						src="/static/img/coin21.png" />
				</dd>
			</dl> -->
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/static/img/coin17.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/static/img/coin18.png') }}" /> 产品管理<img class="icon3"
						src="{{ URL::asset('/back/static/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/static/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('goods/gadd')}" target="main" class="cks">添加产品</a><img class="icon5"
						src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('goods/show')}" target="main" class="cks">产品列表</a><img class="icon5"
						src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="{{ URL::asset('/back/static/img/coinL1.png') }}" /><img class="icon2"
						src="{{ URL::asset('/back/static/img/coinL2.png') }}" /> 系统管理<img class="icon3"
						src="{{ URL::asset('/back/static/img/coin19.png') }}" /><img class="icon4"
						src="{{ URL::asset('/back/static/img/coin20.png') }}" />
				</dt>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('user/uppwd')}"
						target="main" class="cks">修改密码</a><img class="icon5"
						src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
				<dd>
					<img class="coin11" src="{{ URL::asset('/back/static/img/coin111.png') }}" /><img class="coin22"
						src="{{ URL::asset('/back/static/img/coin222.png') }}" /><a href="{:url('user/ex')}"
						target="_Top" class="cks">退出</a><img
						class="icon5" src="{{ URL::asset('/back/static/img/coin21.png') }}" />
				</dd>
			</dl>

		</div>

	</div>
</body>
</html>

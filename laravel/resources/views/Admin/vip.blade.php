<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link href="{{ URL::asset('/back/assets/css/haiersoft.css') }}" rel="stylesheet" type="text/css" media="screen,print" />
<link href="{{ URL::asset('/back/assets/css/print.css') }}" rel="stylesheet" type="text/css"  media="print" />
<script src="{{ URL::asset('/back/assets/js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ URL::asset('/back/assets/js/side.js') }}" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>


<!-- MainForm -->
<div id="MainForm">
<div class="form_boxA">
<h2>vip人员</h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th>会员id</th>
<th>用户会员</th>
<th>会员金额</th>
<th>会员等级</th>
<th>操作</th>
</tr>
@foreach($res as $v)
<tr>
<td>{{$v['m_id']}}</td>
<td>
	{{$v['u_name']}}
</td>
<td>{{$v['m_monry']}}</td>
<td>
	@if($v['m_grade'] == 0)
		三级会员
	@elseif($v['m_grade'] == 1)
		二级会员
	@else
		三级会员
	@endif
</td>
<td><a href="{{ url('/admin/vip/del',['m_id'=>$v['m_id']])}}">删除</a></td>
</tr>
@endforeach
</table>
</div>
</div>
<!-- /MainForm -->

</body>
</html>
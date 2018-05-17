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

<table cellpadding="0" cellspacing="0">
<tr>
<th>图书名称</th>
<th>借阅用户</th>
<th>借书时间</th>
<th>还书时间</th>
<th>审核</th>
</tr>
@foreach($data as $v  )
<tr>
<td>{{$v['b_name']}}</td>
<td>
	{{$v['u_name']}}
</td>
<td>{{date('Y-m-d H:i:s',$v['b_time'])}}</td>
<td>{{date('Y-m-d H:i:s',$v['re_time'])}}</td>
<td>
@if($v['b_state'] == 0)
	<button class="go" u_id="{{$v['u_id']}}" b_id="{{$v['b_id']}}">通过审核</button>
	<button class="de" u_id="{{$v['u_id']}}" b_id="{{$v['b_id']}}">拒绝审核</button>
@elseif($v['b_state'] == 1)
	<button>审核已通过</button>
@elseif($v['b_state'] == 2)
	<button>审核未通过</button>
@elseif($v['b_state'] == 3)
	<button >已还书</button>
@endif

</td>
</tr>
@endforeach
</table>
</div>
</div>
<!-- /MainForm -->

</body>
</html>
<script type="text/javascript">
$(document).on('click','.go',function(){
	var state = '1';
	var u_id = $(this).attr('u_id');
	var b_id = $(this).attr('b_id');
	var _this = $(this);
	$.ajax({
		// ajax post 方式请求 设置头信息
			headers: {
			//   csrf  token 生成
	        'X-CSRF-TOKEN': "{{ csrf_token() }}"
	   		},
		type:'post',
		url:"{{url('admin/borrow/up')}}",
		data:{state:state,u_id:u_id,b_id:b_id},
		dataType:'json',
		success:function(msg){
			if(msg.state)
			{
				alert(msg.msg)
				_this.parent().html("<button>审核已通过</button>");
			}
			else
			{
				alert(msg.msg)
			}
		}
	})
})
$(document).on('click','.de',function(){
	var u_id = $(this).attr('u_id');
	var b_id = $(this).attr('b_id');
	$(this).parent().html("原因：<input type='text' id='reason'><br /> <button class='rig' u_id='"+u_id+"' b_id='"+b_id+"'>确认</button><button class='qu' u_id='"+u_id+"' b_id='"+b_id+"'>取消</button>");
})
$(document).on('click','.qu',function(){
	var u_id = $(this).attr('u_id');
	var b_id = $(this).attr('b_id');
	$(this).parent().html('<button class="go" u_id="'+u_id+'" b_id="'+b_id+'">通过审核</button><button class="de" u_id="'+u_id+'" b_id="'+b_id+'">拒绝审核</button>');
})
$(document).on('click','.rig',function(){
	var state = '2';
	var u_id = $(this).attr('u_id');
	var b_id = $(this).attr('b_id');
	var reason = $('#reason').val();
	var _this = $(this);
	if(reason == '')
	{
		alert('原因不能为空')
		return false;
	}
	$.ajax({
		// ajax post 方式请求 设置头信息
			headers: {
			//   csrf  token 生成
	        'X-CSRF-TOKEN': "{{ csrf_token() }}"
	   		},
		type:'post',
		url:"{{url('admin/borrow/up')}}",
		data:{state:state,u_id:u_id,b_id:b_id,reason:reason},
		dataType:'json',
		success:function(msg){
			if(msg.state)
			{
				alert(msg.msg)
				_this.parent().html("<button>已拒绝</button>");
			}
			else
			{
				alert(msg.msg)
			}
		}
	})
})
</script>
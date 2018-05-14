<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<style>
	a{
		text-decoration: none;
	}
</style>
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
<!-- Popup -->
<div id="Popup">

<!-- SubPopup -->
<div id="SubPopup">
<div class="form_boxD">
<table cellpadding="0" cellspacing="0">
<tr class="ttl">
<th width="10">&nbsp;</th>
<th><strong>项目类别</strong></th>
<th><strong>描述</strong></th>
</tr>
<tr>
<th><input name="" type="radio" value=""></th>
<th>ID</th>
<th>图书名称</th>
<th>图书作者</th>
<th>图书封面</th>
<th>图书介绍</th>
<th>是否最热</th>
<th>是否最新</th>
<th>添加人</th>
<th>上、下架</th>
<th>图书数量</th>
<th>可借数量</th>
<th>操作</th>
</tr>
@foreach($res as $v)
<tr>
<th><input name="" type="radio" value=""></th>
<th>{{ $v->b_id}}</th>
<th>{{ $v->b_name}}</th>
<th>{{ $v->b_auther}}</th>
<th><img src="{{ URL::asset($v->b_img)}}" width="100px;"></th>
<th>{{ $v->b_desc}}</th>
<th>
	@if($v->is_hot ==1)
		是
	@else
		否
	@endif
</th>
<th>
	@if($v->is_new ==1)
		是
	@else
		否
	@endif
</th>
<th>{{ $v->a_id}}</th>
<th>
	@if($v->b_shelf ==1)
		<a href="javascript:;" class="up_shelf" value="{{ $v->b_shelf}}" attr="{{ $v->b_id}}">上架</a>
	@else
		<a href="javascript:;" class="up_shelf" value="{{ $v->b_shelf}}" attr="{{ $v->b_id}}">下架</a>
	@endif
</th>
<th>{{ $v->b_num}}</th>
<th>{{ $v->b_borrow}}</th>
<th><a href="{{ url('/admin/book/book_del',['b_id'=>$v->b_id])}}">删除</a></th>
</tr>
@endforeach
</table>

{!! $res->links() !!}
</div>
</div>
<!-- SubPopup -->

<div id="BtmBtn">
<div class="btn_box floatR mag_l20"><input name="" type="button" value="下一步" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></div>
<div class="btn_boxB floatR"><input name="" type="button" value="取消" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></div>
</div>
</div>
<!-- /Popup -->
</body>
</html>
<script>
	$(document).on('click','.up_shelf',function(){
		var up_shelf = $(this).attr('value');
		var id = $(this).attr('attr');
		var _this = $(this);
		var val = '';
		if(up_shelf == 1){
			var text = '下架';
			up_shelf = '0';
		}else{
			var text = '上架';
			up_shelf = '1';
		}
		$.ajax({
			headers: {
			//   csrf  token 生成
	        'X-CSRF-TOKEN': "{{ csrf_token() }}"
	   		},
			type:'post',
			url:"{{ url('admin/book/book_up')}}",
			data:{up_shelf:up_shelf,id:id},
			dataType:'json',
			success:function(msg){
				if(msg.state)
				{
					alert(msg.msg)
					_this.text(text);
					_this.attr('value',up_shelf);
				}
				else
				{
					alert(msg.msg)
				}
			}
		});
	})
</script>
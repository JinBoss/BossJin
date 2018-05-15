<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户押金</title>
<link href="{{ URL::asset('/back/assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/css.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.min.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.bstablecrosshair.js') }}"></script>
</head>
<body>
<center>
<div>
<h2 id="x">用户押金</h2>
</div>

<table style="border:2px solid #444;border-collapse:collapse; text-align: center;width: 900px;" id="mytable">
	<tr>
		<td>用户名称</td>
		<td>押金钱数</td>
	</tr>
	@foreach($data as $v)
	<tr>
		<td>{{ $v->u_name }}</td>
		<td>{{ $v->c_num }}</td>
	</tr>
	@endforeach
</table>
<br />
<hr />
</center>
<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="{{ URL::asset('/back/assets/img/shanchu.png') }}" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="javascript:;" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->

<script type="text/javascript">

jQuery.bstablecrosshair('mytable',{color:'#444',background:'#aaa','foreground':'#fff'});
// 广告弹出框
$(".delban").click(function(){
	$(this).attr('class','del')
  	$(".banDel").show();
});
$(".close").click(function(){
  	$(".banDel").hide();
});
$(".no").click(function(){
  	$(".banDel").hide();
});
$(".yes").click(function(){
  	var id = $('.del').attr('id');
  	$(".banDel").hide();
  	$.ajax({
  		type:"post",
			url:"{:url('Index/de')}",
			data:{friend_id:id},
			dataType:'json',
			success:function(msg){
  					$('.del').parent().parent().remove();
  					$('.del').attr('class','delban');
  					alert(msg.ms);
			}
  	})
});
</script>



</body>
</html>
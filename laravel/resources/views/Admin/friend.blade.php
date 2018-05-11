<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接</title>
<link href="{{ URL::asset('/back/assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/assets/css/css.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.min.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ URL::asset('/back/assets/js/jquery.bstablecrosshair.js') }}"></script>
</head>
<body>
<center>
<div>
<h2 id="x">友情链接</h2>
</div>

<table style="border:2px solid #444;border-collapse:collapse; text-align: center;width: 900px;" id="mytable">
	<tr>
		<td>友情链接ID</td>
		<td>友情链接名称</td>
		<td>友情链接地址</td>
		<td>友情链接添加时间</td>
		<td>相关操作</td>
	</tr>
	<?php foreach($data as $key=>$val){ ?>
	<tr>
		<td><?php echo $val['friend_id']?></td>
		<?php if($val['friend_name']){?>
		<td><?php echo $val['friend_name']?></td>
		<?php } else {?>
		<td><img src="<?php echo $val['friend_img']?>" alt="" width="35" height="40"></td>
		<?php }?>
		
		<td><?php echo $val['friend_url']?></td>
		<td><?php echo date("Y-m-d H:i:s",$val['friend_time'])?></td>
		<td><a href="{:url('user/update')}"><img class="operation"
										src="{{ URL::asset('/back/assets/img/update.png') }}"></a> <img class="operation delban"
									src="{{ URL::asset('/back/assets/img/delete.png') }}" id='{$val.friend_id}'></td>
	</tr>
	<?php } ?>
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
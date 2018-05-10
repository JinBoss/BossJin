<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员管理</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/back/static/css/css.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/back/static/js/jquery.min.js') }}"></script>
<!-- <script type="text/javascript" src="/static/js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="{{ URL::asset('/back/static/img/coin02.png') }}" /><span><a href="{:url('index/index')}">首页</a>&nbsp;-&nbsp;-</span>&nbsp;管理员管理
			</div>
		</div>

		<div class="page">
			<!-- user页面样式 -->
			<div class="connoisseur">
				<div class="conform">
					<form>
						<div class="cfD">
							<input class="userinput" type="text" placeholder="输入用户名" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
							<input class="userinput vpr" type="text" placeholder="输入用户密码" />
							<button class="userbtn">添加</button>
						</div>
					</form>
				</div>
				<!-- user 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="400px" class="tdColor">用户名</td>
							<td width="435px" class="tdColor">管理等级</td>
							<td width="630px" class="tdColor">添加时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>

						{volist name="data" id="v" empty="暂时没有数据" }
							<tr height="40px">
								<td>{$v.user_id}</td>
								<td class="uname" id="{$v.user_id}"><span class="sp">{$v.user_name}</span></td>
								<td>{eq name="v['type']" value="1"}普通管理{/eq}{eq name="v['type']" value="2"}超级管理{/eq}</td>			
								<td>{$v.addtime|date="Y-m-d H:i:s",###}</td>
								<td><a href="{:url('user/update')}"><img class="operation"
										src="{{ URL::asset('/back/static/img/update.png') }}"></a> <img class="operation delban"
									src="{{ URL::asset('/back/static/img/delete.png') }}" id='{$v.user_id}'></td>
							</tr>
						{/volist}


						
					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- user 表格 显示 end-->
			</div>
			<!-- user页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="{{ URL::asset('/back/static/img/shanchu.png') }}" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="javascript:;" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
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
			url:"{:url('user/del')}",
			data:{user_id:id},
			success:function(msg){
				if(msg.state == 1)
				{
  					$('.del').parent().parent().remove();
  					$('.del').attr('class','delban');
  					alert(msg.msg);
				}
			}
  	})
  	 // $(".banDel").hide();
});
$(document).on('click','.sp',function(){
	var name = $(this).text();
	var	id = $(this).parent().attr('id');
	var _this=$(this).parent();
	$(this).remove();
	_this.html("<input type='text' id='up'>");
	$("#up").focus();
	$("#up").val(name);
	$('#up').blur(function(){
		var una = $(this).val();
		if(una == name)
		{
			_this.empty();
			_this.html("<span class='sp'>"+name+"</span>");
			alert('内容没有修改');
			return false
		}
		$.ajax({
			type:'post',
			url:"{:url('user/update')}",
			data:{id:id,name:una},
			dataType:'json',
			success:function(msg){
				if(msg.state == '1')
				{
					_this.empty();
					_this.html("<span class='sp'>"+una+"</span>");
					alert(msg.msg)
				}
				else
				{
					_this.empty();
					_this.html("<span class='sp'>"+name+"</span>");
					alert(msg.msg)
				}
			}
		})
	});
});


// $('.userbtn').click();
// 广告弹出框 end
</script>
</html>
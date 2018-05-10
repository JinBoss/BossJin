<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公司管理</title>
<link href="/static/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/static/css/css.css" />
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="/static/js/jquery.js"></script>
<!-- <script language="javascript" type="text/javascript" src="/static/js/jquery.bstablecrosshair.js"></script> -->
<link href="/static/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/css/bootstrap-fileinput.css" rel="stylesheet">
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap-fileinput.js"></script>
</head>
<body>
<center>
<div>
<h2 id="x">公司管理</h2>
</div>
<table style="width: 1000px;">
<form id="uploadForm" enctype='multipart/form-data' method="post"><div class="form-group" id="" enctype='multipart/form-data'>
<?php foreach($data as $key=>$val){ ?>
	<tr style=" height: 50px;">
		<td>公司名称</td>
		<td><input type="text" id="company_name" name="company_name" value="<?php echo $val['company_name']?>"></td>
	</tr>
	<tr>
	<tr>
		<td>公司logo</td>
		<td>
                <div class="h4">图片预览</div>
                <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                    <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                        <img id='picImg' name="company_logo" style="width: 100%;height: auto;max-height: 140px;" src="<?php echo $val['company_logo']?>" alt="" />
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-primary btn-file">
                            <span class="fileinput-new">选择文件</span>
                            <span class="fileinput-exists">换一张</span>
                            <input type="file" name="company_logo" id="file" value="<?php echo $val['company_logo']?>" accept="image/gif,image/jpeg,image/x-png">
                        </span>
                        <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                    </div>
                </div>
        
        </form></td>
	</tr>
	<tr style=" height: 50px;">
		<td>公司注册时间</td>
		<td>
		<?php if($val['company_regtime'] == null){ ?>
			<input type="date" id="company_regtime" name="company_regtime">
		<?php }else{?>
			<input type="text" id="company_regtime" name="company_regtime" value="<?php echo date('Y-m-d',$val['company_regtime'])?>" readonly="readonly">
		<?php }?>
		</td>
	</tr>
	<tr style=" height: 50px;">
		<td>公司邮箱</td>
		<td><input type="email" id="company_email" name="company_email" value="<?php echo $val['company_email']?>"></td>
	</tr>
	<tr style=" height: 50px;">
		<td>公司联系方式</td>
		<td><input type="tel" id="company_tel" name="company_tel" value="<?php echo $val['company_tel']?>"></td>
	</tr>
	<tr style=" height: 50px;">
		<td>公司描述</td>
		<td><textarea name="company_desc" id="company_desc" cols="30" rows="7"><?php echo $val['company_desc']?></textarea></td>
	</tr>
	<tr style=" height: 50px;">
		<td><input type="hidden" id="company_id" value="<?= $val['company_id']?>"></td>
		<td><button type="button" id="uploadSubmit" class="btn btn-info">提交</button></td>
	</tr>
	<?php } ?>
   </div>
</table>

<!-- <table style="border:2px solid #444;border-collapse:collapse; text-align: center;width: 900px;" id="mytable">
	<tr>
		<td>公司ID</td>
		<td>公司名称</td>
		<td>公司图片</td>
		<td>公司logo</td>
		<td>公司注册时间</td>
		<td>公司邮箱</td>
		<td>公司联系方式</td>
		<td>公司描述</td>
		<td>相关操作</td>
	</tr>
	
	<tr>
		<td><?php echo $val['company_id']?></td>
		<td><?php echo $val['company_name']?></td>
		<td><img src="<?php echo $val['company_img']?>" alt="" width="35" height="40"></td>
		<td><img src="<?php echo $val['company_logo']?>" alt="" width="35" height="40"></td>
		<td><?php echo date("Y-m-d H:i:s",$val['company_regtime'])?></td>
		<td><?php echo $val['company_email']?></td>
		<td><?php echo $val['company_tel']?></td>
		<td><?php echo $val['company_desc']?></td>
		<td><a href="{:url('user/update')}"><img class="operation"
										src="/static/img/update.png"></a> <img class="operation delban"
									src="/static/img/delete.png" id='{$val.company_id}'></td>
	</tr>
	
</table>
<br />
<hr /> -->
</center>
<!-- 删除弹出框 -->
	<!-- <div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="/static/img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="javascript:;" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div> -->
	<!-- 删除弹出框  end-->

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
			url:"{:url('Index/delete')}",
			data:{company_id:id},
			dataType:'json',
			success:function(msg){
  					$('.del').parent().parent().remove();
  					$('.del').attr('class','delban');
  					alert(msg.ms);
			}
  	})
});
</script>
<script type="text/javascript">
    $(function () {
        //比较简洁，细节可自行完善
        $('#uploadSubmit').click(function () {
	     	var imageForm = new FormData($('#uploadForm'));
	     	imageForm.append("upfile", $("#file").get(0).files[0]);
	     	imageForm.append("company_name", $("#company_name").val());
	     	imageForm.append("company_regtime", $("#company_regtime").val());
	     	imageForm.append("company_email", $("#company_email").val());
	     	imageForm.append("company_tel", $("#company_tel").val());
	     	imageForm.append("company_desc", $("#company_desc").val());
	     	imageForm.append("company_id", $("#company_id").val());
	     	
	     	$.ajax({
		        url: "{:url('index/upcompany')}",
		        type: 'POST',
		        cache: false,
		        data: imageForm,
		        processData: false,
		        contentType: false,
		        dataType:"json",
		        beforeSend: function(){
		            uploading = true;
		        },
		        success : function(data) {
		        	alert(data.msg)
		        	if(data.state)
		        	{
		        		alert(data.msg)
		        		history.go(0)
		        	}
		            uploading = false;
		        }
		    });
	});
});
    
    

</script>


</body>
</html>
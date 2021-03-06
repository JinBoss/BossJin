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
<!-- Popup -->
<div id="Popup">

<!-- SubPopup -->
<div id="SubPopup">
<script type="text/javascript">
$(function(){
$(".select").each(function(){
var s=$(this);
var z=parseInt(s.css("z-index"));
var dt=$(this).children("dt");
var dd=$(this).children("dd");
var _show=function(){dd.slideDown(200);dt.addClass("cur");s.css("z-index",z+1);};
var _hide=function(){dd.slideUp(200);dt.removeClass("cur");s.css("z-index",z);};
dt.click(function(){dd.is(":hidden")?_show():_hide();});
dd.find("a").click(function(){dt.html($(this).html());_hide();});
$("body").click(function(i){ !$(i.target).parents(".select").first().is(s) ? _hide():"";});})})
</script>
<form action="{{ url('/admin/book/book_add')}}" method="post" enctype="multipart/form-data">
<div class="form_boxC">
<p>"<span class="f_cB">*</span>"号为必填项目</p>
<table cellpadding="0" cellspacing="0">
<tr>
<th width="100">图书名称 <span class="f_cB">*</span></th>
<td><div class="txtbox floatL" style="width:150px;"><input name="b_name" type="text" size="12" ></div></td>
</tr>
<tr>
<th width="100">图书作者 <span class="f_cB">*</span></th>
<td><div class="txtbox floatL" style="width:150px;"><input name="b_auther" type="text" size="12" ></div></td>
</tr>
<tr>
<th width="100">图书封面 <span class="f_cB">*</span></th>
<td><div class="txtbox floatL" style="width:300px;"><input name="b_img" type="file" size="12" ></div></td>
</tr>
<tr>
<th>图书介绍</th>
<td><div class="txtbox"><textarea name="b_desc" cols="32" rows="5"></textarea></div><p class="f_cB pdg_t5"></p></td>
</tr>
<tr>
<th>添加时间 <span class="f_cB">*</span></th>
<td><div class="txtbox floatL" style="width:200px;"><input name="adtime" type="date" size="15"></div></td>
</tr>
<tr>
<th>添加人 <span class="f_cB">*</span></th>
<td><div class="txtbox floatL" style="width:150px;"><input name="a_id" type="text" size="12"></div></td>
</tr>
<tr>
<th>添加数量 <span class="f_cB">*</span></th>
<td><div class="txtbox floatL" style="width:150px;"><input name="b_num" type="text" size="12"></div></td>
</tr>
<tr>
<th>是否上架</th>
<td>
	<input name="b_shelf" type="radio" value="1">上架
	<input name="b_shelf" type="radio" value="0">下架
</td>
</tr>
</table>
</div>
</div>
<!-- SubPopup -->
{{csrf_field()}} 
<div id="BtmBtn">
<div class="btn_boxB floatR mag_l20"><input name="" type="button" value="取消" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></div>
<div class="btn_box floatR"><input name="" type="submit" value="提交" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></div>
</div>
</div>
</form>
<!-- /Popup -->
</body>
</html>
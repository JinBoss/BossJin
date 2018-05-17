<div class="form_boxD">
<div class="cfD" style="margin-left:300px;" >
<input class="userinput"  type="text" placeholder="输入图书名称" p="{{$page}}" value="{{$seach}}" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="userbtn" id="seach" >搜索</button>
</div>
<table cellpadding="0" cellspacing="0">
<tr class="ttl">
<th width="10">&nbsp;</th>

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
@foreach($res['data'] as $v)
<tr>
<th><input name="" type="radio" value=""></th>
<th>{{ $v->b_id}}</th>
<th>{{ $v->b_name}}</th>
<th>{{ $v->b_auther}}</th>
<th><img src="{{ URL::asset($v->b_img)}}" width="100px;"></th>
<th style="width: 500px;">{{ $v->b_desc}}</th>
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
<tr>
	<td colspan="13">
			<ul id="PageNum">
				<li><a href="javascript:;" class="pa" p="1">首页</a></li>	
				<li><a href="javascript:;" class="pa" p="{{$res['up']}}">上一页</a></li>
				<li><a href="javascript:;" class="pa" p="{{$res['next']}}">下一页</a></li>
				<li><a href="javascript:;" class="pa" p="{{$res['last']}}">尾页</a></li>
			</ul>
	</td>
</tr>

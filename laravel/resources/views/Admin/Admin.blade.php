<?php 
$url = url('admin/captcha/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台</title>
</head>
<body>
<h2>{{ $data }}</h2>
	<img src="{{ url('admin/captcha/1')}}" onclick="this.src='{{ $url }}/'+Math.random();" alt="">
	<form action="home/add" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
		<input type="file"name ="img">

		<input type="text" name="nn" value="123">
		<input type="submit" >
	</form>
</body>
</html>
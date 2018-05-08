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
	<img src="{{ url('admin/captcha/1')}}" onclick="this.src='{{ $url }}/'+Math.random();" alt="">
</body>
</html>
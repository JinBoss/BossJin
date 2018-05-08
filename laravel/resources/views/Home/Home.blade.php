<?php 
$url = url('home/captcha/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台</title>
</head>
<body>
<h2>{{ $data }}</h2>
	<img src="{{ url('home/captcha/1')}}" onclick="this.src='{{ $url }}/'+Math.random();" alt="">
</body>
</html>
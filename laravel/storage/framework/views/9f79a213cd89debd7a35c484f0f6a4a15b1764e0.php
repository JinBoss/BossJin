<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台</title>
</head>
<body>
	<img src="<?php echo e(url('admin/captcha/1')); ?>" onclick="this.src='"+<?php echo e(url('admin/captcha/1')); ?>+"'+Math.random();" alt="">
</body>
</html>
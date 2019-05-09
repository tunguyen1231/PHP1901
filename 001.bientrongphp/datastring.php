<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		// nháy kép bao nháy đơn
		$html = "<div class='container'>Thẻ div</div>";
		// nháy đơn bao nháy kép
		$html = '<div class="container">Thẻ div</div>';
		// sử dụng ký tự escape ngoại lệ/ "in ra"
		$html = "<div class=\"container\">thẻ div</div>";
		//nháy bên ngoài là nháy bao chuỗi . nháy bên trong là nháy để in ra và phải có \ ở phía trước
		$html = '<div class=\'container\'>Thẻ div</div>';
		echo $html;
	?>
</body>
</html>
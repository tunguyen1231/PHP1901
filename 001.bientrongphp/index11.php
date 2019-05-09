<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Các phương thức xử lí chuỗi trong php</h1>
	<?php
		$str = "chao ha noi";
		echo "<br> Hàm strlen(biến) dùng để đếm số kí tự : " . strlen($str);
		echo "<br> Hàm str_word_count(biến) dùng để đếm số từ trong chuỗi : " . str_word_count($str);
		echo "<br> Hàm strrev(biến) dùng để đảo ngược chuỗi : " . strrev($str);
	?>
</body>
</html>
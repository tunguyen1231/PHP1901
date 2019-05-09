<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Comment trong php</h1>
	<pre>
		Comment thì không chạy mà chỉ được dùng để giải thích code cho các lập trình viên 
		Phân biệt sự khác biệt khi echo giá trị 1 biến 
		bằng nháy "" hoặc nháy đơn
		nếu trong nháy kép có $a thì php sẽ in ra giá trị của biến đó
		nếu trong nháy đơn có $a thì php sẽ hiểu đó là 1 chuỗi bình thường
	</pre>
	<?php
		/*
		comment nhiều dòng 
		 */
		// comment 1 dòng
		$a = 5;
		echo 'nháy đơn : giá trị của biến $a bằng :' . $a;
		echo "</br>";
		echo "nháy kép : giá trị của biến $a bằng :" . $a;
	?>
</body>
</html>
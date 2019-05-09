<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Biến trong PHP : lưu trữ thông tin và thay đổi trong quá trình chạy</h1>
	<pre>
		khai bài biến trong PHP như thế nào ?
		$ten_bien
		Biến trong PHP thì không cần từ khóa var giống js
		và phải bắt đầu  bằng $ tiếp theo là tên biến
		không được dùng ký tự đặc biệt như @#...
	    tên biến chỉ chứa các số và chữ cái A đến Z và ký tự _
	    tên biến có phân biệt hoa thường ví dụ $a khác $A
	    trong js nối chuỗi bằng +
	    trong php nối chuỗi bằng .
	</pre>
	<?php
		$a = 5;
		$b = 7;
		$c = $a + $b;
		echo '$c : ' . $c;
	?>
</body>
</html>
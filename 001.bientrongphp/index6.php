<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
		kiểu số trong php
	</pre>
	<?php
		$a =20;
		$b = 10;
		echo "<br> Tổng :" . ($a + $b);
		echo "<br> Hiệu :" . ($a - $b);
		echo "<br> Tích :" . ($a * $b);
		echo "<br> Thương :" . ($a / $b);
		echo "<br> Chia lấy dư :" . ($a % $b);
		echo '<br> var_dump(); được sử dụng để debug xem kiểu dữ liệu và giá trị của biến <br>';
		var_dump($a);
		echo "<br>";
		var_dump($b);
	?>
</body>
</html>
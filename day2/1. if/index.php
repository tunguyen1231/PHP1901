<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>else if trong js viết cách ra còn php thì elseif nên viết liền</h1>
	<?php
		$age = 19;

		if ($age > 18) {
			echo "<br> Bạn đã đủ tuổi trưởng thành";
		} else {
			echo "<br> Đang ở tuổi vị thành niên";
		}
		
		$point = 6.8;

		if ($point > 9) {
			echo "<br> Xuất sắc";
		} elseif ($point >= 8) {
			echo "<br> Giỏi";
		} elseif ($point >= 7) {
			echo "<br> khá";
		} elseif ($point >= 6.5) {
	        echo "<br> tb khá";
	    } elseif($point >= 5) {
	        echo "<br> trung bình";
	    } else {
	        echo "<br> yếu kém";
	    }
	?>
</body>
</html>
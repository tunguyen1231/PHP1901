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
		if (isset($_GET) && !empty($_GET)) {
			echo "<pre>";
			print_r($_GET);
			echo "</pre>";
		}

	?>
	

	<h1>Form HTML</h1>
	<pre>
	    $_GET gửi dữ liệu đi qua URL
	    ví dụ mặc định http://localhost/1901ephp1/day3/1.senddata/get.php
	    khi form có method="GET" dữ liệu đi :
	    http://localhost/1901ephp1/day3/1.senddata/get.php?username=aaa&password=111&submit=%C4%90%C4%83ng+k%C3%BD
	    Lúc này PHP sẽ đưa các tên của ô input trong form và giá trị của chúng
	    lên trên query string của URL
	</pre>


	<form action="" method="get" name="register">
		<div>
			<label for="">Username</label>
			<input type="text" name="username" value="" placeholder="nhập username">
		</div>
		<div>
			<label for="">Password</label>
			<input type="password" name="password" value="" placeholder="nhập pasword">
		</div>
		<div>
			<input type="submit" name="submit" value="Đăng kí">
		</div>
	</form>
</body>
</html>
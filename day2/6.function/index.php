<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>FUNCTION JS</h1>
	<div>
		<p> A PHP function is a block of code designed to perform a particular task</p>

		<p> Hàm trong PHP là khối các câu lệnh được tạo ra để thực hiện 1 nhiệm vụ cụ thể</p>

		<p>A PHP function is excuted when "something" invokes it(calls it).</p>

		<p>Hàm trong PHP được chạy khi mà nó được gọi</p>

		<p>cú pháp hàm: function tên_hàm(arg1,arg2){ // code excute}</p>

		<p>arg1,arg2 nó là tham số được truyền vào trong hàm</p>

		<p>gọi hàm: tên_hàm(x,y)</p>
		Lệnh return trong hàm sẽ trả về giá trị
		và các lệnh sau return thì chắc chắn không chạy
	</div>
 	
	<?php
		function chuvihinhtron($duongkinhhinhtron) {
		    $chuvi = $duongkinhhinhtron*3.14;
		    return $chuvi;
		    echo "test ";
		}
		$x = 5;
		$ketqua = chuvihinhtron($x);
		echo '<br>chu vi hình tròn : ' . $ketqua;
		function tinhdiemtrungbinh($diem_toan, $diem_ly, $diem_hoa) {
		    $diem_tb = ($diem_toan + $diem_ly + $diem_hoa)/3;
		    return $diem_tb;
		}
		$a = 7;
		$b = 3;
		$c = 6;
		// gọi hàm và truyền tham số
		$ketquadiem = tinhdiemtrungbinh($a,$b,$c);
		    echo'diem tb : ' . $ketquadiem;
	?>




</body>
</html>
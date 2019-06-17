<?php 
/**
 * khai báo hằng số để kêt nối đến CSDL
 */
define("DB_SERVER", "localhost");
define("DB_SERVER_USERNAME", "root");
define("DB_SERVER_PASSWORD", "");
define("DB_SERVER_NAME", "demoapplogin");
/**
 * mysqli_connect() kết nối CSDL
 */
$connection = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_SERVER_NAME);
/**
 * kiểm tra kết nối đến CSDL có thành công không
 * nếu không thành công thì ngắt chương trình bằng câu lệnh die()
 */
if ($connection == false) {
	die("ERROR không thể kết nối đến CSDL" . mysqli_connect_error());
}

 ?>
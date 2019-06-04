<?php

define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "crud");
$connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if(!$connection){
    die("Kết nối CSDL lỗi : " . mysqli_connect_error());
}
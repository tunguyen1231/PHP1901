<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/30/2019
 * Time: 9:05 PM
 */
include_once "config.php";
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['inventory']) && isset($_POST['supplier']) && isset($_POST['created'])){
    if($_POST['name'] && ($_POST['price'] > 0) && ($_POST['inventory'] > 0) && $_POST['supplier'] && $_POST['created']){
        $ten = $_POST['name'];
        $gia_tien = $_POST['price'];
        $ton_kho = $_POST['inventory'];
        $nha_cung_cap = $_POST['supplier'];
        $ngay_tao = $_POST['created'];
        $sqlUpdate = "UPDATE products SET name ='$ten', price =$gia_tien , inventory =$ton_kho, supplier ='$nha_cung_cap', created =$ngay_tao WHERE id = " . (int) $_POST['id'];
        if(mysqli_query($connection, $sqlUpdate)){
            echo "Update thành công";
            header('Location: index.php');
            exit();
        } else {
            echo "Update thất bại";
        }
    }
}
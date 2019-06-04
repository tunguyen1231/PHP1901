<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
include_once "config.php";
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['inventory']) && isset($_POST['supplier']) && isset($_POST['created'])){
    if($_POST['name'] && ($_POST['price'] > 0) && ($_POST['inventory'] > 0) && $_POST['supplier'] && $_POST['created']){
        $ten = $_POST['name'];
        $gia_tien = $_POST['price'];
        $ton_kho = $_POST['inventory'];
        $nha_cung_cap = $_POST['supplier'];
        $ngay_tao = $_POST['created'];
        $sqlInsert = "INSERT INTO products (name, price, inventory, supplier, created) VALUES ('$name', '$price', '$inventory', '$supplier', '$created')";
        if(mysqli_query($connection, $sqlInsert)){
            echo "Insert thành công";
            header('Location: index.php');
            exit();
        } else {
            echo "Insert thất bại";
        }
    }
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo sản phẩm mới</h1>
            <div>
                <form name="created" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name">

                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="text" class="form-control" name="price">

                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="inventory">

                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="supplier">

                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="date" class="form-control" name="created">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
    
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
$ten = '';
$gia_tien = '';
$ton_kho = '';
$nha_cung_cap = '';
$ngay_tao = '';
if (isset($_GET['id'])){
    $id_product = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM products WHERE id = " . $id_product;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);
    $ten = isset($row['name']) ? $row['name'] : '';
    $gia_tien = isset($row['price']) ? $row['price'] : '';
    $ton_kho = isset($row['inventory']) ? $row['inventory'] : '';
    $nha_cung_cap = isset($row['supplier']) ? $row['supplier'] : '';
    $ngay_tao = isset($row['created']) ? $row['created'] : '';
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa sản phẩm</h1>
            <div>
                <form name="update" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo (int) $_GET['id'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $ten?>">

                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $gia_tien?>">

                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="inventory" value="<?php echo $ton_kho?>">

                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="supplier" value="<?php echo $nha_cung_cap?>">

                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="date" class="form-control" name="created" value="<?php echo $ngay_tao?>">

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
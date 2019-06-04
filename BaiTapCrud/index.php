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
$sql = "SELECT * FROM products";
$result = mysqli_query($connection, $sql);
?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div style="margin: 30px 0">
                <a href="created.php" class="btn btn-success">Thêm mới sản phẩm</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Tồn kho</th>
                    <th scope="col">Nhà cung cấp</th>
                    <th scope="col">Ngày tạo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?></th>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['inventory'] ?></td>
                            <td><?= $row['supplier'] ?></td>
                            <td><?= $row['created'] ?></td>
                            <td>
                                <div style="width: 50px">
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">EDIT</a>
                                </div>

                                <div style="width: 50px">
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else{
                    echo "<br> Không có bản ghi nào trong CSDL";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
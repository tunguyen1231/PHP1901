<?php
session_start();
require_once('database.php');
// khởi tạo đối tượng từ class
$database = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<?php if(isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){ ?>
<div class="container">
    <h2>Giỏ hàng</h2>
    <p>Chi tiết giỏ hàng của bạn</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa khỏi giỏ hàng</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $total = 0;
        foreach ($_SESSION['cart_item'] as $key_car => $val_cart_item) : ?>
        <tr>
            <td><?= $val_cart_item['id'] ?></td>
            <td><?= $val_cart_item['product_name'] ?></td>
            <td><img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x30]" style="height: 30px;width:auto;display: block" src="image/<?= $val_cart_item['product_image'] ?>" data-holder-rendered="true"></td>
            <td><?= $val_cart_item['price'] ?></td>
            <td><?= $val_cart_item['quantity'] ?></td>
            <td><?php
               $total_item = ($val_cart_item['price'] * $val_cart_item['quantity']);
                echo  number_format("$total_item",0,",",".");
                ?> VNĐ</td>
            <td>
                <form name="remove<?= $val_cart_item['id']  ?>" action="process.php" method="post">
                    <input type="hidden" name="product_id" value="<?= $val_cart_item['id'] ?>">
                    <input type="hidden" name="action" value="remove">
                    <input type="submit" name="submit" class="btn btn-sm btn-outline-secondary" value="Xóa" onclick="return confirm('Bạn có chắn muốn xóa sản phẩm khỏi giỏ hàng')">
                </form>

            </td>
        </tr>
        <?php
            $total += $total_item;
        endforeach;?>
        </tbody>
    </table>
    <div>Tổng hóa đơn thanh toán: <strong> <?= number_format("$total",0,",",".");  ?> VNĐ</strong></div>
</div>
<?php } else{?>
    <div class="container">
        <h2>Giỏ hàng</h2>
        <p>Giỏ hàng của bạn đang rỗng xin mời xem và mua sản phẩm</p>

    </div>
<?php }?>

<div class="container" style="margin-top: 50px"> 
    <div class="row">
        <?php
        $sql = "SELECT * FROM products";
        $products = $database->runQuery($sql);
        ?>
        <?php if (!empty($products)) : ?>
            <?php foreach($products as $product) :
                ?>
                <div class="col-sm-6">
                    <form name="product<?= $product['id']?>" action="process.php" method="post">
                        <div class="card mb-4 shadow-sm">
                            <img cclass="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="image/<?= $product['product_image'] ?>" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text" style="font-weight:bold">Product <?= $product['product_name']?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-inline">
                                        <input type="text" class="form-control" name="quantity" value="1">
                                        <input type="hidden" name="action" value="add">
                                        <input type="hidden" name="product_id" value="<?= $product['id']?>">
                                        <lable style="margin-left:10px">
                                            <input type="submit" name="submit" class="btn btn-sm btn-outline-secondary" value="Thêm vào giỏ hàng">
                                        </lable>
                                    </div>
                                    <small style="font-weight: bold"><?= $product['price']?> VNĐ</small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach ?>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
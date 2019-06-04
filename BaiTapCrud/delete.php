<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<?php
/*
 * Nạp kết nối CSDL vào file này
 */
include_once "config.php";
$name = '';
$salary = '';
$address = '';
if (isset($_GET['id'])) {
    $product_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM products WHERE id = " . $product_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);
    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đk la true : câu lệnh chạy khi dk = false
    $name = isset($row['name']) ? $row['name'] : '';
}
if (isset($_POST['action']) && ($_POST['action'] == 'delete')) {
    if (isset($_POST['id']) && ($_POST['id'] > 0)) {
        $id = (int) $_POST['id'];
        $sqlDelete = "DELETE FROM products WHERE id = $id";
        if (mysqli_query($connection, $sqlDelete)) {
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Xoá sản phẩm thất bại";
        }
    }
}

?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>xóa sản phẩm</h1>

				<div>
					<form action="" name="edit" method="POST">
						<input type="hidden" name="id" value="<?= (int) $_GET['id'] ?>">
						<input type="hidden" name="action" value="delete">
						<div class="form-group">
							<label for="">Tên : <?= $name ?></label>
						</div>
						<button type="submit" class="btn btn-danger">Xóa sản phẩm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



</body>
</HTML>
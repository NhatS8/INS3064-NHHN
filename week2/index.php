<?php
include "connection.php";
?>

<html lang="vi">
<head>
    <title>Quản lý Laptop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
        <h2>Nhập thông tin Laptop</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="ten_hang">Hãng:</label>
                <input type="text" class="form-control" id="ten_hang" placeholder="VD: Dell, Asus..." name="ten_hang">
            </div>
            <div class="form-group">
                <label for="ten_may">Tên máy:</label>
                <input type="text" class="form-control" id="ten_may" placeholder="VD: Inspiron 15" name="ten_may">
            </div>
            <div class="form-group">
                <label for="cpu">CPU:</label>
                <input type="text" class="form-control" id="cpu" placeholder="VD: Intel Core i5-1135G7" name="cpu">
            </div>
            <div class="form-group">
                <label for="ram">RAM:</label>
                <input type="text" class="form-control" id="ram" placeholder="VD: 8GB" name="ram">
            </div>
            <div class="form-group">
                <label for="ocung">Ổ cứng:</label>
                <input type="text" class="form-control" id="ocung" placeholder="VD: 512GB SSD" name="ocung">
            </div>
            <div class="form-group">
                <label for="gia">Giá (VNĐ):</label>
                <input type="number" class="form-control" id="gia" placeholder="VD: 15990000" name="gia">
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng:</label>
                <input type="number" class="form-control" id="soluong" placeholder="VD: 10" name="soluong">
            </div>
            <button type="submit" name="insert" class="btn btn-primary">Thêm</button>
            <button type="submit" name="update" class="btn btn-warning">Cập nhật</button>
            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
        </form>
    </div>
</div>

<div class="col-lg-12">
    <h2>Danh sách Laptop</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Hãng</th>
            <th>Tên máy</th>
            <th>CPU</th>
            <th>RAM</th>
            <th>Ổ cứng</th>
            <th>Giá (VNĐ)</th>
            <th>Số lượng</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($link)) {
            $res = mysqli_query($link,"SELECT * FROM laptop");
            while($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["ten_hang"]."</td>";
                echo "<td>".$row["ten_may"]."</td>";
                echo "<td>".$row["cpu"]."</td>";
                echo "<td>".$row["ram"]."</td>";
                echo "<td>".$row["ocung"]."</td>";
                echo "<td>".number_format($row["gia"],0,',','.')."</td>";
                echo "<td>".$row["soluong"]."</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>

<?php
if(isset($_POST["insert"])) {
    mysqli_query($link,"INSERT INTO laptop VALUES (
        NULL,
        '$_POST[ten_hang]',
        '$_POST[ten_may]',
        '$_POST[cpu]',
        '$_POST[ram]',
        '$_POST[ocung]',
        '$_POST[gia]',
        '$_POST[soluong]'
    )");
    echo "<script>window.location.href=window.location.href;</script>";
}

if(isset($_POST["delete"])) {
    mysqli_query($link,"DELETE FROM laptop WHERE ten_may='$_POST[ten_may]'");
    echo "<script>window.location.href=window.location.href;</script>";
}


if(isset($_POST["update"])) {
    mysqli_query($link,"UPDATE laptop SET cpu='$_POST[cpu]', ram='$_POST[ram]', ocung='$_POST[ocung]', gia='$_POST[gia]', soluong='$_POST[soluong]'
        WHERE ten_may='$_POST[ten_may]'");
    echo "<script>window.location.href=window.location.href;</script>";
}
?>
</html>

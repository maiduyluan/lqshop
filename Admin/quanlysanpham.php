<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="../css/quanlysanpham.css">
</head>
<body>
<?php
        require("../ketnoiDatabase.php");
        $sql = "SELECT * FROM `sanpham`";
        $query = mysqli_query($mysql, $sql);
?>

    <h1>Quản lý danh sách sản phẩm</h1>
    <button>
        <a href="themsanpham.php">Thêm sản phẩm</a>
    </button>
    <?php
        session_start();
        if(isset($_SESSION['us']) && $_SESSION['us'] != NULL) {
    ?>
        <a href="dangxuat.php">Thoát</a>
    <?php } ?>    

        
    <table class="productList">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($query)) {
    ?>

    <tr>
        <td><?= $row["masp"]?></td>
        <td><?= $row["tensp"]?></td>
        <td><?= number_format($row["gia"],3)?>đ</td>
        <td><img style="width:200px; height:300px"
         src='../image/<?= $row["imgURL"]?>' alt=""></td>
        <td>
            <a href="suasanpham.php?id=<?= $row["masp"]?>">Sửa</a>
            <a onClick="return xoaSanPham()" href="xoasanpham.php?id=<?= $row["masp"]?>">Xóa</a>
        </td>
    </tr>

    <?php }?>
    </table>
<script>
    function xoaSanPham() {
        var conf = confirm(`Bạn có chắc muốn xóa sản phẩm này không ? `);
        return conf
    }
</script>

</body>
</html>
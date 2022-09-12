<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="../css/themsanpham.css">

</head>
<body>

<?php
    require("../ketnoiDatabase.php");
    if(isset($_POST["submit"]) ) {
        $tensp = $_POST["ten"];
        $gia = $_POST["gia"];
        $hinhanh = $_FILES['hinhanh'] ['name'];
        $target_dir = "../image/";
        $target_file = $target_dir.$hinhanh;

        if(isset($tensp) && isset($gia) && isset($hinhanh)) {
            move_uploaded_file($_FILES["hinhanh"] ["tmp_name"], $target_file);
            $sql = "INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `imgURL`)
            VALUES(NULL, '$tensp', '$gia','$hinhanh')";
            mysqli_query($mysql, $sql);
            echo "<script>alert('Bạn đã thêm sản phẩm thành công')</script>";
            header("Location:quanlysanpham.php");
        }
    }
?>


    <div class="all">
        <a href="quanlysanpham.php"> Quay về trang chủ</a>
            <h1> Thêm sản phẩm </h1>
            <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="ten"> Tên sản phẩm </label>
                <input type="text" id="ten" name="ten" required>
            </div>
            <div>
                <label for="gia"> Giá sản phẩm </label>
                <input type="text" id="gia" name="gia" required>
            </div>
            <div>
                <label for="file"> Hình ảnh </label>
                <input type="file" id="file" name="hinhanh" value="Choose File" required>
            </div>

            <button type="submit" name="submit">
                Thêm sản phẩm
            </button>
        </form>
    </div>
</body>
</html>
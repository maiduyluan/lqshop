<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sản phẩm</title>
    <link rel="stylesheet" href="../css/themsanpham.css">

</head>
<body>

<?php

    require("../ketnoiDatabase.php");
    $masp = (int) $_GET['id'];	
    $sql = "SELECT * FROM `sanpham` WHERE masp = '$masp'";
    $query = mysqli_query($mysql, $sql); 
    $row = mysqli_fetch_array($query);
?>


    <div class="all">
        <a href="quanlysanpham.php"> Quay về trang quản lý</a>
            <h1> Cập nhật sản phẩm </h1>
            <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="ten"> Tên sản phẩm </label>
                <input type="text" id="ten" name="ten" value="<?= $row["tensp"]?>">
            </div>
            <div>
                <label for="gia"> Giá sản phẩm </label>
                <input type="text" id="gia" name="gia" value="<?= $row["gia"]?>">
            </div>
            <div>
                <img style="width:200px; height:200px"
                src='../image/<?= $row['imgURL']?>' alt=""></td>
            </div>
            <div>
                <label for="file"> Hình ảnh </label>
                <input type="file" id="file" name="hinhanh" value="Choose File" required>
            </div>

            <button type="submit" name="submit">
                Cập nhật sản phẩm
            </button>
        </form>
    </div>

    <?php
            if(isset($_POST["submit"]) ) {
                $tensp = $_POST["ten"];
                $gia = $_POST["gia"];
                $hinhanh = $_FILES['hinhanh'] ['name'];
                $target_dir = "./image/";
                if($hinhanh) {
                    if(file_exists("./image/".$img)) {
                        unlink("./image/".$img);
                    }
                    $target_file = $target_dir.$hinhanh;
                } else {
                    $target_file = $target_dir.$img;
                    $hinhanh = $img;
                }
        
                if(isset($tensp) && isset($gia) && isset($hinhanh)) {
                    move_uploaded_file($_FILES["hinhanh"] ["tmp_name"], $target_file);
                    $sql = "UPDATE `sanpham` SET `tensp` =  '$tensp', `gia` = '$gia', `imgURL` = '$hinhanh'
                    WHERE `sanpham`.`masp` = '$masp';";
                    mysqli_query($mysql, $sql);
                    echo "<script>alert('Bạn đã thêm sản phẩm thành công')</script>";
                    header("Location:quanlysanpham.php");
                }
            }
    ?>
</body>
</html>
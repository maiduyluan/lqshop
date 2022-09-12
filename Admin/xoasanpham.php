<?php
    require("../ketnoiDatabase.php");
    $id = $_GET['id'];
    $image = "SELECT `imgURL` FROM `sanpham` WHERE `sanpham`.`masp` = $id";
    $query = mysqli_query($mysql, $image);
    $after = mysqli_fetch_assoc($query);

    if (file_exists("./image/".$after['imgURL'])) {
        unlink("./image/".$after['imgURL']);
    }

    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`masp` = $id";
    mysqli_query($mysql, $sql);
    header("location:quanlysanpham.php")
?>
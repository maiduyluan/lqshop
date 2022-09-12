<?php
    require("ketnoiDatabase.php");
    $id = $_GET['id'];
    $image = "SELECT `image_product` FROM `productcart` WHERE `productcart`.`id_product` = $id";
    $query = mysqli_query($mysql, $image);
    $after = mysqli_fetch_assoc($query);

    $sql = "DELETE FROM `productcart` WHERE `productcart`.`id_product` = $id";
    mysqli_query($mysql, $sql);
    header("location:giohang.php")
?>

<?=$row['image_product']?>
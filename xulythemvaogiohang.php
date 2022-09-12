
<?php
    require("ketnoiDatabase.php");
    $masp = (int) $_GET['id'];	
    $sql = "SELECT * FROM `sanpham` WHERE masp = '$masp'";
    $query = mysqli_query($mysql, $sql); 
    $row = mysqli_fetch_array($query);


    $name_product = $row['tensp'];
    $price_product = $row['gia'];
    $image_product = $row['imgURL'];
    $target_dir = "./imageCart/";
    $target_file = $target_dir.$image_product;

    if(isset($name_product) && isset($price_product) && isset($image_product)) {
        move_uploaded_file($_FILES["hinhanh"] ["tmp_name"], $target_file);
        $sql = "INSERT INTO `productcart` (`id_product`, `name_product`, `price_product`, `image_product`)
        VALUES(NULL, '$name_product', '$price_product','$image_product')";
        mysqli_query($mysql, $sql);
        echo '<script>alert("Welcome to QABug")</script>';
        header("Location:sanphamtrangchu.php");
    }
?>

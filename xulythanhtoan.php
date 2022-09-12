
<?php
    require("ketnoiDatabase.php");
    $sql = "SELECT * FROM `productcart`";
    $query = mysqli_query($mysql, $sql); 
    $row = mysqli_fetch_array($query);

    if(isset($row) == NULL) {
       header("Location:sanphamtrangchu.php"); 
    } else {
        echo "<script>alert('Chưa có sản phẩm trong giỏ hàng!')</script>";
        header("Location:thanhtoan.php");
    }
?>

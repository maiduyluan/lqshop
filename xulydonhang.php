<?php
    require("ketnoiDatabase.php");
    $sql = "SELECT * FROM `productcart`";
    $query = mysqli_query($mysql, $sql); 

    $sql = "DELETE FROM `productcart`";
    mysqli_query($mysql, $sql);


    header("Location:index.php");

?>
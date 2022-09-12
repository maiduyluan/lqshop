<?php 
    $severName = "localhost";
    $userName = "root";
    $pwd = "";
    $nameDB = "dbao";

    $mysql = mysqli_connect($severName,$userName,$pwd,$nameDB);

    if($mysql === false ) {
        echo " kết nối thất bại ";
    }
?>
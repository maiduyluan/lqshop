<?php
    session_start();

    if(isset($_SESSION['us']) && $_SESSION['us'] != NULL) {
        unset($_SESSION['us']);
        header("location:../index.php");
    }
?>
<?php
    session_start();

    if(isset($_POST['btnSend'])) {
        $username = $_POST['txtName'];
        $password = $_POST['txtPass'];

        if( $username == 'admin' && $password == 'luan123') {
            echo '<script>alert("Bạn đã đăng nhập thành công")</script>';
            $_SESSION['us'] = $username;
            header("location:quanlysanpham.php");
        } else {
            header("location:dangnhap.php");
            echo '<script>alert("Đăng nhập thất bại")</script>';
        }
    }
?>
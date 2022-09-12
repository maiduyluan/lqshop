<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/dangnhap.css">
</head>
<body>
    <div class="all">
        <a href="../index.php"> Quay về trang chủ</a>
            <h1> Đăng nhập quản lý sản phẩm </h1>
            <form action="xulythongtindangnhap.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="ten"> Tài khoản </label>
                <input type="text" name="txtName" placeholder="Tên tài khoản">
            </div>
            <div>
                <label for="gia"> Mật khẩu </label>
                <input type="password" name="txtPass" placeholder="Mật khẩu">
            </div>
            <button type="submit" name="btnSend">
                Đăng nhập
            </button>
        </form>
        <div class="notice">Lưu ý: Chỉ dành cho quản trị viên !</div>
    </div>

</body>
</html>
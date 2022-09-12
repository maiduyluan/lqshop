<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php
        require("ketnoiDatabase.php");
        $sql = "SELECT * FROM `productcart`";
        $query = mysqli_query($mysql, $sql);
?>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #341414;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="image/zyro-image.png" width="30" height="30" alt="">
          </a>  
          <a class="navbar-brand" href="index.php">LQ Model</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ju" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">TRANG CHỦ</a>
              </li>
              <li class="nav-item men">
                <a class="nav-link" href="sanphamtrangchu.php">SẢN PHẨM</a>
              </li>
              <li class="nav-item introduce">
                <a class="nav-link" href="#">GIỚI THIỆU VỀ LQ SHOP</a>
              </li>
            </ul>

            <li class="nav-item cart">
              <a href="giohang.php"><i class="fas fa-shopping-cart"></i></a>
            </li>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Nhập sản phẩm" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">TÌM KIẾM</button>
            </form>
            
            <a class="login" href="./Admin/dangnhap.php">ĐĂNG NHẬP</a>

          </div>
        </div>
      </nav>

    <!-- Product -->

    <div class="slide-bar">
        <div class="container-fluid">
            <h3>Giỏ hàng của bạn</h3>
            <div class="icon">
                <i class="fas fa-cart-arrow-down checked"></i>
                <hr>
                <i class="fas fa-money-bill-wave"></i>
                <hr>
                <i class="fas fa-check-circle"></i>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="product">
            <table>
                <tr style="border-bottom: 1px solid black">
                    <td>Sản phẩm</td>
                    <td>Tên sản phẩm</td>
                    <td>Size</td>
                    <td>Số lượng</td>
                    <td>Giá</td>
                    <td>Xóa</td>
                </tr>
                
                <?php
                    while($row = mysqli_fetch_array($query)) {
                ?>

                <tr>
                    <td style="width:300px">
                        <img style="width:200px; height:300px;" 
                        src="./image/<?=$row['image_product']?>">
                    </td>
                    <td style="width:300px;"><h5><?=$row['name_product']?></h5></td>
                    <td style="width:300px;"><h5>Free Size 50-70kg</h5></td>
                    <td><h5>1</h5></td>
                    <td><h5><?= number_format($row['price_product'],3)?>đ</h5></td>
                    <td>
                        <a onClick="return xoaSanPham()" href="xoasanphamgiohang.php?id=<?=$row['id_product']?>">X</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div class="price">
      <h4>Thành tiền: <?=number_format(1000,3)?></h4>
      <div class="payment">
        <button class="continue"><a href="sanphamtrangchu.php">Tiếp tục mua sắm</a></button>
        <button class="pay"><a href="xulythanhtoan.php">Thanh toán $</a></button>
      </div>
    </div>

    <!-- Footer -->
     <hr>

    <div class="footer">
      <div class="background-footer"></div>
      
      <div class="introduce">
        <h3>Giới thiệu về LQ MODEL</h3>
        <p>LQ SHOP là doanh nghiệp thời trang áo POLO nam hiện đại kinh doanh online tại tất cả các tỉnh thành tại Việt Nam</p>
        <p>Địa chỉ cơ sở: 326 đường Lê Đức Thọ , phường 13, quận Gò Vấp, thành phố Hồ Chí Minh </p>
        <div class="hotline"> HOT ONLINE: 1800 8099</div>
      </div>
      
      <div class="app">
        <h4>Tải ngay APP tại:</h4>
        <div class="app-logo"></div>
      </div>
    </div>
    <!-- SCRIPT -->
    <script>
        function xoaSanPham() {
            var conf = confirm(`Bạn có chắc muốn xóa sản phẩm này không ? `);
            return conf
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
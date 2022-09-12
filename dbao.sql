-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 22, 2022 lúc 09:45 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcart`
--

CREATE TABLE `productcart` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price_product` decimal(10,0) NOT NULL,
  `image_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `imgURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `imgURL`) VALUES
(18, 'ÁO POLO PHỐI KẺ', '632', 'ao1.jpg'),
(19, 'ÁO POLO SUÔNG', '532', 'ao3.jpg'),
(20, 'ÁO POLO SUÔNG', '532', 'ao4.jpg'),
(21, 'ÁO POLO PHỐI VẠCH', '552', 'ao5.jpg'),
(22, 'ÁO POLO CỔ TÀU TRỤ', '552', 'ao6.jpg'),
(23, 'ÁO POLO CỔ TÀU TRỤ', '552', 'ao7.jpg'),
(24, 'ÁO POLO NAM MÀU ĐEN', '632', 'ao8.jpg'),
(25, 'ÁO POLO THÊU LOGO', '632', 'ao9.jpg'),
(26, 'ÁO POLO PHỐI KẺ', '632', 'ao10.jpg'),
(27, 'ÁO POLO IVY MEN', '632', 'ao11.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `productcart`
--
ALTER TABLE `productcart`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `productcart`
--
ALTER TABLE `productcart`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

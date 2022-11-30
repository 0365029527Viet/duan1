-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(7, 'Đồ ăn người lớn'),
(8, 'Đồ chơi'),
(9, 'Đồ uống');

-- --------------------------------------------------------

--
-- Table structure for table `spreview`
--

CREATE TABLE `spreview` (
  `id` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `gia` float NOT NULL,
  `khuvuc` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `opentime` time NOT NULL,
  `closetime` time NOT NULL,
  `diemphucvu` float NOT NULL,
  `diemchatluong` float NOT NULL,
  `diemvitri` float NOT NULL,
  `diemkhonggia` float NOT NULL,
  `diemgiaca` float NOT NULL,
  `tongdiem` float DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spreview`
--

INSERT INTO `spreview` (`id`, `tensp`, `anh`, `gia`, `khuvuc`, `diachi`, `opentime`, `closetime`, `diemphucvu`, `diemchatluong`, `diemvitri`, `diemkhonggia`, `diemgiaca`, `tongdiem`, `iddm`) VALUES
(15, 'Cộng Cà Phê - Hàng Điếu', '19112443.548eef2e2e1f9.png', 50000, 'Ha Noi', '54 Hàng Điếu,  Quận Hoàn Kiếm, Hà Nội', '00:34:00', '12:34:00', 7, 8, 7, 8, 7, 7.4, 9),
(16, 'Quán Quỳnh - Ẩm Thực Việt Nam', '4a0a760e85aad143b530002afac49414.jpg', 150000, 'Ha Noi', '733 Hồng Hà,  Quận Hoàn Kiếm, Hà Nội', '01:37:00', '13:37:00', 5, 7, 7, 8, 6, 6.6, 7),
(17, 'Hạnh - Hải Sản Tươi Sống', 'Archer_Queen_info.webp', 100000, 'Ha Noi', '45 Cầu Gỗ, P. Hàng Bạc,  Quận Hoàn Kiếm, Hà Nội', '01:37:00', '13:37:00', 7, 5, 5, 4, 6, 5.4, 7),
(18, 'View Cafe', '934601930_1618048393.jpg', 50000, 'Ha Noi', '46 Tràng Tiền,  Quận Hoàn Kiếm, Hà Nội', '01:41:00', '12:41:00', 8, 9, 9, 8, 9, 8.6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(55) DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `pass`, `email`, `phone`, `address`, `img`, `role`) VALUES
(1, 'Phạm Văn Việt', '123456', 'viet@gmail.com', '0365029527', 'Mê linh - Hà Nội', NULL, 0),
(2, 'Phạm Văn Việt', '123456', 'admin@gmail.com', '0346915035', 'Hà Nội', NULL, 1),
(6, 'Nguyễn Xuân Mùi', '123456', 'mui@gmail.com', '0222546266', 'Mê linh', NULL, 0),
(7, 'Nguyễn Xuân Mùi Phương', '123456', 'mui@gmail.com', '0222546266', 'Mê linh', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spreview`
--
ALTER TABLE `spreview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_dm_sp` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spreview`
--
ALTER TABLE `spreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spreview`
--
ALTER TABLE `spreview`
  ADD CONSTRAINT `lk_dm_sp` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

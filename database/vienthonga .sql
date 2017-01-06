-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 11:26 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vienthonga`
--

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE `dienthoai` (
  `ma` int(11) NOT NULL,
  `tendienthoai` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `giadienthoai` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `chitietdienthoai` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `hinh` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`ma`, `tendienthoai`, `giadienthoai`, `chitietdienthoai`, `hinh`) VALUES
(1, 'iPhone SE 16GB ', '11,490,000đ', '<p>CPU Dual-core 1.84 GHz</br>\r\nMàn hình Retina</br>\r\nRAM 2GB ROM 16GB</br>\r\nCamera 12MP, f/2.2</br>\r\nchip Apple A9</br>\r\nPin Li-Po 1642 mAh</br>\r\n</p>\r\n\r\n', 'view/picVTA/1.jpg'),
(2, 'Huawei GR5', '5,590,000đ', '<p>Android 5.1+EMUI 3.1 </br>\r\nHSDPA--42Mbps</br>\r\nCPU Octa-core 1.5GHz </br>', 'view/picVTA/2.jpg'),
(3, 'OPPO F1 Plus', '9,980,000đ', '<p>Android 5.1 </br>	\r\nOcta-core 2.0 GHz</br>\r\nLi-Po 2850 mAh </br>', 'view/picVTA/3.jpg'),
(4, 'Mobiistar Prime X', '6,990,000đ', '<p>\r\nOcta-Core</br>\r\nAndroid Lollipop 5.1</br>	\r\nMTK Helio P10</br>\r\n\r\n\r\n</p>', 'view/picVTA/4.jpg'),
(5, 'Coolpad Fancy', '3,499,000đ', '<p>\r\nAndroid OS, v5.1</br>\r\nQuad-core 1.2 GHz</br>	\r\nMTK</br>\r\n\r\n\r\n</p>', 'view/picVTA/4.jpg'),
(6, 'iPad Pro 32GB', '19,490,000đ', '<p>	\r\niOS 9</br>\r\nA9x chip </br>	\r\nMTK Helio P10</br>\r\n\r\n\r\n</p>', 'view/picVTA/6.jpg'),
(7, 'SamsungGT A6', '4,490,000đ', '<p>\r\n	\r\nAndroid 5.1</br>\r\nRAM 1.5GB</br>\r\n</p>', 'view/picVTA/7.jpg'),
(8, 'Asus X454LA', '8,790,000đ', '<p>\r\n	\r\n	\r\nFree DOS </br>\r\n4GB DDR3</br>\r\n</p>', 'view/picVTA/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dienthoaichinh`
--

CREATE TABLE `dienthoaichinh` (
  `ma1` int(11) NOT NULL,
  `tendienthoai1` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `giadienthoai1` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `chitietdienthoai1` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `hinh1` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `dienthoaichinh`
--

INSERT INTO `dienthoaichinh` (`ma1`, `tendienthoai1`, `giadienthoai1`, `chitietdienthoai1`, `hinh1`) VALUES
(9, 'Sony Xperia M4', '4,990,000đ', '<p>\r\nAndroid v5.0</br>\r\nOcta-core 1.5</br>\r\nCamera 13MP -5MP</br>\r\nPin Li-Ion 2400 mAh</br>\r\n</p>', 'view/picVTA/9.jpg'),
(10, 'iPhone 6s 64GB', '21,750,000đ', '<p>\r\niOS9 </br>\r\nApple A9</br>\r\nCamera 12MP -5MP</br>\r\nPin Li-Po 1810 mAh</br>\r\n</p>', 'view/picVTA/10.jpg\r\n'),
(11, 'OPPO F1\r\n', '5,990,000đ', '<p>\r\nAndroid 5.1</br>\r\n8 nhân</br>\r\nCamera 13MP -8MP</br>\r\nPin Li-Po 2500 mAh</br>\r\n</p>', 'view/picVTA/11.jpg'),
(12, 'Microsoft Lumia 650', '3,990,000đ', '<p>\r\nMicrosoft Windows 10</br>\r\nQuad-core 1.3</br>\r\nCamera 8.0MP -5MP</br>\r\nPin 2000 mAh</br>\r\n</p>', 'view/picVTA/12.jpg\r\n'),
(13, 'Samsung Galaxy A3', '6,190,000đ', '<p>\r\nAndroid 5.1</br>\r\nQuad-core 1.5 GHz</br>\r\nCamera 13MP -5MP</br>\r\nPin Li-Ion 2300 mAh</br>\r\n</p>', 'view/picVTA/13.jpg'),
(14, 'Samsung Galaxy A8', '9,490,000đ', '<p>\r\nAndroid 5.0</br>\r\nAdreno 405</br>\r\nCamera 16MP -5MP</br>\r\nLi-Ion 3050 mAh</br>\r\n</p>\r\n', 'view/picVTA/14.jpg'),
(15, 'Sony Xperia M5', '9,490,000đ', '<p>\r\nAndroid v5.0</br>\r\nAdreno 405</br>\r\nCamera 21.5MP -13MP</br>\r\nLi-Ion 2600 mAh</br>\r\n</p>\r\n', 'view/picVTA/15.jpg'),
(16, 'Sony Xperia Z5', '13,990,000đ', '<p>\r\nAndroid 5.1</br>\r\n8 nhân</br>\r\nCamera 23MP -5MP</br>\r\nLi-Ion 2900 mAh</br>\r\n</p>\r\n', 'view/picVTA/16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dropdienthoai`
--

CREATE TABLE `dropdienthoai` (
  `madropdienthoai` int(11) NOT NULL,
  `tendropdienthoai` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `dropdienthoai`
--

INSERT INTO `dropdienthoai` (`madropdienthoai`, `tendropdienthoai`) VALUES
(1, 'APPLE'),
(2, 'NOKIA'),
(3, 'OPPO'),
(4, 'HTC'),
(5, 'LG'),
(6, 'MOBISTAR-MOBIISTAR');

-- --------------------------------------------------------

--
-- Table structure for table `droplaptop`
--

CREATE TABLE `droplaptop` (
  `madroplaptop` int(11) NOT NULL,
  `tendroplaptop` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `droplaptop`
--

INSERT INTO `droplaptop` (`madroplaptop`, `tendroplaptop`) VALUES
(1, 'Laptop apple'),
(2, 'Laptop Acer'),
(3, 'Laptop asus'),
(4, 'Laptop dell'),
(5, 'Laptop Lenovo'),
(6, 'Laptop HP');

-- --------------------------------------------------------

--
-- Table structure for table `dropphukien`
--

CREATE TABLE `dropphukien` (
  `madropphukien` int(11) NOT NULL,
  `tendropphukien` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `dropphukien`
--

INSERT INTO `dropphukien` (`madropphukien`, `tendropphukien`) VALUES
(1, 'Tai nghe'),
(2, 'Pin'),
(3, 'Usb'),
(4, 'Thẻ nhớ'),
(5, 'Chuột'),
(6, 'Đế tản nhiệt'),
(7, 'Ốp lưng điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `droptablet`
--

CREATE TABLE `droptablet` (
  `madroptablet` int(11) NOT NULL,
  `tendroptablet` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `droptablet`
--

INSERT INTO `droptablet` (`madroptablet`, `tendroptablet`) VALUES
(1, 'Máy tính bảng Ipad'),
(2, 'Máy tính bảng samsung'),
(3, 'Máy tính bảng asus'),
(4, 'Máy tính bảng Lenovo'),
(5, 'Máy tính bảng hp'),
(6, 'Máy tính bảng acer');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `ma2` int(11) NOT NULL,
  `tenlaptop` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `gialaptop` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `chitietlaptop` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `hinh2` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`ma2`, `tenlaptop`, `gialaptop`, `chitietlaptop`, `hinh2`) VALUES
(25, 'Laptop Asus A556UF', '13,690,000đ', '<p>\r\nIntelSkylake Corei5</br>\r\nRAM 4GB DDR3L</br\r\nỔ cứng	500GB</br>\r\nĐồ họa 2GB DDR3L NVIDIA</br>\r\n</p>', 'view/picVTA/25.jpg\r\n'),
(26, 'Laptop HP 15AC104TX', '16,290,000đ', '<p>\r\nIntel Core i7</br>\r\nRAM 8GB DDR3L</br\r\nỔ cứng	1TB</br>\r\nĐồ họa AMD Radeon R5</br>\r\n</p>\r\n', 'view/picVTA/26.jpg'),
(27, 'Laptop Asus F555LF', '15,490,000đ', '<p>\r\nIntel Core i7</br>\r\nRAM 4GB DDR3L</br\r\nỔ cứng 1TB - 5400RPM</br>\r\nĐồ họa AMD Radeon R5</br>\r\n</p>\r\n', 'view/picVTA/27.jpg'),
(28, 'Laptop Lenovo Ideapad', '5,490,000đ', '<p>\r\nIntel N2840</br>\r\nRAM 2GB</br\r\nỔ cứng 500GB - 5400RPM</br>\r\nĐồ họa intel HD Graphics</br>\r\n</p>\r\n', 'view/picVTA/28.jpg\r\n'),
(29, 'Laptop Dell Inspiron 15', '7,490,000đ', '<p>\r\nIntel PentiumN3700</br>\r\nRAM 4GB DDR3L</br\r\nỔ cứng	500GB - 5400RPM</br>\r\nĐồ họa Intel HD Graphics</br>\r\n</p>\r\n', 'view/picVTA/29.jpg'),
(30, 'Laptop Dell Inspiron 14', '6,790,000đ', '<p>\r\nIntel Pentium N3540U</br>\r\nRAM 2GB DDR3L</br\r\nỔ cứng	500GB - 5400RPM</br>\r\nĐồ họa Intel HD Graphics</br>\r\n</p>\r\n', 'view/picVTA/30.jpg'),
(31, 'Acer Aspire E5', '8,190,000đ', '<p>\r\nIntel Core i3-5005U</br>\r\nRAM 4GB DDR3</br\r\nỔ cứng	500GB</br>\r\nĐồ họa Intel HD Graphics</br>\r\n</p>', 'view/picVTA/31.jpg'),
(32, 'Asus F555LF-XX166D', '12,490,000đ', '<p>\r\nIntel Core i5</br>\r\n4GB DDR3L</br\r\nỔ cứng	500GB - 5400RPM</br>\r\nĐồ họa 2GB DDR3L NVIDIA</br>\r\n</p>', 'view/picVTA/32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `maytinhbang`
--

CREATE TABLE `maytinhbang` (
  `ma2` int(11) NOT NULL,
  `maytinhbang` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `giamaytinhbang` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `chitietmaytinhbang` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `hinh3` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `maytinhbang`
--

INSERT INTO `maytinhbang` (`ma2`, `maytinhbang`, `giamaytinhbang`, `chitietmaytinhbang`, `hinh3`) VALUES
(17, 'Tablet SamsungGT A9', '7,990,000đ', '<p>\r\nAndroid 5.0</br>\r\nQuad-Core 1.2 GHz</br>\r\nRAM 2GB</br>\r\nPin 6000 mAh</br>\r\n</p>\r\n', 'view/picVTA/17.jpg'),
(18, 'Masstel Tab 805', '2,590,000đ', '<p>\r\nAndroid 5.1</br>\r\nQuad-Core 1.3GHz</br>\r\nRAM 1GB</br>\r\n4300 mAh</br>\r\n</p>\r\n', 'view/picVTA/18.jpg'),
(19, 'iPad Mini 16GB', '6,790,000đ', '<p>\r\nIOS 7</br>\r\nDual-core 1.3GHz</br>\r\nRAM 1GB</br>\r\nPin 6100 mAh</br>\r\n</p>\r\n', 'view/picVTA/19.jpg'),
(20, 'Tablet Asus Zenpad', '3,990,000đ', '<p>	\r\nAndroid 5.0</br>\r\nIntel Atom x3</br>\r\nRAM 2GB</br>\r\nPin about 8 hrs</br>\r\n</p>\r\n', 'view/picVTA/20.jpg\r\n'),
(21, 'Tablet Acer IconiaB1', '2,290,000đ', '<p>	\r\nAndroid 5.1</br>\r\nIntel Atom x3</br>\r\nRAM 1GB</br>\r\nPin 3380mAh</br>\r\n</p>\r\n', 'view/picVTA/21.jpg'),
(22, 'SamsungG Tab E9.6 ', '5,990,000đ', '<p>\r\nAndroid v5.0</br>\r\nOcta-core 1.5</br>\r\nCamera 13MP -5MP</br>\r\nPin Li-Ion 5000 mAh</br>\r\n</p>', 'view/picVTA/22.jpg\r\n'),
(23, 'SamsungG Tab S2', '9,990,000đ', '<p>\r\nAndroid 5.0</br>\r\nOcta (Quad 1.9GHz)</br>\r\nRAM: 3GB</br>\r\nPin 4000 mAh</br>\r\n</p>', 'view/picVTA/23.jpg\r\n'),
(24, 'Tablet Lenovo TAB2', '2,490,000đ', '<p>\r\nAndroid 4.4 KitKat</br>\r\nMT8382M QC 1.3GH</br>\r\nRAM 1GB</br>\r\nPin 3450 mAh</br>\r\n</p>\r\n', 'view/picVTA/24.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `phukien`
--

CREATE TABLE `phukien` (
  `ma3` int(11) NOT NULL,
  `tenphukien` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `giaphukien` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `chitietphukien` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `hinh4` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `phukien`
--

INSERT INTO `phukien` (`ma3`, `tenphukien`, `giaphukien`, `chitietphukien`, `hinh4`) VALUES
(33, 'Gậy chụp hình MONOPOD', '199,000đ', '<p>\r\nJack tai nghe 3.5mm</br>\r\nCho máy từ 4 - 6 inch</br\r\nTương thích> iOS 5.0</br>\r\n</p>', 'view/picVTA/33.jpg'),
(34, 'Loa vi tính Microtek', '349,000đ', '<p>\r\nNguồn điện: 220-240V</br>\r\nMicrotek MT- 840</br>\r\nTổng công suất: 27w</br>\r\n</p>', 'view/picVTA/34.jpg'),
(35, 'USB OTG 32GB', '1,290,000đ', '<p>\r\nUSB Mostash WG02</br>\r\nUSB 3.0, Lightning</br>\r\n72.6gam</br>\r\n</p>', 'view/picVTA/35.jpg'),
(36, 'Tai nghe Bluetooth PISEN', '449,000đ', '<p>\r\nPhạm vi : 10m </br>\r\nKích thước: 60x18x23mm</br>\r\nTG đàm thoại: 8 tiếng</br>\r\n</p>', 'view/picVTA/36.jpg'),
(37, 'Tai nghe SamsungG Note 2 ', '199,000đ', '<p>\r\nHãng sản xuất: Samsung </br>\r\nDùng cho Mobile, Mp3, Mp4</br>\r\nTính năng:Nghe nhạc</br>\r\n</p>', 'view/picVTA/37.jpg'),
(38, 'USB OTG 16GB', '990,000đ', '<p>\r\nUSB Mostash WG02 </br>\r\nUSB 3.0, Lightning</br>\r\nTương thích:iPhone, iPad, iPod</br>\r\n</p>', 'view/picVTA/38.jpg'),
(39, 'Kính Samsung Gear VR', '2,190,000đ', '<p>\r\nmàn hình cảm ứng AMOLED</br>\r\nTích hợp điện thoại Galaxy</br>\r\nKính thực tế ảo</br>\r\n</p>', 'view/picVTA/39.jpg'),
(40, 'Pin dự phòng Anker', '799,000đ', '<p>\r\n2 cổng USB</br>\r\nTrọng lượng: 240gr.</br>\r\n10400mAh</br>\r\n</p>', 'view/picVTA/40.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` int(11) NOT NULL,
  `tentintuc` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `duongdantintuc` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`matintuc`, `tentintuc`, `duongdantintuc`) VALUES
(1, 'Những nâng cấp đáng chú ý Galaxy J5 2016 và Galaxy J7 2016 so với bản tiền nhiệm', 'https://vienthonga.vn/nhung-nang-cap-dang-chu-y-galaxy-j5-2016-va-galaxy-j7-2016-so-voi-ban-tien-nhiem.html'),
(2, 'Cùng chiêm ngưỡng bản thiết kế Galaxy S8 edge đẹp tuyệt vời', 'https://vienthonga.vn/lo-dien-thiet-ke-galaxy-s8-edge-dep-tuyet-voi.html'),
(3, '“Mổ xẻ đến chân răng kẽ tóc” để tìm hiểu sức mạnh của người hùng HTC 10', 'https://vienthonga.vn/mo-xe-den-chan-rang-ke-toc-de-tim-hieu-suc-manh-cua-anh-hung-htc-10.html'),
(4, 'Samsung cùng nhà thiết kế Công Trí thực hiện triển lãm thời trang cao cấp bằng công nghệ thực tế ảo', 'https://vienthonga.vn/samsung-cung-nha-thiet-ke-cong-tri-thuc-hien-trien-lam-thoi-trang-cao-cap-bang-cong-nghe-thuc-te-ao.html'),
(5, 'Trên tay Samsung Galaxy J5 phiên bản cải tiến 2016', 'https://vienthonga.vn/tren-tay-samsung-j5-phien-ban-2016.html');

-- --------------------------------------------------------

--
-- Table structure for table `tittledienthoai`
--

CREATE TABLE `tittledienthoai` (
  `matittle` int(11) NOT NULL,
  `tentittle` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `linktittle` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `tittledienthoai`
--

INSERT INTO `tittledienthoai` (`matittle`, `tentittle`, `linktittle`) VALUES
(1, 'Apple', 'https://vienthonga.vn/dien-thoai-smartphones/apple-iphone'),
(2, 'SamSung', 'https://vienthonga.vn/dien-thoai-smartphones/samsung'),
(3, 'Nokia', 'https://vienthonga.vn/dien-thoai-smartphones/nokia'),
(4, 'Sony', 'https://vienthonga.vn/dien-thoai-smartphones/sony-vn'),
(5, 'OPPO', ''),
(6, 'ASUS', ''),
(7, 'HTC', 'https://vienthonga.vn/dien-thoai-smartphones/htc'),
(8, 'LG', 'https://vienthonga.vn/dien-thoai-smartphones/lg'),
(9, 'Lenovo', 'https://vienthonga.vn/dien-thoai-smartphones/lenovo'),
(10, 'Mobiistar', '\r\nhttps://vienthonga.vn/dien-thoai-smartphones/mobiistar');

-- --------------------------------------------------------

--
-- Table structure for table `tittlemaytinhbang`
--

CREATE TABLE `tittlemaytinhbang` (
  `matittlemaytinhbang` int(11) NOT NULL,
  `tentittlemaytinhbang` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `linktittlemaytinhbang` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `tittlemaytinhbang`
--

INSERT INTO `tittlemaytinhbang` (`matittlemaytinhbang`, `tentittlemaytinhbang`, `linktittlemaytinhbang`) VALUES
(1, 'Máy tính bảng Ipad', 'https://vienthonga.vn/may-tinh-bang/apple-ipad'),
(2, 'Máy tính bảng SamSung', 'https://vienthonga.vn/may-tinh-bang/samsung-tablet'),
(3, 'Máy tính bảng Asus', 'https://vienthonga.vn/may-tinh-bang/asus'),
(4, 'Máy tính bảng Lenovo', 'https://vienthonga.vn/may-tinh-bang/may-tinh-bang-lenovo'),
(5, 'Máy tính bảng HP', 'https://vienthonga.vn/may-tinh-bang/may-tinh-bang-hp');

-- --------------------------------------------------------

--
-- Table structure for table `tittlemaytinhxachtay`
--

CREATE TABLE `tittlemaytinhxachtay` (
  `matittlemaytinhxachtay` int(11) NOT NULL,
  `tentittlemaytinhxachtay` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `linktittlemaytinhxachtay` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `tittlemaytinhxachtay`
--

INSERT INTO `tittlemaytinhxachtay` (`matittlemaytinhxachtay`, `tentittlemaytinhxachtay`, `linktittlemaytinhxachtay`) VALUES
(1, 'Laptop Apple', 'https://vienthonga.vn/laptop/laptop-apple'),
(2, 'Laptop Acer', 'https://vienthonga.vn/laptop/laptop-acer'),
(3, 'Laptop Asus', 'https://vienthonga.vn/laptop/laptop-asus'),
(4, 'Laptop Dell', 'https://vienthonga.vn/laptop/laptop-dell'),
(5, 'Laptop Lenovo', 'https://vienthonga.vn/laptop/laptop-ibm-lenovo'),
(6, 'Laptop HP', 'https://vienthonga.vn/laptop/laptop-hp');

-- --------------------------------------------------------

--
-- Table structure for table `tittlephukien`
--

CREATE TABLE `tittlephukien` (
  `matittlephukien` int(11) NOT NULL,
  `tentittlephukien` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `linktittlephukien` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `tittlephukien`
--

INSERT INTO `tittlephukien` (`matittlephukien`, `tentittlephukien`, `linktittlephukien`) VALUES
(1, 'Bao Da', 'https://vienthonga.vn/linh-phu-kien/bao-da'),
(2, 'Ốp Lưng', 'https://vienthonga.vn/linh-phu-kien/op-lung'),
(3, 'Sạc Dự Phòng', 'https://vienthonga.vn/linh-phu-kien/sac-du-phong'),
(4, 'Tai Nghe', 'https://vienthonga.vn/linh-phu-kien/tai-nghe'),
(5, 'Tai Nghe Bluetooth', 'https://vienthonga.vn/linh-phu-kien/tai-bluetooth'),
(6, 'Đồng Hồ Thông Minh', 'https://vienthonga.vn/linh-phu-kien/dong-ho'),
(7, 'Chuột', 'https://vienthonga.vn/linh-phu-kien/mouse'),
(8, 'USE', 'https://vienthonga.vn/linh-phu-kien/usb'),
(9, 'Loa', 'https://vienthonga.vn/linh-phu-kien/loa');

-- --------------------------------------------------------

--
-- Table structure for table `vechinhsachhotro`
--

CREATE TABLE `vechinhsachhotro` (
  `mavechinhsachhotro` int(11) NOT NULL,
  `tenvechinhsachhotro` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `vechinhsachhotro`
--

INSERT INTO `vechinhsachhotro` (`mavechinhsachhotro`, `tenvechinhsachhotro`) VALUES
(1, 'Hướng dẫn mua hàng\r\n'),
(2, 'Hướng dẫn mua trả góp'),
(3, 'Hướng dẫn mua hàng SV'),
(4, 'Chính sách giao hàng'),
(5, 'Chính sách đổi trả - bảo hành'),
(6, 'Quy chế hoạt động'),
(7, 'Chính sách bảo mật thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `vedichvu`
--

CREATE TABLE `vedichvu` (
  `mavedichvu` int(11) NOT NULL,
  `tenvedichvu` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `vedichvu`
--

INSERT INTO `vedichvu` (`mavedichvu`, `tenvedichvu`) VALUES
(1, 'Happy Care'),
(2, 'Bảo hiểm điện thoại'),
(3, 'Thanh toán hóa đơn');

-- --------------------------------------------------------

--
-- Table structure for table `vesanpham`
--

CREATE TABLE `vesanpham` (
  `mavesanpham` int(11) NOT NULL,
  `tenvesanpham` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `vesanpham`
--

INSERT INTO `vesanpham` (`mavesanpham`, `tenvesanpham`) VALUES
(1, 'Smartphone - Điện thoại'),
(2, 'Laptop'),
(3, 'Máy tính bảng'),
(4, 'Phụ kiện'),
(5, 'Apps - Games'),
(6, 'Sim, thẻ'),
(7, 'Máy đổi trả'),
(8, 'Xả hàng');

-- --------------------------------------------------------

--
-- Table structure for table `vevienthonga`
--

CREATE TABLE `vevienthonga` (
  `mavevienthonga` int(11) NOT NULL,
  `tenvevienthonga` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkvevienthonga` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `vevienthonga`
--

INSERT INTO `vevienthonga` (`mavevienthonga`, `tenvevienthonga`, `linkvevienthonga`) VALUES
(1, 'Tổng quan', 'https://vienthonga.vn/tong-quan-ve-vien-thong-a'),
(2, 'Nhà đầu tư', 'https://vienthonga.vn/nha-dau-tu.html'),
(3, 'Thẻ thành viên', 'https://vienthonga.vn/clubcard'),
(4, 'Tuyển dụng', 'https://tuyendung.vienthonga.vn/'),
(5, 'Hệ thống cửa hàng', 'https://vienthonga.vn/he-thong-trung-tam-smartphone.html'),
(6, 'Trung tâm bảo hành', 'https://vienthonga.vn/he-thong-trung-tam-smartphone.html'),
(7, 'Khách hàng doanh nghiệp', 'https://vienthonga.vn/doanh-nghiep'),
(8, 'Xem bản Mobile', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

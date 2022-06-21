-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2022 lúc 06:00 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webhoa04`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `fullname` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `fullname`, `createdate`) VALUES
(25, 'Tiểu Diệp', '2022-06-20 03:57:27'),
(26, 'Huyền Trâm', '2022-06-20 03:57:59'),
(27, 'Tư Việt', '2022-06-20 03:58:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT 1,
  `quantity` int(11) NOT NULL,
  `price` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `cart_id`, `id_kh`, `product_id`, `quantity`, `price`) VALUES
(40, 25, 2, 105, 1, '900000'),
(41, 25, 2, 103, 1, '900000'),
(42, 26, 1, 102, 1, '900000'),
(43, 27, 3, 52, 1, '900000'),
(44, 27, 3, 104, 1, '900000'),
(45, 27, 3, 102, 1, '900000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_khachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachinhan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_khachhang`, `tenkhachhang`, `email`, `matkhau`, `dienthoai`, `diachinhan`) VALUES
(1, 'Huyền Trâm', 'ht@gmail.com', 'httttt', 213456789, '12 Phạm Huy Thông, phường 1, quận Gò Vấp, tp HCM'),
(2, 'Tiểu Diệp', 'td@gmail.com', '123456', 987654321, '36 Lê Đức Thọ, phường 2, quận Gò Vấp, tp HCM'),
(3, 'Tư Việt', 'tv@gmail.com', '098765', 997654321, '35 Phan Văn Trị, phường 2, quận Gò Vấp, tp HCM'),
(59, 'NguyenHuyenTram', 'tudang@gmail.com', 'tudang', 912304387, '22 phạm huy thông, phường 12, gò vấp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinhanhsp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_sp`, `hinhanhsp`) VALUES
(85, 97, 't51653327242.jpeg'),
(86, 96, 't31653327255.jpeg'),
(87, 95, 'm41653327274.jpeg'),
(88, 94, 'm11653327310.jpeg'),
(89, 93, 's41653327332.jpeg'),
(90, 91, 'w11653327386.jpeg'),
(91, 54, 't41653380810.jpeg'),
(92, 52, 't21653380846.jpeg'),
(93, 52, 't21653380852.jpeg'),
(94, 51, 't11653380866.jpeg'),
(95, 45, 'm51653380922.jpeg'),
(96, 43, 'm31653380940.jpeg'),
(97, 42, 'm21653381002.jpeg'),
(98, 35, 's51653381034.jpeg'),
(99, 33, 's31653381111.jpeg'),
(100, 31, 's11653381162.jpeg'),
(101, 106, 'n41653382950.jpeg'),
(102, 105, 'n31653382967.jpeg'),
(103, 104, 'n21653383008.jpeg'),
(104, 103, 'n11653383020.jpeg'),
(105, 102, 'v51653383040.jpeg'),
(106, 99, 'va21653383870.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichcosp`
--

CREATE TABLE `kichcosp` (
  `idkichcosp` int(11) NOT NULL,
  `tenkichcosp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kichcosp`
--

INSERT INTO `kichcosp` (`idkichcosp`, `tenkichcosp`, `tinhtrang`) VALUES
(1, 'Bó lớn', '1'),
(3, 'Bó vừa', '1'),
(4, 'Bó nhỏ', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `idloaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`idloaisp`, `tenloaisp`, `tinhtrang`) VALUES
(1, 'Hoa Cưới', '1'),
(2, 'Hoa Valentine', '1'),
(3, 'Hoa Sinh Nhật', '1'),
(4, 'Hoa Chúc mừng', '1'),
(5, 'Hoa Tang', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `masp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giadexuat` float NOT NULL,
  `giagiam` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `loaisp` int(11) NOT NULL,
  `sizesp` int(11) NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensp`, `masp`, `hinhanh`, `giadexuat`, `giagiam`, `soluong`, `loaisp`, `sizesp`, `tinhtrang`, `noidung`) VALUES
(12, 'Affluent Season', 'w2', 'w2.jpeg', 900000, 900000, 10, 1, 1, '1', '<p>Lộng lẫy v&agrave; ho&agrave;nh tr&aacute;ng nhất ch&iacute;nh l&agrave; sự kết hợp đầy rực rỡ từ những c&agrave;nh hồng cam c&ugrave;ng với hoa c&uacute;c mẫu đơn trong hộp hoa Xu&acirc;n Sắc Cao Cấp. Đ&acirc;y c&ograve;n l&agrave; sự lựa chọn v&ocirc; c&ugrave;ng ph&ugrave; hợp cho c&aacute;c dịp quan trọng như khai trương, ch&uacute;c mừng, sinh nhật, đ&aacute;m cưới,....</p>'),
(14, 'Cherish Bridal', 'w4', 'w4.jpeg', 900000, 900000, 10, 1, 3, '1', '<p>B&oacute; hoa lạ mắt với b&ocirc;ng bi m&agrave;u t&iacute;m sẽ l&agrave; người bạn đồng h&agrave;nh trong ng&agrave;y quan trọng của hai bạn.</p>'),
(15, 'Spring Blossom Bridal', 'w5', 'w5.webp', 900000, 900000, 10, 1, 3, '1', '<p>B&oacute; hoa mang gam m&agrave;u pastel đầy trang nh&atilde; v&agrave; duy&ecirc;n d&aacute;ng với sự kết hợp của nhiều loại hoa tươi như hoa Hồng, Cẩm chướng, C&aacute;t tường v&agrave; Cẩm t&uacute; cầu, th&iacute;ch hợp để đồng h&agrave;nh c&ugrave;ng c&ocirc; d&acirc;u phong c&aacute;ch thanh lịch trong ng&agrave;y trọng đại nhất của m&igrave;nh.</p>'),
(35, 'Sweet As You', 's5', 's5.jpeg', 900000, 900000, 10, 3, 1, '1', '<p>Vừa ngọt ng&agrave;o vừa l&atilde;ng mạn, Sweet As You ch&iacute;nh l&agrave; m&oacute;n qu&agrave; sinh nhật v&ocirc; c&ugrave;ng tuyệt vời cho những người th&acirc;n y&ecirc;u. C&ugrave;ng tạo ra những khoảnh khắc đ&oacute;n sinh nhật thật đ&aacute;ng nhớ với chiếc b&aacute;nh kem hoa rực rỡ n&agrave;y nha!</p>'),
(42, 'Combo Tender & Pure', 'm2', 'm2.jpeg', 900000, 900000, 10, 4, 1, '1', '<p>Vẻ đẹp thuần khiết v&agrave; dịu d&agrave;ng đến từ những nh&aacute;nh hoa c&uacute;c Tana trắng tựa như n&agrave;ng thơ sẽ l&agrave; m&oacute;n qu&agrave; tặng sinh nhật, qu&agrave; tặng tốt nghiệp,... cực kỳ &yacute; nghĩa. Nếu bạn c&ograve;n ngại n&oacute;i lời y&ecirc;u thương th&igrave; h&atilde;y để ch&uacute; gấu b&ocirc;ng v&agrave; b&oacute; hoa First Date gi&uacute;p bạn nha!</p>'),
(43, 'Summer Delight', 'm3', 'm3.jpeg', 900000, 900000, 10, 4, 3, '1', '<p>Sắc cam rực rỡ của những c&agrave;nh hoa hồng David mang lại nguồn năng lượng t&iacute;ch cực v&agrave; s&ocirc;i nổi như m&ugrave;a h&egrave;. C&ugrave;ng lan tỏa nguồn năng lượng th&ecirc;m y&ecirc;u đời n&agrave;y đến những người th&acirc;n y&ecirc;u trong dịp sinh nhật, ch&uacute;c mừng,.... với b&oacute; hoa Summer Delight n&agrave;y nha!</p>'),
(45, 'Stand By You', 'm5', 'm5.jpeg', 900000, 900000, 1, 4, 1, '1', '<p>Ch&uacute; gấu b&ocirc;ng t&iacute; hon c&ugrave;ng với b&ocirc;ng hoa hồng v&ocirc; c&ugrave;ng đ&aacute;ng y&ecirc;u sẽ l&agrave; \"người đưa đ&ograve;\" gửi gắm t&igrave;nh y&ecirc;u của bạn đến những người th&acirc;n y&ecirc;u n&egrave;! C&ugrave;ng khiến cho mọi người hạnh ph&uacute;c v&agrave; vui vẻ cả ng&agrave;y với b&oacute; hoa dễ thương Stand By You nha!</p>'),
(51, 'Remember You', 't1', 't1.jpeg', 900000, 899000, 1, 5, 1, '1', '<p>Chia sẻ v&agrave; cảm th&ocirc;ng với sự mất m&aacute;t, chia ly c&ugrave;ng kệ hoa lan trắng Remember You.</p>'),
(52, 'Gentle Sentiment', 't2', 't2.jpeg', 900000, 899000, 10, 5, 1, '1', '<p>Gửi lời chia sẻ tới người nhận với V&ograve;ng Hoa Chia Buồn Gentle Sentiment</p>'),
(54, 'Dearly Remembered', 't4', 't4.jpeg', 900000, 900000, 1, 5, 1, '1', '<p>Gửi lời chia sẻ tới người nhận với V&ograve;ng Hoa Chia Buồn Dearly Remembered.</p>'),
(91, 'Blooms Of Magnificence', 'w1', 'w1.jpeg', 900000, 900000, 12, 1, 1, '1', '<p>Kh&ocirc;ng chỉ rực rỡ v&agrave; sang trọng, hộp hoa hồng cao cấp Blooms Of Magnificence c&ograve;n v&ocirc; c&ugrave;ng lộng lẫy cho bất k&igrave; sự kiện đặc biệt n&agrave;o.</p>\r\n<p><span style=\"font-family: Roboto, sans-serif; font-size: medium;\">Đừng ngại biến c&aacute;c dịp khai trương, ch&uacute;c mừng,... trở n&ecirc;n sang trọng hơn bao giờ hết với hộp hoa hồng cực kỳ nổi bật n&agrave;y.</span></p>'),
(92, 'Cinderella Bridal', 'w3', 'w3.webp', 900000, 900000, 20, 1, 4, '1', '<p>B&oacute; hoa hồng nh&atilde; nhặn, tinh khiết v&agrave; thanh lịch sẽ t&ocirc; điểm th&ecirc;m cho bạn trong ng&agrave;y trọng đại của m&igrave;nh.</p>'),
(94, 'Combo Shine Your Light', 'm1', 'm1.jpeg', 900000, 900000, 20, 4, 3, '1', '<p>Với th&ocirc;ng điệp giống như c&aacute;i t&ecirc;n \"H&atilde;y tỏa s&aacute;ng theo c&aacute;ch của bạn\", combo qu&agrave; tặng n&agrave;y chắc chắn sẽ khiến những người th&acirc;n y&ecirc;u hạnh ph&uacute;c v&agrave; y&ecirc;u đời cả ng&agrave;y đ&oacute;! Đừng ngần ngại lan tỏa y&ecirc;u thương v&agrave; những th&ocirc;ng điệp t&iacute;ch cực với m&oacute;n qu&agrave; Shine Your Light n&agrave;y nha!</p>'),
(95, 'Love Someone', 'm4', 'm4.jpeg', 900000, 900000, 20, 4, 3, '1', '<p>Một b&oacute; hoa nhẹ nh&agrave;ng tươi thắm như những c&agrave;nh hoa tulip hồng v&agrave; tulip t&iacute;m chắc chắn sẽ khiến những người th&acirc;n y&ecirc;u hạnh ph&uacute;c cả ng&agrave;y. C&ugrave;ng gửi gắm y&ecirc;u thương đến bạn b&egrave;, người th&acirc;n với b&oacute; hoa Love Someone n&agrave;y nha!</p>'),
(96, 'Relief', 't3', 't3.jpeg', 900000, 900000, 10, 5, 1, '1', '<p>Gửi lời chia sẻ tới người nhận với V&ograve;ng Hoa Chia Buồn Relief</p>'),
(97, ' Deepest Sympathy', 't5', 't5.jpeg', 900000, 900000, 10, 5, 1, '1', '<p>Gửi lời chia sẻ tới người nhận với V&ograve;ng Hoa Chia Buồn Deepest Sympathy</p>'),
(98, 'La Vie En Rose', 'v1', 'v1.jpeg', 900000, 900000, 20, 2, 1, '1', '<p>B&oacute; hoa mang gam m&agrave;u pastel nhẹ nh&agrave;ng đầy trang nh&atilde;...</p>'),
(99, 'Beautiful You', 'v2', 'va2.jpeg', 900000, 900000, 20, 2, 1, '1', '<p>B&oacute; hoa hồng đỏ đơn giản được g&oacute;i rất trẻ trung v&agrave; thanh lịch l&agrave; một trong những mẫu Best Seller của ch&uacute;ng t&ocirc;i.L&agrave; lựa chọn ho&agrave;n hảo cho ng&agrave;y Valentine hoặc bất kỳ dịp đặc biệt n&agrave;o.</p>'),
(100, 'Fly Me To The Moon', 'v3', 'va3.jpeg', 900000, 900000, 20, 2, 1, '1', '<p>B&oacute; hoa Hồng với gam m&agrave;u nh&atilde; nhặn, thanh lịch v&agrave; đầy nữ t&iacute;nh sẽ l&agrave; m&oacute;n qu&agrave; bất ngờ v&agrave; ho&agrave;n hảo d&agrave;nh tặng người thương, gia đ&igrave;nh hoặc bạn b&egrave;.</p>'),
(101, 'True Love', 'v4', 'va4.jpeg', 900000, 900000, 10, 2, 3, '1', '<p>B&oacute; hoa sang trọng v&agrave; lộng lẫy với 99 b&ocirc;ng hoa Hồng đỏ rực rỡ l&agrave; lựa chọn ho&agrave;n hảo gửi đến người th&acirc;n y&ecirc;u trong ng&agrave;y Valentine hoặc bất kỳ dịp đặc biệt n&agrave;o.</p>'),
(102, 'Shining Ruby', 'v5', 'va5.jpeg', 900000, 900000, 10, 2, 4, '1', '<p>M&oacute;n qu&agrave; l&atilde;ng mạn v&agrave; tinh tế d&agrave;nh tặng người thương, gia đ&igrave;nh hoặc bạn b&egrave;.</p>'),
(103, 'Combo Pretty On The Inside', 's1', 'n1.jpeg', 900000, 900000, 10, 3, 3, '1', '<p>Nh&acirc;n đ&ocirc;i sự dễ thương v&agrave; ngọt ng&agrave;o đến những người th&acirc;n y&ecirc;u với combo Pretty On The Inside n&agrave;y nha! Đ&acirc;y sẽ l&agrave; sự lựa chọn v&ocirc; c&ugrave;ng tuyệt vời thay lời y&ecirc;u thương đ&oacute;.</p>'),
(104, 'Melted Love', 's2', 'n2.jpeg', 900000, 900000, 20, 3, 1, '1', '<p>H&atilde;y để sắc cam từ những c&agrave;nh hoa hồng v&ocirc; c&ugrave;ng rực rỡ v&agrave; nồng nhiệt lan tỏa t&igrave;nh y&ecirc;u của bạn đến người thương nha! Ấn tượng đầu ti&ecirc;n thường rất kh&oacute; phai, vậy th&igrave; ngại g&igrave; m&agrave; kh&ocirc;ng \"ghi điểm\" với người th&acirc;n y&ecirc;u bằng b&oacute; hoa Melted Love n&agrave;y.</p>'),
(105, 'Rosy Rosie', 's3', 'n3.jpeg', 900000, 900000, 20, 3, 4, '1', '<p>Chiếc b&aacute;nh kem từ những b&ocirc;ng hoa hồng v&agrave; hoa cẩm chướng v&ocirc; c&ugrave;ng ngọt ng&agrave;o sẽ l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa nhất gửi tặng đến người th&acirc;n y&ecirc;u.</p>'),
(106, 'Infinite Love', 's4', 'n4.jpeg', 900000, 900000, 12, 3, 1, '1', '<p>Vẻ đẹp đơn giản nhưng kh&ocirc;ng k&eacute;m phần nồng nhiệt từ những c&agrave;nh hoa Tulip đỏ chắc chắn sẽ l&agrave; m&oacute;n qu&agrave; v&ocirc; c&ugrave;ng l&atilde;ng mạn đến những người th&acirc;n y&ecirc;u. C&ugrave;ng khiến cho những khoảnh khắc trở n&ecirc;n rực rỡ hơn với b&oacute; hoa Infinite Love n&agrave;y nha!</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(11) NOT NULL,
  `tentintuc` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tentintuc`, `matin`, `hinhanh`, `noidung`, `tinhtrang`) VALUES
(1, 'Chính sách giao hàng và vận chuyển hoa tươi', 't2', 'tintuchoa.jpg', '<p>Để c&oacute; thể vận chuyển hoa an to&agrave;n kh&ocirc;ng phải l&agrave; nhiệm vụ dễ d&agrave;ng thực hiện, kể cả với những shop hoa l&acirc;u năm, d&agrave;y dạn kinh nghiệm. Trong khi đ&oacute;, nhu cầu đặt ship hoa của kh&aacute;ch h&agrave;ng ng&agrave;y c&agrave;ng tăng cao, c&aacute;c shop hoa lại c&agrave;ng cần đầu tư nghi&ecirc;m t&uacute;c trong mảng kinh doanh n&agrave;y. H&atilde;y x&acirc;y dựng một ch&iacute;nh s&aacute;ch giao h&agrave;ng &ndash; vận chuyển &ndash; thanh to&aacute;n r&otilde; r&agrave;ng nhưng phải đồng bộ cả tr&ecirc;n website lẫn fanpage. Ch&iacute;nh s&aacute;ch phải linh hoạt, kh&eacute;o l&eacute;o ph&ugrave; hợp với lợi &iacute;ch của cả đ&ocirc;i b&ecirc;n. Ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch lẻ hay bu&ocirc;n, kh&aacute;ch gần hay kh&aacute;ch xa. Như vậy, kh&aacute;ch h&agrave;ng sẽ cảm thấy thoải m&aacute;i hơn nhiều khi mua sắm b&ecirc;n shop của bạn.</p>', '1'),
(6, 'Thị trường hoa Tết 2022 chịu tác động kép từ thời tiết và ảnh hưởng của dịch Covid-19', '111', 'gia-hoa-tet-2021.jpg', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Roboto, sans-serif; font-size: 15px;\">Tết Nh&acirc;m Dần 2022 đang cận kề nhưng thị trường hoa Tết chưa nhộn nhịp v&agrave; s&ocirc;i động như mọi năm do chịu t&aacute;c động k&eacute;p từ ảnh hưởng của đại dịch Covid-19 v&agrave; thương l&aacute;i thu mua cầm chừng. Theo đ&oacute;, do ảnh hưởng của dịch n&ecirc;n sản lượng hoa Tết ti&ecirc;u thụ &iacute;t khiến nhiều nh&agrave; vườn kh&ocirc;ng d&aacute;m mở rộng sản xuất. Gi&aacute; nguy&ecirc;n liệu đầu v&agrave;o cao, hoa ra đ&uacute;ng vụ nhưng thương l&aacute;i chỉ thu mua cầm chừng bằng 1/3 so với c&ugrave;ng k&igrave; năm ngo&aacute;i.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Roboto, sans-serif; font-size: 15px;\">C&aacute;c loại hoa chủ lực năm nay l&agrave; đ&agrave;o phai, mai đỏ, t&ugrave;ng tuyết mai, mộc lan, thược dược, hoa hồng, hoa ly v&agrave; c&aacute;c loại c&uacute;c vạn thọ, m&acirc;m x&ocirc;i, h&agrave; lan,&hellip;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Roboto, sans-serif; font-size: 15px;\">Đ&acirc;y đều l&agrave; những loại hoa được dễ trồng, dễ sống, chi ph&iacute; đầu tư thấp, gi&aacute; trị b&igrave;nh ổn. Song song với việc trồng hoa Tết th&igrave; năm nay nhiều nh&agrave; vườn c&ograve;n t&iacute;nh tới phương &aacute;n trồng c&aacute;c loại rau thơm l&agrave;m gia vị như c&aacute;c loại rau ăn l&aacute;, dưa leo, cải thảo, khoai m&igrave;, đậu bắp,&hellip; để cứu thua v&agrave; kiếm th&ecirc;m.</p>', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Chỉ mục cho bảng `kichcosp`
--
ALTER TABLE `kichcosp`
  ADD PRIMARY KEY (`idkichcosp`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`idloaisp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `kichcosp`
--
ALTER TABLE `kichcosp`
  MODIFY `idkichcosp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `idloaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

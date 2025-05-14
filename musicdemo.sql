-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `albumcasi`
--

CREATE TABLE `albumcasi` (
  `id_album` int(11) NOT NULL,
  `id_casi` int(11) DEFAULT NULL,
  `linkAnh` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albumcasi`
--

INSERT INTO `albumcasi` (`id_album`, `id_casi`, `linkAnh`) VALUES
(1, 1, 'albumCaSi/SonTungMTP.jpg'),
(2, 1, 'albumCaSi/SonTungMTP2.jpg'),
(3, 1, 'albumCaSi/SonTungMTP3.jpg'),
(4, 2, 'albumCaSi/DuongDomic1.jpg'),
(5, 2, 'albumCaSi/DuongDomic2.jpg'),
(6, 2, 'albumCaSi/DuongDomic3.jpg'),
(7, 3, 'albumCaSi/buitruonglinh1.jpg'),
(8, 3, 'albumCaSi/buitruonglinh2.jpg'),
(9, 3, 'albumCaSi/buitruonglinh3.jpg'),
(10, 4, 'albumCaSi/kha1.jpg'),
(11, 4, 'albumCaSi/kha2.jpg'),
(12, 4, 'albumCaSi/kha3.jpg'),
(13, 5, 'albumCaSi/jack1.jpg'),
(14, 5, 'albumCaSi/jack2.jpg'),
(15, 5, 'albumCaSi/jack3.jpg'),
(16, 6, 'albumCaSi/tungduong1.jpg'),
(17, 6, 'albumCaSi/tungduong2.jpg'),
(18, 6, 'albumCaSi/tungduong3.jpg'),
(19, 7, 'albumCaSi/hth1.jpg'),
(20, 7, 'albumCaSi/hth2.jpg'),
(21, 7, 'albumCaSi/hth3.jpg'),
(22, 8, 'albumCaSi/qh1.jpg'),
(23, 8, 'albumCaSi/qh2.jpg'),
(24, 8, 'albumCaSi/qh2.jpg'),
(25, 9, 'albumCaSi/hoamz1.jpg'),
(26, 9, 'albumCaSi/hoamz2.jpg'),
(27, 9, 'albumCaSi/hoamz3.jpg'),
(28, 10, 'albumCaSi/nganngan1.jpg'),
(29, 10, 'albumCaSi/nganngan2.jpg'),
(30, 10, 'albumCaSi/nganngan3.jpg'),
(31, 21, 'albumCaSi/bray1.jpg'),
(32, 21, 'albumCaSi/bray2.jpg'),
(33, 21, 'albumCaSi/bray3.jpg'),
(34, 22, 'albumCaSi/hades1.jpg'),
(35, 22, 'albumCaSi/hades2.jpg'),
(36, 22, 'albumCaSi/hades3.jpg'),
(37, 23, 'albumCaSi/puppy1.jpg'),
(38, 23, 'albumCaSi/puppy2.jpg'),
(39, 23, 'albumCaSi/puppy3.jpg'),
(40, 24, 'albumCaSi/rb1.jpg'),
(41, 24, 'albumCaSi/rb2.jpg'),
(42, 24, 'albumCaSi/rb3.jpg'),
(43, 25, 'albumCaSi/phao1.jpg'),
(44, 25, 'albumCaSi/phao2.jpg'),
(45, 25, 'albumCaSi/phao3.jpg'),
(46, 26, 'albumCaSi/denvau1.jpg'),
(47, 26, 'albumCaSi/denvau2.jpg'),
(48, 26, 'albumCaSi/denvau3.jpg'),
(49, 27, 'albumCaSi/mck1.jpg'),
(50, 27, 'albumCaSi/mck2.jpg'),
(51, 27, 'albumCaSi/mck3.jpg'),
(52, 28, 'albumCaSi/pk1.jpg'),
(53, 28, 'albumCaSi/pk2.jpg'),
(54, 28, 'albumCaSi/pk3.jpg'),
(55, 29, 'albumCaSi/obito1.jpg'),
(56, 29, 'albumCaSi/obito2.jpg'),
(57, 29, 'albumCaSi/obito3.jpg'),
(58, 30, 'albumCaSi/dangrangto1.jpg'),
(59, 30, 'albumCaSi/dangrangto2.jpg'),
(60, 30, 'albumCaSi/dangrangto3.jpg'),
(61, 11, 'albumCaSi/nguyenthuhang_1.jpg'),
(62, 11, 'albumCaSi/nguyenthuhang_2.jpg'),
(63, 11, 'albumCaSi/nguyenthuhang_3.jpg'),
(64, 11, 'albumCaSi/nguyenthuhang_4.jpg'),
(65, 12, 'albumCaSi/Yennhien1.jpg'),
(66, 12, 'albumCaSi/Yennhien2.jpg'),
(67, 12, 'albumCaSi/Yennhien3.jpg'),
(68, 13, 'albumCaSi/dothanhdanh1.jpg'),
(69, 13, 'albumCaSi/dothanhdanh2.jpg'),
(70, 13, 'albumCaSi/dothanhdanh3.jpg'),
(71, 14, 'albumCaSi/quangha1.jpg'),
(72, 14, 'albumCaSi/quangha2.jpg'),
(73, 14, 'albumCaSi/quangha3.jpg'),
(74, 15, 'albumCaSi/hoangminhthang1.jpg'),
(75, 15, 'albumCaSi/hoangminhthang2.jpg'),
(76, 15, 'albumCaSi/hoangminhthang3.jpg'),
(77, 16, 'albumCaSi/thanhhoa1.jpg'),
(78, 16, 'albumCaSi/thanhhoa2.jpg'),
(79, 16, 'albumCaSi/thanhhoa3.jpg'),
(80, 17, 'albumCaSi/khuonghung1.jpg'),
(81, 17, 'albumCaSi/khuonghung2.jpg'),
(82, 17, 'albumCaSi/khuonghung3.jpg'),
(83, 18, 'albumCaSi/huonggiang1.jpg'),
(84, 18, 'albumCaSi/huonggiang2.jpg'),
(85, 18, 'albumCaSi/huonggiang3.jpg'),
(86, 19, 'albumCaSi/taminhtam1.jpg'),
(87, 19, 'albumCaSi/taminhtam2.jpg'),
(88, 19, 'albumCaSi/taminhtam3.jpg'),
(89, 20, 'albumCaSi/quangthien1.jpg'),
(90, 20, 'albumCaSi/quangthien2.jpg'),
(91, 20, 'albumCaSi/quangthien3.jpg'),
(92, 20, 'albumCaSi/quangthien4.jpg'),
(93, 20, 'albumCaSi/quangthien5.jpg'),
(151, 31, 'albumCaSi/31_Rihanna_1.jpg'),
(152, 31, 'albumCaSi/31_Rihanna_2.jpg'),
(153, 31, 'albumCaSi/31_Rihanna_3.jpg'),
(154, 31, 'albumCaSi/31_Rihanna_4.jpg'),
(155, 31, 'albumCaSi/31_Rihanna_5.jpg'),
(156, 32, 'albumCaSi/32_ImagineDragons_1.jpg'),
(157, 32, 'albumCaSi/32_ImagineDragons_2.jpg'),
(158, 32, 'albumCaSi/32_ImagineDragons_3.jpg'),
(159, 32, 'albumCaSi/32_ImagineDragons_4.jpg'),
(160, 32, 'albumCaSi/32_ImagineDragons_5.jpg'),
(161, 33, 'albumCaSi/33_TokyoSquare_1.jpg'),
(162, 33, 'albumCaSi/33_TokyoSquare_2.jpg'),
(163, 33, 'albumCaSi/33_TokyoSquare_3.jpg'),
(164, 33, 'albumCaSi/33_TokyoSquare_4.jpg'),
(165, 34, 'albumCaSi/34_DianaRoss_1.jpg'),
(166, 34, 'albumCaSi/34_DianaRoss_2.jpg'),
(167, 34, 'albumCaSi/34_DianaRoss_3.jpg'),
(168, 34, 'albumCaSi/34_DianaRoss_4.jpg'),
(169, 34, 'albumCaSi/34_DianaRoss_5.jpg'),
(170, 35, 'albumCaSI/35_Vengaboys_1.jpg'),
(171, 35, 'albumCaSI/35_Vengaboys_2.jpg'),
(172, 35, 'albumCaSI/35_Vengaboys_3.jpg'),
(173, 35, 'albumCaSI/35_Vengaboys_4.jpg'),
(174, 35, 'albumCaSI/35_Vengaboys_5.jpg'),
(175, 36, 'albumCaSi/36_Aqua_1.jpg'),
(176, 36, 'albumCaSi/36_Aqua_2.jpg'),
(177, 36, 'albumCaSi/36_Aqua_3.jpg'),
(178, 36, 'albumCaSi/36_Aqua_4.jpg'),
(179, 36, 'albumCaSi/36_Aqua_5.jpg'),
(180, 37, 'albumCaSi/37_Cher_1.jpg'),
(181, 37, 'albumCaSi/37_Cher_2.jpg'),
(182, 37, 'albumCaSi/37_Cher_3.jpg'),
(183, 37, 'albumCaSi/37_Cher_4.jpg'),
(184, 37, 'albumCaSi/37_Cher_5.jpg'),
(185, 38, 'albumCaSi/38_Boyzone_1.jpg'),
(186, 38, 'albumCaSi/38_Boyzone_2.jpg'),
(187, 38, 'albumCaSi/38_Boyzone_3.jpg'),
(188, 38, 'albumCaSi/38_Boyzone_4.jpg'),
(189, 38, 'albumCaSi/38_Boyzone_5.jpg'),
(190, 39, 'albumCaSi/39_RichardMarx_1.jpg'),
(191, 39, 'albumCaSi/39_RichardMarx_2.jpg'),
(192, 39, 'albumCaSi/39_RichardMarx_3.jpg'),
(193, 39, 'albumCaSi/39_RichardMarx_4.jpg'),
(194, 39, 'albumCaSi/39_RichardMarx_5.jpg'),
(195, 40, 'albumCaSi/40_MichaelJackSon_1.jpg'),
(196, 40, 'albumCaSi/40_MichaelJackSon_2.jpg'),
(197, 40, 'albumCaSi/40_MichaelJackSon_3.jpg'),
(198, 40, 'albumCaSi/40_MichaelJackSon_4.jpg'),
(199, 40, 'albumCaSi/40_MichaelJackSon_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `id_baihat` int(11) NOT NULL,
  `id_casi` int(11) DEFAULT NULL,
  `tenbaihat` varchar(100) DEFAULT NULL,
  `theloai` varchar(50) DEFAULT NULL,
  `luotnghe` int(11) DEFAULT NULL,
  `album` varchar(255) DEFAULT NULL,
  `linknhac` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id_baihat`, `id_casi`, `tenbaihat`, `theloai`, `luotnghe`, `album`, `linknhac`) VALUES
(1, 1, 'Âm thầm bên em', 'Nhạc trẻ', 0, 'album/Amthambenem.jpg', 'audio/nhactre1.mp3'),
(2, 1, 'Anh sai rồi', 'Nhạc trẻ', 0, 'album/AnhSaiRoi.jpg', 'audio/nhactre2.mp3'),
(3, 1, 'Chắc ai đó sẽ về ', 'Nhạc trẻ', 0, 'album/chacaidoseve.jpg', 'audio/nhactre3.mp3'),
(4, 2, 'Chập chờn', 'Nhạc trẻ', 0, 'album/chapchon.jpg', 'audio/nhactre8.mp3'),
(5, 2, 'Pin dự phòng', 'Nhạc trẻ', 0, 'album/pinduphong.jpg', 'audio/nhactre9.mp3'),
(6, 2, 'Tràn bộ nhớ', 'Nhạc trẻ', 0, 'album/tranbonho.jpg', 'audio/nhactre10.mp3'),
(7, 3, 'Anh đứng đây từ giờ tới mai', 'Nhạc trẻ', 0, 'album/anhdungdaytugiotoimai.jpg', 'audio/nhactre4.mp3'),
(8, 3, 'Chân đất', 'Nhạc trẻ', 0, 'album/chandat.jpg', 'audio/nhactre5.mp3'),
(9, 3, 'Dại', 'Nhạc trẻ', 0, 'album/dai.jpg', 'audio/nhactre6.mp3'),
(10, 3, 'Em à', 'Nhạc trẻ', 0, 'album/ema.jpg', 'audio/nhactre7.mp3'),
(11, 4, 'Em có nghe', 'Nhạc trẻ', 0, 'album/emconghe.jpg', 'audio/nhactre20.mp3'),
(12, 4, 'Lời yêu ngây dại', 'Nhạc trẻ', 0, 'album/loiyeungaydai.jpg', 'audio/nhactre21.mp3'),
(13, 5, 'Hoa hải đường', 'Nhạc trẻ', 0, 'album/jack1.jpg', 'audio/nhactre28.mp3'),
(14, 5, 'Ngôi sao cô đơn', 'Nhạc trẻ', 0, 'album/jack1.jpg', 'audio/nhactre29.mp3'),
(15, 5, 'Đom đóm', 'Nhạc trẻ', 0, 'album/jack1.jpg', 'audio/nhactre30.mp3'),
(16, 6, 'Áo mùa đông', 'Nhạc trẻ', 0, 'album/aomuadong.jpg', 'audio/nhactre19.mp3'),
(17, 6, 'Bài ca hi vọng', 'Nhạc trẻ', 0, 'album/baicahivong.jpg', 'audio/nhactre17.mp3'),
(18, 6, 'Mẹ (album lời tặng mẹ)', 'Nhạc trẻ', 0, 'album/me.jpg', 'audio/nhactre18.mp3'),
(19, 7, 'Giờ thì ai cười', 'Nhạc trẻ', 0, 'album/giothiaicuoi.jpg', 'audio/nhactre13.mp3'),
(20, 7, 'Không phải gu', 'Nhạc trẻ', 0, 'album/khongphaigu.jpg', 'audio/nhactre11.mp3'),
(21, 7, 'Siêu sao', 'Nhạc trẻ', 0, 'album/sieusao.jpg', 'audio/nhactre12.mp3'),
(22, 8, 'Đã có anh', 'Nhạc trẻ', 0, 'album/dacoanh.jpg', 'audio/nhactre27.mp3'),
(23, 8, 'Dễ đến dễ đi', 'Nhạc trẻ', 0, 'album/dedendedi.jpg', 'audio/nhactre25.mp3'),
(24, 8, 'Đừng vì anh mà khóc', 'Nhạc trẻ', 0, 'album/dungvianhmakhoc.jpg', 'audio/nhactre26.mp3'),
(25, 9, 'Nếu mai này xa nhau', 'Nhạc trẻ', 0, 'album/neumainayxanhau.jpg', 'audio/nhactre14.mp3'),
(26, 9, 'Người đến sau thay em', 'Nhạc trẻ', 0, 'album/nguoidensauthayem.jpg', 'audio/nhactre15.mp3'),
(27, 9, 'Thị Mầu', 'Nhạc trẻ', 0, 'album/thimau.jpg', 'audio/nhactre16.mp3'),
(28, 11, 'Lậy mẹ quang âm', 'Nhạc trẻ', 0, 'album/laymequangam.jpg', 'audio/nhactre22.mp3'),
(29, 11, 'Lậy phật con về', 'Nhạc trẻ', 0, 'album/nth.jpg', 'audio/nhactre23.mp3'),
(30, 11, 'Mẹ từ bi', 'Nhạc trẻ', 0, 'album/nth.jpg', 'audio/nhactre24.mp3'),
(31, 11, 'Ơn Bác Hồ Với Người Tây Nguyên', 'Nhạc Đỏ', 5800, 'album/31_OBHVNTN.jpg', 'audio/31_OBHVNTN.mp3'),
(32, 11, 'Đêm Nghe Đò Đưa Nhớ Bác', 'Nhạc Đỏ', 3600, 'album/32_ĐNĐĐNB.jpg', 'audio/32_ĐNĐĐNB.mp3'),
(33, 11, 'Đất Nước', 'Nhạc Đỏ', 3100, 'album/33_ĐN.jpg', 'audio/33_ĐN.mp3'),
(34, 12, 'Bài Ca Thống Nhất', 'Nhạc Đỏ', 2500, 'album/34_BCTN.jpg', 'audio/34_BCTN.mp3'),
(35, 12, 'Hành Khúc Ngày Và Đêm', 'Nhạc Đỏ', 3682, 'album/35_HKNVĐ.jpg', 'audio/35_HKNVĐ.mp3'),
(36, 12, 'Đường Trường Sơn Xe Anh Qua', 'Nhạc Đỏ', 1065, 'album/36_ĐTSXAQ.jpg', 'audio/36_ĐTSXAQ.mp3'),
(37, 13, 'Chào Anh Giải Phóng Quân', 'Nhạc Đỏ', 1654, 'album/37_CAGPQ.jpg', 'audio/37_CAGPQ.mp3'),
(38, 13, 'Tổ Quốc Tôi Chưa Đẹp Thế Bao Giờ', 'Nhạc Đỏ', 887, 'album/38_TQTCĐNTBG.jpg', 'audio/38_TQTCĐTBG.mp3'),
(39, 13, 'Mãi Mãi Niềm Tin Theo Đảng', 'Nhạc Đỏ', 986, 'album/39_MMNTTĐ.jpg', 'audio/39_MMNTTĐ.mp3'),
(40, 14, 'Bài Ca Hồ Chí Minh', 'Nhạc Đỏ', 5000, 'album/40_BCHCM.jpg', 'audio/40_BCHCM.mp3'),
(41, 14, 'Giai Điệu Tổ Quốc', 'Nhạc Đỏ', 4540, 'album/41_GĐTQ.jpg', 'audio/41_GDTQ.mp3'),
(42, 14, 'Mùa Xuân Bên Cửa Sổ ', 'Nhạc Đỏ', 1100, 'album/42_MXBCS.jpg', 'audio/42_MXBCS.mp3'),
(43, 15, 'Như Có Bác Hồ Trong Ngày Vui Đại Thắng', 'Nhạc Đỏ', 8990, 'album/43_NCBHTNVĐT.jpg', 'audio/43_NCBHTNVĐT.mp3'),
(44, 15, 'Cô Gái Mở Đường', 'Nhạc Đỏ', 7576, 'album/44_CGMĐ.jpg', 'audio/44_CGMĐ.mp3'),
(45, 16, 'Cùng Hành Quân Giữa Mùa Xuân', 'Nhạc Đỏ', 4505, 'album/45_CHQGMX.jpg', 'audio/45_CHQGMX.mp3'),
(46, 16, 'Bác Hồ Một Tình Yêu Bao La', 'Nhạc Đỏ', 1251, 'album/46_BHMTYBL.jpg', 'audio/46_BHMTYBL.mp3'),
(47, 16, 'Con Kênh  Ta Đào', 'Nhạc Đỏ', 4524, 'album/47_CKTĐ.jpg', 'audio/47_CKTĐ.mp3'),
(48, 16, 'Tàu Anh Qua Núi', 'Nhạc Đỏ', 7372, 'album/48_TAQN.jpg', 'audio/48_TAQN.mp3'),
(49, 17, 'Lời Bác Dạy Từ Mùa Xuân Năm Ây', 'Nhạc Đỏ', 7404, 'album/49_LBHDTMXjpg.jpg', 'audio/49_LBDTMX.mp3'),
(50, 17, 'Đảng Là Cuộc Sống Của Tôi', 'Nhạc Đỏ', 5421, 'album/50_ĐLCSCT.jpg', 'audio/50_ĐLCSCT.mp3'),
(51, 17, 'Dưới Lá Cờ Vinh Quang', 'Nhạc Đỏ', 1253, 'album/51_DLCVQ.jpg', 'audio/51_DLCVQ.mp3'),
(52, 18, 'Bài Ca Đường Chín Chiến Thắng', 'Nhạc Đỏ', 4512, 'album/52_BCĐCCT.jpg', 'audio/52_BCĐCCT.mp3'),
(53, 18, 'Bài Ca Người Nữ Tự Vệ Sài Gòn', 'Nhạc Đỏ', 1201, 'album/53_BCNNTVSG.jpg', 'audio/53_BCNNTVSG.mp3'),
(54, 18, 'Màu Hoa Đỏ', 'Nhạc Đỏ', 4531, 'album/54_MHĐ.jpg', 'audio/54_MHĐ.mp3'),
(55, 19, 'Đất Nước Trọn Niềm Vui', 'Nhạc Đỏ', 9682, 'album/55_ĐNTNV.jpg', 'audio/55_ĐNTNV.mp3'),
(56, 19, 'Trường Sơn Đông Trường Sơn Tây', 'Nhạc Đỏ', 9142, 'album/56_TSĐTST.jpg', 'audio/56_TSĐTST.mp3'),
(57, 19, 'Lá Đỏ', 'Nhạc Đỏ', 434, 'album/57_LĐ.jpg', 'audio/57_LĐ.mp3'),
(58, 20, 'Tổ Quốc Gọi Tên Mình', 'Nhạc Đỏ', 4524, 'album/58__TQGTM.jpg', 'audio/58_TQGTM.mp3'),
(59, 20, 'Linh Thiêng Việt Nam', 'Nhạc Đỏ', 3443, 'album/59_LTVN.jpg', 'audio/59_LTVN.mp3'),
(60, 20, 'Bài Ca Xây Dựng', 'Nhạc Đỏ', 1210, 'album/60_BCXD.jpg', 'audio/60_BCXD.mp3'),
(61, 21, 'GHỆ MỚI', 'Nhạc Rap', 1, 'album/ghemoi.jpg', 'audio/ghemoi.mp3'),
(62, 21, 'Hoàn Hảo', 'Nhạc Rap', 2, 'album/hoanhao.jpg', 'audio/hoanhao.mp3'),
(63, 21, 'ba da bum', 'Nhạc Rap', 3, 'album/badabum.jpg', 'audio/badabum.mp3'),
(64, 22, 'Rồi Lại Quên (ft. Yungd)', 'Nhạc Rap', 4, 'album/roilaiquen.jpg', 'audio/roilaiquen.mp3'),
(65, 22, 'Nhất sách', 'Nhạc Rap', 5, 'album/nhatsach.jpg', 'audio/nhatsach.mp3'),
(66, 22, 'Lời Yêu Ngàn Năm', 'Nhạc Rap', 6, 'album/loiyeungannam.jpg', 'audio/loiyeungannam.mp3'),
(67, 23, '1TINHYEU', 'Nhạc Rap', 7, 'album/1tinhyeu.jpg', 'audio/1tinhyeu.mp3'),
(68, 23, 'Wrong Times', 'Nhạc Rap', 8, 'album/wrongtimes.jpg', 'audio/wrongtimes.mp3'),
(69, 23, 'Love somebody', 'Nhạc Rap', 9, 'album/lovesomebody.jpg', 'audio/lovesomebody.mp3'),
(70, 24, 'Lan Man', 'Nhạc Rap', 10, 'album/lanman.jpg', 'audio/lanman.mp3'),
(71, 24, 'lời không nói', 'Nhạc Rap', 11, 'album/loikhongnoi.jpg', 'audio/loikhongnoi.mp3'),
(72, 24, 'khi mà', 'Nhạc Rap', 12, 'album/khima.jpg', 'audio/khima.mp3'),
(73, 25, '2 Phút Hơn', 'Nhạc Rap', 13, 'album/2phuthon.jpg', 'audio/2phuthon.mp3'),
(74, 25, 'sự nghiệp chướng', 'Nhạc Rap', 14, 'album/sunghiepchu.jpg', 'audio/sunghiepchuong.mp3'),
(75, 25, 'Kìa bóng dáng ai', 'Nhạc Rap', 15, 'album/kiabongdangai.jpg', 'audio/kiabongdangai.mp3'),
(76, 26, 'Vị Nhà', 'Nhạc Rap', 16, 'album/vinha.jpg', 'audio/vinha.mp3'),
(77, 26, 'nhạc của rừng', 'Nhạc Rap', 17, 'album/nhaccuarung.jpg', 'audio/nhaccuarung.mp3'),
(78, 26, 'Bài này chill phết', 'Nhạc Rap', 18, 'album/bainaychillphet.jpg', 'audio/bainaychillphet.mp3'),
(79, 27, 'Thap drill tu do', 'Nhạc Rap', 100, 'album/thapdrilltudo.jpg', 'audio/thapdrilltudo.mp3'),
(80, 27, 'Chìm sâu', 'Nhạc Rap', 20, 'album/chimsau.jpg', 'audio/chimsau.mp3'),
(81, 27, 'Phong cách', 'Nhạc Rap', 21, 'album/phongcach.jpg', 'audio/phongcach.mp3'),
(82, 28, 'COLORS', 'Nhạc Rap', 22, 'album/COLORS.jpg', 'audio/COLORS.mp3'),
(83, 28, 'Lối đi riêng', 'Nhạc Rap', 23, 'album/loidirieng.jpg', 'audio/loidirieng.mp3'),
(84, 28, 'Cung tên tình yêu', 'Nhạc Rap', 24, 'album/cungtentinhyeu.jpg', 'audio/cungtentinhyeu.mp3'),
(85, 29, 'Sài Gòn ơi', 'Nhạc Rap', 25, 'album/saigonoi.jpg', 'audio/saigonoi.mp3'),
(86, 29, 'Đánh đổi', 'Nhạc Rap', 26, 'album/danhdoi.jpg', 'audio/danhdoi.mp3'),
(87, 29, 'thap trap tu do', 'Nhạc Rap', 27, 'album/thaptraptudo.jpg', 'audio/thaptraptudo.mp3'),
(88, 30, 'Love is', 'Nhạc Rap', 28, 'album/loveis.jpg', 'audio/loveis.mp3'),
(89, 30, 'MOIEM', 'Nhạc Rap', 29, 'album/MOIEM.jpg', 'audio/MOIEM.mp3'),
(90, 30, 'ngựa ô', 'Nhạc Rap', 30, 'album/nguao.jpg', 'audio/nguao.mp3'),
(91, 31, 'Diamonds', 'Nhạc Âu', 100, 'album/diamonds.jpg', 'audio/diamonds.mp3'),
(92, 31, 'This Is What You Came For', 'Nhạc Âu', 200, 'album/thisiswhatyoucamefor.jpg', 'audio/thisiswhatyoucamefor.mp3'),
(93, 31, 'We Found Love', 'Nhạc Âu', 300, 'album/wefoundlove.jpg', 'audio/wefoundlove.mp3'),
(94, 32, 'Bad Liar', 'Nhạc Âu', 400, 'album/badliar.jpg', 'audio/badliar.mp3'),
(95, 32, 'Believer', 'Nhạc Âu', 500, 'album/believer.jpg', 'audio/believer.mp3'),
(96, 32, 'Demons', 'Nhạc Âu', 600, 'album/demons.jpg', 'audio/demons.mp3'),
(97, 33, 'Within You\'ll Remain', 'Nhạc Âu', 700, 'album/withinyoullremain.jpg', 'audio/withinyoullremain.mp3'),
(98, 33, 'Oriental City', 'Nhạc Âu', 800, 'album/withinyoullremain.jpg', 'audio/orientalcity.mp3'),
(99, 33, 'Without Your Love', 'Nhạc Âu', 900, 'album/withinyoullremain.jpg', 'audio/withinyoullremain.mp3'),
(100, 34, 'Endless Love', 'Nhạc Âu', 1000, 'album/endlesslove.jpg', 'audio/endlesslove.mp3'),
(101, 34, 'If We Hold On Together', 'Nhạc Âu', 1100, 'album/ifweholdontoghether.jpg', 'audio/ifweholdontogether.mp3'),
(102, 34, 'Upside Down', 'Nhạc Âu', 1200, 'album/upsidedown.jpg', 'audio/upsidedown.mp3'),
(103, 35, 'We Like To Party!', 'Nhạc Âu', 1300, 'album/weliketheparty.jpg', 'audio/weliketoparty.mp3'),
(104, 35, 'To Brazil', 'Nhạc Âu', 1400, 'album/tobrazil.jpg', 'audio/tobrazil.mp3'),
(105, 35, 'Parada De Tettas', 'Nhạc Âu', 1500, 'album/paradadetettas.jpg', 'audio/parada.mp3'),
(106, 36, 'Back To The 80\'s', 'Nhạc Âu', 1600, 'album/aqua.jpg', 'audio/backto.mp3'),
(107, 36, 'My Mamma Said', 'Nhạc Âu', 1700, 'album/aqua.jpg', 'audio/mymam.mp3'),
(108, 36, 'Die Young', 'Nhạc Âu', 1800, 'album/aqua.jpg', 'audio/dieyoung.mp3'),
(109, 37, 'Strong Enough', 'Nhạc Âu', 1900, 'album/strong.jpg', 'audio/strong.mp3'),
(110, 37, 'Fernando', 'Nhạc Âu', 2000, 'album/fernando.jpg', 'audio/fernando.mp3'),
(111, 37, 'The Shoop Shoop Song', 'Nhạc Âu', 2100, 'album/theshoop.jpg', 'audio/theshoop.mp3'),
(112, 38, 'Every Day I Love You', 'Nhạc Âu', 2200, 'album/everyday.jpg', 'audio/everyday.mp3'),
(113, 38, 'Words', 'Nhạc Âu', 2300, 'album/words.jpg', 'audio/words.mp3'),
(114, 38, 'All That I Need', 'Nhạc Âu', 2400, 'album/allthat.jpg', 'audio/allthat.mp3'),
(115, 39, 'Right Here Waiting', 'Nhạc Âu', 2500, 'album/right.jpg', 'audio/right.mp3'),
(116, 39, 'Angelia', 'Nhạc Âu', 2600, 'album/angelia.jpg', 'audio/angelia.mp3'),
(117, 39, 'Hazard', 'Nhạc Âu', 2700, 'album/hazard.jpg', 'audio/hazard.mp3'),
(118, 40, 'Billie Jean', 'Nhạc Âu', 2800, 'album/billie.jpg', 'audio/billie.mp3'),
(119, 40, 'Beat It', 'Nhạc Âu', 2900, 'album/beat.jpg', 'audio/beat.mp3'),
(120, 40, 'Rock With You', 'Nhạc Âu', 3000, 'album/rock.jpg', 'audio/rock.mp3'),
(121, 41, '偏向', 'Nhạc Trung', 0, 'album/im1.png', 'audio/nhactrung1.mp3'),
(122, 41, '偏向陳子晴 - 偏向我嫌', 'Nhạc Trung', 0, 'album/im2.png', 'audio/nhactrung2.mp3'),
(123, 41, '孤岛星愿', 'Nhạc Trung', 0, 'album/im3.png', 'audio/nhactrung3.mp3'),
(124, 42, '葛东琪 - 囍', 'Nhạc Trung', 0, 'album/im4.png', 'audio/nhactrung4.mp3'),
(125, 42, '葛東琪 - 懸溺', 'Nhạc Trung', 0, 'album/im5.png', 'audio/nhactrung5.mp3'),
(126, 42, '葛東琪 - 風吹丹', 'Nhạc Trung', 0, 'album/im6.png', 'audio/nhactrung6.mp3'),
(127, 43, '是你', 'Nhạc Trung', 0, 'album/im7.png', 'audio/nhactrung7.mp3'),
(128, 43, '一路生花', 'Nhạc Trung', 0, 'album/im8.png', 'audio/nhactrung8.mp3'),
(129, 43, '若月亮没来', 'Nhạc Trung', 0, 'album/im9.png', 'audio/nhactrung9.mp3'),
(130, 44, '这辈子欠自己太多', 'Nhạc Trung', 0, 'album/im10.png', 'audio/nhactrung10.mp3'),
(131, 44, '你的婚纱像雪花', 'Nhạc Trung', 0, 'album/im11.png', 'audio/nhactrung11.mp3'),
(132, 44, '我要的不是雪', 'Nhạc Trung', 0, 'album/im12.png', 'audio/nhactrung12.mp3'),
(133, 45, '好戏', 'Nhạc Trung', 0, 'album/im13.png', 'audio/nhactrung13.mp3'),
(134, 45, '忘了没有', 'Nhạc Trung', 0, 'album/im14.png', 'audio/nhactrung14.mp3'),
(135, 45, '泛泛之友', 'Nhạc Trung', 0, 'album/im15.png', 'audio/nhactrung15.mp3'),
(136, 46, '白露', 'Nhạc Trung', 0, 'album/im16.png', 'audio/nhactrung16.mp3'),
(137, 46, '撒浪嘿', 'Nhạc Trung', 0, 'album/im17.png', 'audio/nhactrung17.mp3'),
(138, 46, '惊蛰', 'Nhạc Trung', 0, 'album/im18.png', 'audio/nhactrung18.mp3'),
(139, 47, ' 红马 (女版)', 'Nhạc Trung', 0, 'album/im19.png', 'audio/nhactrung19.mp3'),
(140, 47, '月落的声音', 'Nhạc Trung', 0, 'album/im20.png', 'audio/nhactrung20.mp3'),
(141, 47, '无人区玫瑰', 'Nhạc Trung', 0, 'album/im21.png', 'audio/nhactrung21.mp3'),
(142, 48, '被神明写的歌', 'Nhạc Trung', 0, 'album/im22.png', 'audio/nhactrung22.mp3'),
(143, 48, '別無所愛', 'Nhạc Trung', 0, 'album/im23.png', 'audio/nhactrung23.mp3'),
(144, 48, '绳结', 'Nhạc Trung', 0, 'album/im24.png', 'audio/nhactrung24.mp3'),
(145, 49, '疑心病', 'Nhạc Trung', 0, 'album/im25.png', 'audio/nhactrung25.mp3'),
(146, 49, '然后呢', 'Nhạc Trung', 0, 'album/im26.png', 'audio/nhactrung26.mp3'),
(147, 49, '李夢尹', 'Nhạc Trung', 0, 'album/im27.png', 'audio/nhactrung27.mp3'),
(148, 50, '起风了', 'Nhạc Trung', 0, 'album/im28.png', 'audio/nhactrung28.mp3'),
(149, 50, '周深', 'Nhạc Trung', 0, 'album/im29.png', 'audio/nhactrung29.mp3'),
(151, 50, '青花瓷', 'Nhạc Trung', 0, 'album/im31.png', 'audio/nhactrung31.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `casi`
--

CREATE TABLE `casi` (
  `id_casi` int(11) NOT NULL,
  `tenCaSi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casi`
--

INSERT INTO `casi` (`id_casi`, `tenCaSi`) VALUES
(1, 'Sơn Tùng MTP'),
(2, 'Dương Domic'),
(3, 'Bùi Trương Linh'),
(4, 'Kha'),
(5, 'Jack97'),
(6, 'Tùng Dương'),
(7, 'Hiếu Thứ 2'),
(8, 'Quang Hùng MasterD'),
(9, 'Hoà Minzy'),
(10, 'Ngân Ngân\r\n'),
(11, 'Nguyễn Thu Hằng\r\n'),
(12, 'Yên Nhiên'),
(13, 'Đỗ Thành Danh\r\n'),
(14, 'Quang Hà'),
(15, 'Hoàng Minh Thắng'),
(16, 'NSND Thanh Hoa'),
(17, 'Khương Hùng'),
(18, 'NSUT Hương Giang'),
(19, 'Tạ Minh Tâm'),
(20, 'Quang Thiện'),
(21, 'B Ray'),
(22, 'Hades'),
(23, 'Puppy'),
(24, 'RonBoogz'),
(25, 'Pháo'),
(26, 'Đen Vâu'),
(27, 'MCK'),
(28, 'Pháp Kiều'),
(29, 'Obito'),
(30, 'Dangrangto'),
(31, 'Rihanna'),
(32, 'Imagine Dragons'),
(33, 'Tokyo Square'),
(34, 'Diana Ross'),
(35, 'Vengaboys'),
(36, 'Aqua'),
(37, 'Cher'),
(38, 'Boyzone'),
(39, 'Richard Marx'),
(40, 'Michael Jackson'),
(41, 'Trần Tử Tình'),
(42, 'Cát Đông Kỳ'),
(43, 'Mộng Nhiên'),
(44, 'Lý Phát Phát'),
(45, 'Vương Tĩnh Văn'),
(46, 'Vương Tử Ngọc'),
(47, 'Hứa Lam Tâm'),
(48, 'Tưởng Tiểu Ni'),
(49, 'Nhậm Nhiên'),
(50, 'Châu Thâm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albumcasi`
--
ALTER TABLE `albumcasi`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_casi` (`id_casi`);

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id_baihat`),
  ADD KEY `id_casi` (`id_casi`);

--
-- Indexes for table `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`id_casi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id_baihat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `casi`
--
ALTER TABLE `casi`
  MODIFY `id_casi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albumcasi`
--
ALTER TABLE `albumcasi`
  ADD CONSTRAINT `albumcasi_ibfk_1` FOREIGN KEY (`id_casi`) REFERENCES `casi` (`id_casi`);

--
-- Constraints for table `baihat`
--
ALTER TABLE `baihat`
  ADD CONSTRAINT `baihat_ibfk_1` FOREIGN KEY (`id_casi`) REFERENCES `casi` (`id_casi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2022 lúc 03:44 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlktx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietchuyenphong`
--

CREATE TABLE `chitietchuyenphong` (
  `MaDK` int(11) NOT NULL,
  `MaSV` bigint(20) NOT NULL,
  `MaPhongChuyen` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaPhongO` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Lydo` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TinhTrang` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayChuyen` date DEFAULT NULL,
  `NgayDangKy` date DEFAULT current_timestamp(),
  `LanChuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietchuyenphong`
--

INSERT INTO `chitietchuyenphong` (`MaDK`, `MaSV`, `MaPhongChuyen`, `MaPhongO`, `Lydo`, `TinhTrang`, `NgayChuyen`, `NgayDangKy`, `LanChuyen`) VALUES
(101, 2110, NULL, 'A104', NULL, NULL, NULL, '2022-12-07', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdangky`
--

CREATE TABLE `chitietdangky` (
  `MaDK` int(11) NOT NULL,
  `MaSV` bigint(11) NOT NULL,
  `MaPhong` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaNV` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayDangKy` date NOT NULL DEFAULT current_timestamp(),
  `NgayTraPhong` date DEFAULT NULL,
  `TinhTrang` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdangky`
--

INSERT INTO `chitietdangky` (`MaDK`, `MaSV`, `MaPhong`, `MaNV`, `NgayDangKy`, `NgayTraPhong`, `TinhTrang`) VALUES
(101, 2110, 'A104', 'NV4', '2022-12-07', '2022-12-07', 'chưa duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadondiennuoc`
--

CREATE TABLE `hoadondiennuoc` (
  `MaHD` int(11) NOT NULL,
  `MaPhong` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TienDien` decimal(10,0) NOT NULL,
  `TienNuoc` decimal(10,0) NOT NULL,
  `Thang` int(11) NOT NULL,
  `TinhTrang` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'chưa thu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadondiennuoc`
--

INSERT INTO `hoadondiennuoc` (`MaHD`, `MaPhong`, `TienDien`, `TienNuoc`, `Thang`, `TinhTrang`) VALUES
(30, 'A104', '12000', '40000', 4, 'đã thu'),
(29, 'A104', '30000', '200000', 8, 'đã thu'),
(28, 'A104', '30000', '200000', 9, 'đã thu'),
(26, 'A104', '60000', '400000', 10, 'đã thu'),
(24, 'A104', '30000', '200000', 11, 'đã thu'),
(21, 'A104', '123000', '300000', 12, 'đã thu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khu`
--

CREATE TABLE `khu` (
  `MaKhu` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenKhu` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Sex` varchar(3) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khu`
--

INSERT INTO `khu` (`MaKhu`, `TenKhu`, `Sex`) VALUES
('A', 'Khu A', 'Nam'),
('B', 'Khu B', 'Nam'),
('C', 'Khu C', 'Nu'),
('D', 'Khu D', 'Nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SDT` bigint(12) DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Quyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `NgaySinh`, `DiaChi`, `SDT`, `MatKhau`, `Quyen`) VALUES
('NV1', 'Nhân Viên A', '2002-10-03', 'Thái Bình', 123456788, '123456', 0),
('NV2', 'Nhân Viên B', '1998-11-20', 'Lào Cai', 987654321, '123456', 1),
('NV3', 'Nhan Vien C', '2022-11-03', 'czxhhh', 6545655555, '123', 2),
('NV4', 'Nhân Viên D', '2131-03-12', 'Hà Nội', 145632145, '123', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaPhong` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaKhu` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoNguoiToiDa` int(2) DEFAULT NULL,
  `SoNguoiHienTai` int(2) DEFAULT 0,
  `Gia` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaPhong`, `MaKhu`, `SoNguoiToiDa`, `SoNguoiHienTai`, `Gia`) VALUES
('A104', 'A', 4, 2, '1250000'),
('A304', 'A', 8, 0, '600000'),
('B201', 'B', 8, 0, '600000'),
('C102', 'C', 4, 0, '1250000'),
('D101', 'D', 8, 0, '600000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` bigint(50) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SDT` bigint(12) DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SDT`, `MatKhau`) VALUES
(111, 'Phạm Thành Công', 'Nam', '2022-11-05', 'Lào Cai', 9999999, '1234'),
(2110, 'Nguyen Van Duc', 'Nam', '2022-11-11', 'Thai Binh', 111111111, '2110');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `MaTB` int(11) NOT NULL,
  `MaSV` bigint(20) NOT NULL,
  `MaNV` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NoiDung` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LoaiTB` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayTB` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`MaTB`, `MaSV`, `MaNV`, `TieuDe`, `NoiDung`, `LoaiTB`, `NgayTB`) VALUES
(69, 2110, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A304. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-5 10:14:18. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-02'),
(70, 2110, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-11-02'),
(71, 2110, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-6 9:49:31. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-03'),
(72, 2110, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-11-16'),
(73, 2110, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-19 9:52:46. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-16'),
(74, 2110, 'NV1', 'Thông Báo Chuyển Phòng Ký Túc Xá', 'Bạn đã chuyển phòng thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-19 10:11:33. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'chuyển ph', '2022-11-16'),
(75, 111, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-25 3:13:17. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-22'),
(76, 111, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-25 9:34:50. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-22'),
(77, 111, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-11-22'),
(78, 111, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-25 11:33:4. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-22'),
(79, 111, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-11-25'),
(80, 111, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-11-30 1:42:32. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-11-27'),
(81, 111, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-11-27'),
(82, 2110, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-12-07'),
(83, 2110, 'NV4', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-12-10 21:25:38. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-12-07'),
(84, 2110, 'NV4', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-12-07'),
(85, 2110, 'NV4', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-12-07'),
(86, 2110, 'NV4', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-12-10 21:34:55. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-12-07'),
(87, 2110, 'NV4', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2022-12-07'),
(88, 2110, 'NV4', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2022-12-10 21:41:7. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2022-12-07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietchuyenphong`
--
ALTER TABLE `chitietchuyenphong`
  ADD PRIMARY KEY (`MaDK`),
  ADD KEY `MaPhongO` (`MaPhongO`),
  ADD KEY `MaPhongChuyen` (`MaPhongChuyen`);

--
-- Chỉ mục cho bảng `chitietdangky`
--
ALTER TABLE `chitietdangky`
  ADD PRIMARY KEY (`MaDK`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaPhong` (`MaPhong`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `hoadondiennuoc`
--
ALTER TABLE `hoadondiennuoc`
  ADD PRIMARY KEY (`MaPhong`,`Thang`),
  ADD UNIQUE KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `khu`
--
ALTER TABLE `khu`
  ADD PRIMARY KEY (`MaKhu`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`),
  ADD KEY `MaKhu` (`MaKhu`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`MaTB`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaNV` (`MaNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdangky`
--
ALTER TABLE `chitietdangky`
  MODIFY `MaDK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `hoadondiennuoc`
--
ALTER TABLE `hoadondiennuoc`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `MaTB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietchuyenphong`
--
ALTER TABLE `chitietchuyenphong`
  ADD CONSTRAINT `chitietchuyenphong_ibfk_1` FOREIGN KEY (`MaDK`) REFERENCES `chitietdangky` (`MaDK`),
  ADD CONSTRAINT `chitietchuyenphong_ibfk_2` FOREIGN KEY (`MaPhongO`) REFERENCES `phong` (`MaPhong`),
  ADD CONSTRAINT `chitietchuyenphong_ibfk_3` FOREIGN KEY (`MaPhongChuyen`) REFERENCES `phong` (`MaPhong`);

--
-- Các ràng buộc cho bảng `chitietdangky`
--
ALTER TABLE `chitietdangky`
  ADD CONSTRAINT `chitietdangky_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `chitietdangky_ibfk_2` FOREIGN KEY (`MaPhong`) REFERENCES `phong` (`MaPhong`),
  ADD CONSTRAINT `chitietdangky_ibfk_4` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `hoadondiennuoc`
--
ALTER TABLE `hoadondiennuoc`
  ADD CONSTRAINT `hoadondiennuoc_ibfk_1` FOREIGN KEY (`MaPhong`) REFERENCES `phong` (`MaPhong`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`MaKhu`) REFERENCES `khu` (`MaKhu`);

--
-- Các ràng buộc cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `thongbao_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `thongbao_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

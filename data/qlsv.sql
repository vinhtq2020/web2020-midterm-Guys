-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2020 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `MaKQ` int(11) NOT NULL,
  `MaMH` int(11) NOT NULL,
  `MaSV` int(11) NOT NULL,
  `Diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`MaKQ`, `MaMH`, `MaSV`, `Diem`) VALUES
(1, 10, 2, 10),
(2, 6, 7, 9),
(3, 2, 10, 5),
(4, 8, 9, 9),
(5, 3, 3, 8),
(6, 5, 4, 4),
(7, 7, 5, 3),
(8, 1, 1, 6),
(9, 4, 8, 9),
(10, 9, 6, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NamThanhLap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `NamThanhLap`) VALUES
(1, 'Công nghệ thông tin', 1972),
(2, 'Tâm Lí Học', 1992),
(3, 'Giáo Dục Mầm Non', 1991),
(4, 'Ngôn ngữ Anh', 1881),
(5, 'Ngôn ngữ Pháp', 1885),
(6, 'Giáo Dục Thể Chất', 1945),
(7, 'Hóa', 1946),
(8, 'Toán', 1985),
(9, 'Ngôn ngữ Nhật', 1986),
(10, 'Sư phạm Anh', 1971);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(11) NOT NULL,
  `TenLop` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`) VALUES
(1, 'CNTT-C', 1),
(2, 'Luật-B', 5),
(3, 'GDTC-A', 6),
(4, 'Toán-C', 8),
(5, 'CNTT-NNN-C', 4),
(6, 'Hớt Tóc-B', 10),
(7, 'Hóa-B', 7),
(8, 'Tâm Lý Học-A', 2),
(9, 'GDMN-A', 3),
(10, 'Lý-A', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` int(11) NOT NULL,
  `TenMH` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoTC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTC`) VALUES
(1, 'Quy Hoạch Tuyến Tính', 3),
(2, 'Hớt Tóc Nâng Cao', 5),
(3, 'Lập Trình Nâng Cao', 2),
(4, 'Hóa đại cương', 1),
(5, 'Lý đại cương', 2),
(6, 'Quy Luật Toán học và mối quan hệ với vũ trụ', 5),
(7, 'Dạy trẻ tập đọc', 2),
(8, 'Cử Tạ', 2),
(9, 'Tâm lý học đại cương', 4),
(10, 'Lập trình hướng đối tượng', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(11) NOT NULL,
  `HoTen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoTen`, `NgaySinh`, `Email`, `MaLop`) VALUES
(1, 'Nguyễn Văn B', '2000-04-22', 'Blaso1@yahoo.com', 1),
(2, 'Trần Đức Bo', '1998-08-10', 'bodeptraivodich@yahoo.com', 2),
(3, 'Bùi Xuân Huấn', '1969-04-16', 'huanrose@yahoo.com', 2),
(4, 'Nguyễn Văn Dần', '1986-12-20', 'Dancuteprovip@yahoo.com', 1),
(5, 'Nguyễn Thanh Tùng', '1998-07-05', 'tungdeptrai@yahoo.com', 10),
(6, 'Nguyễn Thị Thiên Nhiên', '1997-12-07', 'nhiendepgai@yahoo.com', 5),
(7, 'Trần Thị Quy Hoạch Động', '1969-11-08', 'dongdepgai@yahoo.com', 3),
(8, 'Count Ba Squad', '1997-11-05', 'squad@yahoo.com', 6),
(9, 'Tào Tháo', '1995-05-05', 'thaoracingboiz@yahoo.com', 8),
(10, 'Lữ Bố', '1997-07-05', 'bodeptrai@yahoo.com', 9);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaKQ`),
  ADD KEY `FK_MAMH` (`MaMH`),
  ADD KEY `FK_MAVMH` (`MaSV`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `FK_MAKHOA` (`MaKhoa`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `FK_MALOP` (`MaLop`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `MaKQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `MaMH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `MaSV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `FK_MAMH` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `FK_MAVMH` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_MAKHOA` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `FK_MALOP` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

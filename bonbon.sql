-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2019 lúc 10:34 AM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bondy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `biologicals`
--

CREATE TABLE `biologicals` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanA` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanB` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanC` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanD` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chemistries`
--

CREATE TABLE `chemistries` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanA` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanB` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanC` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanD` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `enghlishes`
--

CREATE TABLE `enghlishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanA` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanB` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanC` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanD` varchar(1115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights`
--

CREATE TABLE `flights` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `histories`
--

CREATE TABLE `histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` tinyint(4) DEFAULT NULL,
  `dap_an_dung` tinyint(4) DEFAULT NULL,
  `so_cau_lam` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `monhoc` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `so_cau_chua_lam` int(200) DEFAULT NULL,
  `mon1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem1` decimal(50,0) DEFAULT NULL,
  `diem2` decimal(50,0) DEFAULT NULL,
  `diem3` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `historykhois`
--

CREATE TABLE `historykhois` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` tinyint(4) DEFAULT NULL,
  `mon1` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon2` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon3` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem1` tinyint(4) DEFAULT NULL,
  `diem2` tinyint(4) DEFAULT NULL,
  `diem3` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maths`
--

CREATE TABLE `maths` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanA` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanB` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanC` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanD` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `physicals`
--

CREATE TABLE `physicals` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanA` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanB` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanC` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanD` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanA` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanB` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanC` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dapanD` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sdt` decimal(11,0) NOT NULL,
  `gioi_tinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `biologicals`
--
ALTER TABLE `biologicals`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chemistries`
--
ALTER TABLE `chemistries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `enghlishes`
--
ALTER TABLE `enghlishes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `historykhois`
--
ALTER TABLE `historykhois`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `maths`
--
ALTER TABLE `maths`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `physicals`
--
ALTER TABLE `physicals`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `biologicals`
--
ALTER TABLE `biologicals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT cho bảng `chemistries`
--
ALTER TABLE `chemistries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT cho bảng `enghlishes`
--
ALTER TABLE `enghlishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT cho bảng `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT cho bảng `historykhois`
--
ALTER TABLE `historykhois`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `maths`
--
ALTER TABLE `maths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `physicals`
--
ALTER TABLE `physicals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `historykhois`
--
ALTER TABLE `historykhois`
  ADD CONSTRAINT `historykhois_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2023 pada 11.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asyla_umrah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'administrator'),
(2, 'user', 'jemaah umrah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 11),
(2, 12),
(2, 13),
(2, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'kodri', 1, '2023-06-12 15:50:12', 0),
(2, '::1', 'kodri@gmail.com', 1, '2023-06-12 15:53:59', 1),
(3, '::1', 'kodri', NULL, '2023-06-12 16:21:32', 0),
(4, '::1', 'kodri', NULL, '2023-06-12 16:21:44', 0),
(5, '::1', 'kodrimur@gmail.com', 4, '2023-06-12 16:22:29', 1),
(6, '::1', 'kodrimur@gmail.com', 4, '2023-06-12 16:46:44', 1),
(7, '::1', 'kodri', NULL, '2023-06-12 17:56:50', 0),
(8, '::1', 'kodrimur@gmail.com', 4, '2023-06-12 17:57:03', 1),
(9, '::1', 'kodrimur@gmail.com', 4, '2023-06-13 03:22:53', 1),
(10, '::1', 'kodri', NULL, '2023-06-14 13:46:29', 0),
(11, '::1', 'kodrimur@gmail.com', 4, '2023-06-14 13:46:38', 1),
(12, '::1', 'kodrimur@gmail.com', 4, '2023-06-14 14:29:00', 1),
(13, '::1', 'kodrimur@gmail.com', 4, '2023-06-14 15:00:26', 1),
(14, '::1', 'kodrimur@gmail.com', 4, '2023-06-14 16:18:09', 1),
(15, '::1', 'kodrimur@gmail.com', 4, '2023-06-14 16:19:04', 1),
(16, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 02:32:35', 1),
(17, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 02:33:07', 1),
(18, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 03:56:36', 1),
(19, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 04:16:13', 1),
(20, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 05:50:16', 1),
(21, '::1', 'admin01', NULL, '2023-06-15 06:31:07', 0),
(22, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 07:40:40', 1),
(23, '::1', 'kodrimur@gmail.com', 4, '2023-06-15 08:00:00', 1),
(24, '::1', 'user@example.id', 7, '2023-06-15 15:05:09', 1),
(25, '::1', 'admin@gmail.com', 6, '2023-06-15 15:05:42', 1),
(26, '::1', 'admin@gmail.com', 6, '2023-06-15 15:11:35', 1),
(27, '::1', 'admin@gmail.com', 6, '2023-06-15 15:14:08', 1),
(28, '::1', 'user@example.id', 7, '2023-06-15 15:15:06', 1),
(29, '::1', 'user@example.id', 7, '2023-06-15 15:18:21', 1),
(30, '::1', 'admin@gmail.com', 6, '2023-06-15 15:18:44', 1),
(31, '::1', 'admin@gmail.com', 6, '2023-06-15 15:22:24', 1),
(32, '::1', 'admin@gmail.com', 6, '2023-06-15 15:23:32', 1),
(33, '::1', 'admin@gmail.com', 6, '2023-06-15 15:25:43', 1),
(34, '::1', 'admin@gmail.com', 6, '2023-06-15 15:27:30', 1),
(35, '::1', 'admin@gmail.com', 6, '2023-06-15 15:36:49', 1),
(36, '::1', 'admin@gmail.com', 6, '2023-06-15 15:37:27', 1),
(37, '::1', 'admin@gmail.com', 6, '2023-06-15 15:39:28', 1),
(38, '::1', 'user@example.id', 7, '2023-06-15 15:43:18', 1),
(39, '::1', 'admin@gmail.com', 6, '2023-06-15 15:46:01', 1),
(40, '::1', 'admin@gmail.com', 6, '2023-06-15 15:48:57', 1),
(41, '::1', 'admin@gmail.com', 6, '2023-06-15 15:53:36', 1),
(42, '::1', 'admin@gmail.com', 6, '2023-06-15 15:55:42', 1),
(43, '::1', 'admin@gmail.com', 6, '2023-06-15 15:56:42', 1),
(44, '::1', 'admin@gmail.com', 6, '2023-06-15 15:57:25', 1),
(45, '::1', 'admin@gmail.com', 6, '2023-06-15 15:57:47', 1),
(46, '::1', 'admin', NULL, '2023-06-15 15:58:40', 0),
(47, '::1', 'admin@gmail.com', 6, '2023-06-15 15:58:58', 1),
(48, '::1', 'admin', NULL, '2023-06-15 16:36:56', 0),
(49, '::1', 'admin@gmail.com', 6, '2023-06-15 16:37:08', 1),
(50, '::1', 'admin@gmail.com', 6, '2023-06-15 16:48:55', 1),
(51, '::1', 'user@example.id', 7, '2023-06-15 16:49:34', 1),
(52, '::1', 'admin@gmail.com', 6, '2023-06-16 13:31:30', 1),
(53, '::1', 'user@example.id', 7, '2023-06-16 13:37:28', 1),
(54, '::1', 'admin@gmail.com', 6, '2023-06-16 13:37:40', 1),
(55, '::1', 'user@example.id', 7, '2023-06-16 13:40:13', 1),
(56, '::1', 'user@example.id', 7, '2023-06-16 13:48:30', 1),
(57, '::1', 'admin@gmail.com', 6, '2023-06-16 13:48:54', 1),
(58, '::1', 'admin@gmail.com', 6, '2023-06-16 13:49:18', 1),
(59, '::1', 'user@example.id', 7, '2023-06-16 13:54:36', 1),
(60, '::1', 'admin@gmail.com', 6, '2023-06-16 13:56:48', 1),
(61, '::1', 'admin@gmail.com', 6, '2023-06-16 13:57:12', 1),
(62, '::1', 'user@example.id', 7, '2023-06-16 14:01:50', 1),
(63, '::1', 'user@example.id', 7, '2023-06-16 14:10:57', 1),
(64, '::1', 'admin@gmail.com', 6, '2023-06-16 15:46:33', 1),
(65, '::1', 'admin@gmail.com', 6, '2023-06-16 15:48:27', 1),
(66, '::1', 'user@example.id', 7, '2023-06-16 15:48:41', 1),
(67, '::1', 'admin', NULL, '2023-06-17 12:57:53', 0),
(68, '::1', 'user', NULL, '2023-06-17 12:58:24', 0),
(69, '::1', 'user', NULL, '2023-06-17 12:58:50', 0),
(70, '::1', 'user@example.id', 7, '2023-06-17 12:59:18', 1),
(71, '::1', 'user@example.id', 7, '2023-06-17 13:03:25', 1),
(72, '::1', 'user', NULL, '2023-06-17 13:09:05', 0),
(73, '::1', 'user@example.id', 7, '2023-06-17 13:09:31', 1),
(74, '::1', 'user', NULL, '2023-06-21 06:56:00', 0),
(75, '::1', 'user@example.id', 7, '2023-06-21 06:56:24', 1),
(76, '::1', 'user@example.id', 7, '2023-06-21 07:54:58', 1),
(77, '::1', 'yastariamelia@gmail.com', 8, '2023-06-21 08:49:18', 1),
(78, '::1', 'amelia', NULL, '2023-06-21 08:59:35', 0),
(79, '::1', 'yastariamelia@gmail.com', 8, '2023-06-21 08:59:52', 1),
(80, '::1', 'admin@gmail.com', 6, '2023-06-21 09:17:18', 1),
(81, '::1', 'user@example.id', 7, '2023-06-21 13:25:12', 1),
(82, '::1', 'yastariamelia@gmail.com', 8, '2023-06-21 15:15:50', 1),
(83, '::1', 'saputra', NULL, '2023-06-22 05:38:01', 0),
(84, '::1', 'yastariamelia@gmail.com', 8, '2023-06-22 05:38:26', 1),
(85, '::1', 'admin@gmail.com', 6, '2023-06-22 06:01:15', 1),
(86, '::1', 'admin@gmail.com', 6, '2023-06-22 06:10:16', 1),
(87, '::1', 'admin@gmail.com', 6, '2023-06-22 07:20:51', 1),
(88, '::1', 'yastariamelia@gmail.com', 8, '2023-06-22 07:30:22', 1),
(89, '::1', 'admin@gmail.com', 6, '2023-06-22 07:42:50', 1),
(90, '::1', 'admin@gmail.com', 6, '2023-06-22 13:20:21', 1),
(91, '::1', 'yastariamelia@gmail.com', 8, '2023-06-24 07:06:57', 1),
(92, '::1', 'admin@gmail.com', 6, '2023-06-24 07:35:26', 1),
(93, '::1', 'admin@gmail.com', 6, '2023-06-24 12:10:18', 1),
(94, '::1', 'admin@gmail.com', 6, '2023-06-24 13:20:21', 1),
(95, '::1', 'admin', NULL, '2023-06-24 13:58:15', 0),
(96, '::1', 'admin', NULL, '2023-06-24 13:58:22', 0),
(97, '::1', 'admin', NULL, '2023-06-24 13:58:32', 0),
(98, '::1', 'admin@gmail.com', 6, '2023-06-24 13:58:52', 1),
(99, '::1', 'alini@gmail.com', 9, '2023-06-24 14:17:39', 1),
(100, '::1', 'admin@gmail.com', 6, '2023-06-24 14:19:32', 1),
(101, '::1', 'alini@gmail.com', 9, '2023-06-24 14:20:47', 1),
(102, '::1', 'admin@gmail.com', 6, '2023-06-25 06:03:13', 1),
(103, '::1', 'alini@gmail.com', 9, '2023-06-25 06:07:08', 1),
(104, '::1', 'admin@gmail.com', 6, '2023-06-25 06:18:51', 1),
(105, '::1', 'admin', NULL, '2023-06-25 06:19:49', 0),
(106, '::1', 'admin@gmail.com', 6, '2023-06-25 06:19:58', 1),
(107, '::1', 'admin@gmail.com', 6, '2023-06-25 06:21:03', 1),
(108, '::1', 'admin@gmail.com', 6, '2023-06-25 06:21:20', 1),
(109, '::1', 'alini@gmail.com', 9, '2023-06-25 06:21:33', 1),
(110, '::1', 'admin@gmail.com', 6, '2023-06-25 06:22:42', 1),
(111, '::1', 'alini@gmail.com', 9, '2023-06-25 06:26:22', 1),
(112, '::1', 'admin@gmail.com', 6, '2023-06-25 07:01:48', 1),
(113, '::1', 'alini@gmail.com', 9, '2023-06-25 07:43:40', 1),
(114, '::1', 'admin@gmail.com', 6, '2023-06-25 08:06:34', 1),
(115, '::1', 'alini@gmail.com', 9, '2023-06-25 08:08:19', 1),
(116, '::1', 'admin', NULL, '2023-06-25 09:54:14', 0),
(117, '::1', 'admin@gmail.com', 6, '2023-06-25 09:54:28', 1),
(118, '::1', 'alini@gmail.com', 9, '2023-06-25 10:38:08', 1),
(119, '::1', 'user@example.id', 7, '2023-06-25 10:38:31', 1),
(120, '::1', 'amelia', NULL, '2023-06-25 10:40:08', 0),
(121, '::1', 'yastariamelia@gmail.com', 8, '2023-06-25 10:41:53', 1),
(122, '::1', 'alini@gmail.com', 9, '2023-06-25 10:50:41', 1),
(123, '::1', 'user@example.id', 7, '2023-06-25 10:51:15', 1),
(124, '::1', 'alini@gmail.com', 9, '2023-06-25 13:37:28', 1),
(125, '::1', 'yastariamelia@gmail.com', 8, '2023-06-25 13:45:08', 1),
(126, '::1', 'yastariamelia@gmail.com', 8, '2023-06-25 13:45:22', 1),
(127, '::1', 'admin@gmail.com', 6, '2023-06-25 13:46:14', 1),
(128, '::1', 'yastariamelia@gmail.com', 8, '2023-06-25 13:50:04', 1),
(129, '::1', 'yastariamelia@gmail.com', 8, '2023-06-25 14:26:21', 1),
(130, '::1', 'user@example.id', 7, '2023-06-25 14:28:42', 1),
(131, '::1', 'user@example.id', 7, '2023-06-25 14:29:17', 1),
(132, '::1', 'admin', NULL, '2023-06-25 14:29:46', 0),
(133, '::1', 'admin@gmail.com', 6, '2023-06-25 14:30:06', 1),
(134, '::1', 'admin@gmail.com', 6, '2023-06-26 15:08:56', 1),
(135, '::1', 'yastariamelia@gmail.com', 8, '2023-06-26 16:32:58', 1),
(136, '::1', 'yastariamelia@gmail.com', 8, '2023-07-01 04:39:51', 1),
(137, '::1', 'yastariamelia@gmail.com', 8, '2023-07-04 04:54:40', 1),
(138, '::1', 'ameliayastari@gmail.com', 10, '2023-07-04 05:00:49', 1),
(139, '::1', 'admin@gmail.com', 6, '2023-07-09 08:16:30', 1),
(140, '::1', 'admin@gmail.com', 6, '2023-07-12 05:05:29', 1),
(141, '::1', 'admin', NULL, '2023-07-12 05:06:26', 0),
(142, '::1', 'admin@gmail.com', 6, '2023-07-12 05:06:48', 1),
(143, '::1', 'admin', NULL, '2023-07-12 05:40:24', 0),
(144, '::1', 'admin@gmail.com', 6, '2023-07-12 05:40:42', 1),
(145, '::1', 'admin@gmail.com', 6, '2023-07-12 08:04:53', 1),
(146, '::1', 'admin', NULL, '2023-07-12 08:08:16', 0),
(147, '::1', 'admin@gmail.com', 6, '2023-07-12 08:08:34', 1),
(148, '::1', 'yastariamelia@gmail.com', 8, '2023-07-13 04:32:37', 1),
(149, '::1', 'admin@gmail.com', 6, '2023-07-13 04:45:40', 1),
(150, '::1', 'yastariamelia@gmail.com', 8, '2023-07-20 05:43:40', 1),
(151, '::1', 'admin@gmail.com', 6, '2023-07-20 07:56:19', 1),
(152, '::1', 'yastariamelia@gmail.com', 8, '2023-07-20 07:56:47', 1),
(153, '::1', 'admin', NULL, '2023-07-27 14:24:14', 0),
(154, '::1', 'admin@gmail.com', 6, '2023-07-27 14:24:22', 1),
(155, '::1', 'amelia', NULL, '2023-07-27 14:35:21', 0),
(156, '::1', 'yastariamelia@gmail.com', 8, '2023-07-27 14:35:30', 1),
(157, '::1', 'admin@gmail.com', 6, '2023-07-27 14:37:54', 1),
(158, '::1', 'admin@gmail.com', 6, '2023-07-28 06:10:49', 1),
(159, '::1', 'yastariamelia@gmail.com', 8, '2023-07-28 06:12:55', 1),
(160, '::1', 'admin', NULL, '2023-07-28 06:39:48', 0),
(161, '::1', 'admin@gmail.com', 6, '2023-07-28 06:39:55', 1),
(162, '::1', 'amelia', NULL, '2023-07-28 06:48:56', 0),
(163, '::1', 'amelia', NULL, '2023-07-28 06:49:03', 0),
(164, '::1', 'yastariamelia@gmail.com', 8, '2023-07-28 06:49:16', 1),
(165, '::1', 'admin', NULL, '2023-07-28 07:30:04', 0),
(166, '::1', 'admin@gmail.com', 6, '2023-07-28 07:30:12', 1),
(167, '::1', 'yastariamelia@gmail.com', 8, '2023-07-28 07:30:41', 1),
(168, '::1', 'admin', NULL, '2023-07-28 07:32:52', 0),
(169, '::1', 'admin@gmail.com', 6, '2023-07-28 07:33:02', 1),
(170, '::1', 'alini@gmail.com', 9, '2023-07-28 15:13:36', 1),
(171, '::1', 'admin@gmail.com', 6, '2023-07-28 15:14:41', 1),
(172, '::1', 'admin@gmail.com', 6, '2023-07-28 15:16:00', 1),
(173, '::1', 'yastariamelia@gmail.com', 8, '2023-07-30 09:02:22', 1),
(174, '::1', 'admin@gmail.com', 6, '2023-07-30 09:09:56', 1),
(175, '::1', 'yastariamelia@gmail.com', 8, '2023-07-30 09:30:13', 1),
(176, '::1', 'admin@gmail.com', 6, '2023-07-30 13:06:38', 1),
(177, '::1', 'amelia', NULL, '2023-07-30 13:08:14', 0),
(178, '::1', 'yastariamelia@gmail.com', 8, '2023-07-30 13:08:32', 1),
(179, '::1', 'admin@gmail.com', 6, '2023-07-31 04:24:43', 1),
(180, '::1', 'yastariamelia@gmail.com', 8, '2023-07-31 06:46:14', 1),
(181, '::1', 'user@example.id', 7, '2023-07-31 07:12:01', 1),
(182, '::1', 'yastariamelia@gmail.com', 8, '2023-07-31 07:15:16', 1),
(183, '::1', 'admin@gmail.com', 6, '2023-07-31 07:42:58', 1),
(184, '::1', 'yastariamelia@gmail.com', 8, '2023-07-31 08:28:57', 1),
(185, '::1', 'admin@gmail.com', 6, '2023-07-31 13:02:40', 1),
(186, '::1', 'yastariamelia@gmail.com', 8, '2023-07-31 13:48:31', 1),
(187, '::1', 'admin@gmail.com', 6, '2023-07-31 14:27:55', 1),
(188, '::1', 'user', NULL, '2023-07-31 14:37:03', 0),
(189, '::1', 'user@example.id', 7, '2023-07-31 14:37:19', 1),
(190, '::1', 'admin@gmail.com', 6, '2023-07-31 14:39:04', 1),
(191, '::1', 'yastariamelia@gmail.com', 8, '2023-07-31 14:59:43', 1),
(192, '::1', 'liaatari@gmail.com', 11, '2023-07-31 15:27:12', 1),
(193, '::1', 'lia', NULL, '2023-07-31 15:40:48', 0),
(194, '::1', 'liaatari@gmail.com', 11, '2023-07-31 15:41:08', 1),
(195, '::1', 'admin@gmail.com', 6, '2023-07-31 15:53:12', 1),
(196, '::1', 'liaatari@gmail.com', 11, '2023-07-31 15:54:53', 1),
(197, '::1', 'admin', NULL, '2023-07-31 16:00:13', 0),
(198, '::1', 'admin@gmail.com', 6, '2023-07-31 16:00:32', 1),
(199, '::1', 'liaatari@gmail.com', 11, '2023-07-31 16:03:58', 1),
(200, '::1', 'admin', NULL, '2023-07-31 16:04:58', 0),
(201, '::1', 'admin@gmail.com', 6, '2023-07-31 16:05:12', 1),
(202, '::1', 'yastariamelia@gmail.com', 12, '2023-07-31 16:06:47', 1),
(203, '::1', 'adiputra@gmail.com', 13, '2023-07-31 16:15:02', 1),
(204, '::1', 'admin@gmail.com', 6, '2023-07-31 16:21:10', 1),
(205, '::1', 'yastariamelia@gmail.com', 12, '2023-07-31 17:13:22', 1),
(206, '::1', 'liaatari@gmail.com', 11, '2023-07-31 17:15:04', 1),
(207, '::1', 'liaatari@gmail.com', 11, '2023-07-31 17:16:10', 1),
(208, '::1', 'admin@gmail.com', 6, '2023-07-31 17:18:15', 1),
(209, '::1', 'liaatari@gmail.com', 11, '2023-07-31 17:23:31', 1),
(210, '::1', 'admin@gmail.com', 6, '2023-07-31 17:40:17', 1),
(211, '::1', 'tri', NULL, '2023-08-03 07:19:25', 0),
(212, '::1', 'tri', NULL, '2023-08-03 07:21:14', 0),
(213, '::1', 'tri', NULL, '2023-08-03 07:21:55', 0),
(214, '::1', 'tri', NULL, '2023-08-03 07:25:09', 0),
(215, '::1', 'tribuana@gmail.com', 15, '2023-08-03 07:38:18', 1),
(216, '::1', 'admin', NULL, '2023-08-03 07:53:24', 0),
(217, '::1', 'admin@gmail.com', 6, '2023-08-03 07:54:07', 1),
(218, '::1', 'tri', NULL, '2023-08-03 08:40:24', 0),
(219, '::1', 'admin@gmail.com', 6, '2023-08-03 08:49:50', 1),
(220, '::1', 'tribuana@gmail.com', 15, '2023-08-03 09:00:50', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-admin', 'khusus admin'),
(2, 'manage-user', 'khusus jemaah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_users_permissions`
--

INSERT INTO `auth_users_permissions` (`user_id`, `permission_id`) VALUES
(6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1686583238, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `keterangan`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jemaah Umrah Ke 33', '8320.jpg_1687611807.jpg', '2023-06-24 12:54:00', '2023-06-24 13:03:27', NULL),
(2, 'Asyla Berangkatt', '13092.jpg_1687611869.jpg', '2023-06-24 13:04:29', '2023-08-03 07:58:10', '2023-08-03 07:58:10'),
(3, 'Jemaah berada di kebun kurma', '307844655_381919147483278_2552888521446789362_n.webp.jpg_1691049545.jpg', '2023-08-03 07:59:05', '2023-08-03 08:10:08', '2023-08-03 08:10:08'),
(4, 'Jemaah berada di kebun kurma', '307844655_381919147483278_2552888521446789362_n.webp.jpg_1691050229.jpg', '2023-08-03 08:10:29', '2023-08-03 08:10:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jemaah`
--

CREATE TABLE `tb_jemaah` (
  `id` int(15) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` char(25) NOT NULL,
  `nama_ayah` char(25) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` char(10) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `usia` int(20) NOT NULL,
  `hp_jemaah` varchar(15) NOT NULL,
  `telp_jemaah` varchar(15) NOT NULL,
  `email_jemaah` varchar(30) NOT NULL,
  `kode_pos` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `kartu_keluarga` varchar(100) NOT NULL,
  `paspor` varchar(100) NOT NULL,
  `akta_kelahiran` varchar(100) NOT NULL,
  `buku_nikah` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jemaah`
--

INSERT INTO `tb_jemaah` (`id`, `id_paket`, `id_user`, `nama`, `nama_ayah`, `tempat_lahir`, `tgl_lahir`, `jns_kelamin`, `kewarganegaraan`, `pendidikan`, `pekerjaan`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `usia`, `hp_jemaah`, `telp_jemaah`, `email_jemaah`, `kode_pos`, `foto`, `ktp`, `kartu_keluarga`, `paspor`, `akta_kelahiran`, `buku_nikah`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 8, 11, 'Liatari', 'dedi', 'Sipin', '2023-07-04', 'perempuan', 'indonesia', 'S1', 'wirausaha', 'lorong mustika', 'lorong mustika', 'telanaipura', 'telainpura', 'jambi', 22, '081275643222', '02145675', 'liaatari@gmail.com', '3421', '307611168_789366125594679_1303065015144458444_n.webp.jpg_1690818442.jpg', '307711099_498449031712404_595863990265158664_n.webp.jpg_1690818442.jpg', '307626122_675989377447753_8641647153959594126_n.webp.jpg_1690818442.jpg', '307844655_381919147483278_2552888521446789362_n.webp.jpg_1690818442.jpg', '307670960_198987009244022_5914643556222323272_n.webp.jpg_1690818442.jpg', 'paket_1.jpg_1690818442.jpg', 1, '2023-07-31 15:47:22', '2023-07-31 16:03:04', NULL),
(14, 9, 12, 'ameliayastari', 'asep', 'jelutung', '2023-07-21', 'perempuan', 'indonesia', 'S2', 'direktur', 'jalan melati', 'taman remaja', 'tungkal', 'tanjab', 'jambi', 26, '082134536256', '02324566', 'yastariamelia@gmail.com', '36552', 'definisi_informasi_3.jpg_1690819959.jpg', 'definisi_sistem_3.jpg_1690819959.jpg', 'definisi_si_2.jpg_1690819959.jpg', 'INFORMASI.jpg_1690819959.jpg', 'definisi_sistem_2.jpg_1690819959.jpg', 'sampul_HTML_3_.png_1690819959.png', 1, '2023-07-31 16:12:39', '2023-07-31 16:21:24', NULL),
(15, 10, 13, 'Adi Putra', 'cipto', 'Merlung', '2023-08-23', 'laki-laki', 'indonesia', 'SMA', 'siswa', 'jalan tran suban', 'saroja', 'tungkal ulu', 'tanjung pinang', 'jambi', 18, '085233421277', '02457835', 'adiputra@gmail.com', '36221', 'tampilan_beranda_umrah_2.jpg_1690820371.jpg', '307711099_498449031712404_595863990265158664_n.webp.jpg_1690820371.jpg', 'tampilan_beranda_umrah.jpg_1690820371.jpg', '307611168_789366125594679_1303065015144458444_n.webp.jpg_1690820371.jpg', '307670960_198987009244022_5914643556222323272_n.webp.jpg_1690820371.jpg', '307626122_675989377447753_8641647153959594126_n.webp.jpg_1690820371.jpg', 1, '2023-07-31 16:19:31', '2023-07-31 16:21:30', NULL),
(16, 8, 15, 'Tri Buana', 'cipto', 'Sipin', '2000-09-03', 'perempuan', 'indonesia', 'S1', 'wirausaha', 'lorong mustika', 'lorong mustika', 'telanaipura', 'kota jambi', 'jambi', 23, '082345376899', '02145675', 'tribuana@gmail.com', '36221', 'paket_1.jpg_1691048714.jpg', 'tampilan_beranda_umrah.jpg_1691048714.jpg', '307611168_789366125594679_1303065015144458444_n.webp.jpg_1691048714.jpg', '307711099_498449031712404_595863990265158664_n.webp.jpg_1691048714.jpg', '307626122_675989377447753_8641647153959594126_n.webp.jpg_1691048714.jpg', '307670960_198987009244022_5914643556222323272_n.webp.jpg_1691048714.jpg', 0, '2023-08-03 07:45:14', '2023-08-03 07:45:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(5) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `maskapai` varchar(25) NOT NULL,
  `mekkah` varchar(50) NOT NULL,
  `madinah` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `itenerary` text NOT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `tipe`, `nama`, `maskapai`, `mekkah`, `madinah`, `harga`, `itenerary`, `tgl_berangkat`, `tgl_kembali`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Quad', 'Sekamar Berempat', 'Garuda Indonesia', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 35500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-07-28', '2023-09-14', '2023-06-16 13:58:04', '2023-07-28 13:06:28', NULL),
(9, 'Triple', 'Sekamar Bertiga', 'Lion Air', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 36500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-09-06', '2023-07-28', '2023-07-12 09:22:51', '2023-07-28 13:06:54', NULL),
(10, 'Double', 'Berkamar Berdua', 'Qatar Airways', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 38500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-07-28', '2023-07-28', '2023-07-12 09:24:21', '2023-08-03 07:55:12', '2023-08-03 07:55:12'),
(11, 'Double', 'Berkamar Berdua', 'Qatar Airways', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 38500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-08-03', '2023-08-15', '2023-08-03 07:56:51', '2023-08-03 07:56:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `harga_paket` int(25) NOT NULL,
  `jml_bayar` int(25) NOT NULL,
  `sisa_bayar` int(25) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id`, `id_user`, `harga_paket`, `jml_bayar`, `sisa_bayar`, `bukti_bayar`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 11, 35500000, 35500000, 0, 'paket_1.jpg_1690819460.jpg', 1, '2023-07-31 16:04:20', '2023-07-31 16:05:24', NULL),
(14, 12, 36500000, 3650000, 32850000, 'sampul_dfd_2.jpg_1690819994.jpg', 0, '2023-07-31 16:13:14', '2023-07-31 16:13:14', NULL),
(15, 13, 38500000, 38500000, 0, 'tampilan_beranda_umrah.jpg_1690820402.jpg', 1, '2023-07-31 16:20:02', '2023-07-31 16:21:55', NULL),
(16, 15, 35500000, 35500000, 0, 'tampilan_beranda_umrah_2.jpg_1691049103.jpg', 0, '2023-08-03 07:51:43', '2023-08-03 07:51:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id`, `id_user`, `isi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'sangat memuaskan dalam perjalanan umrah', '2023-06-21 08:18:33', '2023-06-21 10:11:24', NULL),
(2, 8, 'cukup puas dalam melaksanakan perjalanan umrah pada pt. asyla fatimah ini', '2023-06-21 08:57:03', '2023-06-24 12:21:37', NULL),
(4, 9, 'Sangat senang bisa umroh dengan asyla fatimah', '2023-06-25 13:41:43', '2023-06-25 13:41:43', NULL),
(5, 12, 'alhamdulilah bisa melaksanakan ibadah umrah dengan baik, umrah di pt. asyla fatimah dijamin aman, am', '2023-07-31 17:14:29', '2023-07-31 17:14:29', NULL),
(6, 11, 'Masya allah bisa umrah dengan kusyuk melalui biro umrah di pt. asyla wisata fatimah', '2023-07-31 17:17:07', '2023-07-31 17:17:07', NULL),
(7, 15, 'Alhamdulilah bisa menjalankan ibadah umrah dengan kusyuk dengan biro perjalanan umrah bersama PT. As', '2023-08-03 07:50:50', '2023-08-03 07:50:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'admin@gmail.com', 'admin', '$2y$10$GSfQzpT42OIfwVKllGo91.f3LpccTu.h.AZ2Q1/p0JOlVwmUXs7/u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-15 14:58:44', '2023-06-15 14:58:44', NULL),
(11, 'liaatari@gmail.com', 'lia', '$2y$10$zWFRzC3m3/vOoZt5Oql6zO1BLuAC9CjoarjMptCcPZ3YENKQQ3Wzi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-31 15:26:40', '2023-07-31 15:26:40', NULL),
(12, 'yastariamelia@gmail.com', 'amelia', '$2y$10$8DBdzB89hX8Z.cDoxTs7tu./Kt85BS3UfMWFdQq2w4zNh5m1IRdji', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-31 16:06:33', '2023-07-31 16:06:33', NULL),
(13, 'adiputra@gmail.com', 'adi', '$2y$10$KmuoYx.qdXM.9R3U4yxIO.Bma45qwYDTQfMQLencnV3ekfa/j1PyK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-31 16:14:43', '2023-07-31 16:14:43', NULL),
(15, 'tribuana@gmail.com', 'tri', '$2y$10$elvcJM8ISIFmSsV0IgBN4.7qU.rP2i0AwT0ZMxu1m.VSYVwbOiJqO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-03 07:37:39', '2023-08-03 07:37:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jemaah`
--
ALTER TABLE `tb_jemaah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jemaah`
--
ALTER TABLE `tb_jemaah`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

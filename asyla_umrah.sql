-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2023 pada 17.59
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
(2, 21),
(2, 23),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38);

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
(220, '::1', 'tribuana@gmail.com', 15, '2023-08-03 09:00:50', 1),
(221, '::1', 'admin@gmail.com', 6, '2023-08-03 10:02:29', 1),
(222, '::1', 'admin@gmail.com', 6, '2023-08-03 10:02:53', 1),
(223, '::1', 'tribuana@gmail.com', 15, '2023-08-03 10:06:55', 1),
(224, '::1', 'admin@gmail.com', 6, '2023-08-03 10:07:29', 1),
(225, '::1', 'tribuana@gmail.com', 15, '2023-08-03 10:12:45', 1),
(226, '::1', 'admin@gmail.com', 6, '2023-08-03 10:13:41', 1),
(227, '::1', 'tribuana@gmail.com', 15, '2023-08-03 11:34:30', 1),
(228, '::1', 'inisialk854@gmail.com', 16, '2023-08-03 11:35:13', 1),
(229, '::1', 'tribuana@gmail.com', 15, '2023-08-03 11:46:33', 1),
(230, '::1', 'yastariamelia@gmail.com', 12, '2023-08-16 07:50:41', 1),
(231, '::1', 'admin@gmail.com', 6, '2023-08-16 07:52:49', 1),
(232, '::1', 'kodri@gmail.com', 17, '2023-08-16 07:57:10', 1),
(233, '::1', 'admin@gmail.com', 6, '2023-08-16 07:59:56', 1),
(234, '::1', 'amelia', NULL, '2023-09-15 06:18:16', 0),
(235, '::1', 'amelia', NULL, '2023-09-15 06:18:31', 0),
(236, '::1', 'liaatari@gmail.com', 11, '2023-09-15 06:19:30', 1),
(237, '::1', 'admin', NULL, '2023-09-15 06:25:30', 0),
(238, '::1', 'liaatari@gmail.com', 11, '2023-09-15 06:25:55', 1),
(239, '::1', 'admin', NULL, '2023-09-15 06:28:23', 0),
(240, '::1', 'admin', NULL, '2023-09-15 06:28:36', 0),
(241, '::1', 'admin', NULL, '2023-09-15 06:28:52', 0),
(242, '::1', 'admin', NULL, '2023-09-15 06:29:09', 0),
(243, '::1', 'admin@gmail.com', 6, '2023-09-15 06:29:21', 1),
(244, '::1', 'admin@gmail.com', 6, '2023-09-15 06:33:46', 1),
(245, '::1', 'liaatari@gmail.com', 11, '2023-09-15 06:34:47', 1),
(246, '::1', 'admin@gmail.com', 6, '2023-09-15 06:38:27', 1),
(247, '::1', 'liaatari@gmail.com', 11, '2023-09-15 06:39:34', 1),
(248, '::1', 'admin', NULL, '2023-09-15 06:41:11', 0),
(249, '::1', 'admin@gmail.com', 6, '2023-09-15 06:41:18', 1),
(250, '::1', 'liaatari@gmail.com', 11, '2023-09-15 06:42:30', 1),
(251, '::1', 'admin@gmail.com', 6, '2023-09-15 08:17:54', 1),
(252, '::1', 'liaatari@gmail.com', 11, '2023-09-15 12:45:39', 1),
(253, '::1', 'liaatari@gmail.com', 11, '2023-09-15 13:48:21', 1),
(254, '::1', 'admin@gmail.com', 6, '2023-09-15 13:48:31', 1),
(255, '::1', 'Lelawati@gmail.com', 18, '2023-09-21 06:53:31', 1),
(256, '::1', 'admin@gmail.com', 6, '2023-09-21 07:29:25', 1),
(257, '::1', 'Lelawati@gmail.com', 18, '2023-09-21 07:37:37', 1),
(258, '::1', 'Herman@gmail.com', 19, '2023-09-21 07:54:13', 1),
(259, '::1', 'admin@gmail.com', 6, '2023-09-21 08:16:47', 1),
(260, '::1', 'admin@gmail.com', 6, '2023-09-23 07:35:50', 1),
(261, '::1', 'Lelawati@gmail.com', NULL, '2023-09-23 07:37:45', 0),
(262, '::1', 'Lelawati', NULL, '2023-09-23 07:38:34', 0),
(263, '::1', 'Lelawati', NULL, '2023-09-23 07:39:01', 0),
(264, '::1', 'Lelawati', NULL, '2023-09-23 07:40:14', 0),
(265, '::1', 'Lelawati@gmail.com', 18, '2023-09-23 07:41:18', 1),
(266, '::1', 'admin@gmail.com', 6, '2023-09-23 07:44:59', 1),
(267, '::1', 'Herman@gmail.com', 19, '2023-09-23 07:50:22', 1),
(268, '::1', 'admin@gmail.com', 6, '2023-09-23 07:52:32', 1),
(269, '::1', 'Lelawati@gmail.com', 18, '2023-09-23 07:56:15', 1),
(270, '::1', 'admin@gmail.com', 6, '2023-09-23 07:57:05', 1),
(271, '::1', 'Lelawati@gmail.com', 18, '2023-09-23 07:57:55', 1),
(272, '::1', 'Herman@gmail.com', 19, '2023-09-23 07:59:06', 1),
(273, '::1', 'admin@gmail.com', 6, '2023-09-23 08:03:27', 1),
(274, '::1', 'Herinurdin@gmail.com', 20, '2023-09-23 08:17:06', 1),
(275, '::1', 'Herinurdin@gmail.com', 20, '2023-09-23 12:42:50', 1),
(276, '::1', 'admin', NULL, '2023-09-23 13:10:19', 0),
(277, '::1', 'admin@gmail.com', 6, '2023-09-23 13:10:33', 1),
(278, '::1', 'Herinurdin@gmail.com', 21, '2023-09-23 13:22:27', 1),
(279, '::1', 'Ernawati@gmail.com', 22, '2023-09-23 13:32:44', 1),
(280, '::1', 'admin@gmail.com', 6, '2023-09-24 06:52:27', 1),
(281, '::1', 'Fauziah@gmail.com', NULL, '2023-09-24 07:02:11', 0),
(282, '::1', 'Fauziah@gmail.com', 23, '2023-09-24 07:03:14', 1),
(283, '::1', 'Fauziah@gmail.com', 23, '2023-09-24 07:15:56', 1),
(284, '::1', 'Fauziah@gmail.com', 23, '2023-09-24 07:33:52', 1),
(285, '::1', 'admin@gmail.com', 6, '2023-09-24 07:36:25', 1),
(286, '::1', 'Ernawati@gmail.com', 24, '2023-09-24 07:45:52', 1),
(287, '::1', 'Adman@gmail.com', 25, '2023-09-24 12:46:10', 1),
(288, '::1', 'Lelawati@gmail.com', 26, '2023-09-24 13:09:42', 1),
(289, '::1', 'Herman@gmail.com', 27, '2023-09-24 13:21:51', 1),
(290, '::1', 'Murtini@gmail.com', 28, '2023-09-24 13:37:40', 1),
(291, '::1', 'admin@gmail.com', 6, '2023-09-24 13:56:27', 1),
(292, '::1', 'admin@gmail.com', 6, '2023-09-24 14:01:05', 1),
(293, '::1', 'admin@gmail.com', 6, '2023-09-25 12:49:51', 1),
(294, '::1', 'Herinurdin@gmail.com', 21, '2023-09-25 13:00:12', 1),
(295, '::1', 'Fauziah@gmail.com', 23, '2023-09-25 13:10:37', 1),
(296, '::1', 'Adman@gmail.com', 25, '2023-09-25 13:13:47', 1),
(297, '::1', 'Adman@gmail.com', 25, '2023-09-25 13:18:00', 1),
(298, '::1', 'Lelawati@gmail.com', 26, '2023-09-25 13:20:36', 1),
(299, '::1', 'Herman@gmail.com', 27, '2023-09-25 13:22:42', 1),
(300, '::1', 'Murtini@gmail.com', 28, '2023-09-25 13:24:41', 1),
(301, '::1', 'admin', NULL, '2023-09-25 13:28:07', 0),
(302, '::1', 'admin@gmail.com', 6, '2023-09-25 13:28:20', 1),
(303, '::1', 'admin', NULL, '2023-09-25 14:29:49', 0),
(304, '::1', 'admin', NULL, '2023-09-25 14:30:03', 0),
(305, '::1', 'admin@gmail.com', 6, '2023-09-25 14:30:20', 1),
(306, '::1', 'Adi@gmail.com', 29, '2023-09-25 14:38:29', 1),
(307, '::1', 'admin@gmail.com', 6, '2023-09-25 14:48:08', 1),
(308, '::1', 'Bambang@gmail.com', 30, '2023-09-25 14:58:45', 1),
(309, '::1', 'admin@gmail.com', 6, '2023-09-26 12:45:01', 1),
(310, '::1', 'admin@gmail.com', 6, '2023-09-26 12:52:44', 1),
(311, '::1', 'Adi@gmail.com', 31, '2023-09-26 12:54:53', 1),
(312, '::1', 'Aisyah@gmail.com', 32, '2023-09-26 13:17:02', 1),
(313, '::1', 'Daina@gmail.com', 33, '2023-09-26 13:30:14', 1),
(314, '::1', 'admin@gmail.com', 6, '2023-09-26 13:40:17', 1),
(315, '::1', 'Maisyarah@gmail.com', 34, '2023-09-26 13:55:13', 1),
(316, '::1', 'admin@gmail.com', 6, '2023-09-26 14:11:36', 1),
(317, '::1', 'Sandi@gmail.com', 35, '2023-09-26 14:14:40', 1),
(318, '::1', 'Rostini@gmail.com', 36, '2023-09-26 14:32:54', 1),
(319, '::1', 'Tutik@gmail.com', 37, '2023-09-26 15:09:40', 1),
(320, '::1', 'admin@gmail.com', 6, '2023-09-26 15:21:00', 1),
(321, '::1', 'Hairul@gmail.com', 38, '2023-09-26 15:33:42', 1),
(322, '::1', 'admin@gmail.com', 6, '2023-09-26 15:48:25', 1);

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
(1, 'Para Rombongan Jemaah Mengunjungi Jabal Rahmah', '307711099_498449031712404_595863990265158664_n.webp.jpg_1695564780.jpg', '2023-06-24 12:54:00', '2023-09-24 14:13:00', NULL),
(2, 'Asyla Berangkatt', '13092.jpg_1687611869.jpg', '2023-06-24 13:04:29', '2023-08-03 07:58:10', '2023-08-03 07:58:10'),
(3, 'Jemaah berada di kebun kurma', '307844655_381919147483278_2552888521446789362_n.webp.jpg_1691049545.jpg', '2023-08-03 07:59:05', '2023-08-03 08:10:08', '2023-08-03 08:10:08'),
(4, 'Jemaah berada di kebun kurma', '307844655_381919147483278_2552888521446789362_n.webp.jpg_1691050229.jpg', '2023-08-03 08:10:29', '2023-09-24 14:25:50', '2023-09-24 14:25:50'),
(5, 'Jemaah Sedang Berada Di Masjid Abu Bakr Siddeeq RA', 'Masjid_Abu_Bakr_Siddeeq_RA.jpg_1695565835.jpg', '2023-09-24 14:30:35', '2023-09-24 14:30:35', NULL),
(6, 'Rombongan Jemaah Berfoto Bersama-sama Di Mesjid Quba', 'Masjid_Quba.jpg_1695565941.jpg', '2023-09-24 14:32:21', '2023-09-24 14:32:21', NULL),
(7, 'Salah Satu Dari Jemaah Umrah Berfoto Di Kebun Kurma', 'IMG-20230926-WA0009.jpg_1695743800.jpg', '2023-09-26 15:56:40', '2023-09-26 15:56:40', NULL);

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
(20, 9, 21, 'Heri Nurdin', 'Nasir', 'Jambi', '1956-05-04', 'laki-laki', 'indonesia', 'S1', 'PNS', 'Jl. Majapahit Lr. Madasrah', 'Payo Selincah', 'Paal Merah', 'Kota Jambi', 'Jambi', 67, '085233421277', '02145675', 'Herinurdin@gmail.com', '36148', 'Heri.jpeg_1695475721.jpeg', 'Heri_KTP.jpeg_1695475721.jpeg', 'kk.PNG_1695475721.png', 'Heri_Paspor.jpeg_1695475721.jpeg', 'akta.jpg_1695475721.jpg', 'nikah.jpg_1695475721.jpg', 1, '2023-03-18 13:28:41', '2023-09-24 13:56:39', NULL),
(21, 13, 23, 'Fauziah Azed', 'Azuddin', 'Jambi', '1956-02-06', 'perempuan', 'indonesia', 'SMA', 'PNS', 'Jl. Dara Jingga', 'Rajawali', 'Jambi Timur', 'Kota Jambi', 'Jambi', 67, '082243526578', '02453789', 'Fauziah@gmail.com', '36139', 'Fauziah.jpeg_1695540307.jpeg', 'Fauziah_KTP.jpeg_1695540307.jpeg', 'Fauziah_KK.jpeg_1695540307.jpeg', 'Fauziah_Paspor.jpeg_1695540307.jpeg', 'akta.png_1695540307.png', 'buku_nikah.jpg_1695540307.jpg', 1, '2023-03-18 07:25:07', '2023-09-24 13:56:45', NULL),
(22, 12, 25, 'Adman Djambak', 'Djambak AS', 'Martapura', '1951-10-29', 'laki-laki', 'indonesia', 'SMA', 'Wiraswasta', 'Jl. Raden Mattaher No. 20', 'Pasar Jambi', 'Pasar Jambi', 'Kota Jambi', 'Jambi', 72, '082345674530', '08657845', 'Adman@gmail.com', '36112', 'Adman.jpeg_1695560648.jpeg', 'Adman_KTP.jpeg_1695560648.jpeg', 'Adman_KK.jpeg_1695560648.jpeg', 'Adman_Paspor.jpeg_1695560648.jpeg', 'akta.png_1695560648.png', 'IMG-20220613-WA0001-800x445.jpg_1695560648.jpg', 1, '2023-03-18 00:00:00', '2023-09-24 13:56:51', NULL),
(23, 9, 26, 'Lelawati', 'Umar Hamzah', 'Jambi', '1952-10-01', 'perempuan', 'indonesia', 'D1', 'Pensiunan', 'Jl. Punai I No. 34', 'Tambak Sari', 'Jambi Selatan', 'Kota Jambi', 'Jambi', 71, '082256784390', '02457890', 'Lelawati@gmail.com', '36139', 'Lelawati.jpeg_1695561518.jpeg', 'Lelawati_KTP.jpeg_1695561518.jpeg', 'Lelawati_KK.jpeg_1695561518.jpeg', 'LELAWATI_PASPOR.jpeg_1695561518.jpeg', 'akta.png_1695561518.png', 'Buku_Nikah.jpg_1695561518.jpg', 1, '2023-03-18 13:18:38', '2023-09-24 13:56:56', NULL),
(24, 9, 27, 'Herman Chaidir', 'Chaidir', 'Muara Tebo', '1954-11-08', 'laki-laki', 'indonesia', 'SMA', 'Pensiunan', 'Jl. Punai I No.34', 'Tambak Sari', 'Jambi Selatan', 'Kota Jambi', 'Jambi', 69, '081256783456', '02457890', 'Herman@gmail.com', '36139', 'Herman_Chaidir.jpeg_1695562217.jpeg', 'Herman_KTP.jpeg_1695562217.jpeg', 'Herman_KK.jpeg_1695562217.jpeg', 'Herman_Paspor.jpeg_1695562217.jpeg', 'akta.jpg_1695562217.jpg', 'Buku_Nikah.jpg_1695562217.jpg', 1, '2023-03-18 13:30:17', '2023-09-24 13:57:01', NULL),
(25, 13, 28, 'Murtini Hasan', 'Hasan', 'Jambi', '1944-08-08', 'perempuan', 'indonesia', 'SD', 'Mengurus Rumah Tangga', 'Jln. Brigjen katamso', 'Kasang', 'Jambi Timur', 'Kota Jambi', 'Jambi', 79, '082245378967', '02902166', 'Murtini@gmail.com', '36149', 'Murtini.jpeg_1695563335.jpeg', 'Murtini_KTP.jpeg_1695563335.jpeg', 'Murtini_KK.jpg_1695563335.jpg', 'Murtini_Paspor.jpeg_1695563335.jpeg', 'akta.png_1695563335.png', 'IMG-20220613-WA0001-800x445.jpg_1695563335.jpg', 1, '2023-03-18 13:48:55', '2023-09-24 13:57:06', NULL),
(26, 12, 30, 'Bambang Pamungkas Sungkow', 'Joyo Diharjo', 'Simpang Bajubang Laut', '1971-11-25', 'laki-laki', 'indonesia', 'S1', 'PNS', 'Rengas Bandung', 'Rengas Bandung', 'Jambi Luar Kota', 'Muaro Jambi', 'Jambi', 52, '082246758900', '02478390', 'Bambang@gmail.com', '36382', 'Bambang.jpeg_1695654557.jpeg', 'Bambang_KTP.jpeg_1695654557.jpeg', 'Bambang_KK.jpeg_1695654557.jpeg', 'Bambang_Paspor.jpeg_1695654557.jpeg', 'akta.png_1695654557.png', 'Buku_Nikah.jpg_1695654557.jpg', 1, '2023-03-18 15:09:17', '2023-09-26 13:40:57', NULL),
(27, 12, 31, 'Muhammad Adi Nugroho', 'Soesmiarto', 'Jambi', '1995-04-24', 'laki-laki', 'indonesia', 'SMA', 'Mahasiswa', 'Lorong Tac Jl. Mesjid Nurul Jannah No. 37', 'Selamat', 'Tenaipura', 'Kota Jambi', 'Jambi', 28, '081267894533', '02673564', 'Adi@gmail.com', '36122', 'Adi.jpeg_1695733537.jpeg', 'Adi_KTP.jpeg_1695733537.jpeg', 'Adi_KK.jpeg_1695733537.jpeg', 'Adi_Paspor.jpeg_1695733537.jpeg', 'akta.png_1695733537.png', 'IMG-20220613-WA0001-800x445.jpg_1695733537.jpg', 1, '2022-11-29 13:05:37', '2023-09-26 13:40:37', NULL),
(28, 9, 32, 'Aisyah', 'Laikin', 'Jawa Barat', '1952-09-20', 'perempuan', 'indonesia', 'SD', 'Mengurus Rumah Tangga', 'Jl. Bunga Tanjung III No. 22', 'Selamat', 'Telanaipura', 'Kota Jambi', 'Jambi', 71, '082278904657', '02567890', 'Aisyah@gmail.com', '36122', 'AISYAH_SUHUD_NAMBAR.jpeg_1695734544.jpeg', 'Aisyah_KTP.jpeg_1695734544.jpeg', 'Aisyah_KK.jpeg_1695734544.jpeg', 'Aisyah_Paspor.jpeg_1695734544.jpeg', 'akta.png_1695734544.png', 'IMG-20220613-WA0001-800x445.jpg_1695734544.jpg', 1, '2022-11-29 13:22:24', '2023-09-26 13:40:42', NULL),
(29, 13, 33, 'Daina', 'M. Kusim', 'Muara Simpang', '1965-03-02', 'perempuan', 'indonesia', 'SD', 'Mengurus Rumah Tangga', 'Perumnas Aur Duri Blok F NO. 214', 'Penyengat Rendah', 'Telanaipura', 'Kota Jambi', 'Jambi', 58, '082178946378', '02785490', 'Daina@gmail.com', '36124', 'Daina.jpeg_1695735370.jpeg', 'Daina_KTP.jpeg_1695735370.jpeg', 'Daina_KK.jpeg_1695735370.jpeg', 'Daina_Paspor.jpeg_1695735370.jpeg', 'akta.png_1695735370.png', 'IMG-20220613-WA0001-800x445.jpg_1695735370.jpg', 1, '2022-11-29 13:36:10', '2023-09-26 13:40:50', NULL),
(30, 13, 34, 'Maisyarah', 'Abdul Hamid', 'Lopak Aur', '1954-06-25', 'perempuan', 'indonesia', 'Belum Tamat SD', 'Petani', 'Lopak Aur', 'Lopak Aur', 'Pemayung', 'Batang Hari', 'Jambi', 69, '082356789435', '02789044', 'Maisyarah@gmail.com', '36657', 'Maisyarah.jpeg_1695736922.jpeg', 'Maisyarah_KTP.jpeg_1695736922.jpeg', 'Maisyarah_KK.jpeg_1695736922.jpeg', 'Maisyarah_Paspor.jpeg_1695736922.jpeg', 'akta.png_1695736922.png', 'IMG-20220613-WA0001-800x445.jpg_1695736922.jpg', 1, '2022-11-29 14:02:02', '2023-09-26 15:48:50', NULL),
(31, 9, 35, 'Sandi Saputra', 'Suhud Nambar', 'Jambi', '1986-10-08', 'laki-laki', 'indonesia', 'S1', 'Karyawan Swasta', 'Jl. Syamsoe Bahru No. 22', 'Selamat', 'Danau Sipin', 'Kota Jambi', 'Jambi', 37, '085378904467', '02784467', 'Sandi@gmail.com', '36122', 'Sandi.jpeg_1695738167.jpeg', 'Sandi_KTP.jpeg_1695738167.jpeg', 'Sandi_KK.jpeg_1695738167.jpeg', 'Sandi_Paspor.jpeg_1695738167.jpeg', 'akta.png_1695738167.png', 'IMG-20220613-WA0001-800x445.jpg_1695738167.jpg', 1, '2022-11-29 14:22:47', '2023-09-26 15:49:01', NULL),
(32, 13, 36, 'Rostini', 'Ruslan', 'Pondok Tinggi', '1961-01-15', 'perempuan', 'indonesia', 'D3', 'PNS', 'Jl. Kapten. A. Hasan No. 24 ', 'Simpang Empat Sipin', 'Telanaipura', 'Kota Jambi', 'Jambi', 62, '085278945637', '02567435', 'Rostini@gmail.com', '36124', 'Rostini.jpeg_1695739632.jpeg', 'Rostini_KTP.jpeg_1695739632.jpeg', 'Rostini_KK.jpeg_1695739632.jpeg', 'Rostini_Paspor.jpeg_1695739632.jpeg', 'akta.png_1695739632.png', 'IMG-20220613-WA0001-800x445.jpg_1695739632.jpg', 1, '2022-11-29 14:47:12', '2023-09-26 15:49:09', NULL),
(33, 12, 37, 'Tutik Supatmi', 'Kemis', 'Jambi', '1969-01-19', 'perempuan', 'indonesia', 'SMA', 'Mengurus Rumah Tangga', 'JL. Sersan Muslim No. 02', 'Paal Merah', 'Paal Merah', 'Kota Jambi', 'Jambi', 54, '081356237854', '02678944', 'Tutik@gmail.com', '36128', 'Tutik.jpeg_1695741491.jpeg', 'Tutik_KTP.jpeg_1695741491.jpeg', 'Tutik_KK.jpeg_1695741491.jpeg', 'Tutik_Paspor.jpeg_1695741491.jpeg', 'akta.png_1695741491.png', 'IMG-20220613-WA0001-800x445.jpg_1695741491.jpg', 1, '2022-11-29 15:18:11', '2023-09-26 15:49:16', NULL),
(34, 9, 38, 'Hairul Anwar', 'Mustofa', 'TL. Pandak', '1972-12-17', 'laki-laki', 'indonesia', 'SD', 'Petani', 'Sungai Aur', 'Teluk Pandak', 'Tanah Sepenggal', 'Bungo', 'Jambi', 51, '082256782170', '02785367', 'Hairul@gmail.com', '37263', 'Hairul.jpeg_1695742890.jpeg', 'Hairul_KTP.jpeg_1695742890.jpeg', 'Hairul_KK.jpeg_1695742890.jpeg', 'Hairul_Paspor.jpeg_1695742890.jpeg', 'akta.png_1695742890.png', 'IMG-20220613-WA0001-800x445.jpg_1695742890.jpg', 1, '2022-11-29 15:41:30', '2023-09-26 15:49:22', NULL);

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
(9, 'Double', 'Sekamar Berdua', 'Qatar Airways', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 38500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-09-17', '2023-09-28', '2023-07-18 09:22:51', '2023-09-26 15:51:40', NULL),
(12, 'Triple', 'Sekamar Bertiga', 'Garuda Indonesia', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 36500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-09-17', '2023-09-28', '2023-09-23 08:10:44', '2023-09-26 15:52:27', NULL),
(13, 'Quad', 'Sekamar Berempat', 'Lion Air', 'Hotel Mira Ajyad - Royal Majestik', 'Hotel Royal Andalus', 35500000, 'Kota Mekkah : Jabal Rahmah, Jabal Tsur, Musdalifa, Dan Arafah Kota Madinah : Masjid Quba, Kebun Kurma, Dan Jabal Uhud', '2023-09-17', '2023-09-28', '2023-09-23 13:17:01', '2023-09-26 15:53:00', NULL);

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
(26, 21, 38500000, 38500000, 0, 'IMG_20230923_200605.jpg_1695475785.jpg', 1, '2023-03-18 13:29:45', '2023-09-24 06:56:35', NULL),
(27, 23, 35500000, 35500000, 0, 'IMG_20230923_200507.jpg_1695540859.jpg', 1, '2023-03-18 07:34:19', '2023-09-24 13:57:25', NULL),
(28, 25, 36500000, 36500000, 0, 'IMG_20230923_200605.jpg_1695560689.jpg', 1, '2023-03-18 13:04:49', '2023-09-24 13:57:30', NULL),
(29, 26, 38500000, 38500000, 0, 'IMG_20230923_200642.jpg_1695561560.jpg', 1, '2023-03-18 13:19:20', '2023-09-24 13:57:38', NULL),
(30, 27, 38500000, 38500000, 0, 'IMG_20230923_200642.jpg_1695562262.jpg', 1, '2023-03-18 13:31:03', '2023-09-24 13:57:44', NULL),
(31, 28, 35500000, 35500000, 0, 'IMG_20230923_200535.png_1695563361.png', 1, '2023-03-18 13:49:21', '2023-09-24 13:57:50', NULL),
(32, 30, 36500000, 36500000, 0, 'IMG_20230923_200535.png_1695654610.png', 1, '2023-09-25 15:10:10', '2023-09-26 13:41:21', NULL),
(33, 31, 36500000, 36500000, 0, 'IMG_20230926_200310.jpg_1695733915.jpg', 1, '2023-09-26 13:11:56', '2023-09-26 13:41:30', NULL),
(34, 32, 38500000, 38500000, 0, 'IMG_20230926_200352.jpg_1695734668.jpg', 1, '2023-09-26 13:24:28', '2023-09-26 13:41:40', NULL),
(35, 33, 35500000, 35500000, 0, 'IMG_20230926_200310.jpg_1695735427.jpg', 1, '2023-09-26 13:37:07', '2023-09-26 13:41:52', NULL),
(36, 34, 35500000, 35500000, 0, 'IMG_20230926_200352.jpg_1695736984.jpg', 1, '2023-09-26 14:03:04', '2023-09-26 15:53:19', NULL),
(37, 35, 38500000, 38500000, 0, 'IMG_20230926_200352.jpg_1695738281.jpg', 1, '2023-09-26 14:24:41', '2023-09-26 15:53:36', NULL),
(38, 36, 35500000, 35500000, 0, 'IMG_20230926_200231.jpg_1695739669.jpg', 1, '2023-09-26 14:47:49', '2023-09-26 15:53:51', NULL),
(39, 37, 36500000, 36500000, 0, 'IMG_20230926_200352.jpg_1695741520.jpg', 1, '2023-09-26 15:18:40', '2023-09-26 15:54:05', NULL),
(40, 38, 38500000, 38500000, 0, 'IMG_20230926_200310.jpg_1695742926.jpg', 1, '2023-09-26 15:42:06', '2023-09-26 15:54:20', NULL);

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
(7, 15, 'Alhamdulilah bisa menjalankan ibadah umrah dengan kusyuk dengan biro perjalanan umrah bersama PT. As', '2023-08-03 07:50:50', '2023-08-03 07:50:50', NULL),
(8, 21, 'Selama umrah bersama PT Asyla Fatimah Wisata bersama dibimbing ustadz Muhtar Husin kesan indah karen', '2023-09-25 13:09:22', '2023-09-25 13:09:22', NULL),
(9, 23, 'Masya Allah PT. Asyla Fatimah Wisata selalu dihati syukron telah mengantarkan saya ke tanah suci ', '2023-09-25 13:12:25', '2023-09-25 13:12:25', NULL),
(10, 25, 'Alhamdulillah untuk pelayanan di PT. Asyla Fatimah Wisata sangat baik, mudah-mudahan kedepannya lebi', '2023-09-25 13:17:24', '2023-09-25 13:17:24', NULL),
(11, 26, 'PT. Asyla Fatimah Wisata luar biasa, madinah ke mekkah luar biasa pelayanannya, hotel oke, makanan o', '2023-09-25 13:22:06', '2023-09-25 13:22:06', NULL),
(12, 27, 'Pokonya semua memuaskan, doain ya segera mendaftar untuk umrah berikutnya', '2023-09-25 13:23:43', '2023-09-25 13:23:43', NULL),
(13, 28, 'Saya merasakan sendiri pelayanan umrah di PT. Asyla Fatimah Wisata sangat praktis dan mudah. Mulai d', '2023-09-25 13:26:49', '2023-09-25 13:26:49', NULL),
(14, 30, 'PT. Asyla Fatimah Wisata sangat nyaman, amanah dan aman, ibadah lebih khusyuk pelayanan memuaskan da', '2023-09-25 15:16:18', '2023-09-25 15:16:18', NULL),
(15, 31, 'Terimakasih untuk semua tim PT. Asyla Fatimah Wisata Semoga Kita Bisa Bertemu Lagi Dalam Perjalanan ', '2023-09-26 13:14:46', '2023-09-26 13:14:46', NULL),
(16, 32, 'Alhamdulillah Perjalanan Ibadah Umrah Bersama PT. Asyla Fatimah Wisata Berjalan Sesuai Rencana Dan S', '2023-09-26 13:26:45', '2023-09-26 13:26:45', NULL),
(17, 33, 'Selama Mengikuti Perjalanan Umrah Ini Sangat  Tidak Bisa Diungkapkan Dengan Kata-Kata Pengalaman Per', '2023-09-26 13:39:45', '2023-09-26 13:39:45', NULL),
(18, 34, 'Alhamdulillah Mendapat Ilmu-Ilmu Baru Yang Belum Kami Dapat Dari Kajian-Kajian Rohani', '2023-09-26 14:05:02', '2023-09-26 14:05:02', NULL),
(19, 35, 'Pelayanan Di PT. Asyla Fatimah Wisata Sangat Professional, Mulai Dari Keberangkatan Dan Kedatangan K', '2023-09-26 14:27:47', '2023-09-26 14:27:47', NULL),
(20, 36, 'PT. Asyla Fatimah Wisata Memiliki Staf Yang Ramah Dan Mampu Menciptakan Suasana Kekeluargaan. Ketika', '2023-09-26 14:51:33', '2023-09-26 14:51:33', NULL),
(21, 37, 'PT. Asyla Fatimah Wisata Ini Sangat Membantu Perjalanan Ibadah Umrah Kami Dan Lebih Murah Serta Serv', '2023-09-26 15:20:27', '2023-09-26 15:20:27', NULL),
(22, 38, 'Agen Travel Umrah Terbaik Pelayanan Sangat Baik Dan Ramah. Pokoknya Jangan Di Ragu kan Lagi', '2023-09-26 15:44:22', '2023-09-26 15:44:22', NULL);

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
(21, 'Herinurdin@gmail.com', 'Heri', '$2y$10$WkIBMuHZ4xhN86hk0DpOROsLptjZoHz1.5z/V/edrVBu7VS.hK1Hu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-23 13:22:12', '2023-09-23 13:22:12', NULL),
(23, 'Fauziah@gmail.com', 'Fauziah', '$2y$10$vkYVK/FOGyLAIU7aCTgN4O15dNMEA5PW1tKzmMAeW8qGWQX52xzci', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-24 07:03:00', '2023-09-24 07:03:00', NULL),
(25, 'Adman@gmail.com', 'Adman', '$2y$10$IC/JD6ulqGtJiZVVkjerRu/iz5jbjy.81PF6gHpfZygU7QGvGQYhS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-24 12:45:52', '2023-09-24 12:45:52', NULL),
(26, 'Lelawati@gmail.com', 'Lelawati', '$2y$10$wVjz8qXpt/qmyqfLt81ST.sjy6YkuhhM3SqBWCltwScB4nyxvDL0i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-24 13:09:25', '2023-09-24 13:09:25', NULL),
(27, 'Herman@gmail.com', 'Herman', '$2y$10$yTone.JealvaAjlNhvnUoesPXetc6LI3n5jXuDdzL7hICHYlJg49O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-24 13:21:37', '2023-09-24 13:21:37', NULL),
(28, 'Murtini@gmail.com', 'Murtini', '$2y$10$4loVcU7LU4.DHmqpgDSWReqzinqdZUwqzAlXQ7hiU.OD0sJDtblUG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-24 13:37:28', '2023-09-24 13:37:28', NULL),
(30, 'Bambang@gmail.com', 'Bambang', '$2y$10$CeF1k12.g9Qo.9D/nVDtsOW0toMK5jX3pHVYOAKliNGp0DfOpGH2.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-25 14:58:24', '2023-09-25 14:58:24', NULL),
(31, 'Adi@gmail.com', 'Adi', '$2y$10$APXFTjwSky6LptxtUVBKy.NQZY.iHXsSbHcgtUX3FgGmgdNgNmqMe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 12:54:37', '2023-09-26 12:54:37', NULL),
(32, 'Aisyah@gmail.com', 'Aisyah', '$2y$10$hVDqtn1ZmEMigwJLxSLU8u4TM2ZCwQGVyUBx52Tl18tT2toCIzCKC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 13:16:38', '2023-09-26 13:16:38', NULL),
(33, 'Daina@gmail.com', 'Daina', '$2y$10$mVo4dyZnNed7atCG6TykUezBAK2prWsWIxA6wIgqZA7GoT5hCCi0q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 13:29:52', '2023-09-26 13:29:52', NULL),
(34, 'Maisyarah@gmail.com', 'Maisyarah', '$2y$10$D5GanfIs.8Q747krjGz6d.yNHhOTq4DtyZTjYh63SOPljgsHC2k9C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 13:55:02', '2023-09-26 13:55:02', NULL),
(35, 'Sandi@gmail.com', 'Sandi', '$2y$10$FwnwEBL0N.taMeU.QZ6fqOm2voIIdBh2lL7Rv/ca8cE/n5NeUcQpC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 14:14:22', '2023-09-26 14:14:22', NULL),
(36, 'Rostini@gmail.com', 'Rostini', '$2y$10$K.Gv8y5c7cRDsY5l9oPLV.d86VlgXx50yyvAEXH8dWySIJPPpbA5u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 14:32:31', '2023-09-26 14:32:31', NULL),
(37, 'Tutik@gmail.com', 'Tutik', '$2y$10$wYjBrcMHzlEGHFjdNZA3K.bR2FkIkFK/KzX9tRxmpkbwlJg6z9rL2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 15:09:26', '2023-09-26 15:09:26', NULL),
(38, 'Hairul@gmail.com', 'Hairul', '$2y$10$Vp5FTuMPzGQXv64br3j.1.2JkSumQ6IsITQMlg7JuYWZWyI5maMDC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-26 15:33:28', '2023-09-26 15:33:28', NULL);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jemaah`
--
ALTER TABLE `tb_jemaah`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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

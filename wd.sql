-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2022 at 10:16 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `tgl_akad` varchar(25) NOT NULL,
  `jam_akad` varchar(50) NOT NULL,
  `jam_resepsi` varchar(50) NOT NULL,
  `tempat_akad` text NOT NULL,
  `tempat_resepsi` text NOT NULL,
  `link_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `id_undangan`, `tgl_akad`, `jam_akad`, `jam_resepsi`, `tempat_akad`, `tempat_resepsi`, `link_map`) VALUES
(1, 1, '2022/12/09', '10:00 - 12.00 WIB', '12:00 WIB - Selesai', 'Gereja HKBP Teladan Medan', 'Balai Bolon Wisma GKPS Teladan Medan ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.094927511941!2d98.6936516!3d3.5656212999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031315142e8df2d%3A0x65fa6374c91447e8!2sGKPS%20TELADAN!5e0!3m2!1sid!2sid!4v1667380281164!5m2!1sid!2sid'),
(2, 2, '2022/11/13', '09.00 s/d 10.00 WIB', '10.00 WIB s/d Selesai', 'Kediaman Mempelai Wanita\r\nKp. Cukulutuk Dusun.Krajan RT.003/RW.001 Des.Sindangkarya Kec.Kutawaluya - Karawang', 'Kediaman Mempelai Wanita\r\nKp. Cukulutuk Dusun.Krajan RT.003/RW.001 Des.Sindangkarya Kec.Kutawaluya - Karawang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.90594819681058!2d107.35354392237815!3d-6.198212395037448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697f718667fd87%3A0x3d66be6dc07f841d!2sSiti%20Julaeha%20(Teh%20Eha)!5e0!3m2!1sid!2sid!4v1667394889683!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `id_undangan`, `gambar`) VALUES
(1, 1, '1.jpeg'),
(2, 1, '2.jpeg'),
(3, 1, '3.jpeg'),
(4, 1, '4.jpeg'),
(5, 1, '5.jpeg'),
(6, 1, '6.jpeg'),
(7, 1, '7.jpeg'),
(8, 1, '8.jpeg'),
(9, 1, '9.jpeg'),
(10, 2, '1.jpg'),
(11, 2, '2.jpg'),
(12, 2, '3.jpg'),
(13, 2, '4.jpg'),
(14, 2, '5.jpg'),
(15, 2, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mempelai`
--

CREATE TABLE `mempelai` (
  `id_mempelai` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `mempelai_pria` varchar(100) NOT NULL,
  `mempelai_wanita` varchar(100) NOT NULL,
  `gambar_pria` varchar(100) NOT NULL,
  `gambar_wanita` varchar(100) NOT NULL,
  `ke_pria` varchar(10) NOT NULL,
  `ke_wanita` varchar(10) NOT NULL,
  `otp_mempelai_pria` varchar(100) NOT NULL,
  `otl_mempelai_pria` varchar(100) NOT NULL,
  `otp_mempelai_wanita` varchar(100) NOT NULL,
  `otl_mempelai_wanita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mempelai`
--

INSERT INTO `mempelai` (`id_mempelai`, `id_undangan`, `mempelai_pria`, `mempelai_wanita`, `gambar_pria`, `gambar_wanita`, `ke_pria`, `ke_wanita`, `otp_mempelai_pria`, `otl_mempelai_pria`, `otp_mempelai_wanita`, `otl_mempelai_wanita`) VALUES
(1, 1, 'Roy March Pardede .S.T', 'Yesti Anita Petronela Kiki', 'pria.png', 'wanita.png', 'Ketiga', 'Keempat', ' R.br Pangaribuan', 'H.P Pardede (Alm)', 'Amelia mesah', 'Melkianus kiki (Alm)'),
(2, 2, 'Rochan Fauzy', 'Siti Julaeha', 'rozzy.jpg', 'eha.jpg', 'Pertama', 'Pertama', 'Jubaedah (Almh)', 'Ujang Rohayat', 'Ibu Carwati', 'Ahmad Pahrulroji');

-- --------------------------------------------------------

--
-- Table structure for table `norek`
--

CREATE TABLE `norek` (
  `id_norek` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `no_rek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `norek`
--

INSERT INTO `norek` (`id_norek`, `id_undangan`, `atas_nama`, `nama_bank`, `no_rek`) VALUES
(1, 1, '-', '-', '-'),
(2, 2, 'Ikhsan Permana Hadiansyah', 'BRI', '410501017373535');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `nama_theme` varchar(50) NOT NULL,
  `kode_theme` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `nama_theme`, `kode_theme`, `created_at`, `updated_at`) VALUES
(1, 'hwflower', 'A002', '2020-07-26 13:23:40', '2020-08-29 01:26:02'),
(2, 'tealflower', 'A003', '2020-07-26 13:23:40', '2020-08-29 01:26:04'),
(3, 'greenflower', 'A004', '2020-08-17 01:03:22', '2020-08-29 01:26:07'),
(4, 'prettyflower', 'A005', '2020-08-28 18:22:30', '2020-08-29 01:26:46'),
(5, 'blueroses', 'A006', '2020-08-28 17:03:54', '2020-08-29 01:26:49'),
(6, 'redroses', 'A007', '2020-08-28 17:04:08', '2020-08-29 01:26:51'),
(8, 'radiantyellow', 'A008', '2020-08-28 19:56:29', '2020-08-29 02:56:29'),
(9, 'radiantdark', 'A009', '2020-08-28 19:56:29', '2020-08-29 02:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `ucapan`
--

CREATE TABLE `ucapan` (
  `id_ucapan` int(11) NOT NULL,
  `id_undangan` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `isi_ucapan` text NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ucapan`
--

INSERT INTO `ucapan` (`id_ucapan`, `id_undangan`, `nama_tamu`, `isi_ucapan`, `date`) VALUES
(4, 2, 'Gilang Sultona', 'Alhamdulillah akhirnya ', '2022-11-09 06:14:37'),
(5, 2, 'teh rachun', 'Alhamdulillah ehaaaa ', '2022-11-11 17:38:17'),
(6, 0, 'Ikhsan Permana Hadiansyah', 'Congrats! :D', '2022-12-05 14:03:43'),
(7, 0, 'devyta', 'samawa', '2022-12-11 10:47:57'),
(8, 0, 'Bayu', 'Congrats! :D', '2022-12-17 08:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id_undangan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `inisial` varchar(100) NOT NULL,
  `gambar_cover` varchar(100) NOT NULL,
  `gambar_bg` varchar(25) NOT NULL,
  `musik` varchar(25) NOT NULL,
  `themes` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id_undangan`, `username`, `inisial`, `gambar_cover`, `gambar_bg`, `musik`, `themes`, `agama`) VALUES
(2, 'rozzy-eha', 'Rozzy & Eha', 'kita.jpg', 'bg-open.jpg', 'music.mp3', 'blueroses', 'Islam'),
(6, 'ikhsan-helen', 'Ikhsan & Helen', 'images.png', '', 'music.mp3', 'radiantyellow', 'Islam'),
(7, 'geri&loli', 'Geri&Loli', 'ikhsan.jpg', '', 'music.mp3', 'blueroses', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(19, 'Bayu', 'bayu@gmail.com', 'default1.jpg', '$2y$10$oBfISOzjl.RWIyftbtzx0uZf5621QkgBYMsmJzX.GIPfD7uK8PxG6', 2, 1, 1669561966),
(20, 'Ikhsan', 'admin@gmail.com', 'default2.jpg', '$2y$10$IPg/q5vXLTEqoRB9Nkqwn.XFeNlSBh1XuQV/uLMdkqRuPjmmS1Dge', 1, 1, 1669564385);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(9, 2, 4),
(22, 1, 2),
(23, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Themes');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-list-ul', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-cog', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'Themes', 'themes', 'fas fa-fw fa-heart', 1),
(10, 1, 'Themes Management', 'admin/themes', 'fas fa-fw fa-heart', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'bayu@gmail.com', 'OjQMQJvDQYDjivZOWLjYHZ6yd9bvdUNGVW5IfWjzHng=', 1669555986),
(10, 'ikhsanpermana302@gmail.com', 'tx0R9BlF4Yl09MtgLrjAFwp7AjVYNp3aL3e3BQdZZGo=', 1669556107),
(11, 'ikhsanhadiansyah302@gmail.com', 'XRhDfINCou/FxD0Uz+3pLo4V3cxDfh0ijOi/kZ597Bk=', 1669556742),
(12, 'ikhsanhadiansyah302@gmail.com', 'QRHdsz/m1F/j2Xaf+eGMFeOO52TgOZojyzHRA7HWNRY=', 1669557783),
(13, 'ikhsanpermana302@gmail.com', 't706zOXeVYq29FEHQJFFjad/djAxMkA93FtXs++2FCU=', 1669557944),
(14, 'ikhsanpermana302@gmail.com', 'DZgvGsqAh3jfTrlOJ3xAN3ZCPJr6ZD3Tq5YIORGwYN4=', 1669558921),
(15, 'ikhsanpermana302@gmail.com', 's00dhi8Hb0i/CbJkFcfG6GECL6vhRWuDPe1IpIve3BE=', 1669559275),
(16, 'ikhsanpermana302@gmail.com', 'X+X/6Ft7gbVNlmtThrjrJ9dIU6NA5hGMNoL4mgo19Xs=', 1669560018),
(17, 'ikhsanpermana302@gmail.com', 'N+IQOcnKOVMyY3Wav3j0nE0937GRuWW2n5vroXWexq4=', 1669560492),
(18, 'ikhsanpermana302@gmail.com', 'o1SlhqdxdJYUhvqq0EGOTS2SrR60WCPybvF47sXAKdw=', 1669561166);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `mempelai`
--
ALTER TABLE `mempelai`
  ADD PRIMARY KEY (`id_mempelai`);

--
-- Indexes for table `norek`
--
ALTER TABLE `norek`
  ADD PRIMARY KEY (`id_norek`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id_ucapan`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mempelai`
--
ALTER TABLE `mempelai`
  MODIFY `id_mempelai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `norek`
--
ALTER TABLE `norek`
  MODIFY `id_norek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id_ucapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

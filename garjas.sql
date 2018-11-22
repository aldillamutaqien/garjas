-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Nov 2018 pada 16.06
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garjas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `personel`
--

CREATE TABLE IF NOT EXISTS `personel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `korps` varchar(20) DEFAULT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kesatuan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `matra` varchar(7) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `flag_del` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id` int(11) NOT NULL,
  `id_data_personil` int(11) DEFAULT NULL,
  `kelompok_umur` varchar(2) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `nilai_bmi` int(11) DEFAULT NULL,
  `kategori` varchar(5) DEFAULT NULL,
  `lari` double DEFAULT NULL,
  `pull_up` int(11) DEFAULT NULL,
  `sit_up` int(11) DEFAULT NULL,
  `push_up` int(11) DEFAULT NULL,
  `shuttle_run` double DEFAULT NULL,
  `gaya_renang` varchar(25) DEFAULT NULL,
  `renang` double DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_password` longtext NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `on_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `flag_del` int(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_type_id`, `user_status`, `on_date`, `date_created`, `date_updated`, `flag_del`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, '2016-04-11 12:04:28', NULL, NULL, NULL),
(23, 'dekahuha', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '2018-11-04 06:06:32', NULL, '2018-11-07 15:37:21', 0),
(24, 'admindeka', '99f9b2cd7dfc324b219ac2e5ce29e5d5', 0, 1, '2018-11-04 06:07:50', NULL, NULL, 0),
(25, 'love', 'b5c0b187fe309af0f4d35982fd961d7e', 1, 1, '2018-11-04 06:24:48', '2018-11-04 01:24:48', NULL, 0),
(26, 'lola', 'fceeb9b9d469401fe558062c4bd25954', 1, 1, '2018-11-04 06:26:50', '2018-11-04 13:26:50', '2018-11-04 13:29:25', 1),
(27, 'to', '01b6e20344b68835c5ed1ddedf20d531', 0, 1, '2018-11-06 22:58:48', '2018-11-07 05:58:48', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `user_type_id` int(11) NOT NULL,
  `user_type_title` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user_types`
--

INSERT INTO `user_types` (`user_type_id`, `user_type_title`) VALUES
(1, 'Front'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_type_access`
--

CREATE TABLE IF NOT EXISTS `user_type_access` (
  `user_type_id` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `method` varchar(30) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user_type_access`
--

INSERT INTO `user_type_access` (`user_type_id`, `class`, `method`, `access`) VALUES
(0, 'admin', '*', 1),
(0, 'departemen', '*', 1),
(0, 'personil', '*', 1),
(0, 'suratkeluar', '*', 1),
(0, 'suratmasuk', '*', 1),
(0, 'users', '*', 1),
(0, 'workflow', '*', 1),
(0, 'workflowsurat', '*', 1),
(1, 'front', '*', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`) USING BTREE;

--
-- Indexes for table `user_type_access`
--
ALTER TABLE `user_type_access`
  ADD UNIQUE KEY `user_type_id` (`user_type_id`,`class`,`method`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
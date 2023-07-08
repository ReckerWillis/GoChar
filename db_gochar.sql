-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 02:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gochar`
--

-- --------------------------------------------------------

--
-- Table structure for table `berdonasi`
--

CREATE TABLE `berdonasi` (
  `id_berdonasi` int(50) NOT NULL,
  `jumlah_donasi` int(50) NOT NULL,
  `id_gd` int(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berdonasi`
--

INSERT INTO `berdonasi` (`id_berdonasi`, `jumlah_donasi`, `id_gd`, `email`) VALUES
(105, 100, 136, 'javier@gmail.com'),
(106, 100, 136, 'javier@gmail.com'),
(107, 100, 136, 'javier@gmail.com'),
(108, 100, 136, 'javier@gmail.com'),
(109, 100, 136, 'javier@gmail.com'),
(110, 100, 136, 'javier@gmail.com'),
(111, 100, 136, 'javier@gmail.com'),
(112, 100, 141, 'Eki@Yahuuu.com'),
(113, 50, 142, 'javier@gmail.com'),
(114, 0, 142, 'javier@gmail.com'),
(115, 10000, 142, 'javier@gmail.com'),
(116, 1000000, 142, 'javier@gmail.com'),
(117, 2147483647, 142, 'javier@gmail.com'),
(118, 1000000, 145, 'javier@gmail.com'),
(119, 2147483647, 142, 'javier@gmail.com'),
(120, 2147483647, 145, 'javier@gmail.com'),
(121, 100, 145, 'javier@gmail.com'),
(122, 100, 142, 'javier@gmail.com'),
(123, 100, 148, 'Dita@gmail.com'),
(124, 100, 142, 'javier@gmail.com'),
(125, 100, 148, 'Dita@gmail.com'),
(126, 100, 148, 'Dita@gmail.com'),
(127, 100, 148, 'Dita@gmail.com'),
(128, 100, 148, 'Dita@gmail.com'),
(129, 100, 148, 'Dita@gmail.com'),
(130, 100, 148, 'Dita@gmail.com'),
(131, 100, 148, 'Dita@gmail.com'),
(132, 100, 145, 'javier@gmail.com'),
(133, 100, 148, 'Dita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `galang_donasi`
--

CREATE TABLE `galang_donasi` (
  `id_gd` int(20) NOT NULL,
  `kategori` enum('pendidikan','bencana alam','difabel','kemanusiaan','panti asuhan','kesehatan') NOT NULL,
  `judul` varchar(50) NOT NULL,
  `cerita` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `tujuan_donasi` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `target_donasi` varchar(50) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `rincian` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galang_donasi`
--

INSERT INTO `galang_donasi` (`id_gd`, `kategori`, `judul`, `cerita`, `foto`, `penerima`, `tujuan_donasi`, `lokasi`, `target_donasi`, `durasi`, `rincian`, `email`) VALUES
(142, 'bencana alam', 'Bantu Bencana Krakatau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'gunung.jpg', 'Badan Kemasyarakatan', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'palembang', '1000000000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'javier@gmail.com'),
(145, 'bencana alam', 'Bantu Bencana Krakatau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'gunung.jpg', 'Badan Kemasyarakatan', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'palembang', '1000000000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'javier@gmail.com'),
(148, 'kemanusiaan', 'dadwadwqd', 'asdwadqwd', 'RabbitSky_Wallpaper-1080.png', 'asdsads', 'sdsadsa', 'dsadasd', '1000000000', '30hari', 'dasdsadd', 'Dita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id_misi`, `judul`, `deskripsi`, `poin`) VALUES
(3, 'ubah profile dek', 'Lorems ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50),
(5, 'Ubah nama', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9),
(6, 'Mengubah password', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5),
(69, 'Membuat Donasi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Bank` int(11) NOT NULL,
  `Gopay` int(11) NOT NULL,
  `OVO` int(11) NOT NULL,
  `DANA` int(11) NOT NULL,
  `QRIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Bank`, `Gopay`, `OVO`, `DANA`, `QRIS`) VALUES
(15, 20, 15, 18, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sum`
--

CREATE TABLE `sum` (
  `id_sum` int(10) NOT NULL,
  `total_poin` int(10) NOT NULL,
  `id_misi` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `noHp` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `username`, `NIK`, `noHp`, `pekerjaan`, `foto`) VALUES
('', '', '', '', '', '', ''),
('Dita@gmail.com', 'Dita', '123', 'wdawdd', '13123123', '12', ''),
('Eki@Yahuuu.com', '1234', 'rekicuy', '202020202002022', '7678968', 'ceo', ''),
('fajar@gmail.com', '111', 'fajar', '77777777777777', '0812345678', 'nganggur', ''),
('javier@gmail.com', '22', 'javier', '1231242343253221', '081231223412', 'mahasiswa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berdonasi`
--
ALTER TABLE `berdonasi`
  ADD PRIMARY KEY (`id_berdonasi`),
  ADD KEY `id_gd` (`id_gd`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `galang_donasi`
--
ALTER TABLE `galang_donasi`
  ADD PRIMARY KEY (`id_gd`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `sum`
--
ALTER TABLE `sum`
  ADD PRIMARY KEY (`id_sum`),
  ADD KEY `id_misi` (`id_misi`,`email`),
  ADD KEY `2` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berdonasi`
--
ALTER TABLE `berdonasi`
  MODIFY `id_berdonasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `galang_donasi`
--
ALTER TABLE `galang_donasi`
  MODIFY `id_gd` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berdonasi`
--
ALTER TABLE `berdonasi`
  ADD CONSTRAINT `berdonasi_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `galang_donasi`
--
ALTER TABLE `galang_donasi`
  ADD CONSTRAINT `galang_donasi_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `sum`
--
ALTER TABLE `sum`
  ADD CONSTRAINT `1` FOREIGN KEY (`id_misi`) REFERENCES `misi` (`id_misi`),
  ADD CONSTRAINT `2` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

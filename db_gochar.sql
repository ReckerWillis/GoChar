-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2023 pada 15.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

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
-- Struktur dari tabel `berdonasi`
--

CREATE TABLE `berdonasi` (
  `id_berdonasi` int(50) NOT NULL,
  `jumlah_donasi` int(50) NOT NULL,
  `id_gd` int(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berdonasi`
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
(133, 100, 148, 'Dita@gmail.com'),
(134, 100, 148, 'Dita@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galang_donasi`
--

CREATE TABLE `galang_donasi` (
  `id_gd` int(20) NOT NULL,
  `kategori` enum('bantuan pendidikan','bencana alam','difabel','kemanusiaan','panti asuhan','bantuan kesehatan') NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galang_donasi`
--

INSERT INTO `galang_donasi` (`id_gd`, `kategori`, `judul`, `cerita`, `foto`, `penerima`, `tujuan_donasi`, `lokasi`, `target_donasi`, `durasi`, `rincian`, `email`) VALUES
(148, 'kemanusiaan', 'dadwadwqd', 'asdwadqwd', 'RabbitSky_Wallpaper-1080.png', 'asdsads', 'sdsadsa', 'dsadasd', '1000000000', '30hari', 'dasdsadd', 'Dita@gmail.com'),
(150, 'difabel', 'gkrngrgneglnergkr', 'h', 'card.jpg', 'hhh', 'hh', 'hhh', '77', '7hari', 'hh', 'javier@gmail.com'),
(153, 'kemanusiaan', 'frfrfrfrfrfrfr', 'nvknenjlrnvjenvjrlenvjervljrev', 'rumah-roboh.jpg', 'dtddtodtodto', 'rvrvrvfddvdfvfdvvfdvfd', 'ewfwefewfewfewfewfewf', '100000000', '7hari', 'eifheifefeifbejfbewfb', 'javier@gmail.com'),
(155, 'bantuan pendidikan', 'yuiuiyuiyu', 'dwwewfwefewfewf', 'gunung.jpg', 'rvrervrevreev', 'vfdvfdvfdvfdvfdvbb', 'bgfbgfbffbgfbfb', '10000000', '7hari', 'ivjvrvoievrrejvoir', 'javier@gmail.com'),
(156, 'bencana alam', 'eregdvfdbbgfbfb', 'efwewfewfwef', 'ngemis.jpg', 'dtddtodtodto', 'fewfewewfewfwfewf', 'fewfewewfewfewf', '10000000', '7hari', 'efwfewfwefefewf', 'javier@gmail.com'),
(157, 'panti asuhan', 'fefwefwefewfewf', 'ffdbdgbdgbgbddfbd', 'slides-1.jpg', 'fkneklfneklfnklenfklenfkelfnekf', 'oewiejwioewjfiewjfieofefoe', 'kdsfjksdkfdjskfjdsfjsdfj', '10000000000', '7hari', 'fejfewipfjwepfjepfwepfjewp', 'javier@gmail.com'),
(158, 'bantuan kesehatan', 'bgb gb gbgbgbgnbgnbg', 'gbgbfbgfbgfbg', 'Rahmat.png', 'ggtgtjgntjgntjg', 'njbgnbjgfbnfgjbngfjbngf', 'tigorgtigjigej', '10000000', '7hari', 'r4r4r43r43rrgreggr', 'javier@gmail.com'),
(159, 'bencana alam', 'yuiuiyuiyu', 'dededewdwdew', 'gunung.jpg', 'evwvewjvkwjvwkvjew', 'eedededwedewd', 'ececewcwc', '1000000', '7hari', 'ececwcwecewcwec', 'javier@gmail.com'),
(160, 'bantuan pendidikan', 'jgnjgtnjgrkngjktgnt', 'gkbgbfnjkbngfjkb', 'foto.jpeg', 'jewfnewjfnewjifnewifnewifew', 'jkvbjervbekvberkhvbe', 'rjevreivreivrei', '1000000', '7hari', 'efeufhuefhuef', 'javier@gmail.com'),
(161, 'bantuan pendidikan', 'jgnjgtnjgrkngjktgnt', 'gkbgbfnjkbngfjkb', 'banjir-di-santa-catarina-brasil-2_169.jpeg', 'jewfnewjfnewjifnewifnewifew', 'jkvbjervbekvberkhvbe', 'rjevreivreivrei', '1000000', '7hari', 'efeufhuefhuef', 'javier@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Bank` int(11) NOT NULL,
  `Gopay` int(11) NOT NULL,
  `OVO` int(11) NOT NULL,
  `DANA` int(11) NOT NULL,
  `QRIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`Bank`, `Gopay`, `OVO`, `DANA`, `QRIS`) VALUES
(15, 20, 15, 19, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `noHp` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `password`, `username`, `NIK`, `noHp`, `pekerjaan`, `foto`) VALUES
('Dita@gmail.com', 'Dita', '123', 'wdawdd', '13123123', '12', ''),
('Eki@Yahuuu.com', '1234', 'rekicuy', '202020202002022', '7678968', 'ceo', ''),
('fajar@gmail.com', '111', 'fajar', '77777777777777', '0812345678', 'nganggur', ''),
('javier@gmail.com', '22', 'javier', '12311312', '123312321', 'ngfngjbngfjbngfj', 'messages-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berdonasi`
--
ALTER TABLE `berdonasi`
  ADD PRIMARY KEY (`id_berdonasi`),
  ADD KEY `id_gd` (`id_gd`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `galang_donasi`
--
ALTER TABLE `galang_donasi`
  ADD PRIMARY KEY (`id_gd`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berdonasi`
--
ALTER TABLE `berdonasi`
  MODIFY `id_berdonasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `galang_donasi`
--
ALTER TABLE `galang_donasi`
  MODIFY `id_gd` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berdonasi`
--
ALTER TABLE `berdonasi`
  ADD CONSTRAINT `berdonasi_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Ketidakleluasaan untuk tabel `galang_donasi`
--
ALTER TABLE `galang_donasi`
  ADD CONSTRAINT `galang_donasi_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

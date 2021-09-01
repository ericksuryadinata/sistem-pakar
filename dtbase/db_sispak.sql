-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 02:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'teknisi', 'e21394aaeee10f917f581054d24b031f'),
(3, 'pemilik', '58399557dae3c60e23c78606771dfa3d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(10) NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `jeniskerusakan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `gejala`, `jeniskerusakan`) VALUES
('G01', 'Printer Laser Jet', ''),
('G02', 'Printer Ink Jet', ''),
('G03', 'Printer bermasalah pada cetakan', 'Cetakan'),
('G04', 'Hasil cetakan printer bergaris', 'Cetakan'),
('G05', 'Kertas berjalan tetapi tidak ada hasil cetakan', 'Cetakan'),
('G06', 'Hasil cetakan tidak rata', 'Cetakan'),
('G07', 'Printer tidak dapat mencetak', 'Cetakan'),
('G08', 'Printer bermasalah pada kertas', 'Kertas'),
('G09', 'Printer tidak dapat menarik kertas', 'Kertas'),
('G10', 'Kertas pada printer macet', 'Kertas'),
('G11', 'Printer bermasalah pada lampu', 'Lampu'),
('G12', 'Lampu error kedap kedip', 'Lampu'),
('G13', 'Lampu feed dan error menyala namun printer tidak dapat mencetak', 'Lampu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala_solusi`
--

CREATE TABLE `tb_gejala_solusi` (
  `id` int(8) NOT NULL,
  `solusi` varchar(8) NOT NULL,
  `gejala` varchar(8) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala_solusi`
--

INSERT INTO `tb_gejala_solusi` (`id`, `solusi`, `gejala`, `status`) VALUES
(1, 'S01', 'G01', 'setuju'),
(2, 'S01', 'G03', 'setuju'),
(3, 'S01', 'G04', 'setuju'),
(4, 'S02', 'G01', 'setuju'),
(5, 'S02', 'G08', 'setuju'),
(6, 'S02', 'G10', 'setuju'),
(7, 'S03', 'G02', 'setuju'),
(8, 'S03', 'G03', 'setuju'),
(9, 'S03', 'G05', 'setuju'),
(10, 'S04', 'G02', 'setuju'),
(11, 'S04', 'G04', 'setuju'),
(12, 'S04', 'G06', 'setuju'),
(13, 'S05', 'G02', 'setuju'),
(14, 'S05', 'G11', 'setuju'),
(15, 'S05', 'G13', 'setuju'),
(16, 'S06', 'G01', 'setuju'),
(17, 'S06', 'G11', 'setuju'),
(18, 'S06', 'G12', 'setuju'),
(19, 'S07', 'G02', 'setuju'),
(20, 'S07', 'G07', 'setuju'),
(21, 'S08', 'G01', 'setuju'),
(22, 'S08', 'G09', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jwb` int(11) NOT NULL,
  `kode_jawaban` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jwb`, `kode_jawaban`, `nama`, `nohp`, `solusi`, `status`) VALUES
(11, 'XX6S7', 'Intan Vini Annisa', '085789667838', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', 'setuju'),
(12, 'PYRT0', 'Alex', '089755557777', 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', 'setuju'),
(13, 'Z8NGS', 'Intan', '0867999955555', 'Pengamplasan dengan hati-hati pada bagian roda penariknya. Bersihkan juga roda penggerak dari kotoran yang ada.kemungkinan lain yang bisa terjadi adalah karena tinta yang hampir habis.', 'belum setuju'),
(14, 'YOXVO', 'beni', '089999777999', 'Pengamplasan dengan hati-hati pada bagian roda penariknya. Bersihkan juga roda penggerak dari kotoran yang ada.kemungkinan lain yang bisa terjadi adalah karena tinta yang hampir habis.', 'belum setuju'),
(15, 'C7UMO', 'apel', '0899997755555', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban_gejala`
--

CREATE TABLE `tb_jawaban_gejala` (
  `id_jawaban_gejala` int(11) NOT NULL,
  `gejala` text NOT NULL,
  `kode_jawaban` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jawaban_gejala`
--

INSERT INTO `tb_jawaban_gejala` (`id_jawaban_gejala`, `gejala`, `kode_jawaban`) VALUES
(37, 'Printer Laser Jet', 'XX6S7'),
(38, 'Printer bermasalah pada cetakan', 'XX6S7'),
(39, 'Kertas berjalan tetapi tidak ada hasil cetakan', 'XX6S7'),
(40, 'Printer Laser Jet', 'PYRT0'),
(41, 'Printer bermasalah pada lampu', 'PYRT0'),
(42, 'Lampu error kedap kedip', 'PYRT0'),
(43, 'Printer Ink Jet', 'Z8NGS'),
(44, 'Printer tidak dapat menarik kertas', 'Z8NGS'),
(45, 'Printer Laser Jet', 'YOXVO'),
(46, 'Printer tidak dapat menarik kertas', 'YOXVO'),
(47, 'Printer Ink Jet', 'C7UMO'),
(48, 'Printer bermasalah pada cetakan', 'C7UMO'),
(49, 'Kertas berjalan tetapi tidak ada hasil cetakan', 'C7UMO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`kode_kesimpulan`, `solusi`, `gejala`, `oleh`, `status`) VALUES
(1, 'Lepas cartridge dengan hati-hati untuk mengecek apakah tinta sudah habis atau belum. Setelah itu lakukan pembersihan pada mat head nya dengan menggunakan cairan pembersih tinta.', 'Printer Laser Jet', 'pakar', 'setuju'),
(2, 'Lepas cartridge dengan hati-hati untuk mengecek apakah tinta sudah habis atau belum. Setelah itu lakukan pembersihan pada mat head nya dengan menggunakan cairan pembersih tinta.', 'Printer bermasalah pada cetakan', 'pakar', 'setuju'),
(3, 'Lepas cartridge dengan hati-hati untuk mengecek apakah tinta sudah habis atau belum. Setelah itu lakukan pembersihan pada mat head nya dengan menggunakan cairan pembersih tinta.', 'Hasil cetakan printer bergaris', 'pakar', 'setuju'),
(4, 'Membatasi tebal tumpukan kertas sesuai dengan kapasitas yang didukung oleh printer. Sebelum dipasang pada paper try, sebaiknya kertas dikibas-kibaskan terlebih dahulu agar kertas tidak saling menempel', 'Printer Laser Jet', 'pakar', 'setuju'),
(5, 'Membatasi tebal tumpukan kertas sesuai dengan kapasitas yang didukung oleh printer. Sebelum dipasang pada paper try, sebaiknya kertas dikibas-kibaskan terlebih dahulu agar kertas tidak saling menempel', 'Printer bermasalah pada kertas', 'pakar', 'setuju'),
(6, 'Membatasi tebal tumpukan kertas sesuai dengan kapasitas yang didukung oleh printer. Sebelum dipasang pada paper try, sebaiknya kertas dikibas-kibaskan terlebih dahulu agar kertas tidak saling menempel', 'Kertas pada printer macet', 'pakar', 'setuju'),
(7, 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', 'Printer Ink Jet', 'pakar', 'setuju'),
(8, 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', 'Printer bermasalah pada cetakan', 'pakar', 'setuju'),
(9, 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', 'Kertas berjalan tetapi tidak ada hasil cetakan', 'pakar', 'setuju'),
(10, 'Usaplah drum dengan kain halus untuk menghilangkan benda asing yang menempel atau dengan mengganti drum jika terdapat lubang kecil pada permukaan drum', 'Printer Ink Jet', 'pakar', 'setuju'),
(11, 'Usaplah drum dengan kain halus untuk menghilangkan benda asing yang menempel atau dengan mengganti drum jika terdapat lubang kecil pada permukaan drum', 'Hasil cetakan printer bergaris', 'pakar', 'setuju'),
(12, 'Usaplah drum dengan kain halus untuk menghilangkan benda asing yang menempel atau dengan mengganti drum jika terdapat lubang kecil pada permukaan drum', 'Hasil cetakan tidak rata', 'pakar', 'setuju'),
(13, 'Pastikan posisi kertas terpasang dengan baik, apabila sudah dilakukan tetapi lampu masih menyala kemungkinan sensor kertas printer rusak. Disarankan untuk mengganti sensor printer yang baru', 'Printer Ink Jet', 'pakar', 'setuju'),
(14, 'Pastikan posisi kertas terpasang dengan baik, apabila sudah dilakukan tetapi lampu masih menyala kemungkinan sensor kertas printer rusak. Disarankan untuk mengganti sensor printer yang baru', 'Printer bermasalah pada lampu', 'pakar', 'setuju'),
(15, 'Pastikan posisi kertas terpasang dengan baik, apabila sudah dilakukan tetapi lampu masih menyala kemungkinan sensor kertas printer rusak. Disarankan untuk mengganti sensor printer yang baru', 'Lampu feed dan error menyala namun printer tidak dapat mencetak', 'pakar', 'setuju'),
(16, 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', 'Printer Laser Jet', 'pakar', 'setuju'),
(17, 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', 'Printer bermasalah pada lampu', 'pakar', 'setuju'),
(18, 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', 'Lampu error kedap kedip', 'pakar', 'setuju'),
(19, 'Pengetesan printer menggunakan print test page pada driver printer.', 'Printer Ink Jet', 'pakar', 'setuju'),
(20, 'Pengetesan printer menggunakan print test page pada driver printer.', 'Printer tidak dapat mencetak', 'pakar', 'setuju'),
(21, 'Pengamplasan dengan hati-hati pada bagian roda penariknya. Bersihkan juga roda penggerak dari kotoran yang ada.kemungkinan lain yang bisa terjadi adalah karena tinta yang hampir habis.', 'Printer laser jet', 'pakar', 'setuju'),
(22, 'Pengamplasan dengan hati-hati pada bagian roda penariknya. Bersihkan juga roda penggerak dari kotoran yang ada.kemungkinan lain yang bisa terjadi adalah karena tinta yang hampir habis.', 'Printer tidak dapat menarik kertas', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perbaikan`
--

CREATE TABLE `tb_perbaikan` (
  `id` int(11) NOT NULL,
  `kode_perbaikan` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perbaikan`
--

INSERT INTO `tb_perbaikan` (`id`, `kode_perbaikan`, `nama`, `nohp`, `gejala`, `solusi`, `tgl`) VALUES
(15, '11', 'Intan Vini Annisa', '085789667838', 'Printer Laser Jet', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', '2021-09-01'),
(16, '11', 'Intan Vini Annisa', '085789667838', 'Printer bermasalah pada cetakan', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', '2021-09-01'),
(17, '11', 'Intan Vini Annisa', '085789667838', 'Kertas berjalan tetapi tidak ada hasil cetakan', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', '2021-09-01'),
(18, '12', 'Alex', '089755557777', 'Printer Laser Jet', 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', '2021-09-01'),
(19, '12', 'Alex', '089755557777', 'Printer bermasalah pada lampu', 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', '2021-09-01'),
(20, '12', 'Alex', '089755557777', 'Lampu error kedap kedip', 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali', '2021-09-01'),
(21, '15', 'apel', '0899997755555', 'Printer Ink Jet', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', '2021-09-01'),
(22, '15', 'apel', '0899997755555', 'Printer bermasalah pada cetakan', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', '2021-09-01'),
(23, '15', 'apel', '0899997755555', 'Kertas berjalan tetapi tidak ada hasil cetakan', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(10) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('m1', 'Apakah Printer Anda Laser Jet?'),
('m1-a', 'Apakah Printer Anda Ink jet?'),
('m2', 'Apakah Anda Bermasalah Pada Cetakan?'),
('m2-a', 'Apakah Hasil Cetakan Printer Bergaris?'),
('m2-b', 'Apakah Kertas Berjalan Tetapi Tidak Ada Hasil Cetakan?'),
('m2-c', 'Apakah Hasil Cetakan Tidak Rata?'),
('m2-d', 'Apakah Printer Tidak Dapat Mencetak?'),
('m3', 'Apakah Printer Bermasalah Pada Kertas?'),
('m3-a', 'Apakah Printer Tidak Dapat Menarik Kertas?'),
('m3-b', 'Apakah Kertas Pada Printer Macet?'),
('m4', 'Apakah Printer Bermasalah Pada Lampu?'),
('m4-a', 'Apakah Lampu Error Berkedap-kedip?'),
('m4-b', 'Apakah Lampu Menyala Namun Printer Tidak Dapat Mencetak?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(10) NOT NULL,
  `jeniskerusakan` varchar(30) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `jeniskerusakan`, `isi_solusi`) VALUES
('S01', 'Cetakan', 'Lepas cartridge dengan hati-hati untuk mengecek apakah tinta sudah habis atau belum. Setelah itu lakukan pembersihan pada mat head nya dengan menggunakan cairan pembersih tinta.'),
('S02', 'Kertas', 'Membatasi tebal tumpukan kertas sesuai dengan kapasitas yang didukung oleh printer. Sebelum dipasang pada paper try, sebaiknya kertas dikibas-kibaskan terlebih dahulu agar kertas tidak saling menempel'),
('S03', 'Cetakan', 'Mengganti tinta, toner atau pita printer dengan yg baru. Jangan lupa untuk memeriksa apakah ada sesuatu yg menghalangi head dengan kertas.'),
('S04', 'Cetakan', 'Usaplah drum dengan kain halus untuk menghilangkan benda asing yang menempel atau dengan mengganti drum jika terdapat lubang kecil pada permukaan drum'),
('S05', 'Lampu', 'Pastikan posisi kertas terpasang dengan baik, apabila sudah dilakukan tetapi lampu masih menyala kemungkinan sensor kertas printer rusak. Disarankan untuk mengganti sensor printer yan baru'),
('S06', 'Lampu', 'Periksa apakah pintu printer telah ditutup dengan benar. Periksa catridge, kertas dan cobalah untuk mematikan printer beberapa saat dan kemudian menghidupkan kembali'),
('S07', 'Cetakan', 'Pengetesan printer menggunakan print test page pada driver printer.'),
('S08', 'Kertas', 'Pengamplasan dengan hati-hati pada bagian roda penariknya. Bersihkan juga roda penggerak dari kotoran yang ada.kemungkinan lain yang bisa terjadi adalah karena tinta yang hampir habis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_gejala_solusi`
--
ALTER TABLE `tb_gejala_solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jwb`);

--
-- Indexes for table `tb_jawaban_gejala`
--
ALTER TABLE `tb_jawaban_gejala`
  ADD PRIMARY KEY (`id_jawaban_gejala`);

--
-- Indexes for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indexes for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_gejala_solusi`
--
ALTER TABLE `tb_gejala_solusi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jwb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_jawaban_gejala`
--
ALTER TABLE `tb_jawaban_gejala`
  MODIFY `id_jawaban_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

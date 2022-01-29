-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 12:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nip`, `nama`, `jabatan`, `pangkat`, `golongan`, `password`, `foto`) VALUES
(1, '19690917 199403 2 002', 'Dra. Tuty Amalia, MAP.', 'Kepala Kantor', 'Pembina Tk. I', 'IV/b', 'admin', ''),
(2, '11118064', 'Perdly Setiawan', '-', '-', '-', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `waktu_arsip` datetime NOT NULL,
  `petugas_arsip` varchar(50) NOT NULL,
  `kode_arsip` varchar(50) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `jenis_file` varchar(50) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `kategori_arsip` varchar(50) NOT NULL,
  `keterangan_arsip` varchar(50) NOT NULL,
  `file_arsip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `keterangan`) VALUES
(1, 'Tidak Berkategori', 'Semua yang tidak memiliki kategori'),
(3, 'Surat Izin Pelaksanaan', 'Format surat izin pelaksanaan pekerjaan'),
(4, 'Surat Kesehatan Pegawai', 'Surat kesehatan untuk pegawai'),
(6, 'Video Tutorial Entri', 'Tutorial bagaimana cara entri yang benar dan cepat'),
(7, 'Surat Tugas', 'Format Surat Tugas Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nip`, `nama_petugas`, `jabatan`, `pangkat`, `golongan`, `password`, `foto`) VALUES
(3, '19830515 200902 1 011', 'Deny Gumbira, S.Si.', 'Koordinator Fungsi I P D S', 'Penata Tk. I', 'III/d', 'default', '947815356_054288400_1633404299-000_9MM88X.jpg'),
(4, '19630615 198303 1 006', 'R dudung Abdul Hakim Heronusantoro, SE.', 'Koordinator Fungsi Statistik Produksi', 'Penata Tk. I', 'III/d', 'default', ''),
(5, '19650731 199402 2 001', 'Dra. Surasti', 'Koordinator Fungsi Statistik Sosial', 'Penata Tk. I', 'III/d', 'default', ''),
(6, '19740211 199403 1 002', 'Cipno Hartono, S.PKP., MM.', 'Koordinator Fungsi Statistik Distribusi', 'Penata', 'III/c', 'default', ''),
(7, '19830425 200602 2 001', 'Afni Hasriati, SST, M.Si.', 'Koordinator Fungsi Nerwilis', 'Penata', 'III/c', 'default', '');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `waktu_unduh` datetime NOT NULL,
  `riwayat_user` varchar(50) NOT NULL,
  `riwayat_arsip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama_user`, `jabatan`, `pangkat`, `golongan`, `password`, `foto`) VALUES
(1, '19881114 201403 1 004', 'Novian Tamara, S.Si.', 'KSK Tanara', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(3, '19631019 199003 1 001', 'Ir. Indra Warman', 'Kepala Kantor', 'Pembina Tk. I', 'IV/b', 'default', ''),
(4, '19740815 200604 2 001', 'Suhuda Patmiyati SE, MM.', 'Kasubbag Umum', 'Penata', 'III/c', 'default', ''),
(5, '19890101 201012 2 004', 'Nurfika, S.ST.', 'Staf Seksi IPDS', 'Penata', 'III/c', 'default', ''),
(6, '19860613 201101 1 009', 'Dani Rahman, SP.', 'KSK Mancak', 'Penata', 'III/c', 'default', ''),
(7, '19681028 199102 1 001', 'Hasan Faozi', 'KSK Cikeusal', 'Penata', 'III/c', 'default', ''),
(8, '19741105 199503 2 001', 'Tati Rachmawati, S.AP.', 'Fungsional Umum Stat. Distribusi', 'Penata', 'III/c', 'default', ''),
(9, '19830326 200712 2 005', 'Nur Rodiana, S.ST.', 'Kasi. Nerwilis', 'Penata', 'III/c', 'default', ''),
(10, '19731025 199403 1 004', 'Epriata, SE., MAP.', 'Kasubbag Tata Usaha', 'Penata', 'III/c', 'default', ''),
(11, '19860909 201003 1 002', 'Richo Hendrix Sanggoro, SE.', 'KSK Kibin', 'Penata', 'III/c', 'default', ''),
(12, '19870328 201003 1 001', 'Rizki Budi Prasetio, SE. ME.', 'Staf Seksi IPDS', 'Penata', 'III/c', 'default', ''),
(13, '19630405 198603 1 002', 'Mabrur Ams', 'Statistisi Penyedia Fungsi Statistik Distribusi', 'Penata Tk. I', 'III/d', 'default', ''),
(14, '19650503 199203 2 001', 'Cahya Rochmaini Wirawati, SE.', 'Kasi. Stat. Produksi', 'Penata Tk. I', 'III/d', 'default', ''),
(15, '19731008 199512 1 001', 'Suhandi, S.ST.', 'Kasi. Stat. Sosial', 'Penata Tk. I', 'III/d', 'default', ''),
(16, '19810901 200312 2 001', 'Yudiarti Septiana Triaswati, S.ST.', 'Kasi. Stat. Distribusi', 'Penata Tk. I', 'III/d', 'default', ''),
(17, '19780201 200212 1 002', 'Marco, S.Kom.', 'Kasi. IPDS', 'Penata Tk. I', 'III/d', 'default', ''),
(18, '19721105 199403 1 001', 'Nana Suharna, S.ST.', 'Kasi. Statistik Distribusi', 'Penata Tk. I', 'III/d', 'default', ''),
(19, '19710417 199303 2 003', 'Lilis Arisah', 'Staf Sub Bagian Umum', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(20, '19780106 201101 2 007', 'Sari Muharani, S.Sos', 'Statistisi Pertama Fungsi Nerwilis', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(21, '19860308 200902 1 007', 'Deki Sukmaringga, S.Si., ME.', 'KSK Kramatwatu', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(22, '19831126 201403 1 001', 'Halawani, S.Si.', 'KSK Kopo', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(23, '19900226 201403 2 004', 'Kartika Sari, S.Si', 'KSK Carenang', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(24, '19900226 201403 2 004', 'Kartika Sari, S.Si', 'KSK Carenang', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(25, '19640807 200604 1 008', 'Mohammad Tavip, SP.', 'KSK Cikande', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(26, '19690309 199501 1 001', 'Sadar Sukri', 'KSK Tunjung Teja', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(27, '19860328 201403 1 002', 'Shidiq Abdul Aziz, S.Si.', 'KSK Pulo Ampel', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(28, '19850610 201403 1 002', 'Sugiyarto, SE.', 'KSK Baros', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(29, '19680810 198803 1 002', 'Supriyadi', 'KSK Jawilan', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(30, '19680827 200604 1 011', 'Akhmad Jamroni, S.Sos.', 'KSK Cinangka', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(31, '19821211 201003 1 002', 'Didin Ritaudin, SE.', 'Kasi. Statistik Distribusi', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(32, '19850917201403 2 001', 'Yesi Sasmita, SE', 'Staf Tata Usaha', 'Penata Muda Tk. I', 'III/b', 'default', ''),
(33, '19800811 201406 1 002', 'Bastian Komara', 'Staf Sub Bagian Umum', 'Pengatur Muda Tk. I', 'II/b', 'default', ''),
(34, '19971105 201912 2 001', 'Rizki Nur Novitasari, S.Tr.Stat.', 'Staf Fungsi Statistik Sosial', 'Penata Muda', 'III/a', 'default', ''),
(35, '19970920 201912 2 001', 'Dian Eka Pratiwi, S.Tr.Stat.', 'Staf Fungsi Statistik Produksi', 'Penata Muda', 'III/a', 'default', ''),
(36, '19750504 200604 1 001', 'Encang Suarsa, SE.', 'KSK Kramatwatu', 'Penata Muda', 'III/a', 'default', ''),
(37, '19841218 201003 2 002', 'Mia Sari Dewi, S.Ikom.', 'KSK Pabuaran', 'Penata Muda', 'III/a', 'default', ''),
(38, '19691118 200212 1 002', 'Mulyono', 'KSK Petir', 'Penata Muda', 'III/a', 'default', ''),
(39, '19710613 200604 1 001', 'Suhadi, SE.', 'KSK Ciruas', 'Penata Muda', 'III/a', 'default', ''),
(40, '19880515 201101 2 023', 'Nur Laeli Fitriyani, A.Md.', 'KSK Pontang', 'Penata Muda', 'III/a', 'default', ''),
(41, '19880515 201101 2 023', 'Nur Laeli Fitriyani, A.Md.', 'KSK Pontang', 'Penata Muda', 'III/a', 'default', ''),
(42, '19810404 200604 1 008', 'Bisma Ariasena Slamet, SE.', 'KSK. Kec. Ciruas', 'Penata Muda', 'III/a', 'default', ''),
(43, '19850923 201403 2 002', 'Endang Purnaningsih, S.Si.', 'KSK Ciruas', 'Penata Muda', 'III/a', 'default', ''),
(44, '19820308 200901 1 012', 'Ade Supriyanto', 'KSK Pamarayan', 'Pengatur', 'II/c', 'default', ''),
(45, '19840703 200604 1 001', 'Ahmad Rafiq', 'KSK Ciomas', 'Pengatur', 'II/c', 'default', ''),
(46, '19840703 200604 1 001', 'Ahmad Rafiq', 'KSK Ciomas', 'Pengatur', 'II/c', 'default', ''),
(47, '19751025 200901 1 006', 'Ahmad Suparyadi', 'KSK Kragilan', 'Pengatur', 'II/c', 'default', ''),
(48, '19760616 200710 1 001', 'Hafidin', 'KSK Tirtayasa', 'Pengatur', 'II/c', 'default', ''),
(49, '19800403 200701 1 007', 'Indrat Susanto', 'KSK Anyar', 'Pengatur', 'II/d', 'default', ''),
(50, '19781112 200604 1 001', 'Muhlisi', 'KSK Kibin', 'Pengatur', 'II/c', 'default', ''),
(51, '19681211 199403 1 008', 'Slamet Eka Saptino', 'KSK Pamarayan', 'Pengatur Tk. I', 'II/d', 'default', ''),
(52, '19781121 199912 2 001', 'Desi Novianti, S.ST., M.M.', 'Kasubbag Tata Usaha', 'Pembina', 'IV/a', 'default', ''),
(53, '19691003 199203 1 005', 'Eko Subiyanto, S.ST., MM.', 'Kasi. Statistik Sosial', 'Pembina', 'IV/a', 'default', ''),
(54, '19650715 198603 1 006', 'Tarya Suryana, SE., MM.', 'Kasi. Statistik Produksi', 'Pembina', 'IV/a', 'default', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

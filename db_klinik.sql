-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 05:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `passwd`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `nama`, `gambar`) VALUES
(3, 'IGD', 'galeri_IGD.jpg'),
(5, 'Pendaftaran Pasien', 'galeri_Pendaftaran Pasien.jpg'),
(7, 'Apotik', 'galeri_Apotik.jpg'),
(8, 'Lorong', 'galeri_Lorong.jpg'),
(9, 'Ruang Bersalin', 'galeri_Ruang Bersalin.jpg'),
(10, 'Kamar Kelas 1', 'galeri_Kamar Kelas 1.jpg'),
(11, 'Kamar Kelas 2', 'galeri_Kamar Kelas 2.jpg'),
(13, 'Rawat Inap', 'galeri_Rawat Inap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `kd_barang` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`kd_barang`, `nama`, `kondisi`, `catatan`) VALUES
('INV0001', 'Kursi roda', 'Rusak', 'Ban depan terlepas'),
('INV0002', 'Matras', 'Baik', 'Tidak ada'),
('INV0003', 'Tandu', 'Rusak', 'Penyangga depan terlepas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_rekam_medis` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `riwayat_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_rekam_medis`, `nama`, `nik`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `riwayat_penyakit`) VALUES
('000001', 'Sapto Santoso', '383940495857', '1998-01-01', 22, 'Laki-laki', 'Islam', 'Pelajar', 'Jl. Raya raya, Sleman, Yogyakarta', 'Asma');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `sts` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama`, `nik`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pendidikan_terakhir`, `jabatan`, `no_tlp`, `sts`, `alamat`) VALUES
('PGW001', 'Surti', '383940495857', '1998-06-09', 'Perempuan', 'Islam', 'SMA', 'Staf', '082300400500', 'Belum Menikah', 'Jl.Raya raya No.08, Jetis, Sleman, Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(25) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `username`, `passwd`, `nama`) VALUES
(1, '_noni', '123456', 'Noni Jony');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `kd_reservasi` varchar(11) NOT NULL,
  `no_rekam_medis` varchar(8) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `perawatan` varchar(25) NOT NULL,
  `nama_penanggung` varchar(100) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `status` varchar(25) NOT NULL,
  `diagnosis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`kd_reservasi`, `no_rekam_medis`, `tanggal_masuk`, `tanggal_keluar`, `perawatan`, `nama_penanggung`, `hubungan`, `no_tlp`, `status`, `diagnosis`) VALUES
('RG000002', '000001', '2020-06-29', '2020-06-29', 'Rawat Jalan', 'Heri Juhardi', 'Saudara', '082300400500', 'Dalam Perawatan', 'Sehat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_rekam_medis`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`kd_reservasi`),
  ADD KEY `no_rekam_medis` (`no_rekam_medis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD CONSTRAINT `tb_reservasi_ibfk_1` FOREIGN KEY (`no_rekam_medis`) REFERENCES `tb_pasien` (`no_rekam_medis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 12:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bekas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tipe_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `desc_barang` text NOT NULL,
  `tgl_post_barang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_user`, `tipe_barang`, `nama_barang`, `desc_barang`, `tgl_post_barang`) VALUES
(5, 1, 'Mobil', 'Lamborghini Aventador S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci est, vulputate eu hendrerit eu, placerat interdum nulla. Quisque non malesuada magna. Etiam tincidunt est vitae diam euismod, et aliquam mauris gravida. Suspendisse venenatis tortor vel purus imperdiet luctus. Phasellus blandit at ligula non ultrices. Sed maximus elit vehicula nisl egestas fermentum. Fusce eu dui ipsum. Morbi at magna sit amet elit vestibulum viverra. Sed ultrices pellentesque nibh, at malesuada magna ornare in. Nam imperdiet facilisis arcu, ut interdum neque mollis ut.', '2020-05-10'),
(7, 1, 'Motor', 'Harley Davidson Street 500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci est, vulputate eu hendrerit eu, placerat interdum nulla. Quisque non malesuada magna. Etiam tincidunt est vitae diam euismod, et aliquam mauris gravida. Suspendisse venenatis tortor vel purus imperdiet luctus. Phasellus blandit at ligula non ultrices. Sed maximus elit vehicula nisl egestas fermentum. Fusce eu dui ipsum. Morbi at magna sit amet elit vestibulum viverra. Sed ultrices pellentesque nibh, at malesuada magna ornare in. Nam imperdiet facilisis arcu, ut interdum neque mollis ut.', '2020-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beli`
--

CREATE TABLE `tbl_beli` (
  `id_beli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `lokasi_beli` varchar(100) NOT NULL,
  `status_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_beli`
--

INSERT INTO `tbl_beli` (`id_beli`, `id_barang`, `harga_beli`, `lokasi_beli`, `status_beli`) VALUES
(1, 5, 2147483647, 'Sidoarjo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menyewa`
--

CREATE TABLE `tbl_menyewa` (
  `id_menyewa` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_sewa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id_paket` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `waktu_paket` varchar(100) NOT NULL,
  `ketersediaan_paket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `id_sewa`, `harga_paket`, `waktu_paket`, `ketersediaan_paket`) VALUES
(1, 1, 200000, '06.00 - 23.00', 'Senin, Rabu, Jumat'),
(2, 1, 400000, '24 jam', 'Sabtu Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sewa`
--

CREATE TABLE `tbl_sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `fasilitas_sewa` varchar(100) NOT NULL,
  `syarat_sewa` varchar(100) NOT NULL,
  `lokasi_sewa` varchar(100) NOT NULL,
  `status_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sewa`
--

INSERT INTO `tbl_sewa` (`id_sewa`, `id_barang`, `fasilitas_sewa`, `syarat_sewa`, `lokasi_sewa`, `status_sewa`) VALUES
(1, 7, 'Bonus Helm', 'Berdomisili Surabaya', 'Surabaya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `gambar_profile` varchar(100) NOT NULL,
  `status_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `no_telp`, `alamat`, `tgl_daftar`, `gambar_profile`, `status_user`) VALUES
(1, 'Nopal', 'muhammad.nfl19@gmail.com', 'nopal123', '085704298410', 'Krian', '2020-05-01', 'nopal.jpg', 1),
(2, 'Andrean', 'andreanilham9@gmail.com', 'andreanilham9', '085237216429', 'Benowo', '2020-04-20', 'andrean.png', 1),
(3, 'Artama', 'giopratama123456@gmail.com', 'gio123456', '0875326391662', 'Jakarta', '2020-04-16', 'artama.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `tbl_menyewa`
--
ALTER TABLE `tbl_menyewa`
  ADD PRIMARY KEY (`id_menyewa`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_menyewa`
--
ALTER TABLE `tbl_menyewa`
  MODIFY `id_menyewa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

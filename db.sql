-- --------------------------------------------------------
-- Database: `test`
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------
-- Table structure for `user`
-- --------------------------------------------------------

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE latin1_swedish_ci DEFAULT NULL,
  `role` varchar(10) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dummy data for `user`
INSERT INTO `user` (`username`, `password`, `role`) VALUES
('pembeli', MD5('pembeli'), 'pembeli'),
('admin', MD5('admin'), 'admin');

-- --------------------------------------------------------
-- Table structure for `barang`
-- --------------------------------------------------------

CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) COLLATE latin1_swedish_ci DEFAULT NULL,
  `hrg` double DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `keterangan` varchar(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------
-- Table structure for `transaksi`
-- --------------------------------------------------------

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `alamat` varchar(255) COLLATE latin1_swedish_ci DEFAULT NULL,
  `ongkir` double DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` varchar(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------
-- Table structure for `transaksi_detail`
-- --------------------------------------------------------

CREATE TABLE `transaksi_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `subtotal_harga` double DEFAULT NULL,
  `created_by` varchar(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

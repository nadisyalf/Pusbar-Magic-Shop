-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 01.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pusbarcake`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_menu`, `keterangan`, `gambar`) VALUES
(10, 2, 'Detail Croissant', 'Croissant_2.jpg'),
(11, 2, 'detail croissant 2', 'detailcroissant.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Cakes'),
(2, 'Pastry & Danish'),
(3, 'Traditional Snack'),
(4, 'Donut & Cookies'),
(7, 'Pudding');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` mediumtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`, `id_kategori`, `harga`, `keterangan`, `gambar`, `berat`) VALUES
(1, 'Tiramisu Cake', 1, 25000, 'Kue keju khas Italia dengan taburan bubuk kakao di atasnya.', 'tiramisucake11.jpg', 300),
(2, 'Crossiant', 2, 20000, 'Croissant merupakan sejenis kue kering (pastry) yang berasal dari Prancis, dinamakan demikian karena bentuknya menyerupai bulan sabit.', 'croissant11.jpg', 150),
(3, 'Chocolate Cake ', 1, 25000, 'Chocolate Cake ', 'ChocolateCake11.jpg', 200),
(8, 'Choco Lemon Birthday Cake', 1, 280000, 'Choco Lemon Birthday Cake', '62.jpg', 600),
(9, 'Fruity Donut', 4, 15000, 'Fruity Donut', 'Fruity_Donut1.jpg', 30),
(10, 'Chrismast Ginger Cookie', 4, 30000, 'Chrismast Ginger Cookie \r\n\r\n', 'gingercookie2.jpg', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `foto`) VALUES
(1, 'Nadisya Alma', 'disyafauziah@gmail.com', 'user', 'user1.jpg'),
(2, 'Ratu Adelia', 'ratuadelia@gmail.com', 'user2', 'user1.jpg'),
(3, 'Tommy Alfianto', 'tommyalf@gmail.com', 'user3', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `atas_nama`, `no_rek`) VALUES
(1, 'BCA', 'PUSBAR CAKE SHOP', '677901234'),
(2, 'BRI', 'PUSBAR CAKE SHOP', '7701-4563-1232-0009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rincian_transaksi`
--

CREATE TABLE `tbl_rincian_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(25) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rincian_transaksi`
--

INSERT INTO `tbl_rincian_transaksi` (`id_rinci`, `no_order`, `id_barang`, `qty`) VALUES
(1, '20220514WU6ITK4P', 10, 1),
(2, '20220514WU6ITK4P', 9, 2),
(3, '20220514WU6ITK4P', 8, 3),
(4, '20220514WU6ITK4P', 3, 4),
(5, '20220514WU6ITK4P', 2, 5),
(6, '20220514Q0KUDCPU', 3, 1),
(7, '20220514Q0KUDCPU', 2, 1),
(8, '20220514Q0KUDCPU', 1, 1),
(9, '20220516PM4N0KUF', 10, 1),
(10, '20220516PM4N0KUF', 9, 1),
(11, '20220517FZOIAT7P', 3, 1),
(12, '20220517FZOIAT7P', 1, 1),
(13, '20220519F0DRHR5M', 2, 5),
(14, '20220519F0DRHR5M', 3, 1),
(15, '20220519F0DRHR5M', 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telpon`) VALUES
(1, 'Pusbar Cake Shop', 54, 'Perum Taman Edelweis. Jln. Gang Bromo Block C9 No.2, Satria Jaya, Tambun Utara, Kabupaten Bekasi.', '082261082986');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(25) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `no_penerima` varchar(25) DEFAULT NULL,
  `provinsi` varchar(25) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(8) DEFAULT NULL,
  `ekspedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `status_order` int(1) DEFAULT NULL,
  `no_resi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `no_penerima`, `provinsi`, `kota`, `alamat`, `kode_pos`, `ekspedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_resi`) VALUES
(5, 1, '20220514Q0KUDCPU', '2022-05-14', 'Nadisya Alma', '082261082986', 'Kalimantan Tengah', 'Kotawaringin Barat', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '3-5 Days ', 57000, 650, 70000, 127000, 1, 'bukti_bayar.jpg', 'Nadisya Alma', 'BCA', '49234567', 2, 'TJE1552766682341'),
(6, 1, '20220516PM4N0KUF', '2022-05-16', 'Nadisya Alma', '082261082986', 'Kalimantan Tengah', 'Murung Raya', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '3-5 Days ', 50000, 130, 45000, 95000, 1, 'bukti_bayar1.jpg', 'Nadisya Alma', 'BCA', '49234567', 3, 'TJE1678892020351'),
(7, 1, '20220517FZOIAT7P', '2022-05-17', 'Tommy Alfianto', '085867554444', 'Jawa Tengah', 'Magelang', 'Jln. Kapuas 2 Blok V No.44 RT 16/33', '44221', 'tiki', 'REG', '2 Days ', 24000, 500, 50000, 74000, 1, 'bukti_bayar2.jpg', 'Tommy Alfianto', 'BCA', '65779853', 1, NULL),
(8, 3, '20220519F0DRHR5M', '2022-05-19', 'Tommy Alfianto', '0812445536722', 'Bangka Belitung', 'Belitung', 'Jln. Kapuas 2 Blok V No.44 RT 16/33', '345677', 'jne', 'REG', '1-2 Days ', 99000, 2750, 275000, 374000, 1, 'bukti_bayar3.jpg', 'Tommy Alfianto', 'BCA', '987756321', 3, 'JTE12345678900');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(2, 'Ilham Ramdani', 'user', 'user', 2),
(3, 'Ratu Adelia', 'adeliaaar', '12345', 2),
(4, 'Tommy Alfianto', 'tommyal', '12345', 1),
(6, 'Reyzy Pratama', 'Reyzy', '0000', 1),
(7, 'Nadisya Alma', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `tbl_rincian_transaksi`
--
ALTER TABLE `tbl_rincian_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_rincian_transaksi`
--
ALTER TABLE `tbl_rincian_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

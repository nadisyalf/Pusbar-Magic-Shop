-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2022 pada 16.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
(11, 2, 'detail croissant 2', 'detailcroissant.jpg'),
(12, 13, 'BTS - 1', 'BTS_(1).jpeg'),
(13, 13, 'BTS-2', 'BTS_(3).jpeg'),
(14, 13, 'BTS-3', 'BTS_(4).jpeg'),
(15, 13, 'BTS-5', 'BTS_(5).jpeg'),
(16, 21, 'TXT-1', 'TXT_(5).jpeg'),
(17, 21, 'TXT-2', 'TXT_(3).jpeg'),
(18, 21, 'TXT-3', 'TXT_(1).jpeg'),
(19, 21, 'TXT-4', 'TXT_(2).jpeg'),
(20, 19, 'ENH-1', 'ENHYPEN_(3).jpeg'),
(22, 19, 'ENH-2', 'ENHYPEN_(1).jpeg'),
(23, 19, 'ENH-3', 'ENHYPEN_(2).jpeg'),
(24, 19, 'ENH-4', 'ENHYPEN_(4).jpeg'),
(25, 14, 'BTS - 1', 'Single_Album_2_COOL_4_SKOOL.jpg'),
(26, 14, 'BTS-2', 'BTS_2_COOL_4_SKOOL_ALBUM_on_Mercari.jpg'),
(27, 23, 'Carat-1', 'SEVENTEEN_(1).jpeg'),
(28, 23, 'Carat-2', 'SEVENTEEN_(3).jpeg'),
(29, 30, 'Kipas', '3_(2).jpeg'),
(30, 30, 'Kipas', 'download_(2).jpeg');

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
(8, 'Lightstick'),
(9, 'Album'),
(10, 'T-Shirt'),
(11, 'Hoodie'),
(13, 'Boneka'),
(15, 'Tumbler'),
(16, 'Totebag'),
(18, 'Kipas Karakter');

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
(13, 'Army Bomb Ver. 3', 8, 650000, 'OFFICIAL BTS ARMY BOMB VERSI 3\r\nInclude:\r\n- 1 pcs ARMY Bomb Ver. 3 OFFICIAL\r\n- 7 pcs Photocard All Member OFFICIAL', 'BTS_(2)1.jpeg', 300),
(14, 'BTS ALBUM 2013 - 2 COOL 4 SKOOL', 9, 269000, 'Include:\r\n- CD\r\n- Photobook', '2_Cool_4_Skool_By_BTS_Minimalist_Album_Poster1.jpg', 500),
(15, 'BTS ALBUM 2013 -  O!RUL8,2', 9, 299000, 'Include:\r\n- CD\r\n- Photobook\r\n- Photocard (Group & Random Member)\r\n- Folded Poster', 'O!RUL8,2__By_BTS_Minimalist_Album_Poster1.jpg', 500),
(16, 'BTS ALBUM 2014 -   Skool Luv Affair', 9, 334900, 'Include:\r\n- CD\r\n- Photobook\r\n- Photocard\r\n\r\nPO 3-4 minggu', 'Skool_Luv_Affair_By_BTS_Minimalist_Album_Poster1.jpg', 600),
(17, 'BTS ALBUM 2014 -  DARK & WILD', 9, 359000, 'Include:\r\n- CD\r\n- PHotobook\r\n- Photocard (Group & Random Member)', 'download1.png', 600),
(18, 'Candy Bong Z - Version 2', 8, 668000, 'TWICE OFFICIAL LIGHTSTICK', 'TWICE_(3).jpeg', 600),
(19, 'LIGHTSTICK ENHYPEN', 8, 480000, 'ENHYPEN OFFICIAL LIGHTSTICK', 'ENHYPEN_(5).jpeg', 800),
(20, 'BTS ALBUM 2014 -  SPECIAL EDI Skool Luv Affair ', 9, 68500, 'Shipping from BigHit start 13 October 2020\r\n\r\nInclude:\r\n- Outbox\r\n-CD/DVD\r\n-Booklet (about 100 pages)\r\n-Random Card (random 1EA)', 'Skool_Luv_Affair_By_BTS_Minimalist_Album_Poster_(1).jpg', 3000),
(21, 'LIGHTSTICK TXT', 8, 695000, '- Outbox\r\n-Lightstick\r\n-Dust Bag\r\n-Strap\r\n-Photocards (5Ea)\r\n-Guarantee', 'TXT_(4).jpeg', 600),
(22, 'ALBUM TWICE - THE STORY BEGINS', 9, 285900, 'Detail:\r\n- CD\r\n- Booklet 36 halaman\r\n- Garland\r\n- Random Unit Card\r\n- Random Red Card\r\n- Pink Card (Random/On Pack)', 'TWICE_LIKE_OOH-AHH___THE_STORY_BEGINS_album_cover_by_LEAlbum_on_DeviantArt_(1).jpg', 450),
(23, 'LS Seventeen-Caratbong Versi 1', 8, 580000, 'LIGHTSTICK SEVENTEEN', 'SEVENTEEN_(5).jpeg', 500),
(25, 'BT21 Set', 13, 380000, 'All Set Boneka BT21', 'BT21_(1).jpeg', 500),
(26, 'Not Royal - Taehyung Hoodie', 11, 250000, 'Not Royal Hoodie Taehyung ', '_NOT_LOYAL,_ROYAL__HOODIE.png', 1000),
(27, 'Abbot Kinnet - Yoongi BTS', 10, 50000, 'Abbot Kinnet - Yoongi BTS', 'BTS_FASHION_STYLE_FINDER.jpeg', 100),
(28, 'Bangtan Totebage', 16, 38000, 'White Totebag Bangtan', 'BTS_Tote_bag.jpeg', 100),
(29, 'BTS POP-UP TUMBLER', 15, 50000, 'HOUSE OF BTS TUMBLER', 'House_of_BTS_Reusable_Tumbler_on_Mercari.jpeg', 100),
(30, 'Kipas', 18, 250000, 'Kipas', '3_(1).jpeg', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`, `email`, `password`) VALUES
(9, 'adel', 'Jl. Krisan Blok B23', '0822345678911', 'ratuadelia@gmail.com', '1234'),
(11, 'Nadisya', 'Jl. Krisan Blok B2 No. 4 RT 6/13', '089211456788', 'admin123@gmail.com', 'admin'),
(12, 'Rezy', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '089211456789', 'rezy@gmail.com', 'rezy123');

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
(15, '20220519F0DRHR5M', 1, 6),
(16, '20220601QB8A7RLB', 10, 1),
(17, '20220602SXK3RLUG', 16, 1),
(18, '20220602OSJO4ZUE', 16, 1),
(19, '20220605ENSPLFR1', 21, 2),
(20, '20220607ZTBKADJH', 24, 2),
(21, '20220609DGJWO3ZW', 29, 2),
(22, '20220609DGJWO3ZW', 28, 1),
(23, '20220609DGJWO3ZW', 27, 1),
(24, '20220609IMLTSQM4', 27, 5),
(25, '20220609CJSYHAXM', 27, 5),
(26, '20220609UOEUCFFM', 27, 5),
(27, '20220616YNKW3QOC', 28, 1),
(28, '20220616YNKW3QOC', 29, 1),
(29, '20220616R9MQ8NNL', 29, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` varchar(250) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telpon`) VALUES
(1, 'Pusbar Magic Shop', '54', 'Perum Taman Edelweis. Jln. Gang Bromo Block C9 No.2, Satria Jaya, Tambun Utara, Kabupaten Bekasi.', '082261082986');

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
(5, 1, '20220514Q0KUDCPU', '2022-05-14', 'Nadisya Alma', '082261082986', 'Kalimantan Tengah', 'Kotawaringin Barat', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '3-5 Days ', 57000, 650, 70000, 127000, 1, 'bukti_bayar.jpg', 'Nadisya Alma', 'BCA', '49234567', 3, 'TJE1552766682341'),
(6, 1, '20220516PM4N0KUF', '2022-05-16', 'Nadisya Alma', '082261082986', 'Kalimantan Tengah', 'Murung Raya', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '3-5 Days ', 50000, 130, 45000, 95000, 1, 'bukti_bayar1.jpg', 'Nadisya Alma', 'BCA', '49234567', 3, 'TJE1678892020351'),
(7, 1, '20220517FZOIAT7P', '2022-05-17', 'Tommy Alfianto', '085867554444', 'Jawa Tengah', 'Magelang', 'Jln. Kapuas 2 Blok V No.44 RT 16/33', '44221', 'tiki', 'REG', '2 Days ', 24000, 500, 50000, 74000, 1, 'bukti_bayar2.jpg', 'Tommy Alfianto', 'BCA', '65779853', 1, NULL),
(8, 3, '20220519F0DRHR5M', '2022-05-19', 'Tommy Alfianto', '0812445536722', 'Bangka Belitung', 'Belitung', 'Jln. Kapuas 2 Blok V No.44 RT 16/33', '345677', 'jne', 'REG', '1-2 Days ', 99000, 2750, 275000, 374000, 1, 'bukti_bayar3.jpg', 'Tommy Alfianto', 'BCA', '987756321', 3, 'JTE12345678900'),
(9, 4, '20220601QB8A7RLB', '2022-06-01', 'Tommy Alfianto', '082261082986', 'Jawa Barat', 'Bekasi', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '1234', 'pos', 'Express Next Day Barang', '1 HARI Days ', 16000, 100, 30000, 46000, 1, 'bukti_bayar4.jpg', 'tommy', 'BCA', '49234567', 3, 'JTE12345678900'),
(10, 1, '20220602SXK3RLUG', '2022-06-02', 'Nadisya Alma', '082261082986', 'Jawa Timur', 'Lumajang', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '1234', 'jne', 'REG', '2-3 Days ', 26000, 600, 334900, 360900, 0, NULL, NULL, NULL, NULL, 0, NULL),
(11, 1, '20220602OSJO4ZUE', '2022-06-02', 'Nadisya Alma', '082261082986', 'Jawa Barat', 'Depok', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '1342', 'jne', 'REG', '1-2 Days ', 9000, 600, 334900, 343900, 1, 'bukti_bayar8.jpg', 'Amalia Sarah', 'BCA', '987756321', 3, 'JTE12345678900'),
(12, 5, '20220605ENSPLFR1', '2022-06-05', 'Aizh hermawan', '087765432143', 'DKI Jakarta', 'Jakarta Timur', 'Jl. Krisan Blok B2 ', '26112', 'jne', 'YES', '1-1 Days ', 18000, 1200, 1390000, 1408000, 1, 'bukti_bayar5.jpg', 'aizh hermawan', 'BCA', '089073', 3, 'JTE12345678900'),
(13, 1, '20220607ZTBKADJH', '2022-06-07', 'Nadisya Alma', '082261082986', 'Bangka Belitung', 'Bangka Barat', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '2-3 Days ', 39000, 2, 30000, 69000, 1, 'Screenshot_(3).png', 'Nadisya Alma', 'BCA', '49234567', 3, 'JTE12345678900'),
(14, 8, '20220609DGJWO3ZW', '2022-06-09', 'Amalia Sarah', '0812445536722', 'Bali', 'Gianyar', 'Jl. Mawar 25 Blok AA21 No. 23', '26112', 'jne', 'REG', '2-3 Days ', 31000, 400, 188000, 219000, 1, 'bukti_bayar6.jpg', 'Amalia Sarah', 'BCA', '987756321', 3, 'JTE12345678900'),
(15, 9, '20220609IMLTSQM4', '2022-06-09', 'Ratu Adelia', '0858675544', 'Bali', 'Bangli', 'Jl. Krisan Blok B2 ', '1234', 'jne', 'REG', '2-3 Days ', 31000, 500, 250000, 281000, 1, 'bukti_bayar7.jpg', 'Ratu Adelia', 'BCA', '987756321', 2, 'JTE12345678900'),
(16, 9, '20220609CJSYHAXM', '2022-06-09', 'Nadisya Alma', '082261082986', 'Bali', 'Badung', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'OKE', '3-6 Days ', 27000, 500, 250000, 277000, 1, 'BT21_(3).jpeg', 'Nadisya Alma', 'BCA', '49234567', 0, NULL),
(17, 9, '20220609UOEUCFFM', '2022-06-09', 'Nadisya Alma', '082261082986', 'Banten', 'Cilegon', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '1-2 Days ', 10000, 500, 250000, 260000, 0, NULL, NULL, NULL, NULL, 0, NULL),
(18, 11, '20220616YNKW3QOC', '2022-06-16', 'Nadisya Alma', '082261082986', 'Kepulauan Riau', 'Batam', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'tiki', 'ONS', '1 Days ', 63000, 200, 88000, 151000, 1, 'bukti-transfer-m-banking-bca-asli_.jpg', 'Nadisya Alma', 'BCA', '49234567', 1, NULL),
(19, 12, '20220616R9MQ8NNL', '2022-06-16', 'Sarah', '082261082986', 'DI Yogyakarta', 'Gunung Kidul', 'Jl. Krisan Blok B2 No. 4 RT 6/12 ', '26112', 'jne', 'REG', '2-3 Days ', 22000, 200, 100000, 122000, 1, 'bukti-transfer-m-banking-bca-asli_1.jpg', 'Sarah', 'BCA', '49234567', 3, 'JTE12345678900');

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
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_rincian_transaksi`
--
ALTER TABLE `tbl_rincian_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

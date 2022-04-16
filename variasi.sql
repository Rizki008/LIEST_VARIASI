-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2022 pada 09.36
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `variasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `balas` text DEFAULT NULL,
  `time_chatting` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `pesan`, `balas`, `time_chatting`) VALUES
(1, 1, 'sasasa', '0', '2022-04-16 07:33:53'),
(2, 1, '0', 'selamat malam', '2022-04-16 07:35:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'sembako'),
(2, 'minuman'),
(3, 'makanan ringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `jenis_kel` varchar(12) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `no_tlpn`, `jenis_kel`, `usia`, `email`) VALUES
(1, 'raina', 'admin', '12345', '085745698745', '2', '21', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(125) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `diskon`, `stock`, `deskripsi`, `gambar`) VALUES
(1, 1, 'TROPICANA CHOCO VAN', '350000', NULL, '8', 'sasa', 'bayar.png'),
(2, 1, 'SIMAS PALMIA', '350000', NULL, '100', 'saas', 'bg30.jpg'),
(3, 1, 'beras', '350000', NULL, '110', 'sadawa', 'bg40.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(10) DEFAULT NULL,
  `no_rek` varchar(125) DEFAULT NULL,
  `atas_nama` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(125) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_produk`, `qty`) VALUES
(1, '20220416OJG6XNDHK', 1, '2');

--
-- Trigger `rinci_transaksi`
--
DELIMITER $$
CREATE TRIGGER `produk_kurang` AFTER INSERT ON `rinci_transaksi` FOR EACH ROW BEGIN
UPDATE produk SET stock = stock-NEW.qty
WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riview`
--

CREATE TABLE `riview` (
  `id_riview` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_pelanggan` varchar(125) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(125) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pembayaran` varchar(128) DEFAULT NULL,
  `pasang` varchar(128) DEFAULT NULL,
  `grand_total` varchar(125) DEFAULT NULL,
  `total_bayar` varchar(128) DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `atas_nama` varchar(125) DEFAULT NULL,
  `jml_bayar` varchar(125) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `nama_pengirim` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `alamat`, `pembayaran`, `pasang`, `grand_total`, `total_bayar`, `status_order`, `status_bayar`, `atas_nama`, `jml_bayar`, `bukti_bayar`, `nama_pengirim`) VALUES
(1, 1, '20220416OJG6XNDHK', '2022-04-16', 'aAaSa', '1', '2', '700000', NULL, 3, 0, NULL, NULL, NULL, 'ridwan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'ADMIN', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indeks untuk tabel `riview`
--
ALTER TABLE `riview`
  ADD PRIMARY KEY (`id_riview`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riview`
--
ALTER TABLE `riview`
  MODIFY `id_riview` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

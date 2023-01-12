-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `balas` text DEFAULT NULL,
  `time_chatting` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `pesan`, `balas`, `time_chatting`) VALUES
(1, 1, 'Mas pilok warna putih ready?', '0', '2022-04-16 07:33:53'),
(2, 1, '0', 'Ada kak silahkan di pesan!', '2022-04-16 07:35:50'),
(3, 1, 'Terimkasih Mas!', NULL, '2022-08-02 12:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Variasi Motor'),
(2, 'Variasi Mobil'),
(3, 'Stiker');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_lokasi` int(11) NOT NULL,
  `nama_biaya` varchar(50) DEFAULT NULL,
  `ongkir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_lokasi`, `nama_biaya`, `ongkir`) VALUES
(1, 'pasang di tempat', '5000'),
(2, 'pasang di rumah', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `jenis_kel` varchar(12) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kode_post` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `no_tlpn`, `jenis_kel`, `usia`, `email`, `kabupaten`, `kecamatan`, `desa`, `kode_post`, `alamat`) VALUES
(1, 'Anisa', 'anisa', '12345', '089956414111', '2', '21', 'anisa@gmail.com', NULL, 'ciawigebang', NULL, NULL, NULL),
(2, 'Firmansyah', 'iman', 'kuningan', '085671211420', '1', '38', 'iman@gmail.com', NULL, 'ciawigebang', NULL, NULL, NULL),
(3, 'Deni', 'deni', '55555', '081324222122', '1', '32', 'deni@gmail.com', NULL, 'ciawigebang', NULL, NULL, NULL),
(4, 'Wawan Irawan', 'wawan', '12345', '081311410011', '1', '42', 'wawan@gmail.com', NULL, 'kuningan', NULL, NULL, NULL),
(5, 'Miftahul', 'miftah', '121212', '085244121110', '1', '23', 'miftah@gmail.com', NULL, 'kuningan', NULL, NULL, NULL),
(6, 'Aan Maulana', 'aan', '4444', '083121451110', '1', '26', 'aan@gmail.com', NULL, 'Kuningan', NULL, NULL, NULL),
(7, 'Wisnu Adhi', 'wisnu', '666666', '087741121111', '1', '24', 'wisnu@gmail.com', NULL, 'kuningan', NULL, NULL, NULL),
(8, 'Handi Senggeng', 'handi', '11111', '082114566880', '1', '49', 'handis@gmail.com', NULL, NULL, NULL, NULL, NULL),
(9, 'Yaya Sunarya', 'yaya', 'ya1212', '081400225141', '1', '47', 'yaya12@gmail.com', NULL, NULL, NULL, NULL, NULL),
(10, 'Ade Rusdi', 'aderusdi', 'ade123', '085294411201', '1', '42', 'aderusdi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(11, 'Irpan Erdian', 'irpaner', 'kuningan02', '089670557442', '1', '25', 'irpan02@gmail.com', NULL, NULL, NULL, NULL, NULL),
(12, 'Neneng Kurniawati', 'neneng', 'neneng10', '081389018042', '2', '36', 'neneng10@gmail.com', NULL, NULL, NULL, NULL, NULL),
(13, 'Madi Mulyadi', 'madiyadi', '10110', '083100166252', '1', '45', 'madiyadi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(14, 'Fauziah', 'uzi05', '050505', '082324520553', '2', '23', 'uzifau@gmail.com', NULL, NULL, NULL, NULL, NULL),
(15, 'Mumu Muslimin', 'mumu101', 'kuningan101', '087724121113', '1', '30', 'mumumuslimin101@gmail.com', NULL, NULL, NULL, NULL, NULL),
(16, 'Jeni Jaelani', 'jaelani', 'jenjen', '085320213162', '1', '25', 'jenjen@gmail.com', NULL, NULL, NULL, NULL, NULL),
(17, 'Ida Herdiana', 'idadiana', '112233', '082741131211', '2', '29', 'idadiana@gmail.com', NULL, NULL, NULL, NULL, NULL),
(18, 'Ojah', 'ojah12', '1122', '085295531200', '2', '32', 'ojah12@gmail.com', NULL, NULL, NULL, NULL, NULL),
(19, 'Asep Saefudin', 'asep15', '1155', '081131441001', '1', '22', 'saefudin@gmail.com', NULL, NULL, NULL, NULL, NULL),
(20, 'Dudung Abdul Jamil', 'dudung', 'ddg14', '0895809540407', '1', '43', 'dudung14@gmail.com', NULL, NULL, NULL, NULL, NULL),
(21, 'Andi Suhandi', 'andi08', '080808', '087721013313', '1', '32', 'andi08@gmail.com', NULL, NULL, NULL, NULL, NULL),
(22, 'Didi Ardiansyah', 'ardiansyah', 'ardidi11', '081405338447', '1', '29', 'ardiansyah11@gmail.com', NULL, NULL, NULL, NULL, NULL),
(23, 'Kiran Rania ', 'raniakiran', 'rani04', '0895636132882', '2', '19', 'kiranrania@gmail.com', NULL, NULL, NULL, NULL, NULL),
(24, 'Arisandi', 'arisandi', 'sandi26', '089661212100', '1', '23', 'sandi26@gmail.com', NULL, NULL, NULL, NULL, NULL),
(25, 'Didin Abidin', 'abididin', 'abidin001', '082323727252', '1', '22', 'abidin001@gmail.com', NULL, NULL, NULL, NULL, NULL),
(26, 'Alif Muhammad', 'malif', 'alif1', '0896650883359', '1', '36', 'muhalif@gmail.com', NULL, NULL, NULL, NULL, NULL),
(27, 'Surahman', 'surahman', 's1212', '087721410499', '1', '40', 'surahman@gmail.com', NULL, NULL, NULL, NULL, NULL),
(28, 'Alfin Fauzan', 'alfin', 'kngn123', '089912122341', '1', '20', 'alfin@gmail.com', NULL, NULL, NULL, NULL, NULL),
(29, 'Muhammad Daffa', 'muhdaffa', 'daffa09', '082262344954', '1', '26', 'muhdaffa@gmail.com', NULL, NULL, NULL, NULL, NULL),
(30, 'Robiansyah', 'robi', 'robiaja', '0857411102341', '1', '32', 'robiaja@gmail.com', NULL, NULL, NULL, NULL, NULL),
(31, 'Geri Riandi', 'riandigeri', 'geri22', '087723411105', '1', '26', 'geririandi22@gmail.com', NULL, NULL, NULL, NULL, NULL),
(32, 'Abdul Malik', 'abdulmalik', '123123', '083101460806', '1', '28', 'abdulmalik@gmail.com', NULL, NULL, NULL, NULL, NULL),
(33, 'Muhammad Ariyandi', 'mariyandi', 'ariyandi03', '08978440519', '1', '19', 'ariyandi03@gmail.com', NULL, NULL, NULL, NULL, NULL),
(34, 'Farhan Nurfahmi', 'farhan', 'farhan11', '081221767577', '1', '28', 'farhannurfahmi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(35, 'Lala Sahla', 'sahlala', 'sahla08', '089656410011', '2', '36', 'sahlala08@gmail.com', NULL, NULL, NULL, NULL, NULL),
(36, 'Mulyadi', 'mulyadi14', 'mul14', '085731888120', '1', '49', 'mulyadi14@gmail.com', NULL, NULL, NULL, NULL, NULL),
(37, 'Heri Suheri', 'suheri', 'suheri23', '0896312972667', '1', '34', 'suheri@gmail.com', NULL, NULL, NULL, NULL, NULL),
(38, 'Diana', 'diana03', 'kapandayan03', '081165642001', '2', '25', 'diana03@gmail.com', NULL, NULL, NULL, NULL, NULL),
(39, 'Mumun ', 'mumun', 'kuningan11', '085221455189', '2', '31', 'mumun@gmail.com', NULL, NULL, NULL, NULL, NULL),
(40, 'Nurul Nurmaulida', 'nurulmau', 'nurulmau16', '082145664122', '2', '39', 'nurulmau@gmail.com', NULL, NULL, NULL, NULL, NULL),
(41, 'Ria Ridayanti', 'ridayantiria', 'ria14', '087723114127', '2', '41', 'ridayanti14@gmail.com', NULL, NULL, NULL, NULL, NULL),
(42, 'Aldi Reynaldi', 'aldi', 'kuningan18', '0896411664101', '1', '22', 'aldireynaldi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(43, 'Yanto', 'yanto', 'yanto', '082215411201', '1', '49', 'yanto@gmail.com', NULL, NULL, NULL, NULL, NULL),
(44, 'Momon Sulaiman', 'momon', '55555', '085295553341', '1', '36', 'momon@gmail.com', NULL, NULL, NULL, NULL, NULL),
(45, 'Misdah', 'misdah', '1234', '08771212741', '1', '34', 'misdah@gmail.com', NULL, NULL, NULL, NULL, NULL),
(46, 'Mamat Rahmat ', 'mamat', 'mamatrahmat', '083144100210', '1', '52', 'mamatrahmat@gmail.com', NULL, NULL, NULL, NULL, NULL),
(47, 'Sarifudin', 'sarif', 'luragung17', '081211945414', '1', '37', 'sarifudin@gmail.com', NULL, NULL, NULL, NULL, NULL),
(48, 'Aliya Azahra', 'aliya', 'aliya30', '089664100122', '2', '31', 'aliyaaz@gmail.com', NULL, NULL, NULL, NULL, NULL),
(49, 'Rismayanti', 'rismayanti', 'risma12', '082123114105', '2', '19', 'rismayanti@gmail.com', NULL, NULL, NULL, NULL, NULL),
(50, 'Aan', 'aan', 'aan08', '081312100120', '1', '47', 'aan08@gmail.com', NULL, NULL, NULL, NULL, NULL),
(51, 'Endang', 'endang', 'geresik123', '08964110771', '1', '42', 'endangg@gmail.com', NULL, NULL, NULL, NULL, NULL),
(52, 'Agung Putera', 'agung', 'agungput', '08577121471', '1', '33', 'agungputera@gmail.com', NULL, NULL, NULL, NULL, NULL),
(53, 'Aris Riswanto', 'aris', 'riswanto09', '082116433711', '1', '44', 'arisriswanto@gmail.com', NULL, NULL, NULL, NULL, NULL),
(54, 'Jaja Nurjaman', 'jaja', 'nurjaman01', '087721491105', '1', '36', 'jajanurjaman@gmail.com', NULL, NULL, NULL, NULL, NULL),
(55, 'Kusnadi', 'kusnadi', 'kuninganmas', '089632210051', '1', '45', 'kusnadi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(56, 'sartono', 'tono', 'tono12', '089504321409', '1', '39', 'tono12@gmail.com', NULL, NULL, NULL, NULL, NULL),
(57, 'Hendi', 'hendi', 'hendikngn', '082262344951', '1', '26', 'hendi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(58, 'Ahmad Jenudin', 'ahmad', 'ahmadin04', '083869417006', '1', '36', 'ahmadjaenudin@gmail.com', NULL, NULL, NULL, NULL, NULL),
(59, 'Enok Haryanti', 'enok', 'ciomas17', '089522120230', '2', '41', 'enokharyanti17@gmail.com', NULL, NULL, NULL, NULL, NULL),
(60, 'M.Ali', 'ali', 'ali27', '0857983120462', '1', '37', 'mali@gmail.com', NULL, NULL, NULL, NULL, NULL),
(61, 'Galang Yosa', 'galang', 'galang02', '089537816936', '1', '26', 'galang02@gmail.com', NULL, NULL, NULL, NULL, NULL),
(62, 'Jajang', 'jajang', 'jajang12', '089532373617', '1', '43', 'jajang13@gmail.com', NULL, NULL, NULL, NULL, NULL),
(63, 'hanjani putri', 'hana', 'hanasayang', '089192919291', '1', '21', 'hana@gmail.com', 'kuningan', 'kuningan', 'kuningan', '1234', 'kuningan');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(125) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `stock`, `diskon`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 2, 'Setir Takata', '160000', '28', '20', 'Spesifikasi produk : setir model celong dan semi celong, ukuran 14 inch. Tersedia plat warna kuning, merah dan hijau', 'c.jpg', '2022-07-12'),
(2, 2, 'Bantal Mobil', '55000', '19', '5', 'Bantal mobil terdiri dari : 2pcs bantal kepala, 2pcs sarung safety belt', 'b.jpg', '2022-11-09'),
(3, 1, 'Rem Cakram', '80000', '19', NULL, 'Master Rem untuk beat, vario dan mio', 'a.jpg', '2022-11-08'),
(4, 1, 'Knalpot Motor Metik', '115000', '24', NULL, 'Knalpot model mirip dengan originalnya, full set langsung pasang', 'd.jpg', '2022-01-16'),
(5, 1, 'Jok Mobil', '1005000', '12', '10', 'Jok terdiri dari 3 barisan (jok depan, jok tengah dan jok belakang), terdapat kantong di bagian belakang', 'e.jpg', '2022-01-10'),
(6, 1, 'Pilok Diton', '25000', '96', NULL, 'Pilok Diton isi 300ml, dengan banyak pilihan warna (ready stock)', 'WhatsApp_Image_2022-08-03_at_08_41_36.jpeg', NULL),
(7, 3, 'Kaca Film', '20000', '39', NULL, 'Ukuran kaca film 1 roll : L 152 cm x T 25 cm\r\nCara pemasangan kaca film : \r\n1. ukur kaca yang akan dipasangkan kaca film dengan penggaris\r\n2. potong dengan cutter (tambahkan min 2cm pada setiap sisi)\r\n3. Bersihkan kaca dengan air sabun/pembersih kaca pada bagian yang akan dipasangkan kaca film \r\n4. tempelkan kaca film pada kaca, lalu semprotkan cairan pada bagian luar kaca film dan serut sampai air keluar semua dengan menggunakan karet pembersih kaca\r\n5. potong sisa kaca film pada tiap sisi dengan menggunakan cutter', 'WhatsApp_Image_2022-08-03_at_08_41_34.jpeg', NULL),
(8, 3, 'Skotlet Warna', '8000', '23', NULL, 'Skotlet ini dapat digunakan pada motor, mobil atau media lainnya. Skotlet untuk melindungi permukaan dari goresan/lecet oleh benda lain.\r\nOrder 1 pcs : Lebar 45cm x Panjang 50cm,\r\nOrder 2 pcs : Lebar 45cm x Panjang 100cm,\r\nOrder 3 pcs : Lebar 45cm x Panjang 150cm, dan seterusnya. Sebelum order tanya terlebih dahulu ketersedian warnanya. Warna skotlet pilih sesuai keinginan!', 'WhatsApp_Image_2022-08-03_at_08_41_37.jpeg', NULL),
(9, 3, 'Stiker Velg Motor', '8500', '52', NULL, 'Ukuran stiker : Lebar 1 cm x Panjang 5 cm. Bahan menyala ketika gelap. Cantumkan warna yang anda pilih!', 'WhatsApp_Image_2022-08-03_at_08_41_36_(2).jpeg', NULL),
(10, 3, 'Skotlet Transparan', '8000', '66', NULL, 'Order 1 pcs : Lebar 45cm x Panjang 50cm, Order 2 pcs : Lebar 45cm x Panjang 100cm, Order 3 pcs : Lebar 45cm x Panjang 150cm, dan seterusnya. Silahkan pilih warna sesuai keinginan!', 'WhatsApp_Image_2022-08-03_at_08_41_36_(1).jpeg', NULL),
(11, 1, 'Kaca Spion Honda', '46000', '28', NULL, 'Kaca Spion Honda 1 set (Spion kanan & Spion Kiri). Cocok digunakan untuk motor Beat, Vario, dan Beat Pop', 'WhatsApp_Image_2022-06-15_at_05_39_592.jpeg', NULL),
(12, 1, 'Kaca Spion Batman', '39000', '20', NULL, 'Spion motor variasi model Batman untuk motor Yamaha dan Honda. Warna akan dikirim secara random sesuai stock yang masih tersedia', 'WhatsApp_Image_2022-08-03_at_08_41_38.jpeg', NULL),
(13, 2, 'Skotlet Lampu Mobil', '15000', '91', NULL, 'Order 1 pcs : Lebar 30cm x Panjang 100cm, Order 2 pcs : Lebar 30cm x Panjang 200cm, Order 3 pcs : Lebar 30cm x Panjang 300cm, dan seterusnya.', 'WhatsApp_Image_2022-08-03_at_08_41_37_(1).jpeg', NULL),
(14, 1, 'Pilok Nippon', '21000', '40', NULL, 'Pilok Nippon Basic merupakan cat semprot anti gumpal, warna yang dihasilkan kilap, cepat kering, warna tahan lama dan anti pudar. Cantumkan pilihan warna pada saat pemesanan!', 'WhatsApp_Image_2022-08-03_at_08_41_38_(1).jpeg', NULL),
(15, 1, 'Kit Motor Multiguna Spray', '14000', '20', NULL, 'Kemasan produk berupa pump spray dengan ukuran 100 ML. Produk ini apat menggkilapkan motor dan melindungi seluruh permukaan pada body yang dipadukan dengan aroma menyegarkan. Aturan pemakaian : \r\n1. Cuci motor dengan bersih dan keringkan setiap permukaannya\r\n2. Kocok produk sebelum menyemprotkan langsung pada permukaan motor (seperti spartboard, box, knalpot, lampu, dll)\r\n3. Gosok menggunakan kain kering dan bersih sampai permukaan megkilap\r\n4. Gunakan kit multiguna secara rutin agar motor tampil dengan indah, bersih dan terawat\r\n', '60b944aa638e27aa36737b8017bc9dd3.jpg', NULL),
(16, 3, 'Stiker Striping Honda Beat Carbu 2012', '29000', '15', NULL, 'Stiker Striping Honda Beat Carbu 2012 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor.', 'f07236a0243807edb7b71637d954fb54.jpg', NULL),
(17, 3, 'Stiker Striping Honda Beat FI 2015', '29000', '10', NULL, 'Stiker Striping Honda Beat FI 2015 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor.', '40b7ba144f355dd4b7cbe87641cd6b29.jpg', NULL),
(18, 3, 'Stiker Striping Honda Beat Carbu 2011', '29000', '31', NULL, 'Stiker Striping Honda Beat Carbu 2011 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor.', '9a6b928f0bcffbb0623806574ebae2b4.jpg', NULL),
(19, 3, 'Stiker Striping Honda Beat FI 2013', '29000', '16', NULL, 'Stiker Striping Honda Beat FI 2013 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '580ab1e83057dfa54c193a11dc16b2d5.jpg', NULL),
(20, 3, 'Stiker Striping Honda Beat 2019', '29000', '28', NULL, 'Stiker Striping Honda Beat 2019 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '53a236deca8f5bbbc8fa571c61d8acd0.jpg', NULL),
(21, 3, 'Emblem Sticker Logo Honda ', '14000', '16', NULL, 'Emblem Stiker Logo Wings Honda timbul sepasang (2 Pcs)', '44e319f4268a6652ffdcb43aa8eb7192.jpg', NULL),
(22, 3, 'Stiker Striping Vario 2009', '29000', '16', NULL, 'Stiker Striping Vario 2009 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '1abc3768596b95acde612b38944df8c4.jpg', NULL),
(23, 3, 'Stiker Striping Vario 2011', '29000', '24', NULL, 'Stiker Striping Vario 2011 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '53d50283cc486aa071e4adb4e071367f.jpg', NULL),
(24, 3, 'Stiker Striping Vario 125 2016', '29000', '23', NULL, 'Stiker Striping Vario 125 LED tahun 2016  fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '1c316f7dfee66515b6871da498d25c56.jpg', NULL),
(25, 3, 'Stiker Striping Vario Techno 2020', '29000', '17', NULL, 'Stiker Striping Vario Techno 2019 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '5c89a113f2afc59af39dac689b91eb41.jpg', NULL),
(26, 1, 'Rem Handle Motor Matic', '51000', '25', NULL, 'Rem Handle motor matic dapat digunakan pada motor matic seperti mio, vario, fino, scoppy, dll. Remn  bukan untuk tipe CBS. Rem siap pasang dan mempercantik motor kesayangan anda, produk 2 Pcs kanan dan kiri.', '8bca4e21e3e358eb5b58f844edef3e85.jpg', NULL),
(27, 1, 'Baut Klip Body Honda Matic', '600', '104', NULL, 'Baut Klip atau lebih dikenal dengan baut cacing, dapat digunakan pada motor matic seperti Beat, Vario, Scopppy. Peringatan!! : Minimal pembelian baut sebanyak 5Pcs ', '8fb8ceba7ca8310cd56c0da964ba105f.jpg', NULL),
(28, 3, 'Stiker Timbul Honda FI', '6000', '27', NULL, 'Stiker timbul honda FI ukuran sama seperti originalnya', 'dcd4ae68e645c9ac21fada9fef7afd9e.jpg', NULL),
(29, 1, 'Cover Plat Nomor', '19000', '40', NULL, 'Cover Plat Nomor Motor apapun, siap digunakan dengan mudah ', 'a11fbb2a6c2eb4ae691e0f0c661ff2f0.jpg', NULL),
(30, 1, 'Kabel Ties', '11000', '195', NULL, 'Kabel Tie ukuran 30 Cm (3.6 x 300 Mm) Kualitas terbaik, bahan tidak tipis dan kuat. Dijual satuan minimal pembelian 10 Pcs', '3c3e41ef804f2c75f215cdf73803e67b.jpg', NULL),
(31, 3, 'Stiker Striping Scoppy 2014', '29000', '21', NULL, 'Stiker Striping Scoppy 2014 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '84415f1c383ef81cdcd23d5428260570.jpg', NULL),
(32, 3, 'Stiker Striping Scoppy 2015', '29000', '25', NULL, 'Stiker Striping Scoppy 2015 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '85aae64834c0c8d867aca64bf326c7ab.jpg', NULL),
(33, 3, 'Stiker Striping Scoppy Sporty 2018', '29000', '19', NULL, 'Stiker Striping Scoppy Sporty 2018 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', 'dcf6f793b86c97c3f425db710809c60d.jpg', NULL),
(34, 1, 'Lampu Bohlam Motor', '25000', '13', NULL, 'Bohlam lampu motor bebek dan matic 12Volt, merk OSRAM', '0005f5ef0544f2d0e410264562847e8a.jpg', NULL),
(35, 3, 'Stiker Striping Mio 2020', '29000', '15', NULL, 'Stiker Striping Mio 2020 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '8aaa6f7b32414e8ecfc04ae536c33cf8.jpg', NULL),
(36, 3, 'Stiker Striping Mio M3 2016', '29000', '14', NULL, 'Stiker Striping Mio 2016 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '49f94df40de7968a1a3de5476b395d00.jpg', NULL),
(37, 3, 'Stiker Striping Scoppy 2014', '29000', '22', NULL, 'Stiker Striping Scoppy 2014 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '741e5fb2062c381afe9a42628cd85a34.jpg', NULL),
(38, 3, 'Stiker Striping Aerox 2021', '29000', '17', NULL, 'Stiker Striping Aerox 2021 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '24e5e303795471498e928313387bb3c2.jpg', NULL),
(39, 3, 'Stiker Striping NMAX 2020', '72000', '13', NULL, 'Stiker Striping NMAX 2020 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '3503bb955b3dd454e720f99ef6c55b71.jpg', NULL),
(40, 3, 'Stiker Striping PCX ', '95000', '21', NULL, 'Stiker Striping PCX fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', '2553264e127d7bd65766f58080365586.jpg', NULL),
(41, 3, 'Stiker Metalik', '32000', '49', NULL, '1 Pcs = Lebar 50 Cm x Panjang 1 Meter \r\n2 Pcs = Lebar 50 Cm x Panjang 2 Meter dan seterusnya. Stiker dapat digunakan pada motor, mobil, HP, laptop dan barang kesayangan anda ', '2352149176c256a78dadef314dc776d4.jpg', NULL),
(42, 2, 'Knalpot Mobil HKS HI', '76000', '20', NULL, 'Knalpot Mobil HKS HI Power Blue Suara Bass bulet yang terbuat dari bahan stainles, serta plat galvanis. Saringan dalam menggunakan strimin full gaswol. Panjang tabung 17 Cm, panjang knalpot 35 Cm, dengan berat 1 Kg.', 'WhatsApp_Image_2022-09-13_at_09_40_55.jpeg', NULL),
(43, 1, 'Kit Motor Shampoo', '7500', '27', NULL, 'Shampoo motor merk KIT dalam kemasan pouch 200 Ml, dengan plis premium silicone sehingga aman untuk cat body motor dan menghasilkan permukaan yang bersih m engkilap.', 'WhatsApp_Image_2022-09-13_at_09_40_55_(1).jpeg', NULL),
(44, 2, 'Gantungan Kunci Mobil', '14000', '30', NULL, 'Gantungan Kunci Mobil import dengan premium quality dengan material kulit sinetis yang mengkilap. ', 'WhatsApp_Image_2022-09-13_at_09_40_56.jpeg', NULL),
(45, 2, 'Pengharum Mobil Biji Kopi Bali ', '10500', '40', NULL, 'Pengharum gantung Mobil Biji Kopi Bali ASLI', 'WhatsApp_Image_2022-09-13_at_09_40_56_(1).jpeg', NULL),
(46, 2, 'Pengharum Mobil Stella Daily', '12900', '16', NULL, 'Pengharum Mobil Stella Daily dapat mengharumkan mobil anda dengan wewangian yang fresh dan nyaman', 'stella.jpeg', NULL),
(47, 1, 'Handrip Motor ', '55000', '14', NULL, 'Handrip Motor Universal untuk motor Aerox, NMAX, PCX, Vario, Vixion dan CBR 150', 'WhatsApp_Image_2022-09-13_at_09_40_56_(2).jpeg', NULL),
(48, 2, 'Lis Bumper Samurai Mobil', '34000', '49', NULL, 'Lis Bumper Samurai Mobil, untuk menjaga bumper bagian bawah terkena goresan, dll.', 'WhatsApp_Image_2022-09-13_at_09_40_57.jpeg', NULL),
(49, 2, 'Lis Segel Karet Kaca Mobil', '46500', '43', NULL, 'Lis Segel Karet Kaca Mobil dapat meminimalkan celah antara pintu mobil dan body, dehingga mengurangi kebisingan angin, kebisingan jalan, dll. Agar berkendara semakin aman dan nyaman.', 'WhatsApp_Image_2022-09-13_at_09_40_57_(1).jpeg', NULL),
(50, 2, 'Stiker Reflektor Spion Mobil ', '8500', '40', NULL, 'Stiker Reflektor Spion Mobil dapat memantulkan cahaya apabila terkena lampu mobil, sehingga menjadi warning untuk mobil lainnya ', 'WhatsApp_Image_2022-09-13_at_09_40_58.jpeg', NULL),
(51, 2, 'Kain Lap Kanebo Jumbo', '18500', '56', NULL, 'Kain Lap Kanebo Jumbo Kenmaster merupakan lap pembersih serbaguna yang terbuat dari material terbaik, lembut dan tidak menggores. Lap ini dapat digunakan pada kendaraan ataupun perabotan rumah tangga.', 'WhatsApp_Image_2022-09-13_at_09_40_58_(1).jpeg', NULL),
(52, 1, 'Spion Scoppy ', '22000', '32', NULL, 'Spion Scoppy standar warna gagang chrome dengan 4 warna yang berbeda-beda.  Produk sebanyak 2Pcs kanan dan kiri', 'WhatsApp_Image_2022-09-13_at_09_40_59.jpeg', NULL),
(53, 1, 'Tankpad Motor', '14000', '11', NULL, 'Tankpad Motor pelindung tangki motor RX King, vision, Scorpio dan Byson', 'WhatsApp_Image_2022-09-13_at_09_40_59_(1).jpeg', NULL),
(54, 1, 'Spion Mio', '35000', '8', NULL, 'Spion Mio lama, sporty, M3, dan smile', 'WhatsApp_Image_2022-09-13_at_09_41_00.jpeg', NULL),
(55, 1, 'Bohlam Stop Honda ', '3500', '28', NULL, 'Bohlam Stop Honda belakang motor, dapat digunakan pada motor beat, vario, scoppy, dan supra', 'WhatsApp_Image_2022-09-13_at_09_41_00_(1).jpeg', NULL),
(56, 3, 'Stiker Striping Honda Beat Street 2017', '29000', '9', NULL, 'Stiker Striping Honda Beat Street 2017 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', 'WhatsApp_Image_2022-09-13_at_09_41_00_(2).jpeg', NULL),
(57, 3, 'Stiker Striping Fino 2016', '29000', '7', NULL, 'Stiker Striping Fino 2016 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci motor', 'WhatsApp_Image_2022-09-13_at_09_41_01.jpeg', NULL),
(58, 1, 'Lem Besi Dextone ', '12000', '20', NULL, 'Lem besi merk dextone dapat digunakan pada permukaan logam, kayu, kaca, almunium, besi, plastik. ', 'WhatsApp_Image_2022-09-13_at_09_41_01_(1).jpeg', NULL),
(59, 1, 'Lem G Handsome ', '3500', '39', NULL, 'Lem serbaguna ', 'WhatsApp_Image_2022-09-13_at_09_41_02.jpeg', NULL),
(60, 1, 'Pilok RJ London ', '16000', '53', NULL, 'Pilok RJ London semprot 150 Cc', 'WhatsApp_Image_2022-09-13_at_09_41_02_(1).jpeg', NULL),
(61, 1, 'Pilok Diton Premium', '37000', '113', NULL, 'Pilok Diton Premium 400 Ml Warna doff adalah cat semprot bermutu tinggi yang diformulasikan khusus untuk kendaraan bermotor. Pilok ini cepat kering dan menghasilkan semprotan seperti kipas tidak seperi cat semprot pada umumnya.', 'WhatsApp_Image_2022-09-13_at_09_41_02_(2).jpeg', NULL),
(62, 2, 'Lampu Sensor Pintu Mobil', '37000', '33', NULL, 'Lampu Sensor Pintu Mobil Magnetik untuk peringatan buka pintu mobil', 'WhatsApp_Image_2022-09-13_at_09_41_03.jpeg', NULL),
(63, 3, 'Stiker Striping Terios 2016', '220000', '16', NULL, 'Stiker Striping Terios 2016 fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci mobil', 'WhatsApp_Image_2022-09-13_at_09_41_03_(1).jpeg', NULL),
(64, 3, 'Stiker Striping All New Rush Terios', '310000', '12', NULL, 'Stiker Striping All New Rush Terios fullset untuk bagian kanan, kiri, depan serta belakang. Sebelum menempelkan stiker bersihkan permukaan dari debu, minyak ataupun kotoran lainnya. Lalu tempelkan stiiker dengan perlahan pada posisi permukaan secara pas, panaskan stiker yang sudah ditempel dengan korek api. Dan tunggu minimal 24 jam untuk memastikan lem merekat dengan baik sebelum mencuci mobil', 'WhatsApp_Image_2022-09-13_at_09_41_03_(2).jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(10) DEFAULT NULL,
  `no_rek` varchar(125) DEFAULT NULL,
  `atas_nama` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '6654123457892', 'Sahira'),
(2, 'BCA', '54781234567892', 'Rijal');

-- --------------------------------------------------------

--
-- Table structure for table `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(125) DEFAULT NULL,
  `id_warna` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_warna`, `qty`, `id_produk`) VALUES
(1, '20220708YKOYJ4ZEN', 4, '1', NULL),
(2, '20220731VUGARJIWY', 6, '2', NULL),
(3, '20220803UP3AB0VE2', 12, '1', NULL),
(4, '20220803ZWRML8ETK', 8, '1', NULL),
(5, '202208031OCU4SL20', 14, '1', NULL),
(6, '202208031OCU4SL20', 9, '1', NULL),
(7, '202208122Z4NVJSZG', 1, '1', NULL),
(8, '202208122Z4NVJSZG', 27, '1', NULL),
(9, '20220904IWX25CQFA', 2, '1', NULL),
(10, '20220914XUUGOHMAT', 119, '1', 119),
(11, '20220917HXE9WUIY7', 111, '4', 61),
(12, '20220920KAXFTWBGP', 94, '2', 51),
(13, '20220927TSOLCPAKN', 26, '1', 26),
(14, '20220928HNARYFFXI', 26, '3', 6),
(4315, '20221004DP48SEPYY', 124, '1', 52),
(4316, '20221004DP48SEPYY', 133, '1', 46),
(4317, '20221004ZBFLAAMWH', 26, '1', 6),
(4318, '20221004WO2TDUF7H', 2, '1', 6),
(4319, '20221004EWWDRST0V', 106, '1', 63),
(4320, '20221004AC314WYRI', 49, '1', 17),
(4321, '20221004AC314WYRI', 98, '1', 55),
(4322, '20221004BA4GDZRQN', 102, '2', 59),
(4323, '20221004BA4GDZRQN', 8, '1', 11),
(4324, '20221004BPHDZCJON', 33, '1', 9),
(4325, '20221004ITUVK6THY', 56, '1', 18),
(4326, '20221004ITUVK6THY', 102, '1', 59),
(4327, '20221004D847VMHMA', 8, '1', 11),
(4328, '202210047O2EDTKTB', 110, '1', 61),
(4329, '20221004WJNBJGT0H', 94, '1', 51),
(4330, '20221004KB4RFQQ2D', 4, '1', 7),
(4331, '20221004A81QVDT9C', 88, '1', 45),
(4332, '20221004LAXQOR9UE', 127, '1', 50),
(4333, '20221004LAXQOR9UE', 88, '1', 45),
(4334, '20221004FA0OEQ5CI', 94, '1', 51),
(4335, '20221004FA0OEQ5CI', 4, '1', 7),
(4336, '20221004EUKCTXXM8', 89, '1', 46),
(4337, '20221004EUKCTXXM8', 18, '2', 13),
(4338, '202210040XLVUD75H', 87, '1', 44),
(4339, '202210040XLVUD75H', 101, '1', 58),
(4340, '202210049BTVZUSX2', 108, '1', 62),
(4341, '20221004MBQ8ZUG13', 91, '1', 48),
(4342, '20221004MBQ8ZUG13', 133, '1', 46),
(4343, '20221004DXYGS5VO0', 39, '1', 3),
(4344, '20221004O1AYWJICH', 60, '1', 19),
(4345, '20221004O1AYWJICH', 8, '1', 11),
(4346, '20221004O1AYWJICH', 70, '6', 27),
(4347, '20221004ZWSEFARJO', 72, '1', 29),
(4348, '20221004ZWSEFARJO', 151, '5', 30),
(4349, '20221004RKWMYZXJT', 42, '1', 15),
(4350, '20221004RKWMYZXJT', 86, '1', 43),
(4351, '20221004RKWMYZXJT', 77, '1', 34),
(4352, '20221004OMZM1ADWK', 38, '1', 2),
(4353, '20221004WMNDURCTB', 32, '1', 9),
(4354, '20221004WMNDURCTB', 4, '2', 7),
(4355, '20221004ZLC3M872I', 87, '1', 44),
(4356, '20221004ZLC3M872I', 45, '1', NULL),
(4357, '20221004ZLC3M872I', 51, '1', NULL),
(4358, '20221004JIGTEL7OY', 51, '1', NULL),
(4359, '20221004KFEPJKBDU', 20, '1', 13),
(4360, '20221004KFEPJKBDU', 30, '3', 10),
(4361, '20221004KFEPJKBDU', 4, '2', 7),
(4362, '20221004G7TSPZ9FE', 88, '1', 45),
(4363, '20221004G7TSPZ9FE', 40, '1', 1),
(4364, '20221004PRIXV8BKB', 26, '2', 6),
(4365, '20221004PHMNGWKBV', 94, '1', 51),
(4366, '20221004FBNX1YPTG', 94, '1', 51),
(4367, '20221004FBNX1YPTG', 69, '1', 26),
(4368, '20221004FBNX1YPTG', 25, '2', 8),
(4369, '20221004CGMKYEEZX', 12, '1', 14),
(4370, '20221004CGMKYEEZX', 86, '1', 43),
(4371, '20221004T2OXWU75F', 97, '1', 54),
(4372, '20221004PRW9UNPOX', 121, '1', 56),
(4373, '20221004LFS8T6XW1', 94, '1', 51),
(4374, '20221004QLDSWZJO1', 4, '3', 7),
(4375, '20221004YVJNUWUSH', 18, '1', 13),
(4376, '20221004YVJNUWUSH', 6, '3', 9),
(4377, '20221004S5N0V3UEC', 4, '2', 7),
(4378, '20221004S5N0V3UEC', 130, '1', 48),
(4379, '20221004S5N0V3UEC', 107, '1', 64),
(4380, '20221004XGMWLIA3E', 30, '2', 10),
(4381, '20221004XGMWLIA3E', 94, '1', 51),
(4382, '20221004XWYO6ZDVP', 105, '1', 62),
(4383, '20221004XWYO6ZDVP', 106, '1', 63),
(4384, '20221004QGRC1POGU', 116, '1', 60),
(4385, '20221004N8F6EJJCY', 87, '1', 44),
(4386, '20221004N8F6EJJCY', 107, '1', 64),
(4387, '20221004DJELB9HHS', 94, '1', 51),
(4388, '20221004RAXSQBNPS', 159, '1', 23),
(4389, '202210047FNUKVYMT', 133, '3', 46),
(4390, '202210047FNUKVYMT', 136, '2', 41),
(4391, '20221004QJXWMKE7E', 92, '1', 49),
(4392, '20221004QJXWMKE7E', 4, '2', 7),
(4393, '20221004SRF7LV0EC', 152, '1', 29),
(4394, '20221004SBTMYD8KP', 101, '1', 58),
(4395, '20221004SBTMYD8KP', 133, '2', 46),
(4396, '20221004L1P03RFAM', 32, '4', 9),
(4397, '20221004RKIKDL5D6', 79, '1', 36),
(4398, '20221004RKIKDL5D6', 135, '1', 41),
(4399, '20221004GVR5NO4EV', 138, '3', 41),
(4400, '20221004EKTXQUWBR', 166, '1', 21),
(4401, '20221004EKTXQUWBR', 155, '1', 25),
(4402, '20221004R2HZLPXHD', 98, '2', 55),
(4403, '20221004R2HZLPXHD', 134, '1', 46),
(4404, '20221004QGF4RIZWN', 26, '2', 6),
(4405, '20221004QGF4RIZWN', 153, '1', 28),
(4406, '20221004VWXWZ1RFY', 97, '1', 54),
(4407, '20221004VWXWZ1RFY', 144, '1', 36),
(4408, '20221004DTWBTDVMC', 4, '1', 7),
(4409, '20221004NL2RCVBJR', 83, '1', 40),
(4410, '20221004NL2RCVBJR', 5, '2', 8),
(4411, '202210046YBU4ZKAX', 100, '1', 57),
(4412, '20221004H0SW2IPO4', 94, '1', 51),
(4413, '20221004H0SW2IPO4', 32, '1', 9),
(4414, '20221004SV21D8F3W', 42, '1', 15),
(4415, '20221004SV21D8F3W', 142, '1', 38),
(4416, '20221004SMU3PYECX', 153, '1', 28),
(4417, '20221004SMU3PYECX', 24, '2', 8),
(4418, '20221004NVGQPWMKA', 4, '1', 7),
(4419, '20221004NVGQPWMKA', 106, '1', 63),
(4420, '202210044APMH0SDE', 59, '1', 19),
(4421, '202210040NEJENGSC', 14, '2', 14),
(4422, '20221004WEMLYTUBN', 92, '1', 49),
(4423, '20221004WEMLYTUBN', 109, '1', 62),
(4424, '20221004UXVD2UD6M', 9, '1', 12),
(4425, '20221004UXVD2UD6M', 157, '1', 24),
(4426, '20221004UEX8JRK1D', 16, '3', 14),
(4427, '20221004UEX8JRK1D', 38, '1', 2),
(4428, '20221004HV7OTLDNV', 105, '1', 62),
(4429, '20221004UD26IJL3K', 111, '2', 61),
(4430, '20221004MW8FSTVP9', 106, '1', 63),
(4431, '20221004MW8FSTVP9', 17, '2', 13),
(4432, '202210045LDAGBNQI', 87, '1', 44),
(4433, '202210045LDAGBNQI', 88, '1', 45),
(4434, '202210045LDAGBNQI', 91, '1', 48),
(4435, '20221004FQYCZ3ZJT', 129, '2', 50),
(4436, '20221004VYKE87CTV', 32, '3', 9),
(4437, '20221004O5ZSMQGXM', 45, '1', 16),
(4438, '20221004O5ZSMQGXM', 5, '2', 8),
(4439, '20221004MZH3OUNFK', 23, '2', 8),
(4440, '20221004MZH3OUNFK', 26, '1', 6),
(4441, '20221004MZH3OUNFK', 27, '1', 6),
(4442, '20221005JWNRVXLDV', 26, '1', 6),
(4443, '20221005JWNRVXLDV', 2, '1', 6),
(4444, '20221005DEFNKSWLK', 27, '1', 6),
(4445, '20221005DEFNKSWLK', 4, '2', 7),
(4446, '20221005DEFNKSWLK', 153, '3', 28),
(4447, '20221005ZGQK8XSQP', 91, '1', 48),
(4448, '20221005KN8M1Q6YZ', 110, '2', 61);

--
-- Triggers `rinci_transaksi`
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
-- Table structure for table `riview`
--

CREATE TABLE `riview` (
  `id_riview` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_pelanggan` varchar(125) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `status` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riview`
--

INSERT INTO `riview` (`id_riview`, `id_pelanggan`, `id_produk`, `nama_pelanggan`, `tanggal`, `isi`, `status`) VALUES
(1, 1, 1, NULL, '2022-06-04', 'produk sangat bagus', NULL),
(2, 2, 6, NULL, '2022-07-13', 'Produk dikirim dengan kondisi baik', 1),
(3, 2, 3, NULL, '2022-07-15', 'Kualitas mantap, harga murah meriah', 1),
(4, 3, 3, NULL, '2022-07-19', 'Rem kualitas bagus dengan harga murah', 1),
(5, 2, 6, NULL, '2022-09-04', 'Pilok kualitas baik dengan harga yang murah, serta pelayanan super', 1),
(6, 2, 6, NULL, '2022-09-05', 'BARANG DALAM KEADAAN BAIK ', 1),
(7, 40, 49, NULL, '2022-10-05', 'Segel karet nya kualitasnya mantap dengan harga segitu, sangat puasss', 1),
(8, 40, 62, NULL, '2022-10-05', 'Lampu sensor berfungsi dengan baik, dan menambah keamanan untuk mobil. Agar tidak tertabrak pintunya oleh kendaraan lain', 1),
(9, 37, 44, NULL, '2022-10-05', 'Gantungan kunci nya bagus ', 1),
(10, 37, 64, NULL, '2022-10-05', 'Pemasangan desain rapih dan body mobil menjadi lebih bagus', 1),
(11, 43, 7, NULL, '2022-10-05', 'Kaca film dengan ketebalannya mantap', 1),
(12, 43, 64, NULL, '2022-10-05', 'Stripping dengan kualitas baik dan dipasang dengan baik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_lokasi` int(11) NOT NULL,
  `no_order` varchar(125) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pembayaran` varchar(128) DEFAULT NULL,
  `pasang` varchar(128) DEFAULT NULL,
  `grand_total` varchar(125) DEFAULT NULL,
  `total_bayar` varchar(128) DEFAULT NULL,
  `ongkir` varchar(50) NOT NULL,
  `status_order` int(11) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `status_riview` int(11) DEFAULT NULL,
  `atas_nama` varchar(125) DEFAULT NULL,
  `jml_bayar` varchar(125) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `nama_pengirim` varchar(125) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_lokasi`, `no_order`, `tgl_order`, `alamat`, `pembayaran`, `pasang`, `grand_total`, `total_bayar`, `ongkir`, `status_order`, `status_bayar`, `status_riview`, `atas_nama`, `jml_bayar`, `bukti_bayar`, `nama_pengirim`, `catatan`) VALUES
(1, 2, 2, '20220708YKOYJ4ZEN', '2022-05-01', 'Pagundan Kuningan Jawa Barat', '1', NULL, '20600', '30600', '10000', 3, 1, NULL, NULL, NULL, NULL, 'Heri', NULL),
(2, 2, 2, '20220731VUGARJIWY', '2022-05-03', 'Pagundan Kuningan Jawa Barat', '2', NULL, '40000', '50000', '10000', 3, 1, 0, 'sda', NULL, 'squence_diagram-kelola_produk.png', 'asa', NULL),
(3, 4, 2, '20220803UP3AB0VE2', '2022-05-04', 'Kapandayan Kuningan Jawa Barat', '1', NULL, '39000', '49000', '10000', 3, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(4, 4, 1, '20220803ZWRML8ETK', '2022-05-01', 'Kapandayan Kuningan Jawa Barat', '1', NULL, '8000', '13000', '5000', 3, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(5, 4, 2, '202208031OCU4SL20', '2022-05-08', 'Kapandayan Kuningan Jawa Barat', '1', NULL, '44500', '54500', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(6, 3, 2, '202208122Z4NVJSZG', '2022-05-11', 'Cilimus', '1', NULL, '100000', '110000', '10000', 3, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(7, 2, 2, '20220904IWX25CQFA', '2022-05-12', 'Pagundan Kuningan Jawa Barat', '2', NULL, '50000', '60000', '10000', 3, 1, 0, 'Iman', NULL, 'nctt.png', 'Heri', NULL),
(8, 2, 2, '20220914XUUGOHMAT', '2022-05-01', 'Pagundan Kuningan Jawa Barat', '2', NULL, '29000', '39000', '10000', 2, 1, 0, 'Iman', NULL, 'WhatsApp_Image_2022-01-15_at_19_47_23.jpeg', 'Heri', NULL),
(9, 2, 2, '20220917HXE9WUIY7', '2022-05-13', 'Pagundan Kuningan Jawa Barat', '2', NULL, '148000', '158000', '10000', 3, 1, 0, 'iman', NULL, '4216373502f942583bdef2a020035f8412.jpg', 'Heri', NULL),
(10, 9, 2, '20220920KAXFTWBGP', '2022-05-20', 'Desa Kapandayan Kec Ciawigebang Kab Kuningan', '1', NULL, '37000', '47000', '10000', 3, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(11, 2, 2, '20220927TSOLCPAKN', '2022-05-14', 'Kapandayan Kec Ciawigebang', '2', NULL, '25000', '35000', '10000', 2, 1, 0, 'Firmansyah', NULL, 'Daftar_buku2.png', 'Heri', NULL),
(12, 2, 2, '20220928HNARYFFXI', '2022-05-28', 'Kapandayan Kec. Ciawigebang', '1', NULL, '75000', '85000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(33, 1, 2, '20221004DP48SEPYY', '2022-05-17', 'Ciporang Kuningan', '2', NULL, '34900', '44900', '10000', 2, 1, 0, 'Anisa', NULL, '4216373502f942583bdef2a020035f84.jpg', 'Heri', NULL),
(34, 1, 1, '20221004ZBFLAAMWH', '2022-05-19', 'Ciporang Kuningan Jawa Barat', '1', NULL, '25000', '30000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(35, 5, 1, '20221004WO2TDUF7H', '2022-05-21', 'Cibingbin', '1', NULL, '25000', '30000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(36, 6, 2, '20221004EWWDRST0V', '2022-05-21', 'Ciomas Kab. Kuningan', '2', NULL, '220000', '230000', '10000', 2, 1, 0, 'Aan Maulana', NULL, '4216373502f942583bdef2a020035f841.jpg', 'Heri', NULL),
(37, 9, 1, '20221004AC314WYRI', '2022-05-22', 'Kapandayan Kec Ciawigebang', '1', NULL, '32500', '37500', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(38, 9, 2, '20221004BA4GDZRQN', '2022-05-22', 'Kapandayan Kec. Ciawigebang ', '2', NULL, '53000', '63000', '10000', 2, 1, 0, 'Yaya', NULL, '4216373502f942583bdef2a020035f842.jpg', 'Heri', NULL),
(39, 11, 2, '20221004BPHDZCJON', '2022-05-24', 'Kalimanggis', '1', NULL, '8500', '18500', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(40, 12, 1, '20221004ITUVK6THY', '2022-05-26', 'Kapandayan Kuningan', '2', NULL, '32500', '37500', '5000', 2, 1, 0, 'Neneng', NULL, '4216373502f942583bdef2a020035f843.jpg', 'Heri', NULL),
(41, 12, 1, '20221004D847VMHMA', '2022-05-27', 'Kapandayan Kuningan', '1', NULL, '46000', '51000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(42, 8, 1, '202210047O2EDTKTB', '2022-05-31', 'Pagundan ', '2', NULL, '37000', '42000', '5000', 2, 1, 0, 'Handi ', NULL, '4216373502f942583bdef2a020035f844.jpg', 'Heri', NULL),
(43, 8, 1, '20221004WJNBJGT0H', '2022-06-02', 'Pagundan', '2', NULL, '18500', '23500', '5000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(44, 19, 1, '20221004KB4RFQQ2D', '2022-06-02', 'Kojengkang Kuningan', '1', NULL, '20000', '25000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(45, 19, 1, '20221004A81QVDT9C', '2022-06-04', 'Kojengkang Kuningan', '1', NULL, '10500', '15500', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(46, 7, 1, '20221004LAXQOR9UE', '2022-06-04', 'Maleber ', '1', NULL, '19000', '24000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(47, 13, 1, '20221004FA0OEQ5CI', '2022-06-05', 'Kapandayan Kec Ciawigebang', '1', NULL, '38500', '43500', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(48, 10, 1, '20221004EUKCTXXM8', '2022-06-05', 'Kojengkang', '1', NULL, '42900', '47900', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(49, 10, 1, '202210040XLVUD75H', '2022-06-07', 'Kojengkang', '2', NULL, '26000', '31000', '5000', 2, 1, 0, 'Ade Rusdi', NULL, '4216373502f942583bdef2a020035f845.jpg', 'Heri', NULL),
(50, 20, 2, '202210049BTVZUSX2', '2022-06-08', 'Kapandayan Ciawigebang', '2', NULL, '37000', '47000', '10000', 2, 1, 0, 'Dudung A.J', NULL, '4216373502f942583bdef2a020035f846.jpg', 'Heri', NULL),
(51, 20, 1, '20221004MBQ8ZUG13', '2022-06-08', 'Kapandayan Ciawigebang', '2', NULL, '46900', '51900', '5000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(52, 24, 1, '20221004DXYGS5VO0', '2022-06-11', 'Ciawigebang Kuningan', '1', NULL, '80000', '85000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(53, 24, 1, '20221004O1AYWJICH', '2022-06-13', 'Ciawigebang Kuningan', '1', NULL, '78600', '83600', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(54, 24, 2, '20221004ZWSEFARJO', '2022-06-14', 'Ciawigebang Kuningan', '1', NULL, '74000', '84000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(55, 14, 2, '20221004RKWMYZXJT', '2022-06-15', 'Maleber', '2', NULL, '46500', '56500', '10000', 2, 1, 0, 'Fauziah', NULL, '4216373502f942583bdef2a020035f847.jpg', 'Heri', NULL),
(56, 16, 1, '20221004OMZM1ADWK', '2022-06-15', 'Ciawigebang', '1', NULL, '52250', '57250', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(57, 16, 1, '20221004WMNDURCTB', '2022-06-17', 'Ciawigebang', '2', NULL, '48500', '53500', '5000', 2, 1, 0, 'Jeni J', NULL, '4216373502f942583bdef2a020035f848.jpg', 'Heri', NULL),
(58, 18, 2, '20221004ZLC3M872I', '2022-06-18', 'Ciomas Kec Ciawigebang', '2', NULL, '43000', '53000', '10000', 3, 1, 0, 'Ojah', NULL, '4216373502f942583bdef2a020035f849.jpg', 'Heri', NULL),
(59, 21, 1, '20221004JIGTEL7OY', '2022-06-20', 'Pagundan', '1', NULL, '18500', '23500', '5000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(60, 21, 2, '20221004KFEPJKBDU', '2022-06-21', 'Pagundan', '2', NULL, '79000', '89000', '10000', 3, 1, 0, 'Andi S', NULL, '4216373502f942583bdef2a020035f8410.jpg', 'Heri', NULL),
(61, 22, 1, '20221004G7TSPZ9FE', '2022-06-24', 'Kapandayan Ciawi', '1', NULL, '138500', '143500', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(62, 17, 2, '20221004PRIXV8BKB', '2022-06-26', 'Pangkalan', '2', NULL, '50000', '60000', '10000', 1, 1, 0, 'Ida H', NULL, '4216373502f942583bdef2a020035f8411.jpg', NULL, NULL),
(63, 17, 2, '20221004PHMNGWKBV', '2022-06-27', 'Pangkalan', '2', NULL, '18500', '28500', '10000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(64, 2, 2, '20221004FBNX1YPTG', '2022-06-27', 'Pagundan ', '2', NULL, '85500', '95500', '10000', 0, 1, 0, 'Iman', NULL, '4216373502f942583bdef2a020035f8430.jpg', NULL, NULL),
(65, 23, 2, '20221004CGMKYEEZX', '2022-07-01', 'Pangkalan', '1', NULL, '28500', '38500', '10000', 1, 0, 0, NULL, NULL, NULL, NULL, NULL),
(66, 23, 2, '20221004T2OXWU75F', '2022-07-02', 'Pangkalan', '1', NULL, '35000', '45000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(67, 1, 2, '20221004PRW9UNPOX', '2022-07-03', 'Ciporang', '2', NULL, '29000', '39000', '10000', 2, 1, 0, 'anisa', NULL, '4216373502f942583bdef2a020035f8413.jpg', 'Heri', NULL),
(68, 25, 2, '20221004LFS8T6XW1', '2022-07-03', 'Pangkalan', '1', NULL, '18500', '28500', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(69, 15, 1, '20221004QLDSWZJO1', '2022-07-04', 'Ciawigebang', '1', NULL, '60000', '65000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(70, 44, 1, '20221004YVJNUWUSH', '2022-07-04', 'Cijoho', '2', NULL, '40500', '45500', '5000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(71, 43, 2, '20221004S5N0V3UEC', '2022-07-04', 'Kuningan', '2', NULL, '384000', '394000', '10000', 3, 1, 0, 'Yanto', NULL, '4216373502f942583bdef2a020035f8414.jpg', 'Heri', NULL),
(72, 46, 2, '20221004XGMWLIA3E', '2022-07-05', 'Cimindi', '2', NULL, '34500', '44500', '10000', 2, 1, 0, 'Mamat', NULL, '4216373502f942583bdef2a020035f8415.jpg', 'Heri', NULL),
(73, 47, 1, '20221004XWYO6ZDVP', '2022-07-06', 'Luragung', '1', NULL, '257000', '262000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(74, 52, 2, '20221004QGRC1POGU', '2022-07-07', 'Cijoho', '2', NULL, '16000', '26000', '10000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(75, 37, 1, '20221004N8F6EJJCY', '2022-07-07', 'Pamijahan', '2', NULL, '324000', '329000', '5000', 3, 1, 0, 'Heri', NULL, '4216373502f942583bdef2a020035f8416.jpg', 'Heri', NULL),
(76, 53, 2, '20221004DJELB9HHS', '2022-07-09', 'Oleced', '1', NULL, '18500', '28500', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(77, 48, 1, '20221004RAXSQBNPS', '2022-07-11', 'Cimaranten', '1', NULL, '29000', '34000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(78, 54, 1, '202210047FNUKVYMT', '2022-07-11', 'Cihaur ', '1', NULL, '102700', '107700', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(79, 45, 1, '20221004QJXWMKE7E', '2022-07-14', 'Cigugur', '2', NULL, '86500', '91500', '5000', 2, 1, 0, 'Misdah', NULL, '4216373502f942583bdef2a020035f8417.jpg', 'Heri', NULL),
(80, 49, 2, '20221004SRF7LV0EC', '2022-07-17', 'Kalimanggis', '1', NULL, '19000', '29000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(81, 56, 1, '20221004SBTMYD8KP', '2022-07-19', 'Cidahu', '1', NULL, '37800', '42800', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(82, 60, 1, '20221004L1P03RFAM', '2022-07-19', 'Cijoho', '2', NULL, '34000', '39000', '5000', 2, 1, 0, 'M.ali', NULL, '4216373502f942583bdef2a020035f8418.jpg', 'Heri', NULL),
(83, 57, 1, '20221004RKIKDL5D6', '2022-07-22', 'Cimindi', '1', NULL, '61000', '66000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(84, 62, 2, '20221004GVR5NO4EV', '2022-07-24', 'Sindangagung', '2', NULL, '96000', '106000', '10000', 2, 1, 0, 'Jajang', NULL, '4216373502f942583bdef2a020035f8419.jpg', 'Heri', NULL),
(85, 50, 2, '20221004EKTXQUWBR', '2022-07-25', 'Maleber', '2', NULL, '43000', '53000', '10000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(86, 55, 2, '20221004R2HZLPXHD', '2022-07-26', 'Kuningan', '2', NULL, '19900', '29900', '10000', 2, 1, 0, 'Kusnadi', NULL, '4216373502f942583bdef2a020035f8420.jpg', 'Heri', NULL),
(87, 51, 1, '20221004QGF4RIZWN', '2022-07-29', 'Geresik', '2', NULL, '56000', '61000', '5000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(88, 61, 2, '20221004VWXWZ1RFY', '2022-07-31', 'Kapandayan', '1', NULL, '64000', '74000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(89, 58, 1, '20221004DTWBTDVMC', '2022-07-31', 'Luragung', '1', NULL, '20000', '25000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(90, 59, 2, '20221004NL2RCVBJR', '2022-08-01', 'Ciomas', '2', NULL, '111000', '121000', '10000', 2, 1, 0, 'Enok ', NULL, '4216373502f942583bdef2a020035f8421.jpg', 'Heri', NULL),
(91, 35, 2, '202210046YBU4ZKAX', '2022-08-04', 'Ciputat', '2', NULL, '29000', '39000', '10000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(92, 35, 2, '202210046YBU4ZKAX', '2022-08-04', 'Ciputat', '2', NULL, '29000', '39000', '10000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(93, 36, 1, '20221004H0SW2IPO4', '2022-08-09', 'Pangkalan', '2', NULL, '27000', '32000', '5000', 2, 1, 0, 'Mulyadi', NULL, '4216373502f942583bdef2a020035f8422.jpg', 'Heri', NULL),
(94, 26, 2, '20221004SV21D8F3W', '2022-08-11', 'Ciawigebang', '2', NULL, '43000', '53000', '10000', 2, 1, 0, 'Alif', NULL, '4216373502f942583bdef2a020035f8423.jpg', 'Heri', NULL),
(95, 26, 2, '20221004SMU3PYECX', '2022-08-11', 'Ciawigebang', '1', NULL, '22000', '32000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(96, 27, 1, '20221004NVGQPWMKA', '2022-08-12', 'Ciawigebang', '1', NULL, '240000', '245000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(97, 38, 1, '202210044APMH0SDE', '2022-08-14', 'Kapandayan', '1', NULL, '29000', '34000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(98, 38, 1, '202210040NEJENGSC', '2022-08-14', 'Kapandayan', '1', NULL, '42000', '47000', '5000', 3, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(99, 40, 1, '20221004WEMLYTUBN', '2022-08-16', 'Ciawigebang', '2', NULL, '83500', '88500', '5000', 3, 1, 0, 'Nurul', NULL, '4216373502f942583bdef2a020035f8424.jpg', 'Heri', NULL),
(100, 39, 2, '20221004UXVD2UD6M', '2022-08-16', 'Pamijahan', '2', NULL, '68000', '78000', '10000', 2, 1, 0, 'Mumun', NULL, '4216373502f942583bdef2a020035f8425.jpg', 'Heri', NULL),
(101, 29, 2, '20221004UEX8JRK1D', '2022-08-18', 'Ciomas', '2', NULL, '115250', '125250', '10000', 2, 1, 0, 'Daffa', NULL, '4216373502f942583bdef2a020035f8426.jpg', 'Heri', NULL),
(102, 32, 2, '20221004HV7OTLDNV', '2022-08-19', 'Ciomas', '1', NULL, '37000', '47000', '10000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(103, 30, 2, '20221004UD26IJL3K', '2022-08-24', 'Pagundan', '2', NULL, '74000', '84000', '10000', 2, 1, 0, 'Robi', NULL, '4216373502f942583bdef2a020035f8427.jpg', 'Heri', NULL),
(104, 41, 2, '20221004MW8FSTVP9', '2022-08-26', 'Ciawigebanf', '2', NULL, '250000', '260000', '10000', 2, 1, 0, 'Ria R', NULL, '4216373502f942583bdef2a020035f8428.jpg', 'Heri', NULL),
(105, 34, 1, '202210045LDAGBNQI', '2022-08-26', 'Kapandayan', '1', NULL, '58500', '63500', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(106, 34, 1, '20221004FQYCZ3ZJT', '2022-08-28', 'Kapandayan', '1', NULL, '17000', '22000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(107, 28, 2, '20221004VYKE87CTV', '2022-08-29', 'Ciawigebang', '2', NULL, '25500', '35500', '10000', 2, 1, 0, 'Alfin', NULL, '4216373502f942583bdef2a020035f8429.jpg', 'Heri', NULL),
(108, 33, 1, '20221004O5ZSMQGXM', '2022-08-30', 'Kapandayan', '1', NULL, '45000', '50000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(109, 31, 1, '20221004MZH3OUNFK', '2022-08-30', 'Karoya', '1', NULL, '66000', '71000', '5000', 2, 0, 0, NULL, NULL, NULL, 'Heri', NULL),
(110, 2, 1, '20221005JWNRVXLDV', '2022-10-05', 'Pagundan', '1', NULL, '50000', '55000', '5000', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(111, 40, 1, '20221005DEFNKSWLK', '2022-10-05', 'Ciawigebang', '2', NULL, '83000', '88000', '5000', 0, 1, 0, 'Nurul', NULL, '4216373502f942583bdef2a020035f8431.jpg', NULL, NULL),
(112, 37, 1, '20221005ZGQK8XSQP', '2022-10-05', 'Pamijahan', '1', NULL, '34000', '39000', '5000', 1, 0, 0, NULL, NULL, NULL, NULL, NULL),
(113, 43, 2, '20221005KN8M1Q6YZ', '2022-10-05', 'Kuningan', '2', NULL, '74000', '84000', '10000', 2, 1, 0, 'Yanto', NULL, '4216373502f942583bdef2a020035f8432.jpg', 'Heri', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'ADMIN', 'admin', 'admin', 1),
(2, 'Pemilik', 'pemilik', 'pemilik', 2),
(3, 'kasir', 'kasir', 'kasir', 3);

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id_warna` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id_warna`, `id_produk`, `warna`) VALUES
(1, 6, 'Hitam'),
(2, 6, 'Merah'),
(3, 5, 'Merah'),
(4, 7, 'Hitam matte'),
(5, 8, 'Biru'),
(6, 9, 'Merah'),
(7, 10, 'Biru Glossy'),
(8, 11, 'Hitam'),
(9, 12, 'Hitam'),
(11, 14, 'Hitam'),
(12, 14, 'Kuning'),
(13, 14, 'Biru'),
(14, 14, 'Hijau'),
(15, 14, 'Putih'),
(16, 14, 'Abu - abu'),
(17, 13, 'Hitam'),
(18, 13, 'Kuning'),
(19, 13, 'Biru'),
(20, 13, 'Orange'),
(21, 12, 'Gold'),
(22, 12, 'Merah'),
(23, 8, 'Kuning'),
(24, 8, 'Hijau'),
(25, 8, 'Ungu'),
(26, 6, 'Whitte Doff'),
(27, 6, 'Orange'),
(28, 6, 'Kuning'),
(29, 10, 'Kuning Glossy'),
(30, 10, 'Merah Glossy'),
(31, 10, 'Putih Glossy'),
(32, 9, 'Biru'),
(33, 9, 'Kuning'),
(34, 1, 'Hijau'),
(37, 4, 'Biru'),
(38, 2, 'Merah'),
(39, 3, 'Biru-Hitam'),
(40, 1, 'Merah'),
(42, 15, 'Black'),
(44, 16, 'Ungu'),
(45, 16, 'Hitam'),
(46, 16, 'Biru'),
(47, 16, 'Merah'),
(48, 17, 'Biru-putih'),
(49, 17, 'Hitam'),
(50, 17, 'Merah'),
(51, 17, 'Merah-Putih'),
(53, 18, 'Merah'),
(54, 18, 'Biru'),
(55, 18, 'Hitam'),
(56, 18, 'Putih'),
(57, 18, 'Pink'),
(59, 19, 'Orange'),
(60, 19, 'Merah'),
(61, 19, 'Biru'),
(62, 19, 'Kuning'),
(63, 20, 'Biru-putih'),
(64, 21, 'Putih'),
(65, 22, 'Hitam'),
(66, 23, 'Biru'),
(67, 24, 'Merah'),
(68, 25, 'Merah-Hitam'),
(69, 26, 'Rainbow'),
(70, 27, 'Default'),
(71, 28, 'Hijau-neon'),
(72, 29, 'Hitam'),
(73, 30, 'Hitam'),
(74, 31, 'Merah-Hitam'),
(75, 32, '0'),
(76, 33, 'Orange'),
(77, 34, 'Default'),
(78, 35, 'Hijau-neon'),
(79, 36, 'Pink'),
(80, 37, 'Putih-Cream'),
(81, 38, 'Tosca'),
(82, 39, 'Putih'),
(83, 40, 'Merah'),
(84, 41, 'Ungu'),
(85, 42, 'Biru-Merah'),
(86, 43, 'Default'),
(87, 44, 'Default'),
(88, 45, 'Default'),
(89, 46, 'Orange'),
(90, 47, 'Biru'),
(91, 48, 'Biru'),
(92, 49, 'Default'),
(93, 50, 'Putih'),
(94, 51, 'Default'),
(95, 52, 'Hitam'),
(96, 53, 'Gold'),
(97, 54, 'Hitam'),
(98, 55, 'Default'),
(99, 56, 'Hitam'),
(100, 57, 'Hitam'),
(101, 58, 'Hitam'),
(102, 59, 'Orange'),
(103, 60, 'Hitam'),
(104, 61, 'Putih'),
(105, 62, 'Merah'),
(106, 63, 'Hitam - Merah'),
(107, 64, 'Hitam '),
(108, 62, 'Biru'),
(109, 62, 'Kuning'),
(110, 61, 'Hitam'),
(111, 61, 'Silver'),
(112, 61, 'Hitam semi doff'),
(113, 61, 'Gold'),
(114, 61, 'Kuning'),
(115, 60, 'Biru'),
(116, 60, 'Hijau'),
(117, 60, 'Orange'),
(118, 60, 'Merah'),
(119, 57, 'Merah'),
(120, 57, 'Biru'),
(121, 56, 'Putih'),
(122, 53, 'Merah'),
(123, 53, 'Biru'),
(124, 52, 'Putih'),
(125, 52, 'Merah'),
(126, 52, 'Biru'),
(127, 50, 'Merah'),
(128, 50, 'Kuning'),
(129, 50, 'Biru'),
(130, 48, 'Merah'),
(131, 47, 'Merah'),
(132, 47, 'Gold'),
(133, 46, 'Ungu'),
(134, 46, 'Orange'),
(135, 41, 'Hijau'),
(136, 41, 'Merah'),
(137, 41, 'Abu Tua'),
(138, 41, 'Silver'),
(139, 41, 'Coffe'),
(140, 39, 'Hijau'),
(141, 39, 'Merah'),
(142, 38, 'Hijau-neon'),
(143, 38, 'Merah-Abu'),
(144, 36, 'Merah'),
(145, 36, 'Kuning'),
(146, 36, 'Biru'),
(147, 35, 'Merah'),
(148, 35, 'Abu - abu'),
(149, 33, 'Merah-Putih'),
(150, 33, 'Merah-Hitam'),
(151, 30, 'Putih'),
(152, 29, 'Merah'),
(153, 28, 'Silver'),
(154, 28, 'Rainbow'),
(155, 25, 'Putih-abu'),
(156, 24, 'Hijau'),
(157, 24, 'Biru'),
(158, 24, 'abu-merah'),
(159, 23, 'Hijau'),
(160, 23, 'Hitam'),
(161, 23, 'Merah'),
(162, 22, 'Merah'),
(163, 22, 'Pink'),
(164, 22, 'Putih'),
(165, 21, 'Tosca tua'),
(166, 21, 'Merah'),
(167, 21, 'Gold'),
(168, 21, 'Rainbow'),
(169, 20, 'Merah-Hitam'),
(170, 20, 'Hijau-neon'),
(171, 20, 'Abu-Orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `riview`
--
ALTER TABLE `riview`
  ADD PRIMARY KEY (`id_riview`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4449;

--
-- AUTO_INCREMENT for table `riview`
--
ALTER TABLE `riview`
  MODIFY `id_riview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

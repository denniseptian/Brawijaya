-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2016 pada 09.08
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_brawijaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `count`
--

CREATE TABLE `count` (
  `total` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `count`
--

INSERT INTO `count` (`total`) VALUES
(64);

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `filename` varchar(64) NOT NULL,
  `subject` text NOT NULL,
  `path` varchar(64) NOT NULL,
  `dateinsert` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id_file`, `filename`, `subject`, `path`, `dateinsert`) VALUES
(14234, 'ini data penting perusahaan', 'data ini berupa data mentah', '//ad//ad//', '2016-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imagefullname` varchar(32) NOT NULL,
  `imagepath` varchar(64) NOT NULL,
  `grups` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `imagefullname`, `imagepath`, `grups`) VALUES
(453, '', '', 'Nature'),
(2134, '', '', 'malang'),
(7349, '', '0', ''),
(7833, '', '0', ''),
(11232, '', '0', ''),
(13064, '', '0', ''),
(15373, '', '0', ''),
(21702, '', '0', ''),
(23201, '', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indexpost`
--

CREATE TABLE `indexpost` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `content` text NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `indexpost`
--

INSERT INTO `indexpost` (`id_post`, `id_user`, `title`, `subject`, `date`, `duration`, `content`, `task`) VALUES
(190, 0, 'boah', 'hyahahahah', '2016-05-17', 34, 'asd', 'sdbb'),
(4979, 0, 'ayo berkelana', 'kepanjen', '2016-05-17', 33, 'Dalam date terdapat beberapa format penulisan untuk¬†mengambil tanggal. Berikut adalah format penulisan karakter untuk tanggal :\r\n\r\nd – Menampilkan¬†tanggal sekarang (01-31)\r\nm – Menampilkan bulan sekarang dalam angka¬†(01-12)\r\nY – Menampilkan tahun (dalam empat digit)\r\nl (huruf kecil ‘L’) – menampilkan nama¬†hari sekarang\r\nKarakter lain, seperti “/”, atau “.” “-” Juga dapat disisipkan di antara karakter untuk menambahkan format tambahan. Perhatikan contoh penulisan PHP berikut ', 'Dalam date terdapat beberapa format penulisan untuk¬†mengambil tanggal. Berikut adalah format penulisan karakter untuk tanggal :\r\n\r\nd – Menampilkan¬†tanggal sekarang (01-31)\r\nm – Menampilkan bulan sekarang dalam angka¬†(01-12)\r\nY – Menampilkan tahun (dalam empat digit)\r\nl (huruf kecil ‘L’) – menampilkan nama¬†hari sekarang\r\nKarakter lain, seperti “/”, atau “.” “-” Juga dapat disisipkan di antara karakter untuk menambahkan format tambahan. Perhatikan contoh penulisan PHP berikut '),
(7813, 0, 'Ali', 'Ndelok youtube', '2016-05-19', 100, 'Youtube.com', 'sekarang lagi liahat Dotaru'),
(12353, 0, 'sfsdf', 'sdfsdf', '2016-05-19', 78, 'assadff', 'sdfsdf'),
(14616, 0, 'hellooooo', 'Ngosing lagiii', '2016-05-17', 23, 'I want to set a default value for my html <textarea>. I read from a material that to add default value you have to do something like <textarea>This is default text</textarea>. I did that but it doesn''t work. What''s the right thing to do?', 'function __construct() {\r\n    $this->load->library(''file'');\r\n    $this->load->helper(''string'');\r\n}\r\n\r\nfunction trackVisit(){\r\n    $file= read_file(''./visits.txt'');\r\n\r\n\r\n\r\n    if ( ! write_file(''./visits.txt'', $file))\r\n    {\r\n        echo ''Unable to write the file'';\r\n    }\r\n\r\n}'),
(15880, 0, 'cara-menggunakan-github-dan-meng', 'cara upload', '2016-05-19', 4, 'Pada kesempatan kali ini saya akan menjelaskan cara menggunakan GitHub, sebelumnya apa itu GitHub.?? GitHub adalah tempat upload project - project opensource dimana project tersebut bisa dikembangkan oleh programmer lain, hal ini baik sekali bila kita memilki project dengan sebuah team bisa dikatakan juga sosial medianya programmer hehehehe :D . Kelebihan github adalah ketika kita membuat sebuah repository project kemudian menguploadnya lalu kita membuat perubahan ata penambahan pada project itu dan di upload ulang ke repository itu maka project yang lama masih di simpan dan tidak akan hilang, jadi kita bisa membuat versi - versi dari project yang kita buat dan hal ini sangat memudahkan kita bila kita ingin ke versi sebelumnya. ', 'Oke langsung ke permasalahan yaitu bagaimana cara upload file ke repository GitHub yang kita miliki di windows (saya pakai windows7 akan lebih mudah lagi kalau memakai linux).\r\nPerangkat yang di gunakan\r\nAkun GitHub, Untuk upload project ke GitHub tentunya kita harus memilki akaun GitHub, caranya langsung buat akun di websitenya https://github.com kemudian daftar.\r\nSofware Git, Untuk sofware ini anda bisa download secara gratis di http://git-scm.com/ , kalo sudah di download silahkan anda install.'),
(21255, 0, 'asd', 'asdasd', '2016-05-18', 0, 'sdfsdf', 'sdfsdf'),
(24070, 0, 'asdasd', 'sadasdad', '2016-05-19', 90, 'sadfsdf', 'sdfsdf'),
(31252, 0, 'adasd', 'qwer', '2016-05-19', 89, 'sfsdf', 'swdfsdf'),
(31427, 0, 'sdfsdf', 'sdfsdf', '2016-05-19', 78, 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_log`
--

CREATE TABLE `login_log` (
  `id_log` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` time NOT NULL,
  `ip_address` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_log`
--

INSERT INTO `login_log` (`id_log`, `date`, `id_user`, `time`, `ip_address`) VALUES
('-972393150', '2016-05-20', 123, '05:59:54', ''),
('1', '2016-05-13', 123, '00:00:01', ''),
('11654', '2016-05-20', 123, '05:53:42', ''),
('1221393745', '2016-05-21', 123, '09:03:20', '::1'),
('1227069017', '2016-05-22', 123, '11:54:15', '::1'),
('1255261539', '2016-05-22', 123, '11:52:43', '::1'),
('1256500966', '2016-05-22', 123, '11:45:28', '::1'),
('1256969458', '2016-05-21', 123, '01:52:48', ''),
('1257959813', '2016-05-20', 123, '06:01:12', ''),
('1262152517', '2016-05-23', 123, '08:05:46', '::1'),
('1266315569', '2016-05-21', 123, '12:53:02', ''),
('1276711339', '2016-05-21', 123, '11:11:43', '::1'),
('1293654132', '2016-05-21', 123, '01:44:35', ''),
('1300296039', '2016-05-22', 123, '11:40:40', '::1'),
('1302146284', '2016-05-20', 123, '06:13:18', ''),
('1305597704', '2016-05-23', 123, '03:02:28', '::1'),
('1338285373', '2016-05-22', 123, '01:28:27', '::1'),
('1355672936', '2016-05-22', 123, '11:51:01', '::1'),
('1374750627', '2016-05-22', 123, '02:10:04', '::1'),
('1376838084', '2016-05-21', 123, '11:54:41', '::1'),
('1386854316', '2016-05-22', 123, '12:14:08', '::1'),
('1392938777', '2016-05-21', 123, '01:07:39', ''),
('1394154484', '2016-05-21', 123, '02:01:35', '::1'),
('1395660773', '2016-05-22', 123, '11:56:33', '::1'),
('1407331552', '2016-05-22', 123, '01:36:01', '::1'),
('1407408646', '2016-05-22', 123, '02:10:41', '::1'),
('1409851919', '2016-05-22', 123, '12:17:43', '::1'),
('2', '2016-05-20', 123, '00:00:01', ''),
('21150', '2016-05-20', 123, '05:53:34', ''),
('23', '2016-05-20', 123, '05:54:46', ''),
('2325235', '2016-05-20', 123, '18:47:45', ''),
('3', '2016-05-20', 123, '00:00:01', ''),
('4784fa57857cba8483e05c226898320e', '2016-05-24', 123, '01:41:59', '::1'),
('5345534', '2016-05-20', 123, '07:30:18', ''),
('6', '2016-05-20', 123, '05:45:16', ''),
('7', '2016-05-20', 123, '05:44:53', ''),
('9554278', '2016-05-20', 123, '05:55:37', ''),
('b9a1a8efdda702a9f9406c123b9c5593', '2016-05-24', 123, '01:17:09', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `u_name` varchar(32) NOT NULL,
  `u_passwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `u_name`, `u_passwd`) VALUES
(123, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `date` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`date`, `total`) VALUES
('2016-03-07', 90000),
('2016-04-22', 900),
('2016-05-05', 210),
('2016-05-17', 100),
('2016-05-19', 10),
('2016-05-20', 9),
('2016-05-21', 41),
('2016-05-22', 2),
('2016-05-24', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`total`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexpost`
--
ALTER TABLE `indexpost`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`date`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login_log`
--
ALTER TABLE `login_log`
  ADD CONSTRAINT `login_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

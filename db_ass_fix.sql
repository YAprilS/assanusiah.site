-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2020 at 11:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13890961_db_ass`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text DEFAULT NULL,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(41, 'KH. Muhammad Sanusi Al-Babakani (1904 – 1974) (1) - SILSILAH DAN KELAHIRAN', '<p>Kiai Muhammad Sanusi merupakan salah seorang ulama besar yang berasal dari Cirebon. Meskipun beliau telah lama wafat, pengaruh dan jasa-jasanya masih membekas dan diamalkan oleh banyak orang hingga sekarang. Ia dikenal sebagai seorang ulama yang sangat &lsquo;alim-allamah dan zuhud. Hampir tidak ada seorang pun khususnya di Jawa Barat yang tidak mengenal sosok Kiai Muhammad Sanusi. Kiai Muhammad Sanusi bernama asli Markab, lahir di Desa Winduhaji, Kuningan &ndash; Jawa Barat pada malam jum&rsquo;at 12 Rabi&rsquo;ul awal 1322 H, bertepatan dengan 12 Januari 1904 M dari pasangan Kiai Agus Ma&rsquo;ani bin Kiai Aki Natakariya dengan Ibu Nyai Asnita binti Kuwu Kiai Kauri.<br />\r\n<br />\r\nKH. Muhammad Sanusi yang biasa disapa &ldquo;Mbah&rdquo; merupakan anak ke tiga dari tujuh bersaudara. Adapun saudara-saudaranya antara lain Aminah (meninggal dunia saat usia 8 tahun), Mir&rsquo;ati (meninggal dunia saat berusia 6 tahun), Sarpan (Abdur Rahim), Zaenab, Suknasih, Kasem (meninggal dunia saat usia 7 hari). Sedangkan saudara yang se-ayah lain ibu, adalah Kun&rsquo;ah dan Saodah (meninggal dunia saat usia 5 tahun).<br />\r\n<br />\r\nTidak banyak riwayat hidup Mbah yang bisa diungkap pada masa kecilnya, kecuali ada beberapa catatan beliau yang menjelaskan bahwa ketika umur 4 tahun pernah terjatuh dari bangku ketika hendak mengambil genting. Umur 6 tahun terserang penyakit panas,dan karena panasnya yang sangat hebat itulah sang ibu bernadzar jika sembuh akan berziarah ke makam Nyai Manis Kuningan.</p>\r\n', 'ac4221ac982e0e20d4d70e413fe63e46.jpg', '2020-07-22 04:51:44'),
(42, 'KH. Muhammad Sanusi Al-Babakani (2)  - SEBAGAI ULAMA PEJUANG', '<p>Pada zaman perjuangan merebut kemerdekaan, andil Mbah sangatlah besar. Terutama dalam pengadaan bidang logistik dan persenjataan. Mbah banyak mengirim pedang panjang, bambu runcing, dan keris kepada para santinya serta pasukan Hizbullah. Tak hanya itu, Mbah juga banyak merekrut para pemuda untuk ikut berjuang melawan penjajahan. Bahkan pernah diceritakan bahwa Hadratussyaikh KH. M. Hasyim &lsquo;Asy&rsquo;ari bersama Bung Tomo di Surabaya tidak akan menyatakan perang sebelum mendapat restu dari ulama Cirebon, salah-satunya KH. Muhammad Sanusi. Mbah-lahyang mencetuskan resolusi jihad bersama KH. M. Hasyim Asy&rsquo;ari dan ikut bertempur bersama Bung Tomo.<br />\r\n<br />\r\nMbah pun sudah sering keluar-masuk penjara karena hal itu. Perlakukan kurang manusiawi dilakukan para pemberontak terhadap Mbah. Pukulan dengan gagang senapan laras panjang kerap kali diterima Mbah. Akibatnya, Mbah agak sedikit condong bila berjalan.</p>\r\n', '79afc967d0505d91d48575796959aca5.jpg', '2020-07-22 04:52:31'),
(43, 'KH. M. Sanusi (3) - SASTRAWAN DAN PENULIS', '<p>Kitabul Adab fii durusi Al-Awwaliyah fii Al-Akhlaqil Mardhiyah&rdquo; Bahasa Jawa ini berisi tentang tata krama murid terhadap guru, anak terhadap orang tua, rakyat terhadap pemerintah, tatakrama orang mencari ilmu, tatakrama persahabatan(pergaulan), tatakrama seseorang terhadap dirinya sendiri dan masih banyak lainnya seputar adab;&nbsp;<br />\r\n<br />\r\n&ldquo;Tanwiir Al-Qulub&rdquo;&nbsp;yang berupa sya&rsquo;ir berbahasa Jawa tentang aqidah, menjelaskan tentang Ahlu Sunnah wal Jama&rsquo;ah, surga dan neraka, tauhid, malaikat dan sebagainya;&nbsp;&ldquo;Sya&rsquo;ir Wasiat&rdquo;&nbsp;, berisi tentang tuntunan untuk mencari ilmu yang benar;&nbsp;<br />\r\n<br />\r\n&ldquo;Kitabu At-Tabsyiru wa At-Takhdziru&rdquo;&nbsp;berbahasa Jawa pegon yang mengupas kejadian-kejadian di akhirat seperti nikmat kubur, azab kubur, hisab, syafaat, haudh, dlan lain-lain;&nbsp;<br />\r\n<br />\r\n&ldquo;Bisyri Al-Anami bi Fadho.ili Al-Hikami As-Shiyami &lsquo;Alaa Madzahibi Al-A&rsquo;immati Al-Arbi&rsquo;atil A&rsquo;lami.&rdquo;&nbsp;Kitab ini berbahasa Arab yang menjelaskan seputar ibadah puasa dan keutamaan-keutamaannya;&nbsp;<br />\r\n<br />\r\n&ldquo;Aronu Kalaami fii Syi&rsquo;ri Al-&lsquo;Ilmi An-Nahwi Billughotil Jawiyah&rdquo;&nbsp;yang berupa syair kitab Jurumiyah Tahriran. Kitab ini ditulis dalam Bahasa Jawa tentang nahwu yang merujuk pada kitab jurumiyah;&nbsp;<br />\r\n<br />\r\n&ldquo;Tadzkirotul Ikhwan&rdquo;&nbsp;yang ditulis dalam bahasa Arab, membahas seputar aqidah-akhlaq;&nbsp;<br />\r\n<br />\r\n&ldquo;Baabu al-Jum&rsquo;ati wa Dzuhri&rdquo;&nbsp;yang ditulis dalam bahasa Arab, membahas seputar syarat, rukun dan sunnah sholat jum&rsquo;at dan dzuhur;&nbsp;<br />\r\n<br />\r\n&ldquo;Kitab Fasolatan&rdquo;, kitab ini membahas seputar do&rsquo;a-do&rsquo;a dan niat sholat wajib dan Sunnah.</p>\r\n', 'a73aeb301f167be184a57a2cb6789c16.jpg', '2020-07-22 04:54:07'),
(44, 'Pesantren Putri Assanusiah 2 Nurul Furqon', '<p>&quot;Pesantren Putri Assanusiah 2 merupakan pengembangan pesantren rintisan Mbah Kiyai Haji Muhammad Sanusi. Assanusiah 2 Mengedepankan pendidikan Akhlaqul Karimah yang menjadi Kunci kehidupan masa depan Santri. Pesantren Putri Assanusiah 2 juga memiliki pilihan program, Yaitu Program Pendalaman Kitab Kuning dan Tahfidzul Qur&#39;an yang bisa dipilih sesuai dengan Minat dan Bakat Santri.&quot;</p>\r\n', '7e3cd501284bb4dc27cf0e083d95dd85.PNG', '2020-07-22 04:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(11) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `nisn`, `nama`, `email`, `nilai1`, `nilai2`, `nilai3`, `total`, `ket`) VALUES
(30, '9985069145', 'Eliya Wati', 'elya@gmail.com', 80, 75, 85, 80, 'lulus'),
(31, '9985069167', 'Ririn Novia', 'ririn@gmail.com', 70, 80, 75, 75, 'lulus'),
(32, '9985069187', 'Syarifah Anissa', 'anis21@gmail.com', 60, 60, 60, 60, 'lulus'),
(33, '9985069199', 'Yodiono', 'yodi11@gmail.com', 50, 55, 60, 55, 'Tidak Lulus'),
(34, '9985069190', 'Novi Kasari', 'novikasari400@gmail.com', 80, 75, 80, 78, 'lulus'),
(35, '9985069102', 'Karin Riguna', 'karinr@gmail.com', 80, 70, 60, 70, 'lulus'),
(36, '9985069111', 'Carkesih', 'carkesih22@gmail.com', 50, 50, 50, 50, 'Tidak Lulus'),
(37, '9985069130', 'Dodi Sutardi', 'dodis@gmail.com', 80, 75, 80, 78, 'lulus'),
(38, '9985069120', 'Julia Savitri', 'julia@gmail.com', 70, 75, 70, 72, 'lulus'),
(39, '9985069106', 'Ginanjar Khaoban', 'gnjr@gmail.com', 90, 80, 95, 88, 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `prestasi` varchar(128) NOT NULL,
  `pelanggaran` varchar(128) NOT NULL,
  `alquran` varchar(128) NOT NULL,
  `spp` varchar(128) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `email`, `nama`, `prestasi`, `pelanggaran`, `alquran`, `spp`, `tgl`) VALUES
(5, 'novikasari400@gmail.com', 'Novi Kasari', 'juara 1 BTQ', 'bolos', 'Juz 12', 'bulan juni lunas', '2020-07-22 05:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(128) NOT NULL,
  `riwayat_sakit` varchar(128) DEFAULT NULL,
  `pendidikan_terakhir` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `pendidikan_ayah` varchar(128) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `pendidikan_ibu` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `alamat_ortu` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `tgl` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nisn`, `nama_lengkap`, `email`, `tempat_lahir`, `tgl_lahir`, `jk`, `riwayat_sakit`, `pendidikan_terakhir`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `alamat_ortu`, `foto`, `tgl`) VALUES
(48, '9985069106', 'Ginanjar Khaoban', 'gnjr@gmail.com', 'sindang', '2020-03-03', 'Laki-Laki', 'tipes', 'SMA/Sederajat', 'Kapid', 'SMA/Sederajat', 'Wiraswasta', 'Ruhaniah', 'SMP/Sederajat', 'Ibu Rumah Tangga', 'Sindang, Indramayu', '53e1a39dfa98e481feccce69509fea5c.jpg', '2020-07-22'),
(49, '9985069120', 'Julia Savitri', 'julia@gmail.com', 'Indramayu', '1999-07-01', 'Perempuan', '', 'SMA/Sederajat', 'Ahmad Sani', 'SD/Sederajat', 'Petani', 'Eva Nurlatifah', 'SD/Sederajat', 'Petani', 'Sindang Kerta, Indramayu', '5bef3d35a8669dbfa192023a453476df.jpg', '2020-07-22'),
(50, '9985069130', 'Dodi Sutardi', 'dodis@gmail.com', 'balongan', '1999-08-10', 'Laki-Laki', '', 'SMA/Sederajat', 'Sutardi', 'SMP/Sederajat', 'Petani', 'Weni Rahayu', 'SMP/Sederajat', 'Petani', 'Balongan, Indramayu', '3dfc197ba1ea06803e66c358e66dbbad.jpg', '2020-07-22'),
(51, '9985069111', 'Carkesih', 'carkesih22@gmail.com', 'Indramayu', '2000-07-02', 'Perempuan', '', 'SMA/Sederajat', 'Ahmad Saepudin', 'SMP/Sederajat', 'Petani', 'Hani Febriani', 'SMP/Sederajat', 'Petani', 'plumbon, Indramayu', '55d9702d6836d38d6a99b592eedcc790.jpg', '2020-07-22'),
(52, '9985069102', 'Karin Riguna', 'karinr@gmail.com', 'bangkir', '1999-06-30', 'Perempuan', '', 'SMA/Sederajat', 'Sutirno', 'SMP/Sederajat', 'Petani', 'Rumini', 'SMP/Sederajat', 'Petani', 'bangkir, indramayu', 'bcee7c34733ed9d3608eb68e7da5517a.jpg', '2020-07-22'),
(53, '9985069190', 'Novi Kasari', 'novikasari400@gmail.com', 'Jatibarang', '1999-03-15', 'Perempuan', '', 'SMA/Sederajat', 'Kadinah', 'SMP/Sederajat', 'Petani', 'Marpuah', 'SD/Sederajat', 'Ibu Rumah Tangga', 'Jatibarang, Indramayu', '36730796939d52f3609a1a7751d8d322.jpg', '2020-07-22'),
(54, '9985069199', 'Yodiono', 'yodi11@gmail.com', 'plumbon', '2000-12-05', 'Laki-Laki', '', 'SMA/Sederajat', 'Ahmad Surono', 'SMP/Sederajat', 'Petani', 'Carsih', 'SMP/Sederajat', 'Petani', 'plumbon, Indramayu', '0c35a5b3de9b9d9c8b58ad09f6394cfc.jpg', '2020-07-22'),
(55, '9985069187', 'Syarifah Anissa', 'anis21@gmail.com', 'penganjang', '2000-02-01', 'Perempuan', '', 'SMA/Sederajat', 'Supandi', 'SMP/Sederajat', 'Nelayan', 'Teti Hartini', 'SD/Sederajat', 'Ibu rumah tangga', 'penganjang, Indramayu', 'dfc83c224dd887e778d41786b5e03aa5.jpg', '2020-07-22'),
(56, '9985069167', 'Ririn Novia', 'ririn@gmail.com', 'Arahan', '2000-02-02', 'Perempuan', '', 'SMA/Sederajat', 'Danawi', 'SMP/Sederajat', 'PNS', 'Maryam', 'SD/Sederajat', 'PNS', 'Arahan, Indramayu', '870ba75d1ba19171ec06a3c8ef9b007f.jpg', '2020-07-22'),
(57, '9985069145', 'Eliya Wati', 'elya@gmail.com', 'pekandangan', '1999-07-03', 'Laki-Laki', 'tipes', 'SMA/Sederajat', 'Kartawi', 'SMP/Sederajat', 'Petani', 'Wenci', 'SD/Sederajat', 'Petani', 'pekandangan, Indramayu', '4f30625c9e99018a2ad642b273e3a642.jpg', '2020-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `filenama` varchar(128) NOT NULL,
  `desk` varchar(128) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `filenama`, `desk`, `tgl`) VALUES
(2, 'Klasifikasi(3).xlsx', 'Hasil Seleksi 2020', '2020-07-22 05:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `date_created`) VALUES
(29, 'Hasan Bisri', 'hasbiehz@gmail.com', '$2y$10$ZpkKseV6HT50kIANaLhN4OvXvGXAsPpmPQWL.LVmw78VjD.WYkjwW', 1, '2020-07-17 06:39:09'),
(33, 'Ginanjar Khaoban', 'gnjr@gmail.com', '$2y$10$KwlDMBie5p.a9CP5PAv0Len5FD1QulY68g1Yfqu9dNigjz3SfbhhK', 2, '2020-07-22 05:40:37'),
(34, 'Julia Savitri', 'julia@gmail.com', '$2y$10$n8Beqhh2Z/97KyDR4JZ.q.GIPpssMCP0x2D8RcFVOMTJTVHP42J5.', 2, '2020-07-22 05:40:55'),
(35, 'Dodi Sutardi', 'dodis@gmail.com', '$2y$10$9xvJVqlu36ZvRNeoD9ggB.SBkQ6rPDu.hoTgzYGa0PnQcfe3uUzci', 2, '2020-07-22 05:41:21'),
(36, 'Karin Riguna', 'karinr@gmail.com', '$2y$10$3LoBKrO/uSRtC/ZShp9.UePmAvpnIkUOc73akAC4l1J95AuDWpjJe', 2, '2020-07-22 05:41:41'),
(37, 'Novi Kasari', 'novikasari400@gmail.com', '$2y$10$4e6/nUmAdqiD1PhXEMzRkeiK.YfXAKlGvoBmqJJ8lt0rRIM5OrMba', 2, '2020-07-22 05:42:30'),
(38, 'Syarifah Anissa', 'anis21@gmail.com', '$2y$10$8A3Lyn9cRO.7/r6N2lu1W.vHQ.HIId7jMfNS/jsopWPAyn/ztie9i', 2, '2020-07-22 05:42:52'),
(39, 'Ririn Novia', 'ririn@gmail.com', '$2y$10$oVrZo5lIhmwiD5w1PZr3j.0HN.Nx4WHMzyeBSZQVs4WDxPxhI.Z9y', 2, '2020-07-22 05:43:14'),
(40, 'Eliya Wati', 'elya@gmail.com', '$2y$10$gY3lDBwB2h6wipMw3hcvjOlUw5QmScuP992CN93bspa/unrgVXlHi', 2, '2020-07-22 05:43:49'),
(41, 'Yogi Apriliani', 'yoghieapriliyani@gmail.com', '$2y$10$PKxb0Q.Fs2yRjoDHP6bPjuMYkOuL4UYBYdNSIXJzjTN6LsThUPvBi', 1, '2020-07-22 05:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

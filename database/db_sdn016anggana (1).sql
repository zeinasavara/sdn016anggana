-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 22 Apr 2021 pada 09.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdn016anggana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `thumbnail`, `judul`, `deskripsi`, `tgl`, `id_user`, `created`, `updated`) VALUES
(6, 'G210414120207.jpeg', 'Test', 'Test', '2021-04-01', 2, '2021-04-14 12:02:07', NULL),
(7, 'G210414120310.jpeg', 'Test 2', 'TEst 2', NULL, 2, '2021-04-14 12:03:10', NULL),
(9, 'G210414121158.jpeg', 'Test 3', 'Konten Baru', NULL, 2, '2021-04-14 12:11:45', NULL),
(10, 'G210414121229.jpeg', 'Test 4', 'Konten Baru', NULL, 2, '2021-04-14 12:12:29', NULL),
(11, 'G210414121451.jpeg', 'Test 5', 'Konten Baru 5', NULL, 2, '2021-04-14 12:14:51', NULL),
(12, 'G210414122405.jpeg', 'Test 6', 'Konten Baru 6', NULL, 2, '2021-04-14 12:24:05', '2021-04-14 12:29:06'),
(13, 'G210414122442.jpeg', 'Test 7', 'Konten 7', NULL, 2, '2021-04-14 12:24:42', NULL),
(14, 'G210414122459.jpeg', 'Test 8', 'Konten 8', NULL, 2, '2021-04-14 12:24:59', NULL),
(15, 'G210414122516.jpeg', 'Test 9', 'Konten 9', NULL, 2, '2021-04-14 12:25:16', NULL),
(16, 'G210414130104.jpeg', 'Test 10', 'Konten Baru 10', '2021-04-21', 1, '2021-04-14 13:01:04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gtk`
--

CREATE TABLE `tb_gtk` (
  `id_gtk` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nip` varchar(64) DEFAULT NULL,
  `jabatan` varchar(64) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `gtk` int(2) NOT NULL COMMENT '1: Guru, 2: Tendik',
  `status` int(2) NOT NULL COMMENT '1: Aktif, 2: Nonaktif',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gtk`
--

INSERT INTO `tb_gtk` (`id_gtk`, `nama`, `nip`, `jabatan`, `foto`, `gtk`, `status`, `created`, `updated`) VALUES
(1, 'Akmar, S.Pd.SD', '198208312008011009', 'Kepala Sekolah', 'GTK210413114403.jpeg', 2, 1, '2021-04-08 14:55:19', '2021-04-13 11:54:24'),
(2, 'Ayu Hisbaeni', NULL, 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-08 17:21:22', '2021-04-12 15:08:14'),
(5, 'Homsatun', '198911092020122015', 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-08 17:27:16', NULL),
(34, 'Suwaryadi', NULL, 'Tenaga Administrasi Sekolah', 'ptk-default.png', 2, 1, '2021-04-12 14:28:51', '2021-04-12 15:13:27'),
(35, 'Arkoma', NULL, 'Guru Mapel', 'GTK210413113002.png', 1, 1, '2021-04-12 14:49:36', '2021-04-13 15:06:21'),
(36, 'Eka Satriani', '198209282008012019', 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-12 14:49:56', '2021-04-12 14:50:34'),
(37, 'Indo Masse', '196803112008012014', 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:47:11', NULL),
(38, 'Khairul Syafei', NULL, 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:47:55', NULL),
(39, 'M. Salim', NULL, 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:48:08', NULL),
(40, 'Miftakul Huda', NULL, 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:48:24', NULL),
(41, 'Muchklasin', NULL, 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:48:46', NULL),
(42, 'Nor Bainah', '196507031994062001', 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:49:06', NULL),
(44, 'Saidil', '197406102008011020', 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:50:01', NULL),
(45, 'Salbiah', '197606152008012036', 'Guru Kelas', 'ptk-default.png', 1, 1, '2021-04-13 11:54:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `kalemik` varchar(128) DEFAULT NULL COMMENT 'Gambar',
  `ekskul` varchar(128) NOT NULL,
  `thumbnail` varchar(128) NOT NULL COMMENT 'Gambar',
  `status` int(2) NOT NULL COMMENT '1: Aktif, 2: Nonaktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `kalemik`, `ekskul`, `thumbnail`, `status`) VALUES
(1, 'Kalender-Akademik.jpg', '', '', 0),
(6, NULL, 'Bahasa Inggris', 'EKSKUL210422045351.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pesan` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profilesekolah`
--

CREATE TABLE `tb_profilesekolah` (
  `id_profilesekolah` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `status` int(2) NOT NULL COMMENT '1: Aktif, 2: Nonaktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profilesekolah`
--

INSERT INTO `tb_profilesekolah` (`id_profilesekolah`, `title`, `description`, `status`) VALUES
(1, 'Tujuan', '<ol>\r\n <li>Terwujudnya peserta didik yang beriman dan bertakwa kepada Tuhan yang Maha Esa dan berakhlah mulia.</li>\r\n <li>Tercapainya semua peserta didik dapat menjalankan ibadah dan membaca kitab suci Alqur an.</li>\r\n <li>Mempertahankan dan meningkatkan peringkat sekolah.</li>\r\n <li>Menjuarai lomba akademik lomba akademik yang diselenggarakan tingkat kecamatan, kabupaten, propinsi dan nasional.</li>\r\n <li>Memiliki Tim olahraga ( Atletik, sepak bola, sepak takraw dan renang ) yang handal, sehingga dapat mempertahankan prestasi. 6. Mengoptimalkan potensi keterampilan dan seni terutama seni tari.</li>\r\n</ol>', 1),
(2, 'Profile Sekolah', '<p>SD Negeri 016 berdomisli di Jalan Delta Mahakam RT.13 di daerah pesisir Kecamatan Anggana yang berbatasan dengan selat makassar, ditengah-tengah pemukiman penduduk, yang secara geografis terletak di Desa Sepatin, Kecamatan Anggana dijangkau dengan memakai transportasi laut berupa perahu maupun speedboat, dengan biaya yang sangat mahal . Dengan lahan ukuran 35 m x 91 m, saat ini SD Negeri 016 memiliki 10 ruang kelas, 1 ruang perpustakaan, 1 ruang guru bergabung dengan ruang kepala sekolah, dan toilet yang terdiri 2 toilet untuk laki-laki dan 2 toilet untuk perempuan. Jumlah murid pada Tahun Pelajaran 2020/2021 sebanyak 150 orang dengan jumlah pendidik dan tenaga kependidikan 13 orang yang terdiri dari kepala sekolah PNS 1 orang, guru PNS sebanyak 6 orang, guru THL 4 orang, guru honor lokal sebanyak 3 orang, dan Pendidik agama islam 1 Orang. Dengan jumlah rombongan belajar sebanyak 9 rombel. Pada bagian administrasi, kepala sekolah melakukan pekerjaan administrasi dibantu oleh seorang staf tata usaha.</p>', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_website` varchar(128) NOT NULL,
  `meta_title` varchar(128) NOT NULL,
  `icon_title` varchar(128) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `jumbotron` varchar(128) NOT NULL,
  `jumbotron_title` text NOT NULL,
  `foto_kepsek` varchar(128) NOT NULL,
  `sambutan` text NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `head_img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`id_setting`, `nama_website`, `meta_title`, `icon_title`, `meta_desc`, `meta_keyword`, `jumbotron`, `jumbotron_title`, `foto_kepsek`, `sambutan`, `alamat`, `email`, `telepon`, `head_img`) VALUES
(1, 'SD Negeri 016 Anggana', 'SDN 016 Anggana', '', 'SD Negeri 016 dengan motto yaitu SDN 016 ANGGANA \'BISA\' Berahlak Indah Santun Amanah akan mengembangkan bakat dan minat seluruh peserta didiknya dalam mengembangkan kemampuan personalnya.', 'SDN 016 Anggana, SD Anggana, 016 Anggana, SD 016 Anggana', 'jumbotron.jpeg', 'SDN 016 ANGGANA <b>\'BISA\'</b> Berahlak Indah Santun Amanah', 'kepsek.jpeg', '<h2><strong>Sambutan Kepala Sekolah</strong></h2>\r\n\r\n<h3><strong>SD Negeri 016 Tenggarong</strong></h3>\r\n\r\n<p>Selamat datang di Sekolah Dasar Negeri 016 Anggana. Kami merasa sangat bangga mendapatkan perhatian dan kepercayaan dari Bapak-Ibu sekalian. Kami akan berupaya untuk dapat menjalankan amanah ini dengan baik agar pertanggung jawaban di hadapan Allah SWT kelak menjadi ringan. Selamat datang di dunia pendidikan Nurul Fikri. Kami merasa sangat bangga mendapatkan perhatian dan kepercayaan dari Bapak-Ibu sekalian. Kami akan berupaya untuk dapat menjalankan amanah ini dengan baik agar pertanggung jawaban di hadapan Allah SWT kelak menjadi ringan.Memasuki pergaulan global yang penuh dengan kompetisi ini, kita perlu menyiapkan mental anak-anak kita agar mampu bersaing dengan baik dengan memiliki moral/adab islami, kemandirian, kecerdasan, juga tentunya kreatifitas-inovasi sesuai tumbuh kembangnya.</p>\r\n', 'RT 07 Sepatin, Sepatin, Kec. Anggana, Kab. Kutai Kartanegara Prov. Kalimantan Timur - Indonesia', 'sdn016anggana@gmail.com', '+62 821 5017 3188', 'bg_header.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_strukturvisimisi`
--

CREATE TABLE `tb_strukturvisimisi` (
  `id_strukturvisimisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `struktur_organisasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_strukturvisimisi`
--

INSERT INTO `tb_strukturvisimisi` (`id_strukturvisimisi`, `visi`, `misi`, `struktur_organisasi`) VALUES
(1, '<h3><strong>Misi</strong></h3>\r\n\r\n<ol>\r\n <li>Menumbuhkembangkan ajaran agama islam melalui berbagai kegiatan keagamaan seperti Baca Tulis Al-Quran (BTA), berdo&#39;a sebelum atau sesudah belajar dan ucapan salam terhadap guru.</li>\r\n <li>Melaksanakan pembelajaran dengan pendekatan PAKEM dan Inkuiri.</li>\r\n <li>Menerapkan pembelajaran yang berbasis Teknologi Informasi dan Komunikasi.</li>\r\n <li>Mengembangkan bakat siswa dibidang seni dan olahraga seperti sepak takraw dan tarian daerah.</li>\r\n <li>Membudayakan sikap <strong>senyum, sapa, salam, sopan, dan santun (5S)</strong> di lingkungan sekolah.</li>\r\n</ol>\r\n', '<h3><strong>Visi</strong></h3>\r\n\r\n<p>\"MEWUJUDKAN GENERASI PENERUS BANGSA YANG BERIMAN, BERAKHLAK MULIA, CERDAS, SEHAT.\"</p>\r\n', 'Struktur_Organisasi.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `jabatan` varchar(64) DEFAULT NULL,
  `role` int(1) NOT NULL COMMENT '1: Admin, 2: User',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `full_name`, `jabatan`, `role`, `created`, `updated`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Kepala Sekolah', 1, '2021-04-01 15:00:46', NULL),
(2, 'user', '827ccb0eea8a706c4c34a16891f84e7b', 'Suwaryadi', 'Operator Sekolah', 2, '2021-04-01 16:30:09', '2021-04-22 15:35:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_users` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_gtk`
--
ALTER TABLE `tb_gtk`
  ADD PRIMARY KEY (`id_gtk`);

--
-- Indeks untuk tabel `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_profilesekolah`
--
ALTER TABLE `tb_profilesekolah`
  ADD PRIMARY KEY (`id_profilesekolah`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `tb_strukturvisimisi`
--
ALTER TABLE `tb_strukturvisimisi`
  ADD PRIMARY KEY (`id_strukturvisimisi`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_gtk`
--
ALTER TABLE `tb_gtk`
  MODIFY `id_gtk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_profilesekolah`
--
ALTER TABLE `tb_profilesekolah`
  MODIFY `id_profilesekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_strukturvisimisi`
--
ALTER TABLE `tb_strukturvisimisi`
  MODIFY `id_strukturvisimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD CONSTRAINT `tb_galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

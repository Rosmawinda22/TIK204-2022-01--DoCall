-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2022 pada 19.33
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rosmawinda', '22bdfe60729d093019de9eca649b9fca'),
(2, 'rpl12345', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `id_user`, `id_dokter`) VALUES
(32, '6', 1),
(36, '8', 1),
(39, '9', 1),
(40, '10', 1),
(41, '11', 1),
(42, '12', 1),
(48, '17', 1),
(51, '18', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_isi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `asal_apotik` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hari_kosong` varchar(200) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `password`, `asal_apotik`, `alamat`, `hari_kosong`, `jam_mulai`, `jam_selesai`) VALUES
(1, 'Dr, Raihan Safitri', '123', 'Apotek harapan bunda', 'Jl. Teuku Umar No.181-211, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23243', 'Rabu', '14:00:00', '16:00:00'),
(2, 'Dr, Syarifah nora andrianty M,Pd Ked', '123', 'Apotik rakan medical', 'Jl. Tgk Daud Beureueh, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415', '-', '00:00:00', '00:00:00'),
(3, 'dr, Muhammad Iqbal Saputra MKM', '123', 'Apotik Ratu Farma', 'Banda Aceh . Jl. Sri Ratu, Safiatuddin No. 66, Peunayong, Peunayong, Kuta Alam', 'Sabtu', '14:00:00', '16:00:00'),
(5, 'faisal', '456', 'usk', ' darussalam', '-', '00:00:00', '00:00:00'),
(6, 'isan', '123', 'sabi', ' darussalam', '-', '00:00:00', '00:00:00'),
(7, '123', '123', '123', ' 123', 'Minggu', '00:00:00', '23:59:00'),
(8, '099', '99', '999', ' 999', '-', '00:00:00', '00:00:00'),
(9, '444', '444', '444', ' 444', '-', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halamaninput`
--

CREATE TABLE `halamaninput` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halamaninput`
--

INSERT INTO `halamaninput` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(4, 'judul1', 'kutipan 123', '<p>isi adalah update</p>', '2022-04-24 06:33:52'),
(5, 'judul2', 'kutipan2', '<p>isi2</p>', '2022-04-24 05:39:24'),
(6, 'judul3', 'kutipan3', '<p>isi3</p>', '2022-04-24 05:39:33'),
(7, 'judul4', 'kutipan4', '<p>isi4</p>', '2022-05-04 07:15:16'),
(9, 'Tetap Sehat Dimanapun Berada', 'Solusi Kesehatan Untuk Anda', '<p>Konsultasikan Bersama Dokter Spesialis Dengan Pelayanan Yang Terjamin<img src=\"../gambar/2b44928ae11fb9384c4cf38708677c48.jpg\" style=\"width: 1054px; float: right;\" class=\"note-float-right\"></p>', '2022-05-05 02:52:45'),
(10, 'Online Courses', 'You Will Need This', '<p style=\"margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" medium;\"=\"\"><img src=\"https://img.freepik.com/free-vector/cartoon-married-couple-communicating-with-doctor-flat-illustration_74855-20057.jpg?t=st=1651663916~exp=1651664516~hmac=15198ff240ed6ebc434f0dbfe291a82469fe8e28ad116f93d11e92509b4f21e5&amp;w=826\" style=\"width: 826px;\"></p><div style=\"text-align: justify;\"><span style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem;\">Kemajuan teknologi membuat hampir semua hal bisa diakses secara digital, termasuk booking jadwal konsultasi dokter. Ini tentu membawa keuntungan, karena anda dapat mencari dan memilih dokter sesuai kebutuhan kesehatan anda.Jangan sampai pasien di apotik anda menunggu lama di bagian pendaftaran. Berikan pasien pengalaman berobat yang nyaman di apotik anda bersama DoCall.</span></div><p style=\"text-align: justify; margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0);\" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" medium;\"=\"\">Konsultasikan masalah kesehatan anda. Dokter-dokter kami siap untuk memberikan siagnosis yang tepat sesuai dengan kondisi kesehatan yang anda rasakan</p>', '2022-05-04 11:39:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`, `tgl_isi`) VALUES
(3, 'Social', '<p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 1rem;\">Facebook: DoCall</span><br></p><p>Instagram:&nbsp; @DoCall</p>', '2022-05-07 13:19:28'),
(4, 'About', '<p>Tentang</p><p>Karier</p>', '2022-05-02 03:21:28'),
(5, 'Contact', '<p>Kopelma Darussalam</p><p>Kode pos: 23111</p>', '2022-05-02 03:22:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `email`, `username`, `password`, `jenis_kelamin`, `nik`, `no_hp`, `alamat`, `tgl_isi`) VALUES
(1, 'rosmawinda22@gmail.com', 'rosmawinda', '22bdfe60729d093019de9eca649b9fca', 'Laki-laki', '', '', '', '2022-05-07 15:47:18'),
(2, 'winda123@gmail.com', 'winda', '25d55ad283aa400af464c76d713c07ad', 'Laki-laki', '', '', '', '2022-05-08 16:07:26'),
(3, 'afriyandi123', 'afriyandi', 'fcea920f7412b5da7be0cf42b8c93759', 'Laki-laki', '', '', '', '2022-05-16 13:01:12'),
(4, 'afriyandi123@gmail.com', 'afriyandi', 'fcea920f7412b5da7be0cf42b8c93759', 'Laki-laki', '', '', '', '2022-05-16 13:01:35'),
(5, 'rpl@gmail.com', 'rpl12345', '25d55ad283aa400af464c76d713c07ad', 'Laki-laki', '', '', '', '2022-05-23 05:36:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_dokter`
--

CREATE TABLE `profil_dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_apotik` text NOT NULL,
  `alamat` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_dokter`
--

INSERT INTO `profil_dokter` (`id`, `nama`, `foto`, `nama_apotik`, `alamat`, `tgl_isi`) VALUES
(4, 'Dr. Muhammad Iqbal Saputra, MKM', 'profil_dokter_1653027880_dokter2.jpg', 'Apotik Ratu Farma', '<p>Jln.Sri Ratu, Safiatuddin No.66, Peunayong, Kuta Alam, Banda Aceh</p>', '2022-05-20 06:24:40'),
(5, 'Dr. Syarifah Nora Andriaty, M.Pd.Ked', 'profil_dokter_1653028069_dokter3.jpg', 'Apotik Rakan Medical', '<p>Jln. Tgk Daud Beureueh, Bandar Baru, Kec. Kuta Alam, Banda Aceh</p>', '2022-05-20 06:27:49'),
(6, 'Dr. Rayhan Shafitri', 'profil_dokter_1653030490_dokter4.jpg', 'Apotik Harapan Bunda', '<p>Jln. Tgk Daud Beureuh No.163, Bandar Baru, Kec.Kuta Alam, Banda Aceh<br></p>', '2022-05-20 07:08:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start` varchar(20) DEFAULT NULL,
  `finish` varchar(20) DEFAULT NULL,
  `is_finish` int(1) DEFAULT 0,
  `is_archive` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `tanggal`, `no_antrian`, `status`, `updated_date`) VALUES
(10, '2022-05-23', 1, '0', NULL),
(11, '2022-05-26', 1, '0', NULL),
(12, '2022-05-29', 1, '0', NULL),
(13, '2022-05-29', 1, '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `usia` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `jenis_kelamin`, `usia`, `status`) VALUES
(1, '', '', 'rijal', 'laki laki', 26, ''),
(2, '', '', 'taufiq', 'laki laki', 34, ''),
(3, '', '', 'della', 'perempuan', 20, ''),
(4, '', '', 'ayu', 'perempuan', 21, ''),
(5, '', '', 'safrina', 'perempuan', 24, ''),
(6, '', '', 'lizi', 'perempuan', 20, ''),
(7, '', '', 'rahmat', 'laki laki', 28, ''),
(8, '', '', 'maya', 'perempuan', 32, ''),
(9, '', '', 'dafa', 'laki laki', 19, ''),
(10, '', '', 'fitri', 'perempuan', 23, ''),
(11, '', 'hh', 'husein', 'laki laki', 31, ''),
(12, '', '65', 'refki', 'laki laki', 22, ''),
(13, '', '123', 'fikri', 'laki laki', 20, ''),
(16, 'test@gmail.com', '1234567', 'test', '', 20, ''),
(18, '111@gmail.com', '111', '111', '', 20, ''),
(19, '123', '123', '123', '', 123, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halamaninput`
--
ALTER TABLE `halamaninput`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_dokter`
--
ALTER TABLE `profil_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `halamaninput`
--
ALTER TABLE `halamaninput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profil_dokter`
--
ALTER TABLE `profil_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Apr 2019 pada 07.27
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hak_akses` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'Rauf', 'senior', 1),
(2, 'User Gratis', 'gratis', 1),
(3, 'tiara', '12345', 1),
(4, 'Hafizdkren', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(255) NOT NULL,
  `no_induk` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `jk` text NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `no_induk`, `nama`, `jk`, `kelas`, `ttl`, `alamat`, `foto`) VALUES
(12, '2', 'Rhaina Kirana Arishanti', 'P', 'mahasiswa', 'Jakarta, 22 September 2001', 'Vila Nusa Indah 3', '2019-04-02 08:45:59'),
(15, '6', 'Tiara', 'P', 'Karyawan', 'Jakarta,11 Mei 2001', 'Cileungsi', '2019-05-02 09:40:14'),
(16, '4', 'Ananda Rauf', 'L', 'Karyawan', 'Jakarta, 02 Agustus 2000', 'Vila Nusa Indah 3', '2019-04-02 13:40:28'),
(17, '5', 'Nurhayati', 'P', 'Karyawan', 'Bogor 30 April 2001', 'Gang Dewa', '2019-04-02 13:44:43'),
(18, '54523', 'Adella Sanggita', 'P', 'siswa', 'Kota Sambas', 'Kota Sambas', '2019-04-02 14:53:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jum_temp` int(4) NOT NULL,
  `tgl_input` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `jum_temp`, `tgl_input`) VALUES
(9, 'How To Become Xamarin Cross Platform Developer', 'Microsoft', '2017', 'Tech Media', '2017000', '100', 'Komputer', 100, 'Rak Gramedia', 'Amerika Serikat', 99, '2019-04-02 08:41:07'),
(11, 'Menggunakan CUDA Sebagai Penelitian Protein', 'Vijay Pande', '2015', 'Standford University', '9013468', '512', 'Komputer', 65, 'Jakarta', 'Amerika Serikat', 65, '2019-04-02 10:58:38'),
(12, 'Supernova : Kesatria, Putri, Dan Bintang Jatuh', 'Dewi \'Dee\' Lestari', '2000', 'Bentang', '943711', '150', 'Novel', 25, 'Jakarta', 'Jakarta', 25, '2019-04-02 11:20:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `perlu2` varchar(15) NOT NULL,
  `perlu3` varchar(15) NOT NULL,
  `perlu4` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `jk`, `kelas`, `perlu1`, `perlu2`, `perlu3`, `perlu4`, `cari`, `saran`, `tgl_kunjung`, `jam_kunjung`) VALUES
(19, 'Bill Gates', 'L', 'Lain', 'Pinjam Buku', '', '', '', 'Komputer', 'Design bagusin', '2019-04-02', '04:22:04'),
(20, 'Hilman Hazazi', 'L', 'siswa', 'Pinjam Buku', '', '', '', 'Komputer Jaringan', 'Tambahin Buku ', '2019-04-02', '04:22:58'),
(21, 'Rhaina Kirana Arishanti', 'P', 'mahasiswa', 'Pinjam Buku', '', '', '', 'Sains', 'Tambahin Buku', '2019-04-02', '04:24:45'),
(22, 'Linus Sebastian', 'L', 'Karyawan', 'Pinjam Buku', '', '', '', 'Buku Nvidia GPU CUDA', '', '2019-05-01', '04:28:27'),
(23, 'Hilman Hazazi', 'L', 'siswa', 'Pinjam Buku', '', '', '', 'Nvidia CUDA', '', '2019-05-01', '04:28:50'),
(24, 'Luke Jake', 'P', 'Guru', 'Pinjam Buku', '', '', 'Lainnya', 'Ubuntu', '', '2019-05-02', '04:29:55'),
(25, 'Echa Oktaviani', 'P', 'siswa', 'Pinjam Buku', '', '', '', 'Novel Exo', 'Terlalu ngejreng warnanya', '2019-04-02', '06:00:04'),
(26, 'Hilman Hazazi', 'L', 'siswa', 'Pinjam Buku', '', '', '', 'buku', 'lainnya', '2019-04-02', '07:20:41'),
(27, 'Fattah', 'L', 'siswa', 'Pinjam Buku', '', '', '', 'pinjam buku sains', 'desain bagusin', '2019-04-02', '01:25:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_pinjam`
--

CREATE TABLE `trans_pinjam` (
  `id` int(5) NOT NULL,
  `judul_buku` varchar(250) NOT NULL,
  `id_peminjam` int(4) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_peminjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans_pinjam`
--

INSERT INTO `trans_pinjam` (`id`, `judul_buku`, `id_peminjam`, `nama_peminjam`, `tgl_peminjam`, `tgl_kembali`, `status`, `ket`) VALUES
(1, 'Laskar Pelangi', 1, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Meminjam novel'),
(2, 'Ngenest', 4, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Meminjam novel'),
(3, 'Laskar Pelangi', 1, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Meminjam novel'),
(4, 'Ayat-Ayat Cinta', 6, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Meminjam novel'),
(5, 'Dilan 1990', 5, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Meminjam novel'),
(6, 'Ayat-Ayat Cinta', 6, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Terimakasih'),
(7, 'Dilan 1990', 5, 'Nurhayati', '01-04-2019', '08-04-2019', 'kembali', 'Terimakasih'),
(8, 'Laskar Pelangi', 1, 'Ai Yuni Siti', '01-04-2019', '08-04-2019', 'kembali', 'Terimakasih'),
(9, 'RINDU', 7, 'Adiana Putri', '01-04-2019', '08-04-2019', 'kembali', 'Terimakasih'),
(10, 'How To Become Xamarin Cross Platform Developer', 9, 'Ananda Rauf Maududi', '02-04-2019', '09-04-2019', 'kembali', 'Pinjam Boss'),
(11, 'How To Become Xamarin Cross Platform Developer', 9, 'Ananda Rauf', '02-04-2019', '09-04-2019', 'pinjam', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

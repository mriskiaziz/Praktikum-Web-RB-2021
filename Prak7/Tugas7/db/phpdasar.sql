-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 12.54
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmpt_Lahir` varchar(50) NOT NULL,
  `tgl_Lahir` date NOT NULL,
  `jekel` enum('Laki - Laki','Perempuan') NOT NULL,
  `jurusan` enum('Teknik Informatika','Teknik Elektro','Matematika','Fisika') NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nim`, `nama`, `tmpt_Lahir`, `tgl_Lahir`, `jekel`, `jurusan`, `email`, `gambar`, `alamat`) VALUES
('210301', 'Tobiah Mc Mechan', 'Mangaldan', '2001-06-03', 'Perempuan', 'Teknik Informatika', 'tmcmechan0@tamu.edu', '6043464ca2b46.png', '14 Sloan Park'),
('210302', 'Gav Colly', 'Kamieniec Podolski', '2003-01-23', 'Laki - Laki', 'Teknik Elektro', 'gcolly1@simplemachines.org', '6043469155dc3.png', '8 Brentwood Hill'),
('210303', 'Editha Jiggens', 'Uyugan', '2000-04-22', 'Laki - Laki', 'Teknik Informatika', 'ejiggens2@bloglines.com', '6043469155dc3.png', '2 Heffernan Street'),
('210304', 'Celle Probert', 'Houston', '2003-07-05', 'Perempuan', 'Matematika', 'cprobert3@techcrunch.com', '6043464ca2b46.png', '19387 Lake View Park'),
('210305', 'Othella Pitts', 'Zhouzhuang', '2005-06-15', 'Perempuan', 'Fisika', 'opitts4@etsy.com', '6043464ca2b46.png', '74105 Ryan Road'),
('210307', 'Sonny Adolfson', 'Lisui', '2001-02-08', 'Perempuan', 'Teknik Elektro', 'sadolfson6@ed.gov', '6043464ca2b46.png', '5345 Oak Valley Center'),
('210308', 'Dalt Polendine', 'Muang Sam Sip', '2003-02-08', 'Laki - Laki', 'Teknik Informatika', 'dpolendine7@weebly.com', '6043469155dc3.png', '8332 Nelson Alley'),
('210309', 'Marlee Ertelt', 'Kapunduk', '2005-12-06', 'Laki - Laki', 'Matematika', 'mertelt8@webnode.com', '6043469155dc3.png', '0330 Shasta Alley'),
('210310', 'Haroun Mathiasen', 'Tambakbaya', '2000-01-21', 'Perempuan', 'Teknik Informatika', 'hmathiasen9@tuttocitta.it', '6043464ca2b46.png', '652 Heath Place'),
('210311', 'Sylvan Mizzi', 'Kayes', '2000-10-14', 'Perempuan', 'Teknik Informatika', 'smizzia@joomla.org', '6043464ca2b46.png', '87142 Scofield Drive'),
('210312', 'Mirna Duffill', 'Patao', '2000-07-15', 'Perempuan', 'Teknik Elektro', 'mduffill@pbs.org', '6043464ca2b46.png', '812 Hallows Parkway'),
('210313', 'Sherlock Frackiewicz', 'Moate', '2004-01-31', 'Laki - Laki', 'Fisika', 'sfrackiewiczc@uiuc.edu', '6043469155dc3.png', '37998 Pankratz Alley'),
('210314', 'Yolande Arne', 'Mpraeso', '2003-04-06', 'Perempuan', 'Teknik Elektro', 'yarned@youku.com', '6043464ca2b46.png', '2 Union Circle'),
('210315', 'Catrina De Brett', 'Tasil', '2004-09-03', 'Laki - Laki', 'Teknik Informatika', 'cdebrette@xrea.com', '6043469155dc3.png', '8 Texas Court');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '12345'),
('asd', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

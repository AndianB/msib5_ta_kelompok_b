-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 07.03
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `FilmID` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Gambar` varchar(255) DEFAULT NULL,
  `Link_Trailer` varchar(255) DEFAULT NULL,
  `Synopsis` text DEFAULT NULL,
  `Rating` decimal(3,1) DEFAULT NULL,
  `Tanggal_Release` date DEFAULT NULL,
  `Durasi_Film` int(11) DEFAULT NULL,
  `Sutradara` varchar(255) DEFAULT NULL,
  `GenreID` int(11) DEFAULT NULL,
  `KategoriID` int(11) DEFAULT NULL,
  `UlasanID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `film_cast`
--

CREATE TABLE `film_cast` (
  `FilmID` int(11) DEFAULT NULL,
  `CastID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `GenreID` int(11) NOT NULL,
  `Nama_Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_umur`
--

CREATE TABLE `kategori_umur` (
  `KategoriID` int(11) NOT NULL,
  `Nama_Kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_cast`
--

CREATE TABLE `list_cast` (
  `CastID` int(11) NOT NULL,
  `Nama_Cast` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `UlasanID` int(11) NOT NULL,
  `FilmID` int(11) DEFAULT NULL,
  `Username` varchar(255) NOT NULL,
  `Ulasan_Text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`FilmID`),
  ADD KEY `GenreID` (`GenreID`),
  ADD KEY `KategoriID` (`KategoriID`),
  ADD KEY `UlasanID` (`UlasanID`);

--
-- Indeks untuk tabel `film_cast`
--
ALTER TABLE `film_cast`
  ADD KEY `FilmID` (`FilmID`),
  ADD KEY `CastID` (`CastID`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Indeks untuk tabel `kategori_umur`
--
ALTER TABLE `kategori_umur`
  ADD PRIMARY KEY (`KategoriID`);

--
-- Indeks untuk tabel `list_cast`
--
ALTER TABLE `list_cast`
  ADD PRIMARY KEY (`CastID`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`UlasanID`),
  ADD KEY `IDFilm` (`FilmID`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `GenreID` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `KategoriID` FOREIGN KEY (`KategoriID`) REFERENCES `kategori_umur` (`KategoriID`),
  ADD CONSTRAINT `UlasanID` FOREIGN KEY (`UlasanID`) REFERENCES `ulasan` (`UlasanID`);

--
-- Ketidakleluasaan untuk tabel `film_cast`
--
ALTER TABLE `film_cast`
  ADD CONSTRAINT `CastID` FOREIGN KEY (`CastID`) REFERENCES `list_cast` (`CastID`),
  ADD CONSTRAINT `FilmID` FOREIGN KEY (`FilmID`) REFERENCES `film` (`FilmID`);

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `IDFilm` FOREIGN KEY (`FilmID`) REFERENCES `film` (`FilmID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

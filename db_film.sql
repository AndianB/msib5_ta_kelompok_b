-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 12.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

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
  `KategoriID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`FilmID`, `Judul`, `Gambar`, `Link_Trailer`, `Synopsis`, `Rating`, `Tanggal_Release`, `Durasi_Film`, `Sutradara`, `GenreID`, `KategoriID`) VALUES
(0, 'Venom', '', 'https://open.spotify.com/', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptatum dolores quaerat fugit labore praesentium.', '8.5', '2023-11-08', 120, 'Tom Hardy', 1, 13),
(1, 'Love Story', 'pp', 'https://getbootstrap.com/docs/5.0/forms/form-control/', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam consectetur eum sed!', '6.5', '2023-11-05', 90, 'Lorem Ipsum', 2, 13),
(12, 'Sewu Dino', 'contoh.jpg', 'https://www.youtube.com/watch?v=12sXNFbQa6I', 'Ditengah kesulitan ekonomi, Sri diterima bekerja untuk keluarga Atmojo dengan bayaran yang tinggi, karena keunikan yang ia miliki, yaitu lahir pada hari Jumat Kliwon. Bersama Erna dan Dini, mereka dibawa ke sebuah gubuk tersembunyi di tengah hutan. Di gubuk tersebut, Sri, Erna, dan Dini bertugas untuk memandikan Dela Atmojo, cucu dari Mbah Karsa Atmojo yang tidak sadarkan diri karena kutukan santet Sewu Dino, salah satu santet yang paling mengerikan. Mereka tidak bisa lari dari gubuk tersebut karena terikat perjanjian mistis dengan Mbah Karsa Atmojo, dan mereka harus selesaikan ritual sampai hari ke 1000. Jika melanggar, kematian menanti mereka.', '7.0', '2023-04-19', 120, 'Kimo Stamboel', 1, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `film_cast`
--

CREATE TABLE `film_cast` (
  `FilmID` int(11) DEFAULT NULL,
  `CastID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film_cast`
--

INSERT INTO `film_cast` (`FilmID`, `CastID`) VALUES
(0, 113),
(1, 114),
(12, 113);

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `GenreID` int(11) NOT NULL,
  `Nama_Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`GenreID`, `Nama_Genre`) VALUES
(1, 'Horror'),
(2, 'Romance'),
(3, 'Thriller');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_umur`
--

CREATE TABLE `kategori_umur` (
  `KategoriID` int(11) NOT NULL,
  `Nama_Kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_umur`
--

INSERT INTO `kategori_umur` (`KategoriID`, `Nama_Kategori`) VALUES
(13, 'Remaja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_cast`
--

CREATE TABLE `list_cast` (
  `CastID` int(11) NOT NULL,
  `Nama_Cast` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_cast`
--

INSERT INTO `list_cast` (`CastID`, `Nama_Cast`) VALUES
(112, 'Reza Rahardian'),
(113, 'Anya Geraldine'),
(114, 'Angga Yunanda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `UlasanID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Ulasan_Text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`UlasanID`, `Username`, `Ulasan_Text`) VALUES
(2, 'Neck Deep', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste cum voluptatibus ducimus rem a error harum assumenda nobis eius tenetur!'),
(5, 'Chand Parwez', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, doloremque reiciendis. Magnam mollitia, consequuntur odit incidunt repudiandae repellat saepe quis!');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`FilmID`),
  ADD KEY `GenreID` (`GenreID`),
  ADD KEY `KategoriID` (`KategoriID`);

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
  ADD PRIMARY KEY (`UlasanID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `UlasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `GenreID` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `KategoriID` FOREIGN KEY (`KategoriID`) REFERENCES `kategori_umur` (`KategoriID`);

--
-- Ketidakleluasaan untuk tabel `film_cast`
--
ALTER TABLE `film_cast`
  ADD CONSTRAINT `CastID` FOREIGN KEY (`CastID`) REFERENCES `list_cast` (`CastID`),
  ADD CONSTRAINT `FilmID` FOREIGN KEY (`FilmID`) REFERENCES `film` (`FilmID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

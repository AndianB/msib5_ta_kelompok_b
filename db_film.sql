-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 05:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `film`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film_cast`
--

CREATE TABLE `film_cast` (
  `FilmID` int(11) DEFAULT NULL,
  `CastID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `GenreID` int(11) NOT NULL,
  `Nama_Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GenreID`, `Nama_Genre`) VALUES
(1, 'Horror'),
(2, 'Romance'),
(3, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_umur`
--

CREATE TABLE `kategori_umur` (
  `KategoriID` int(11) NOT NULL,
  `Nama_Kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_umur`
--

INSERT INTO `kategori_umur` (`KategoriID`, `Nama_Kategori`) VALUES
(13, 'Remaja');

-- --------------------------------------------------------

--
-- Table structure for table `list_cast`
--

CREATE TABLE `list_cast` (
  `CastID` int(11) NOT NULL,
  `Nama_Cast` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_cast`
--

INSERT INTO `list_cast` (`CastID`, `Nama_Cast`) VALUES
(112, 'Reza Rahardian'),
(113, 'Anya Geraldine');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `UlasanID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Ulasan_Text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`FilmID`),
  ADD KEY `GenreID` (`GenreID`),
  ADD KEY `KategoriID` (`KategoriID`);

--
-- Indexes for table `film_cast`
--
ALTER TABLE `film_cast`
  ADD KEY `FilmID` (`FilmID`),
  ADD KEY `CastID` (`CastID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Indexes for table `kategori_umur`
--
ALTER TABLE `kategori_umur`
  ADD PRIMARY KEY (`KategoriID`);

--
-- Indexes for table `list_cast`
--
ALTER TABLE `list_cast`
  ADD PRIMARY KEY (`CastID`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`UlasanID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `GenreID` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `KategoriID` FOREIGN KEY (`KategoriID`) REFERENCES `kategori_umur` (`KategoriID`);

--
-- Constraints for table `film_cast`
--
ALTER TABLE `film_cast`
  ADD CONSTRAINT `CastID` FOREIGN KEY (`CastID`) REFERENCES `list_cast` (`CastID`),
  ADD CONSTRAINT `FilmID` FOREIGN KEY (`FilmID`) REFERENCES `film` (`FilmID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 09:23 AM
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
-- Database: `db_cinema`
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

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`FilmID`, `Judul`, `Gambar`, `Link_Trailer`, `Synopsis`, `Rating`, `Tanggal_Release`, `Durasi_Film`, `Sutradara`, `GenreID`, `KategoriID`) VALUES
(1, 'Transformers: Rise of the Beasts', 'TROTB.jpg', 'https://www.youtube.com/watch?v=itnqEauWQZM&pp=ygUpdHJhbnNmb3JtZXJzIDcgcmlzZSBvZiB0aGUgYmVhc3RzIHRyYWlsZXI%3D', 'Ini merupakan film ketujuh untuk semesta Transformers. Prime dipertemukan dengan Optimus Primal (disuarakan Ron Perlman), autobot berbentuk gorila yang dalam semesta waralaba Transformers adalah autobot yang telah diasingkan, menjadi bagian dari kelompok yang dikenal sebagai Maksimals. Pertemuan dua kekuatan penting ini terjadi di sebuah tempat dengan lanskap hutan belantara.\r\n\r\nPrimal mencoba mengingatkan Prime, bahwa akan datang suatu ancaman dari sesuatu yang sangat besar. Sesuatu yang tak pernah dilihat para autobots sebelumnya, yang akan menghancurkan kehidupan.', 8.5, '2023-06-09', 120, 'Steven Caple Jr.', 8, 13),
(2, 'The Hunger Games : The Ballad of Songbirds and Snakes', 'HGTBOSS.jpg', 'https://www.youtube.com/watch?v=RDE6Uz73A7g&pp=ygUraHVuZ2VyIGdhbWVzIGJhbGxhZCBvZiBzb25nYmlyZHMgYW5kIHNuYWtlcw%3D%3D', 'The Ballad of Songbirds and Snakes merupakan prekuel Hunger Games yang mengambil latar waktu beberapa dekade sebelum petualangan Katniss Everdeen dimulai. Film tersebut bakal fokus pada masa muda Coriolanus Snow yang akhirnya menjadi presiden Panem yang kejam. Sehingga, ia bakal terlihat berbeda dalam film prekuel.\r\n\r\nSaat berusia 18 tahun, Snow dipilih menjadi mentor Lucy Gray Baird, gadis upeti dari Distrik 12 untuk Hunger Games ke-10. Sedangkan Katniss Everdeen tidak akan muncul hingga Hunger Games ke-74.\r\n\r\nDalam trilogi Hunger Games, Presiden Coriolanus Snow diperankan Donald Sutherland. Kendati demikian, belum terdapat informasi mengenai pemeran Snow dan yang lain dalam The Ballad of Songbirds dan Snakes.', 7.2, '2023-11-17', 157, 'Francis Lawrence', 6, 18),
(3, 'Sewu Dino', 'Sewu.jpg', 'https://www.youtube.com/watch?v=12sXNFbQa6I', 'Ditengah kesulitan ekonomi, Sri diterima bekerja untuk keluarga Atmojo dengan bayaran yang tinggi, karena keunikan yang ia miliki, yaitu lahir pada hari Jumat Kliwon. Bersama Erna dan Dini, mereka dibawa ke sebuah gubuk tersembunyi di tengah hutan. Di gubuk tersebut, Sri, Erna, dan Dini bertugas untuk memandikan Dela Atmojo, cucu dari Mbah Karsa Atmojo yang tidak sadarkan diri karena kutukan santet Sewu Dino, salah satu santet yang paling mengerikan. Mereka tidak bisa lari dari gubuk tersebut karena terikat perjanjian mistis dengan Mbah Karsa Atmojo, dan mereka harus selesaikan ritual sampai hari ke 1000. Jika melanggar, kematian menanti mereka.', 7.0, '2023-04-19', 120, 'Kimo Stamboel', 1, 18),
(4, 'Guardians of The Galaxy Vol. 3', 'GOTG3.jpg', 'https://www.youtube.com/watch?v=u3V5KDHRQvk&pp=ygUYZ3VhcmRpYW4gb2YgdGhlIGdhbGF4eSAz', 'Guardians of The Galaxy Vol. 3 ini merupakan kelanjutan dari sekuel sebelumnya yakni Guardians of The Galaxy Vol. 2 (2017) dan Guardians of The Galaxy (2014). \r\n\r\nSekuel akhir ini menceritakan tentang perjuangan Peter Quill yang masih bersedih lantaran kehilangan Gamora. Ia bertekad untuk mengumpulkan kembali timnya yang tentu masih memiliki kesedihan yang sama atas kehilangan Gamora. Ia membujuk timnya untuk bangkit dan mempertahankan alam semesta dengan cara apapun. Namun ternyata, sebuah misi harus mereka jalankan untuk mempertahankan keutuhan alam semesta. Jika misi itu gagal, bisa menjadi akhir dari kehidupan sebagai Penjaga. \r\n\r\nLantas, misi apakah itu? Bagaimana cara Peter Quill beserta timnya melakukan misi itu? Apakah mereka akan berhasil menyelamatkan alam semesta?\r\n', 7.9, '2023-05-03', 150, 'James Gunn', 5, 13),
(5, 'Film Avatar 2: The Way of Water', 'Avatar2.jpg', 'https://www.youtube.com/watch?v=X47sEzHdPI0&t=39s&pp=ygUQYXZhdGFyIDIgdHJhaWxlcg%3D%3D', 'Film Avatar 2: The Way of Water mengisahkan sosok Jake Sully dengan pasangannya Neytiri tinggal bersama anak-anak mereka di tempat yang jauh dari Planet Pandora. Diceritakan bahwa mereka berjanji akan melakukan segala hal dan menghadapi segala rintangan untuk tetap bersama. \r\n\r\nAkan tetapi, dikisahkan datanglah sebuah ancaman. Mereka harus memerangi kembalinya RDA. Hal tersebut membuat Jake Sully dan keluarganya harus kembali ke Planet Pandora. Dikisahkan pula bahwa terdapat klan baru serta tempat baru yang dekat dengan terumbu karang.\r\n\r\nTempat tersebut dinilai jauh lebih aman, meski berbeda dengan lingkungan hutan sebelumnya. Di sisi lain, untuk melindungi Pandora, maka Jake Sully harus bekerja dengan Neytiri dan tentara ras Na\'vi. Mereka akan melakukan segala cara untuk bertahan hidup serta melindungi keluarga mereka.', 7.6, '2022-12-16', 192, 'James Cameron', 5, 13),
(6, 'The Maze Runner', 'TMR.jpg', 'https://www.youtube.com/watch?v=AwwbhhjQ9Xk&t=34s&pp=ygUXdGhlIG1hemUgcnVubmVyIHRyYWlsZXI%3D', 'The Maze Runner merupakan film bergenre fiksi ilmiah yang rilis pada 2014. Film ini diadaptasi dari novel best seller berjudul sama karya James Dashner dan digarap oleh sutradara Wes Ball. Beberapa pemain yang terlibat dalam film berdurasi 113 menit ini antara lain Dylan O\'Brien, Kaya Scodelario, Will Poulter, Thomas Brodie-Sangster, dan Ki Hong Lee. \r\n\r\nThe Maze Runner berkisah tentang sekelompok remaja yang berupaya memecahkan jalan keluar dari perangkap labirin raksasa. Kisahnya bermula ketika seorang remaja laki-laki terbangun dan mendapati dirinya berada di sebuah lapangan berdinding batu tinggi. Pemuda ini terbangun tanpa ingatan apapun kecuali namanya, yaitu Thomas (Dylan O\'Brien). \r\n\r\nThomas tiba di sebuah tempat yang disebut Glade dan bertemu dengan para Glader. Glader adalah sekelompok remaja yang bernasib sama seperti Thomas, bertahun-tahun terperangkap di dalam Glade. Satu-satunya jalan keluar dari Glade adalah melalui labirin raksasa. Sayangnya, labirin ini tidak mudah dilalui karena begitu luas dan dijaga oleh monster bernama Griever.Alby (Aml Amen) selaku pemimpin para Glader menjelaskan pada Thomas beberapa peraturan selama berada di Glade. Kecuali para Runner, tidak ada yang boleh memasuki labirin mengingat kondisinya sangat berbahaya. Kelompok Runner dipimpin Minho (Ki Hong Lee), yang telah tiga tahun mengelilingi labirin namun hasilnya masih nihil. Sejak kedatangan Thomas di Glade, beberapa konflik dan peristiwa terjadi. \r\n\r\nThomas juga menunjukan ketertarikan untuk menjadi Runner, tapi Alby mencegahnya. Namun, saat Alby dan beberapa teman diserang Griever, Thomas bersama Minho akhirnya memutuskan untuk berjuang sebagai Runner demi menguak misteri di dalam labirin. Berhasilkan mereka mencari jalan keluar dari labirin ini?\r\n', 6.8, '2014-09-19', 113, 'Noah Oppenheim', 3, 18),
(7, 'Avengers: Endgame', 'Endgame.jpg', 'https://www.youtube.com/watch?v=TcMBFSGVi1c&t=25s&pp=ygUPZW5kZ2FtZSB0cmFpbGVy', 'Film Avengers: Endgame merupakan sekuel terakhir dari rangkaian film The Avengers yang berada dalam timeline Marvel Cinematic Universe atau MCU. Film ini menceritakan peristiwa yang terjadi dalam rentang waktu lima tahun berselang dari film sebelumnya, Avengers: Infinity War. Pada Avengers: Infinity War, dikisahkan bahwa setengah populasi dunia hilang karena ulah Thanos.\r\n\r\nDua puluh tiga hari setelah peristiwa itu, Captain Marvel menyelamatkan Tony Stark dan Nebula dari luar angkasa. Mereka pun bergabung dengan para Avengers yang tersisa. Para Avengers tersebut kemudian membuat misi untuk mengambil infinity stone dari Thanos, namun Thanos telah menghancurkannya. Thor yang marah kemudian membunuh Thanos.\r\n\r\nLima tahun setelah peristiwa yang disebut blip itu terjadi, orang-orang yang ditinggalkan masih merasakan kehilangan yang amat dalam, tak terkecuali para Avengers yang tersisa. Meski begitu, mereka pun mulai berusaha menjalani kehidupan masing-masing, Tony Stark hidup bahagia bersama Pepper Potts dan telah memiliki seorang putri.', 8.4, '2019-04-24', 181, 'Christopher Markus', 8, 13),
(8, 'Spider-Man: No Way Home\r\n', 'Spiderman.jpg', 'https://www.youtube.com/watch?v=JfVOs4VSpmA&pp=ygUec3BpZGVyIG1hbiBubyB3YXkgaG9tZSB0cmFpbGVy', 'Cerita Spider-Man: No Way Home berawal ketika identitas Peter Parker (Tom Holland) terungkap akibat ulah Mysterio (Jake Gyllenhal) di pertarungan sebelumnya. Hal ini membuat Peter harus mencari cara agar identiasnya tetap terjaga. Bagi Peter Parker, identitasnya sebagai Spider-Man harus tetap dijaga agar dapat melindungi keluarga maupun teman-temannya dari para musuh. \r\n\r\nDemi menjaga identitas tersebut, akhirnya Peter Parker meminta bantuan kepada Doctor Strange (Benedict Cumberbatch).  Doctor Strange pun harus mempertimbangkan dengan cermat permintaan Peter Parker. Sebab untuk mewujudkan permintaan Peter, Doctor Strange harus menggunakan mantra terlarang yang mampu menghapus semua ingatan di seluruh bumi. Namun di sisi lain, \r\n\r\nPeter tidak ingin teman-teman dan bibinya lupa dirinya adalah Spider-Man. Belum sempat memberi tahu keinginannya tersebut, ternyata Doctor Strange sudah dalam proses untuk menghilangkan semua ingatan di seluruh bumi. Lalu apa yang akan terjadi berikutnya?', 8.2, '2021-12-17', 148, 'Chris McKenna', 5, 13),
(9, 'Fast & Furious Presents: Hobbs & Shaw', 'FFPHS.jpg', 'https://www.youtube.com/watch?v=HZ7PAyCDwEg&pp=ygUtRmFzdCAmIEZ1cmlvdXMgUHJlc2VudHM6IEhvYmJzICYgU2hhdyB0cmFpbGVy', 'Dalam film ini, Luke Hobbs (Dwayne Johnson) dan Deckard Shaw (Jason Statham) dipaksa bekerja sama untuk menghadapi ancaman global yang dihadirkan oleh Brixton Lore (Idris Elba), seorang penjahat terampil dengan teknologi canggih yang berpotensi menghancurkan dunia. Keduanya harus melupakan persaingan mereka dan membentuk aliansi yang tidak mungkin untuk menyelamatkan dunia.', 6.4, '2019-08-01', 137, 'David Leitch', 5, 10),
(10, 'John Wick Chapter 3-Parabelleum', 'JW3.jpg', 'https://www.youtube.com/watch?v=M7XM597XO94', 'John Wick dikejar oleh pembunuh bayaran setelah melanggar aturan di Continental Hotel. Ia harus bertahan hidup melalui serangkaian pertempuran yang semakin sulit sambil mengungkap konspirasi yang melibatkan dunia bayaran.', 7.4, '2019-05-17', 130, 'Chad Stahelski', 5, 18),
(11, 'A Quiet Place Part II', 'AQPP2.jpg', 'https://www.youtube.com/watch?v=BpdDN9d9Jio&pp=ygUVQSBRdWlldCBQbGFjZSBQYXJ0IElJ', 'Kelanjutan dari film pertama, keluarga Abbott melanjutkan perjuangan mereka untuk bertahan hidup di dunia yang dikuasai oleh makhluk alien yang memburu dengan suara. Mereka harus bergerak tanpa membuat suara apapun untuk melindungi diri dari ancaman.', 7.4, '2021-05-28', 97, 'John Krasinski', 1, 10),
(12, 'Malignant (2021)', 'Malignant.jpg', 'https://www.youtube.com/watch?v=h6THrxkzF28', 'Madison (diperankan oleh Annabelle Wallis) mulai mengalami mimpi-mimpi mengerikan yang terkait dengan pembunuhan-pembunuhan brutal. Ketika kenyataan dan mimpi mulai tercampur aduk, dia menemukan hubungan gelap dengan masa lalunya yang mengancam hidupnya dan orang-orang di sekitarnya.', 6.3, '2021-09-10', NULL, 'James Wan', 1, 13),
(13, 'The Suicide Squad', 'TSS.jpg', 'https://www.youtube.com/watch?v=5AtLbBkx8dE', 'Setelah kegagalan misi Suicide Squad sebelumnya, Amanda Waller (Viola Davis) membentuk tim baru dengan para penjahat super untuk melaksanakan misi berisiko tinggi di pulau Corto Maltese. Memperkenalkan sejumlah karakter baru, termasuk Bloodsport (Idris Elba) dan Peacemaker (John Cena), tim ini harus berhadapan dengan ancaman besar.', 7.3, '2021-08-05', 132, 'James Gunn', 4, 13),
(14, 'Free Guy', 'FG.jpg', 'https://www.youtube.com/watch?v=X2m-08cOAbc', 'Guy (Ryan Reynolds) adalah karakter NPC (Non-Player Character) dalam sebuah permainan video dunia terbuka yang berubah saat dia mulai menyadari keberadaannya dan mengambil alih takdirnya. Dalam perjalanan mencari kebebasan, Guy harus berhadapan dengan pemain nyata, penjahat permainan, dan mengungkap misteri di balik dunia virtualnya.', 7.7, '2021-08-13', NULL, 'Shawn Levy', 4, 10),
(15, 'The Last Letter From Your Lover', 'TLLFYL.jpg', 'https://www.youtube.com/watch?v=W8r-eM_MSgk', 'Berdasarkan novel Jojo Moyes, film ini mengisahkan dua kisah cinta terpisah di dua era yang berbeda. Di tahun 1960-an, jurnalis Jennifer Stirling (Shailene Woodley) mengalami kecelakaan mobil dan kehilangan ingatannya, sedangkan di tahun 2000-an, seorang arsiparis bernama Ellie Haworth (Felicity Jones) menemukan serangkaian surat cinta yang mengungkapkan kisah cinta terlarang yang belum terungkap.', 6.7, '2021-07-23', 110, 'Augustine Frizzell', 2, 13),
(16, 'Benediction', 'Benediction.jpg', 'https://www.youtube.com/watch?v=Cwys1geQgDc', 'Film ini adalah biografi mengenai kehidupan penyair Inggris terkenal, Siegfried Sassoon. Mengikuti perjalanan hidupnya dari masa perang hingga setelah Perang Dunia I, Benediction mengeksplorasi pengaruh Sassoon dalam dunia sastra dan pengalaman perang yang memengaruhi karyanya.', 5.5, '2021-09-14', 137, 'Terence Davies', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `film_cast`
--

CREATE TABLE `film_cast` (
  `id` int(11) NOT NULL,
  `CastID` int(11) NOT NULL,
  `FilmID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_cast`
--

INSERT INTO `film_cast` (`id`, `CastID`, `FilmID`) VALUES
(1, 101, 1),
(2, 102, 1),
(3, 103, 1),
(4, 201, 2),
(5, 202, 2),
(6, 203, 2),
(7, 301, 3),
(8, 302, 3),
(9, 303, 3),
(10, 401, 4),
(11, 402, 4),
(12, 403, 4),
(13, 501, 5),
(14, 502, 5),
(15, 503, 5),
(16, 601, 6),
(17, 602, 6),
(18, 603, 6),
(19, 701, 7),
(20, 702, 7),
(21, 703, 7),
(22, 801, 8),
(23, 802, 8),
(24, 803, 8);

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
(3, 'Thriller'),
(4, 'Comedy'),
(5, 'Action'),
(6, 'Adventure'),
(7, 'Drama'),
(8, 'Science Fiction'),
(9, 'Fantasy'),
(10, 'Historical'),
(11, 'Crime');

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
(10, 'PG-13'),
(13, 'R-17+'),
(18, 'D-21+');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `KontakID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`KontakID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(7, 'hasan', 'hasan@gmail.com', 'support@movflx.com', 'web ini sangat keren ');

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
(101, 'Anthony Ramos'),
(102, 'Dominique Fishback'),
(103, 'Luna Lauren Velez'),
(201, 'Rachel Zegler'),
(202, 'Tom Blyth\r\n'),
(203, 'Viola Davis'),
(301, 'Mikha Tambayong'),
(302, 'Rio Dewanto'),
(303, 'Givina Lukita'),
(401, 'Chris Pratt'),
(402, 'Chukwudi Iwuji'),
(403, 'Bradley Cooper'),
(501, 'Sam Worthington'),
(502, 'Zoe Saldana'),
(503, 'Sigourney Weaver'),
(601, 'Dylan O\'Brien'),
(602, 'Kaya Scodelario'),
(603, 'Will Poulter'),
(701, 'Robert Downey Jr.'),
(702, 'Chris Evans'),
(703, 'Mark Ruffalo\r\n'),
(801, 'Tom Holland'),
(802, 'Zendaya'),
(803, 'Benedict Cumberbatch'),
(909, 'Reza Rahardian');

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
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`UlasanID`, `Username`, `Ulasan_Text`) VALUES
(2, 'Deva', 'Ini keren sekali, aku tidak sabar menantikan full rilis nya nanti !'),
(5, 'Andian', '1000/100 !!!!'),
(7, 'liyan', 'amazing!'),
(8, 'galang', 'aku sangat excited :)'),
(9, 'khansa', 'WOWWWWWW o.o'),
(10, 'jaki', 'aku tidak menyangka ini !!!!\r\n');

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
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`KontakID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film_cast`
--
ALTER TABLE `film_cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `KontakID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `UlasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`KategoriID`) REFERENCES `kategori_umur` (`KategoriID`);

--
-- Constraints for table `film_cast`
--
ALTER TABLE `film_cast`
  ADD CONSTRAINT `film_cast_ibfk_1` FOREIGN KEY (`FilmID`) REFERENCES `film` (`FilmID`),
  ADD CONSTRAINT `film_cast_ibfk_2` FOREIGN KEY (`CastID`) REFERENCES `list_cast` (`CastID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

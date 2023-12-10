-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 12.38
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
  `KategoriID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`FilmID`, `Judul`, `Gambar`, `Link_Trailer`, `Synopsis`, `Rating`, `Tanggal_Release`, `Durasi_Film`, `Sutradara`, `GenreID`, `KategoriID`) VALUES
(1, 'Transformers: Rise of the Beasts', 'TROTB.jpg', 'https://www.youtube.com/watch?v=itnqEauWQZM&pp=ygUpdHJhbnNmb3JtZXJzIDcgcmlzZSBvZiB0aGUgYmVhc3RzIHRyYWlsZXI%3D', 'Ini merupakan film ketujuh untuk semesta Transformers. Prime dipertemukan dengan Optimus Primal (disuarakan Ron Perlman), autobot berbentuk gorila yang dalam semesta waralaba Transformers adalah autobot yang telah diasingkan, menjadi bagian dari kelompok yang dikenal sebagai Maksimals. Pertemuan dua kekuatan penting ini terjadi di sebuah tempat dengan lanskap hutan belantara.\r\n\r\nPrimal mencoba mengingatkan Prime, bahwa akan datang suatu ancaman dari sesuatu yang sangat besar. Sesuatu yang tak pernah dilihat para autobots sebelumnya, yang akan menghancurkan kehidupan.', '8.5', '2023-06-09', 120, 'Steven Caple Jr.', 8, 13),
(2, 'The Hunger Games : The Ballad of Songbirds and Snakes', 'HGTBOSS.jpg', 'https://www.youtube.com/watch?v=RDE6Uz73A7g&pp=ygUraHVuZ2VyIGdhbWVzIGJhbGxhZCBvZiBzb25nYmlyZHMgYW5kIHNuYWtlcw%3D%3D', 'The Ballad of Songbirds and Snakes merupakan prekuel Hunger Games yang mengambil latar waktu beberapa dekade sebelum petualangan Katniss Everdeen dimulai. Film tersebut bakal fokus pada masa muda Coriolanus Snow yang akhirnya menjadi presiden Panem yang kejam. Sehingga, ia bakal terlihat berbeda dalam film prekuel.\r\n\r\nSaat berusia 18 tahun, Snow dipilih menjadi mentor Lucy Gray Baird, gadis upeti dari Distrik 12 untuk Hunger Games ke-10. Sedangkan Katniss Everdeen tidak akan muncul hingga Hunger Games ke-74.\r\n\r\nDalam trilogi Hunger Games, Presiden Coriolanus Snow diperankan Donald Sutherland. Kendati demikian, belum terdapat informasi mengenai pemeran Snow dan yang lain dalam The Ballad of Songbirds dan Snakes.', '7.2', '2023-11-17', 157, 'Francis Lawrence', 6, 18),
(3, 'Sewu Dino', 'Sewu.jpg', 'https://www.youtube.com/watch?v=12sXNFbQa6I', 'Ditengah kesulitan ekonomi, Sri diterima bekerja untuk keluarga Atmojo dengan bayaran yang tinggi, karena keunikan yang ia miliki, yaitu lahir pada hari Jumat Kliwon. Bersama Erna dan Dini, mereka dibawa ke sebuah gubuk tersembunyi di tengah hutan. Di gubuk tersebut, Sri, Erna, dan Dini bertugas untuk memandikan Dela Atmojo, cucu dari Mbah Karsa Atmojo yang tidak sadarkan diri karena kutukan santet Sewu Dino, salah satu santet yang paling mengerikan. Mereka tidak bisa lari dari gubuk tersebut karena terikat perjanjian mistis dengan Mbah Karsa Atmojo, dan mereka harus selesaikan ritual sampai hari ke 1000. Jika melanggar, kematian menanti mereka.', '7.0', '2023-04-19', 120, 'Kimo Stamboel', 1, 18),
(4, 'Guardians of The Galaxy Vol. 3', 'GOTG3.jpg', 'https://www.youtube.com/watch?v=u3V5KDHRQvk&pp=ygUYZ3VhcmRpYW4gb2YgdGhlIGdhbGF4eSAz', 'Guardians of The Galaxy Vol. 3 ini merupakan kelanjutan dari sekuel sebelumnya yakni Guardians of The Galaxy Vol. 2 (2017) dan Guardians of The Galaxy (2014). \r\n\r\nSekuel akhir ini menceritakan tentang perjuangan Peter Quill yang masih bersedih lantaran kehilangan Gamora. Ia bertekad untuk mengumpulkan kembali timnya yang tentu masih memiliki kesedihan yang sama atas kehilangan Gamora. Ia membujuk timnya untuk bangkit dan mempertahankan alam semesta dengan cara apapun. Namun ternyata, sebuah misi harus mereka jalankan untuk mempertahankan keutuhan alam semesta. Jika misi itu gagal, bisa menjadi akhir dari kehidupan sebagai Penjaga. \r\n\r\nLantas, misi apakah itu? Bagaimana cara Peter Quill beserta timnya melakukan misi itu? Apakah mereka akan berhasil menyelamatkan alam semesta?\r\n', '7.9', '2023-05-03', 150, 'James Gunn', 5, 13),
(5, 'Film Avatar 2: The Way of Water', 'Avatar2.jpg', 'https://www.youtube.com/watch?v=X47sEzHdPI0&t=39s&pp=ygUQYXZhdGFyIDIgdHJhaWxlcg%3D%3D', 'Film Avatar 2: The Way of Water mengisahkan sosok Jake Sully dengan pasangannya Neytiri tinggal bersama anak-anak mereka di tempat yang jauh dari Planet Pandora. Diceritakan bahwa mereka berjanji akan melakukan segala hal dan menghadapi segala rintangan untuk tetap bersama. \r\n\r\nAkan tetapi, dikisahkan datanglah sebuah ancaman. Mereka harus memerangi kembalinya RDA. Hal tersebut membuat Jake Sully dan keluarganya harus kembali ke Planet Pandora. Dikisahkan pula bahwa terdapat klan baru serta tempat baru yang dekat dengan terumbu karang.\r\n\r\nTempat tersebut dinilai jauh lebih aman, meski berbeda dengan lingkungan hutan sebelumnya. Di sisi lain, untuk melindungi Pandora, maka Jake Sully harus bekerja dengan Neytiri dan tentara ras Na\'vi. Mereka akan melakukan segala cara untuk bertahan hidup serta melindungi keluarga mereka.', '7.6', '2022-12-16', 192, 'James Cameron', 5, 13),
(6, 'The Maze Runner', 'TMR.jpg', 'https://www.youtube.com/watch?v=AwwbhhjQ9Xk&t=34s&pp=ygUXdGhlIG1hemUgcnVubmVyIHRyYWlsZXI%3D', 'The Maze Runner merupakan film bergenre fiksi ilmiah yang rilis pada 2014. Film ini diadaptasi dari novel best seller berjudul sama karya James Dashner dan digarap oleh sutradara Wes Ball. Beberapa pemain yang terlibat dalam film berdurasi 113 menit ini antara lain Dylan O\'Brien, Kaya Scodelario, Will Poulter, Thomas Brodie-Sangster, dan Ki Hong Lee. \r\n\r\nThe Maze Runner berkisah tentang sekelompok remaja yang berupaya memecahkan jalan keluar dari perangkap labirin raksasa. Kisahnya bermula ketika seorang remaja laki-laki terbangun dan mendapati dirinya berada di sebuah lapangan berdinding batu tinggi. Pemuda ini terbangun tanpa ingatan apapun kecuali namanya, yaitu Thomas (Dylan O\'Brien). \r\n\r\nThomas tiba di sebuah tempat yang disebut Glade dan bertemu dengan para Glader. Glader adalah sekelompok remaja yang bernasib sama seperti Thomas, bertahun-tahun terperangkap di dalam Glade. Satu-satunya jalan keluar dari Glade adalah melalui labirin raksasa. Sayangnya, labirin ini tidak mudah dilalui karena begitu luas dan dijaga oleh monster bernama Griever.Alby (Aml Amen) selaku pemimpin para Glader menjelaskan pada Thomas beberapa peraturan selama berada di Glade. Kecuali para Runner, tidak ada yang boleh memasuki labirin mengingat kondisinya sangat berbahaya. Kelompok Runner dipimpin Minho (Ki Hong Lee), yang telah tiga tahun mengelilingi labirin namun hasilnya masih nihil. Sejak kedatangan Thomas di Glade, beberapa konflik dan peristiwa terjadi. \r\n\r\nThomas juga menunjukan ketertarikan untuk menjadi Runner, tapi Alby mencegahnya. Namun, saat Alby dan beberapa teman diserang Griever, Thomas bersama Minho akhirnya memutuskan untuk berjuang sebagai Runner demi menguak misteri di dalam labirin. Berhasilkan mereka mencari jalan keluar dari labirin ini?\r\n', '6.8', '2014-09-19', 113, 'Noah Oppenheim', 3, 18),
(7, 'Avengers: Endgame', 'Endgame.jpg', 'https://www.youtube.com/watch?v=TcMBFSGVi1c&t=25s&pp=ygUPZW5kZ2FtZSB0cmFpbGVy', 'Film Avengers: Endgame merupakan sekuel terakhir dari rangkaian film The Avengers yang berada dalam timeline Marvel Cinematic Universe atau MCU. Film ini menceritakan peristiwa yang terjadi dalam rentang waktu lima tahun berselang dari film sebelumnya, Avengers: Infinity War. Pada Avengers: Infinity War, dikisahkan bahwa setengah populasi dunia hilang karena ulah Thanos.\r\n\r\nDua puluh tiga hari setelah peristiwa itu, Captain Marvel menyelamatkan Tony Stark dan Nebula dari luar angkasa. Mereka pun bergabung dengan para Avengers yang tersisa. Para Avengers tersebut kemudian membuat misi untuk mengambil infinity stone dari Thanos, namun Thanos telah menghancurkannya. Thor yang marah kemudian membunuh Thanos.\r\n\r\nLima tahun setelah peristiwa yang disebut blip itu terjadi, orang-orang yang ditinggalkan masih merasakan kehilangan yang amat dalam, tak terkecuali para Avengers yang tersisa. Meski begitu, mereka pun mulai berusaha menjalani kehidupan masing-masing, Tony Stark hidup bahagia bersama Pepper Potts dan telah memiliki seorang putri.', '8.4', '2019-04-24', 181, 'Christopher Markus', 8, 13),
(8, 'Spider-Man: No Way Home', 'Spiderman.jpg', 'https://www.youtube.com/watch?v=JfVOs4VSpmA&pp=ygUec3BpZGVyIG1hbiBubyB3YXkgaG9tZSB0cmFpbGVy', 'Cerita Spider-Man: No Way Home berawal ketika identitas Peter Parker (Tom Holland) terungkap akibat ulah Mysterio (Jake Gyllenhal) di pertarungan sebelumnya. Hal ini membuat Peter harus mencari cara agar identiasnya tetap terjaga. Bagi Peter Parker, identitasnya sebagai Spider-Man harus tetap dijaga agar dapat melindungi keluarga maupun teman-temannya dari para musuh. \r\nDemi menjaga identitas tersebut, akhirnya Peter Parker meminta bantuan kepada Doctor Strange (Benedict Cumberbatch).  Doctor Strange pun harus mempertimbangkan dengan cermat permintaan Peter Parker. Sebab untuk mewujudkan permintaan Peter, Doctor Strange harus menggunakan mantra terlarang yang mampu menghapus semua ingatan di seluruh bumi. Namun di sisi lain, \r\nPeter tidak ingin teman-teman dan bibinya lupa dirinya adalah Spider-Man. Belum sempat memberi tahu keinginannya tersebut, ternyata Doctor Strange sudah dalam proses untuk menghilangkan semua ingatan di seluruh bumi. Lalu apa yang akan terjadi berikutnya?', '8.2', '2021-12-17', 148, 'Chris McKenna', 5, 13),
(9, 'Pamali', 'pamali.jpg', 'https://youtu.be/Jn1d9NPV5tc?si=PLdwSnfrwvpgaTgh', 'Pamali: Dusun Pocong mengusung cerita tentang tiga petugas medis bernama Mila (Yasamin Jasem), Gendis (Dea Panendra), dan Puput (Arla Aliani). Ketiga petugas itu mendapat tugas untuk bekerja di sebuah desa terpencil.\r\nDi desa itu, masyarakat tengah menghadapi suatu wabah penyakit misterius. Para petugas medis itu lalu dikirim untuk membantu penanganan korban yang terkena wabah tersebut.\r\nMereka juga dibantu dua orang penggali kubur bernama Deden (Bukie B. Mansyur) dan Cecep (Fajar Nugra). Mereka berlima lantas memulai perjalanan menuju desa yang sulit dan terjal, hingga akhirnya tiba di salah satu dusun.\r\nKejanggalan demi kejanggalan perlahan ditemui oleh kelima orang itu. Mereka menyadari bahwa dusun tempat bertugas tersebut dihantui Pocong yang kerap menebar teror.\r\nKetakutan Mila, Gendis, Puput, Deden, dan Cecep semakin menjadi-jadi ketika satu per satu anggota tim tersebut terbunuh mengenaskan.\r\nAnggota yang tersisa tak pelak dihadapkan rasa takut sekaligus bingung. Mereka yakin kemunculan pocong yang bangkit kembali itu tidak mungkin terjadi tanpa sebab.\r\nMereka akhirnya menaruh curiga terhadap anggota yang melanggar pamali, suatu aturan tabu yang sesungguhnya tidak boleh dilanggar. Pamali itu kemungkinan besar menjadi pemicu petaka bagi rombongan petugas medis dan penggali kubur. Anggota yang tersisa itu pun mau tak mau harus membayar kesalahan mereka demi bisa terbebas dari petaka. Untuk mencapai semua itu, mereka rela melakukan berbagai hal yang tidak pernah dibayangkan sebelumnya', '8.0', '2023-12-29', 100, 'Bobby Prasetyo', 1, 13),
(10, 'The Nun', 'The-Nun.jpg', 'https://youtu.be/QF-oyCwaArU?si=CFKWve2L4R1KP3jI', 'Ketika seorang biarawati muda di biara terpencil Rumania mengorbankan hidupnya sendiri, seorang pendeta dengan masa lalu yang kelam dan seorang calon biawawati dikirim oleh Vatikan untuk menyelidiki peristiwa ini. Bersama-sama mereka membuka rahasia rahasia yang tidak terduga.', '8.6', '2024-01-05', 136, 'Coryn Hardy', 1, 13),
(11, 'The Exorcist : Believer', 'the-exorcist.jpg', 'https://youtu.be/PIxpPMyGcpU?si=oYQtd-2t_6cqHhr5', 'Victor Fielding yang diperankan oleh Leslie Odom Jr, merupakan seorang fotografer yang harus membesarkan anaknya bernama Angela yang diperankan oleh Lidya Jewett, setelah kematian sang istri.\r\nKematian istri Victor yakni Sorenne yang diperankan oleh Tracey Graves, terjadi 12 tahun silam saat keluarganya tengah berlibur ke Haiti dan terjadi bencana gempa bumi.\r\nKala itu, terjadi gempa bumi hebat ketika Victor dan Sorenne yang sedang berada di dalam hotel. Gempa tersebut bahkan membuat sebagian hotel runtuh.\r\n\r\nKemudian, Victor diberikan pilihan yang sangat sulit antara harus menyelamatkan istrinya yang sedang hamil atau anaknya.\r\n13 tahun setelahnya, Victor dan Angela yang sudah menginjak bangku sekolah menjalani kehidupannya tanpa sang ibu.\r\nKehidupan keduanya tanpa Sorenne berjalan baik-baik saja sampai suatu hari, Angela dengan temannya bernama Katherine yang diperankan oleh Olivia Marcum, menghilang di hutan.', '8.0', '2024-01-03', 111, 'David Gordon Green', 1, 13),
(12, 'Mission:Impossible Dead Reckoning Part One (2023)', 'mission-imposible.jpg', 'https://youtu.be/avz06PDqDbM?si=ugkUY_oYu3FimNAg', 'Seorang agen rahasia Amerika dituduh telah berkhianat dan menghabisi seluruh anggota timnya. Kini dia mulai memburu siapa mata-mata yang sesungguhnya - untuk membuktikan bahwa dirinya tak bersalah.', '8.5', '2024-01-04', 150, 'Chrsitopher McQuarrie', 5, 13),
(13, 'Titanic', 'titanic.jpg', 'https://youtu.be/kVrqfYjkTdQ?si=chGIYEGtZygj91zi', 'Film drama romantis ini mengisahkan kisah cinta yang tragis Rose DeWitt Bukater dengan Jack Dawson di tentang tragedi tenggelamnya kapal Titanic pada 1912. Pada 1996, pemburu harta karun Brock Lovett dan timnya mencari kalung Heart of the Ocean di puing-puing kapal Titanic. Mereka tidak menemukan Heart of the Ocean, tetapi mendapati sebuah peti berisi lukisan seorang perempuan yang mengenakan kalung itu. Perempuan dalam lukisan itu bernama Rose Dawson Calvert pun menceritakan pengalamannya menjadi penumpang Titanic. Rose naik kapal itu ketika berusia 17 tahun. Dia bersama ibunya, Ruth DeWitt Bukater dan tunangannya Caledon Nathan Hockley. Di kapal itu, Rose yang tidak mencintai tunangannya bertemu Jack Dawson, seorang seniman miskin. Kedekatan dua insan yang berbeda status sosial itu diawali Jack menyelamatkan Rose yang hendak mengakhiri hidupnya. Mereka pun bersahabat sebelum akhirnya muncul benih-benih cinta di antara mereka. Suatu malam, Jack melukis Rose yang hanya memakai kalung Heart of the Ocean. Lukisan itulah yang ditemukan para pemburu harta karun 84 tahun kemudian. Sementara itu mereka dalam bahaya besar. Kapal Titanic menabrak sebuah gunung es. Ketika kapal akan tenggelam, Rose yang sebenarnya berkesempatan menyelamatkan diri, memilih mencari Jack yang diborgol di dek kapal.', '8.7', '2023-12-30', 180, 'James Cameroon', 2, 13),
(14, 'Habibie Ainun', 'Habibie-Ainun.jpg', 'https://youtu.be/rKGvrEWCG3A?si=EvAKwYTEJIpziuyc', 'Ini adalah kisah tentang apa yang terjadi bila kau menemukan belahan hatimu. Kisah tentang cinta pertama dan cinta terakhir. Kisah tentang Presiden ketiga Indonesia dan ibu negara. Kisah tentang Habibie dan Ainun. Rudy Habibie seorang jenius ahli pesawat terbang yang punya mimpi besar: berbakti kepada bangsa Indonesia dengan membuat truk terbang untuk menyatukan Indonesia. Sedangkan Ainun adalah seorang dokter muda cerdas yang dengan jalur karir terbuka lebar untuknya. Pada tahun 1962, dua kawan SMP ini bertemu lagi di Bandung. Habibie jatuh cinta seketika pada Ainun yang baginya semanis gula. Tapi Ainun, dia tak hanya jatuh cinta, dia iman pada visi dan mimpi Habibie. Mereka menikah dan terbang ke Jerman. Punya mimpi tak akan pernah mudah. Habibie dan Ainun tahu itu. Cinta mereka terbangun dalam perjalanan mewujudkan mimpi. Dinginnya salju Jerman, pengorbanan, rasa sakit, kesendirian serta godaan harta dan kuasa saat mereka kembali ke Indonesia mengiringi perjalanan dua hidup menjadi satu. Bagi Habibie, Ainun adalah segalanya. Ainun adalah mata untuk melihat hidupnya. Bagi Ainun, Habibie adalah segalanya, pengisi kasih dalam hidupnya. Namun setiap kisah mempunyai akhir, setiap mimpi mempunyai batas. Kemudian pada satu titik, dua belahan jiwa ini tersadar; Apakah cinta mereka akan bisa terus abadi?', '8.5', '2023-12-26', 118, 'Faozan Rizal', 2, 10),
(15, 'Dear Nathan', 'Dear_Nathan.jpg', 'https://youtu.be/8GIQsLKMBkk?si=_GsmLyJTH7J0OzY_', 'Pasangan kekasih Nathan dan Salma berpisah setelah salah satunya pindah ke sekolah lain dan terjadi kesalahpahaman. Setelahnya, mereka bertemu lagi melalui Rebecca, teman Salma dan penggemar Nathan.', '8.0', '2024-01-05', 95, 'Indra Gunawan', 2, 13),
(16, 'Garis Waktu', 'garis-waktu.jpg', 'https://youtu.be/YiQ3rsd6jkw?si=0gEN5swQ7oiET8tO', 'April, yang gemar menulis puisi bertemu dengan Senandika, musisi yang berhasil mencuri perhatian dengan filosofi dan prinsipnya. April, yang melihat potensi pada diri Sena, memperkenalkannya pada Sanya, produser muda sahabatnya.', '8.2', '2023-01-26', 100, 'Jeihan Angga', 2, 13),
(17, 'The Boss Baby: Family Business', 'the-boss-baby-family-business-dvd.jpg', 'https://youtu.be/QPzy8Ckza08?si=gckfU_FBJbSceM8O', 'Tim, bocah 7 tahun, iri saat orangtuanya lebih perhatian pada adiknya. Ia segera sadar ternyata adik bayinya bisa berbicara. Keduanya pun bekerjasama untuk menggagalkan rencana jahat CEO Puppy Co.', '8.0', '0000-00-00', 97, 'Tom McGrath', 4, 10),
(18, 'Warkop Dki Reborn', 'warkop-dki-reborn.jpg', 'https://youtu.be/T0ki7KwvO1Q?si=M4Q3mFhlTO5W0fTi', 'Warkop DKI - Dono, Kasino, Indro kali ini mendapat tugas sebagai agen polisi rahasia. Mereka dibawah komando Komandan Cok, yang kehilangan tangan kanannya, Karman, saat mensinyalir adanya money laundry di dunia perfilman Indonesia. Tepatnya di sebuah PH yang dimiliki Amir Muka. Warkop DKI akhirnya bisa masuk dalam dunia film dan terlibat dalam sebuah pembuatan film komedi berpasangan dengan artis sinetron yang hijrah ke dunia film, Inka. Saat party, Warkop DKI yang sedang menyelidiki malah membuat Inka terjebak bersama mereka di sebuah ruangan. Warkop DKI dan Inka jatuh pingsan. Saat terbangun, Warkop DKI kaget karena berada di padang pasir! Tapi Inka lenyap! Pencarian Warkop DKI mencari jejak Inka, malah menyeret mereka dalam petualangan seru di padang pasir...', '8.4', '2023-02-14', 100, 'Anggy Umbara', 4, 10),
(19, 'My Stupid Boss', 'My_stupid_boss.jpg', 'https://youtu.be/FuC8H8eXZFU?si=PKn6ZX7fBpklLZhc', 'My Stupid Boss menggambarkan kisah hidup seorang karyawan yang punya bos menyebalkan. Kisahnya bermula saat Diana (Bunga Citra Lestari) ikut suaminya Dika (Alex Abbad) pindah ke Kuala Lumpur. Bosan dengan rutinitas di kediamannya, selama 3 bulan belakangan, Diana memilih untuk mencari pekerjaan.', '8.2', '2023-03-16', 105, 'Upi Avianto', 4, 10),
(20, 'Family Switch', 'Family_Switch.jpg', 'https://youtu.be/SWh4c9EVqGM?si=NrG483duTMGwW8PE', 'Family Switch mengisahkan tentang keluarga Walker yang ingin merayakan hari natal bersama. Di saat malam Natal tiba, sebagai seorang ibu, Jess Walker (Jennifer Garner) berniat mengabadikan momen bersama keluarga. Baca juga: Sinopsis The Tower, Tragedi di Malam Natal Jess kemudian meminta bantuan kepada seorang Wanita tua bernama Angelica (Rita Moreno) untuk mengabadikan moment tersebut. Keesokan harinya CC (Emma Myers) dan Wyatt (Brady Noon) terkejut, bagaimana bisa mereka tertidur di kamar orang tuanya. Begitu pula dengan Jess dan Bill (Ed Helms) yang datang dengan raut wajah yang penuh kebingungan. Baca juga: Sinopsis Deck The Halls, Mendekorasi Rumah Saat Natal Akhirnya mereka menyadari bahwa jiwa mereka tertukar, jiwa CC dengan Ibunya, Wyatt dengan ayahnya, Bill dan Miles dengan anjing peliharaan mereka. Akibat hal tersebut, mereka harus bertukar peran dan berusaha menjalani kehidupan senormal mungkin dan bekerja sama mencari tahu cara untuk mengembalikan jiwa mereka masing-masing', '8.7', '0000-00-00', 110, 'McG', 4, 13),
(21, 'The Roundup: No Way Out', 'The_Roundup_No_Way_Out.png', 'https://youtu.be/PDEl1rw_Vn0?si=hbkn6xDs_9arftvz', 'Polisi ganas Ma Seok-do kembali Kali ini, ke Investigasi Metro! Tujuh tahun setelah penangkapan di Vietnam, Ma Seok-do bergabung dengan regu baru untuk menyelidiki kasus pembunuhan. Setelah ia mengetahui kasus ini melibatkan penghancuran obat sintetis, ia mulai menginvenstigasi lebih dalam...Sementara itu, pria di balik itu semuaJoo Sung-chultidak berhenti mencari masalah, dan distributor narkoba Jepang, Ricky dan gengnya datang ke Korea untuk bergabung dalam kekacauan ini. akan banyak hal gila yang diluar kendali...Sudah waktunya untuk memusnahkan para bajingan lagi Jika mereka ingin masalah, beri mereka masalah!', '8.8', '2024-12-05', 105, 'Lee Sang-yong', 11, 18),
(22, 'Tokyo Revenger', 'tokyo-revengers-LA-vis-1.png', 'https://youtu.be/WPoU2FQTMq4?si=zAy1Zkc2e3jSuGDZ', 'Untuk menyelamatkan gadis yang dicintainya, Takemichi harus melakukan perjalanan kembali ke masa lalu dan mengalahkan segala rintangan!', '8.9', '2023-12-25', 120, 'Tsutomu Hanabusa', 11, 13),
(23, 'The Raid', 'The_Raid_Poster.jpg', 'https://youtu.be/m6Q7KnXpNOg?si=li9_tWgKimrN4Ist', 'Setelah terjebak di dalam sebuah rumah persembunyian mafia berlantai 15 milik Tama, kini Rama dan timnya harus bertarung mati-matian untuk membekuk mereka - sekaligus berjuang untuk bertahan hidup.', '8.0', '2024-11-26', 110, 'Gareth Evans', 11, 13),
(24, 'The Raid 2 : Berandal', 'the-raid-2.jpg', 'https://youtu.be/PQ6yUHHfZ04?si=G-XHm5M2Eat1MWZg', 'Film ini masih mengisahkan tentang Rama (Iko Uwais) yang menjadi seorang polisi. Setelah berhasil selamat dari pertarungan menegangkan di markas gembong narkoba di film pertama, kini Rama (Iko Uwais) ditawari Bunawar (Cok Simbara) untuk bergabung sebagai agen pasukan khusus. Bunawar ingin agar Rama menyusup ke kelompok Bangun (Tio Pakusadewo). Tujuannya adalah mengumpulkan bukti adanya kerja sama antara kelompok tersebut dengan polisi-polisi korup. Baca juga: The Raid 2 Raih Trofi Trailer Terbaik dalam IFTA 2015 Awalnya Rama menolak permintaan Bunawar, tapi dia terpaksa menerimanya ketika mengetahui bahwa kakaknya dibunuh Bejo (Alex Abbad). Rama pun menyamar masuk ke penjara dengan harapan membalas dendam. Di penjara, Rama bertemu Ucok (Arifin Putra) yang merupakan anak dari Bangun, sang bos mafia. Jika Rama berhasil mendekati Ucok, otomatis dia dapat mendekati Bangun. Dengan begitu, Rama bisa segera membongkar berbagai informasi rahasia untuk menghancurkan sindikat penguasa korup tersebut. Tak hanya itu, kesempatan untuk membalas dendam kepada Bejo, rival dari Bangun, pun akan terbuka lebar. Mampukah Rama menyelesaikan misinya?', '8.5', '2024-06-07', 150, 'Gareth Evans', 11, 13),
(25, '20TH CENTURY GIRL', '20TH CENTURY GIRL.jpg', 'https://youtu.be/izClpEHwtB8?si=1ZindA6n0Tod6wgF', 'Film 20th Century Girl berkisah tentang Bo Ra, seorang  siswi SMA yang ceria, dan memiliki aura positif, selain itu Bo Ra juga  jago taekwondo. Bo Ra juga aktif di klub broadcasting sekolah bersama dengan Woon Hoo. Bo Ra bersahabat dengan teman satu sekolahnya, Yeon Du yang jatuh cinta kepada Hyun Jin. Pada suatu waktu Yeon Du harus pergi ke Amerika Serikat untuk menjalani operasi jantung. Sebelum Yeon Du berangkat, ia meminta Bo Ra untuk mencari tahu semua tentang Hyun Jin selama Yeon Du berobat ke Amerika Serikat.  Bo Ra kemudian menjalankan permintaan Yeon Du mencari info tentang Hyun Jin. Namun, Bo Ra malah jatuh cinta kepada Hyun Jin. ', '9.0', '2023-12-25', 119, 'Bang Woo-ri', 7, 13),
(26, '365 DAYS', '365-days-poster.jpg', 'https://youtu.be/iXdw5wYI4cY?si=yjx0mdoMmpLSJnGn', 'Menceritakan seorang remaja dari keluarga mafia yang paling disegani bernama Massimo Torricelli (diperankan oleh Michele Morrone), tengah ikut keluarganya melakukan pertemuan bisnis. Sayangnya, dalam pertemuan bisnis tersebut malah berakhir dengan tragedi berdarah berupa baku tembak sehingga menewaskan ayahnya sekaligus melukainya. Hal tersebut tentu saja memuat Massimo mengalami trauma hingga dirinya dewasa.\r\nSeiring berjalannya waktu, Massimo telah beranjak dewasa dan menggantikan ayahnya sebagai pimpinan bisnisnya. Tentu saja Massimo menjadi pria dewasa yang kaya dan hidup bergelimangan kemewahan. Namun akibat trauma yang dialaminya saat kecil, Massimo memiliki sifat yang kasar dan semena-mena.\r\nDi sisi lain, seorang gadis cantik bernama Laura Biel (diperankan oleh Anna Maria Siecklucka) yang berprofesi sebagai manajer perusahaan, tengah merayakan pesta ulang tahun bersama pacar dan teman-temannya di wilayah Sisilia, Italia.Namun walaupun tengah dalam suasana bahagia, ternyata hubungan Laura dengan pacarnya, Martin, mulai renggang karena perselingkuhan. Tidak ada yang menyadari jika Laura diam-diam diculik oleh Massimo.\r\n\r\n\r\nLaura tentu saja terkejut bukan main atas penculikan yang terjadi kepadanya. Terlebih lagi, dirinya juga disekap di sebuah vila mewah yang seperti istana. Massimo kemudian mengaku bahwa Laura adalah sosok wanita yang dilihatnya ketika tragedi berdarah menimpa keluarganya 5 tahun lalu. Yap, Massimo jatuh cinta pada pandangan pertama dan tidak dapat melupakan bagaimana wajah Laura.  Awalnya, Massimo memang berencana untuk menyekap Laura di vila mewah miliknya selama 365 hari supaya gadis itu dapat jatuh cinta kepadanya.', '9.0', '2025-02-25', 116, 'Barbara Bialowas', 7, 18),
(27, 'The Equalizer', 'The_Equalizer_poster.jpg', 'https://youtu.be/VjctHUEmutw?si=azml6675zhu8FDj7', 'McCall, menyerah pada kehidupan kekerasan, Ia ingin menjalani hidup tenang dan tidak terganggu. Namun, peristiwa brutal memaksa dia untuk sekali lagi berjuang demi keadilan.', '8.5', '2024-01-05', 132, 'Antoine Fuqua', 7, 13),
(28, 'The Equalizer 2', 'the-equalizer-2.jpg', '', 'Robert McCall (Denzel Washington) seorang mantan agen rahasia selalu berusaha memberikan keadilan bagi orang yang membutuhkannya. Hingga suatu ketika ia mengetahui bahwa sahabat lamanya, Susan Plummer (Melissa Leo) menjadi korban pembunuhan yang dilakukan musuhnya. Bagi McCall, ini adalah panggilan perang. Kini ia mencari tahu siapa yang telah membunuh temannya itu untuk membalaskan dendam.', '8.7', '2024-08-26', 120, 'Antoine Fuqua', 7, 13),
(29, 'Jumanji', 'jumanji.jpg', 'https://youtu.be/veszTagaXik?si=OyW0LUe77IQ_uTDM', 'Saat bermain sebuah papan permainan tua, dua bocah membebaskan pria yang telah terjebak di dalamnya selama bertahun-tahun. Semua bahaya bisa dihentikan - jika mereka berhasil menyelesaikan permainan.', '8.0', '2023-12-25', 114, 'Joe Johnston', 9, 13),
(30, 'Jumanji : Welcome  To The Jungle', 'jumanji-welcome-jungle.jpg', 'https://youtu.be/2QKg5SZ_35I?si=_7wsH0ZVBN4w5uhK', 'Dalam sebuah petualangan Jumanji yang baru, empat anak sekolah menengah menemukan sebuah konsol video game tua dan ditarik ke dalam setting hutan permainan, yang secara harfiah menjadi avatar dewasa yang mereka pilih. Apa yang mereka temukan adalah bahwa Anda tidak hanya bermain Jumanji - Anda harus bisa bertahan. Untuk mengalahkan permainan dan kembali ke dunia nyata, mereka harus menjalani petualangan paling berbahaya dalam hidup mereka, menemukan apa yang Alan Parrish tinggalkan 20 tahun yang lalu, dan mengubah cara mereka memikirkan diri mereka sendiri - atau mereka akan terjebak. dalam permainan selamanya, untuk dimainkan oleh orang lain tanpa henti.', '9.0', '2024-10-10', 119, 'Jake Kasdan', 9, 13),
(31, 'Jumanji : The Next Level', 'jumanji-the-next-level.png', 'https://youtu.be/rBxcF-r9Ibs?si=v7Y7BdWXkS5olsMO', 'Jumanji: The Next Level/sinopsis\r\nDalam Jumanji: The Next Level, keempat sahabat kembali lagi, tetapi permainannya telah berubah. Saat memutuskan masuk lagi ke Jumanji untuk menyelamatkan salah satu dari mereka, mereka menemukan segalanya tak seperti yang diduga. Para pemain harus melaju ke wilayah-wilayah tersembunyi dan belum dijamah, dari gurun nan gersang ke pegunungan bersalju, demi meloloskan diri dari permainan paling berbahaya di dunia.', '8.9', '2025-12-13', 123, 'Jake Kasdan', 9, 13),
(32, 'Dungeons & Dragons: Honor Among Thieves', 'dungeon.jpg', 'https://youtu.be/IiMinixSXII?si=IHwy82Ku_Qp0d40T', 'Seorang pencuri yang menawan dan sekelompok petualang yang tidak mungkin melakukan pencurian epik untuk mengambil peninggalan yang hilang, tetapi keadaan menjadi serba salah ketika mereka berhadapan dengan orang yang salah. Dungeons & Dragons: Honor Among Thieves menghadirkan dunia yang kaya dan semangat menyenangkan dari game roleplaying legendaris ke layar lebar dalam petualangan yang lucu dan penuh aksi.', '8.3', '2023-11-20', 134, 'John Francis Daley', 9, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `film_cast`
--

CREATE TABLE `film_cast` (
  `id` int(11) NOT NULL,
  `CastID` int(11) NOT NULL,
  `FilmID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film_cast`
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
(10, 'R-13'),
(13, 'R-17+'),
(18, 'R-21+');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `KontakID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`KontakID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(7, 'hasan', 'hasan@gmail.com', 'support@movflx.com', 'web ini sangat keren ');

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
  ADD PRIMARY KEY (`id`),
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
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`KontakID`);

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
-- AUTO_INCREMENT untuk tabel `film_cast`
--
ALTER TABLE `film_cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `KontakID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `UlasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`KategoriID`) REFERENCES `kategori_umur` (`KategoriID`);

--
-- Ketidakleluasaan untuk tabel `film_cast`
--
ALTER TABLE `film_cast`
  ADD CONSTRAINT `film_cast_ibfk_1` FOREIGN KEY (`FilmID`) REFERENCES `film` (`FilmID`),
  ADD CONSTRAINT `film_cast_ibfk_2` FOREIGN KEY (`CastID`) REFERENCES `list_cast` (`CastID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

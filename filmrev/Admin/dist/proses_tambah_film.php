<?php
include '../config/koneksi.php';

$target_dir = "../../public/img/posters/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Pindahkan file pertama ke lokasi pertama
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// // Menyalin file ke lokasi kedua
// $second_target_dir = "../../public/img/posters/";
// $second_target_file = $second_target_dir . basename($_FILES["image"]["name"]);
// copy($target_file, $second_target_file);

$filmid = $_POST["FilmID"];
$judul = $_POST["Judul"];
$gambar = $_FILES["image"]['name'];
$link = $_POST["Link_Trailer"];
$sinopsis = $_POST["Sinopsis"];
$rating = $_POST["Rating"];
$tgl_rilis = $_POST["Tanggal_rilis"];
$durasi = $_POST["Durasi"];
$sutradara = $_POST["Sutradara"];
$genre = $_POST["Genre"];
$kategori = $_POST["Kategori"];

$result = mysqli_query($conn, "INSERT INTO `film` (`FilmID`, `Judul`, `Gambar`, `Link_Trailer`, `Synopsis`, `Rating`, `Tanggal_Release`, `Durasi_Film`, `Sutradara`, `GenreID`, `KategoriID`) VALUES ('$filmid', '$judul', '$gambar', '$link', '$sinopsis', '$rating', '$tgl_rilis', '$durasi', '$sutradara', '$genre', '$kategori');");

header("Location:index.php");

<?php
include '../config/koneksi.php';

$target_dir = "assets/images/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


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

$result = mysqli_query($conn, "UPDATE `film` set `Judul` = '$judul', `Gambar`='$gambar', `Link_Trailer`='$link', `Synopsis`='$sinopsis', `Rating`='$rating', `Tanggal_Release`='$tgl_rilis', `Durasi_Film`='$durasi', `Sutradara`='$sutradara', `GenreID`='$genre', `KategoriID`='$kategori' where `FilmID` = '$_GET[FilmID]'");

header("Location:index.php");

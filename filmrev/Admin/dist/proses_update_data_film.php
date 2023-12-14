<?php
include '../config/koneksi.php';

// if(isset($_FILES)){
// $target_dir = "../../public/img/posters/";
// $target_file = $target_dir . basename($_FILES["image"]["name"]);
// $uploadOk = true;
// move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
// $gambar = $_FILES["image"]['name'];
// $isImageExist = ", `Gambar`='$gambar'";
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// }

$target_dir = "../../public/img/posters/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$img_tmp = $_FILES["image"]["tmp_name"];
$gambar = $_FILES["image"]["name"];
move_uploaded_file($img_tmp, $target_file);


$filmid = $_POST["FilmID"];
$judul = $_POST["Judul"];
$link = $_POST["Link_Trailer"];
$sinopsis = $_POST["Sinopsis"];
$rating = $_POST["Rating"];
$tgl_rilis = $_POST["Tanggal_rilis"];
$durasi = $_POST["Durasi"];
$sutradara = $_POST["Sutradara"];
$genre = $_POST["Genre"];
$kategori = $_POST["Kategori"];
$gambarlama = $_POST["imagelama"];

// jika ada foto baru
if ($gambar) {
    // jika ada foto baru
    // foto lama akan terhapus
    unlink('../../public/img/posters/' . $gambarlama);
    move_uploaded_file($img_tmp, $target_file);
    $query = "UPDATE `film` set `Judul` = '$judul', `Link_Trailer`='$link', `Synopsis`='$sinopsis', `Rating`='$rating', `Tanggal_Release`='$tgl_rilis', `Durasi_Film`='$durasi', `Sutradara`='$sutradara', `GenreID`='$genre', `KategoriID`='$kategori', `Gambar`='$gambar' where `FilmID` = '$_GET[FilmID]'";
} else {
    $query = "UPDATE `film` set `Judul` = '$judul', `Link_Trailer`='$link', `Synopsis`='$sinopsis', `Rating`='$rating', `Tanggal_Release`='$tgl_rilis', `Durasi_Film`='$durasi', `Sutradara`='$sutradara', `GenreID`='$genre', `KategoriID`='$kategori' where `FilmID` = '$_GET[FilmID]'";
}

$result = mysqli_query($conn, $query);

header("Location:index.php");

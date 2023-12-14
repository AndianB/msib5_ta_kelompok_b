<?php
include '../config/koneksi.php';


// get variable from form input

$Nama_Kategori = $_POST["Nama_Kategori"];


$result = mysqli_query($conn, "UPDATE `kategori_umur` set `Nama_Kategori` = '$Nama_Kategori' where `KategoriID` = '$_GET[KategoriID]'");

header("Location:data_kategoriumur.php");

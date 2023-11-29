<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "DELETE from kategori_umur where `KategoriID` = '$_GET[KategoriID]'");

header("Location:data_kategoriumur.php");

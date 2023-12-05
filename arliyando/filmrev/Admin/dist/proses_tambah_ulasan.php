<?php
include '../config/koneksi.php';

$Username = $_POST["Username"];
$Ulasan = $_POST["Ulasan"];

$result = mysqli_query($conn, "INSERT INTO `ulasan` (`Username`, `Ulasan_Text`) VALUES ('$Username', '$Ulasan');");

header("Location:data_ulasan.php");

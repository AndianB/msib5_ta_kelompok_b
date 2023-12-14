<?php
include '../config/koneksi.php';

// get variable from form input
$GenreID = $_POST["GenreID"];
$Nama_Genre = $_POST["Nama_Genre"];


$result = mysqli_query($conn, "INSERT INTO `genre` (`GenreID`, `Nama_Genre`) VALUES ('$GenreID', '$NamaGenre');");

header("Location:data_genre.php");

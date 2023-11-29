<?php
include '../config/koneksi.php';


// get variable from form input

$Nama_Genre = $_POST["Nama_Genre"];


$result = mysqli_query($conn, "UPDATE `genre` set `Nama_Genre` = '$Nama_Genre' where `GenreID` = '$_GET[GenreID]'");

header("Location:data_genre.php");

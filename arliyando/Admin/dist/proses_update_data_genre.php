<?php
include '../config/koneksi.php';


// get variable from form input
$GenreID = $_POST["GenreID"];
$Nama_Genre = $_POST["Nama_Genre"];


$result = mysqli_query($conn, "UPDATE `genre` set `GenreID` = '$GenreID', `Nama_Genre` = '$Nama_Genre' where `GenreID` = '$GET[GenreID]'");

header("Location:genre.php");

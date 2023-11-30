<?php
include '../config/koneksi.php';


// get variable from form input

$Nama_Cast = $_POST["Nama_Cast"];


$result = mysqli_query($conn, "UPDATE `list_cast` set `Nama_Cast` = '$Nama_Cast' where `CastID` = '$_GET[CastID]'");
header("Location:data_cast.php");

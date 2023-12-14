<?php
include '../config/koneksi.php';

$CastID = $_POST["CastID"];
$NamaCast = $_POST["Nama_Cast"];

$result = mysqli_query($conn, "INSERT INTO `list_cast` (`CastID`, `Nama_Cast`) VALUES ('$CastID', '$NamaCast');");

header("Location:data_cast.php");

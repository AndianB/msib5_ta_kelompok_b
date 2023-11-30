<?php
include '../config/koneksi.php';


// get variable from form input
$CastID = $_POST["CastID"];
$NamaCast = $_POST["Nama_Cast"];


$result = mysqli_query($conn, "UPDATE `list_cast` set `CastID` = '$CastID', `Nama_Cast` = '$NamaCast' where `CastID` ='$_GET[CastID]'");

header("Location:data_cast.php");

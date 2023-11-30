<?php
include '../config/koneksi.php';


// get variable from form input
$UlasanID = $_POST["UlasanID"];
$Username = $_POST["Username"];
$Ulasan = $_POST["Ulasan"];


$result = mysqli_query($conn, "UPDATE `ulasan` set `UlasanID` = '$UlasanID', `Username` = '$Username', `Ulasan_Text` = '$Ulasan' where `UlasanID` ='$_GET[UlasanID]'");

header("Location:data_ulasan.php");

<?php
include '../config/koneksi.php';


// get variable from form input
$Username = $_POST["Username"];
$Ulasan = $_POST["Ulasan_Text"];


$result = mysqli_query($conn, "UPDATE `ulasan` set `Username` = '$Username', `Ulasan_Text` = '$Ulasan' where `UlasanID` ='$_GET[UlasanID]'");

header("Location:data_ulasan.php");

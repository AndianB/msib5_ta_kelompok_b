<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "DELETE from ulasan where `UlasanID` = '$_GET[UlasanID]'");

header("Location:data_ulasan.php");

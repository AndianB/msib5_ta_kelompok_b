<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "DELETE from kontak where `KontakID` = '$_GET[KontakID]'");

header("Location:data_kontak.php");

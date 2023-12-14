<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "DELETE from list_cast where `CastID` = '$_GET[CastID]'");

header("Location:data_cast.php");

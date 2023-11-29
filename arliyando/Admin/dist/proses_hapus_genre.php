<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "DELETE from genre where `GenreID` = '$_GET[GenreID]'");

header("Location:genre.php");

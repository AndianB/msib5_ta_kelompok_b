<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "DELETE from film where `FilmID` = '$_GET[FilmID]'");

header("Location:data_film.php");

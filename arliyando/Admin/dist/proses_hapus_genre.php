<?php
include '../config/koneksi.php';

if (isset($_GET['GenreID'])) {
    $GenreID = $_GET['GenreID'];
    $sql = "DELETE FROM genre WHERE GenreID= $GenreID";
    $query = mysqli_query($conn, $sql);

    // cek query simpan data berhasil atau tidak
    if ($query) {

        header('Location: data_genre.php');
    } else {

        header('Location: data_genre.php');
    }
} else {
    die('akses di larang ...');
}

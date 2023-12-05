<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Film - Admin | Filmrev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        <?php include "template/top-bar.php" ?>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include "template/left-sidebar.php" ?>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Filmrev</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Film</li>
                                        <li class="breadcrumb-item active">Edit Data Film</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Data Film</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
                    include '../config/koneksi.php';
                    $film = mysqli_query($conn, "SELECT * from film where FilmID='$_GET[FilmID]'");

                    while ($f = mysqli_fetch_array($film)) {
                        $FilmID = $f["FilmID"];
                        $Judul = $f["Judul"];
                        $Gambar = $f["Gambar"];
                        $Link = $f["Link_Trailer"];
                        $Sinopsis = $f["Synopsis"];
                        $Rating = $f["Rating"];
                        $Tgl = $f["Tanggal_Release"];
                        $Durasi = $f["Durasi_Film"];
                        $Sutradara = $f["Sutradara"];
                        $Genre = $f["GenreID"];
                        $Kategori = $f["KategoriID"];
                    }
                    ?>

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form action="proses_update_data_film.php?FilmID=<?php echo $_GET['FilmID']?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">ID Film</label>
                                            <input type="text" name="FilmID" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan ID Film" value="<?php echo $FilmID ?>" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                            <input type="text" name="Judul" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Judul" value="<?php echo $Judul ?>">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="image">Gambar</label>
                                            <img src="assets/images/uploads/<?php echo $f['Gambar'] ?>" width="100px">
                                            <input type="file" class="form-control mt-2" id="image" name="image" value="<?php echo $Gambar ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Link Trailer</label>
                                            <input type="text" name="Link_Trailer" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link" value="<?php echo $Link ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Sinopsis</label>
                                            <!-- <input type="text-area" name="Sinopsis" class="form-control" id="exampleFormControlInput1" placeholder="Isi sinopsis"> -->
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="Sinopsis" placeholder="Isi Sinopsis" rows="3" value="<?php echo $Sinopsis ?>"><?php echo $Sinopsis ?></textarea>
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Rating</label>
                                            <input type="text" name="Rating" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Rating" value="<?php echo $Rating ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal rilis</label>
                                            <input type="date" name="Tanggal_rilis" class="form-control" id="exampleFormControlInput1" placeholder=" Isi Tanggal Rilis" value="<?php echo $Tgl ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                                            <input type="number" name="Durasi" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Durasi (Menit)" value="<?php echo $Durasi ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Sutradara</label>
                                            <input type="text" name="Sutradara" class="form-control" id="exampleFormControlInput1" placeholder="Isi Sutradara" value="<?php echo $Sutradara ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                            <!-- <input type="text" name="Genre" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Genre"> -->
                                            <select class="form-control" id="genre" name="Genre" required>
                                                <option value="" disabled selected hidden><?php $Genre ?></option>
                                                <option value="1" <?php if ($Genre == '1') echo 'selected'; ?>>Horror</option>
                                                <option value="1" <?php if ($Genre == '2') echo 'selected'; ?>>Romance</option>
                                                <option value="1" <?php if ($Genre == '3') echo 'selected'; ?>>Thriler</option>
                                            </select>
                                        </div>
                                        <div class=" mb-4">
                                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                            <!-- <input type="text" name="Kategori" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Kategori"> -->
                                            <select class="form-control" id="Kategori" name="Kategori" required>
                                                <option value="" disabled selected hidden><?php $Kategori ?> </option>
                                                <option value="13" <?php if ($Kategori == '13') echo 'selected';?>>Remaja</option>
                                            </select>
                                        </div>
                                        <button type="button" name="tutup" class="btn btn-secondary me-2" onclick="history.back();">Tutup</button>
                                        <button name="tambah" type="submit" class="btn btn-success" onclick="save()">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <?php include "template/footer.php" ?>
                    <!-- end Footer -->

</body>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Datatables js -->
<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Datatable Demo Aapp js -->
<script src="assets/js/pages/datatable.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<script>
    function save() {
        swal('Good job!', 'data berhasil di update!', 'success');
    }
</script>

</html>
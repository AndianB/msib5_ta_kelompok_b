<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tambah Film - Admin | Filmrev</title>
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
                                        <li class="breadcrumb-item active">Tambah Data Film</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Tambah Data Film</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form action="proses_tambah_film.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">ID Film</label>
                                            <input type="text" name="FilmID" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan ID Film">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                            <input type="text" name="Judul" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Judul">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="image">Gambar</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Link Trailer</label>
                                            <input type="text" name="Link_Trailer" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Sinopsis</label>
                                            <!-- <input type="text-area" name="Sinopsis" class="form-control" id="exampleFormControlInput1" placeholder="Isi sinopsis"> -->
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="Sinopsis" placeholder="Isi Sinopsis" rows="3"></textarea>
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Rating</label>
                                            <input type="text" name="Rating" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Rating">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal rilis</label>
                                            <input type="date" name="Tanggal_rilis" class="form-control" id="exampleFormControlInput1" placeholder=" Isi Tanggal Rilis">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                                            <input type="number" name="Durasi" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Durasi (Menit)">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Sutradara</label>
                                            <input type="text" name="Sutradara" class="form-control" id="exampleFormControlInput1" placeholder="Isi Sutradara">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">GenreID</label>
                                            <!-- <input type="text" name="Genre" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Genre"> -->
                                            <select class="form-control" id="genre" name="Genre" required>
                                                <option value="" disabled selected hidden>Pilih Genre</option>
                                                <option value="1">Horror</option>
                                                <option value="2">Romance</option>
                                                <option value="3">Thriler</option>
                                            </select>
                                        </div>
                                        <div class=" mb-4">
                                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                            <!-- <input type="text" name="Kategori" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Kategori"> -->
                                            <select class="form-control" id="Kategori" name="Kategori" required>
                                                <option value="" disabled selected hidden>Pilih Kategori</option>
                                                <option value="13">Remaja</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" name="tutup" class="btn btn-secondary me-2" onclick="history.back();">Tutup</button>
                                            <button type="submit" name="tambah" class="btn btn-success" value="simpan">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <?php include "template/footer.php" ?>
                    <!-- end Footer -->
                </div>
            </div>
        </div>
    </div>

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
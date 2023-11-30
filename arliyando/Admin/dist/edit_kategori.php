<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Kategori - Admin | Filmrev</title>
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
                                        <li class="breadcrumb-item active">Kategori</li>
                                        <li class="breadcrumb-item active">Edit Data Kategori</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Data Kategori</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <?php
                    include '../config/koneksi.php';
                    $kategori_umur = mysqli_query($conn, "SELECT * from kategori_umur where KategoriID='$_GET[KategoriID]'");

                    while ($k = mysqli_fetch_array($kategori_umur)) {
                        $KategoriID = $k["KategoriID"];
                        $Nama_Kategori = $k["Nama_Kategori"];
                    }
                    ?>

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form action="proses_update_data_kategori.php?KategoriID=<?php echo $_GET['KategoriID'] ?>" method="post" enctype="multipart/form-data">
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Katgeori ID</label>
                                            <input type="text" name="KategoriID" class="form-control" id="exampleFormControlInput1" placeholder="KategoriID" value="<?php echo $KategoriID ?>">
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                                            <input type="text" name="Nama_Kategori" class="form-control" id="exampleFormControlInput1" placeholder="Nama Kategori" value="<?php echo $Nama_Kategori ?>">
                                        </div>
                                        <button type="button" name="tutup" class="btn btn-secondary me-2" onclick="history.back();">Tutup</button>
                                        <button name="tambah" type="submit" class="btn btn-success" onclick="save()">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Filmrev - by <b>Group B</b>
                                </div>
                            </div>
                        </div>
                    </footer>
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
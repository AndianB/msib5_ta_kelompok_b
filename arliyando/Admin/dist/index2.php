<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Datatables - Admin | Filmrev</title>
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
                                        <li class="breadcrumb-item active">Datatables</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Data Tables</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <a class="btn btn-primary text-light"> Tambah Data </a>
                                </div> -->
                                <div class="card-body">
                                    <?php
                                    include '../config/koneksi.php';
                                    $query = mysqli_query($conn, "SELECT f.Judul, f.Link_Trailer, f.Synopsis, f.Rating, f.Durasi_Film, g.Nama_Genre, k.Nama_Kategori FROM film as f join genre as g on g.GenreID=f.FilmID join kategori_umur as k on k.KategoriID=f.FilmID Order by f.FilmID asc;");
                                    ?>
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Link</th>
                                                <th>Sinopsis</th>
                                                <th>Rating</th>
                                                <th>Durasi</th>
                                                <th>Genre</th>
                                                <th>Kategori</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            </tr>
                                            <?php
                                            if (mysqli_num_rows($query) > 0) {
                                                $no = 1;
                                                while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                    <tr>
                                                        <td> <?php echo $data["Judul"] ?></td>
                                                        <td> <?php echo $data["Link_Trailer"] ?></td>
                                                        <td> <?php echo $data["Synopsis"] ?></td>
                                                        <td> <?php echo $data["Rating"] ?></td>
                                                        <td> <?php echo $data["Durasi_Film"] ?></td>
                                                        <td> <?php echo $data["Nama_Genre"] ?></td>
                                                        <td> <?php echo $data["Nama_Kategori"] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include "template/footer.php" ?>
                <!-- end Footer -->
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



</html>
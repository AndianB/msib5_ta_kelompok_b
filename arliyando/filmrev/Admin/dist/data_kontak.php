<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Kontak - Admin | Filmrev</title>
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
                                        <li class="breadcrumb-item active">Kontak</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Data Kontak</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <a class="btn btn-primary text-light" href="tambah_cast.php"> Tambah Data </a>
                                </div> -->
                                <div class="card-body">
                                    <?php
                                    include '../config/koneksi.php';
                                    $query = mysqli_query($conn, "SELECT * from kontak;");
                                    ?>
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                                        <thead>
                                            <tr>
                                                <th>Kontak ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Aksi</th>
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
                                                        <td> <?php echo $data["KontakID"] ?></td>
                                                        <td> <?php echo $data["Name"] ?></td>
                                                        <td> <?php echo $data["Email"] ?></td>
                                                        <td> <?php echo $data["Subject"] ?></td>
                                                        <td> <?php echo $data["Message"] ?></td>
                                                        <td>
                                                            <a href="proses_hapus_kontak.php?KontakID=<?php echo $data["KontakID"] ?>" onclick="konfirmasiHapus( . $data['KontakID'] . )" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end content -->

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
<script>
    function konfirmasiHapus(CastID) {

        swal({
                title: "Apakah Kamu yakin?",
                text: "Data akan terhapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirect ke halaman Proses-hapus-data.php jika konfirmasi disetujui
                    swal({
                        title: "Good job!",
                        text: "Data terhapus!",
                        icon: "success",
                    });
                    setTimeout(function() {
                        window.location.href = "proses_hapus_cast.php?CastID=" + CastID;
                    }, 2000);
                } else {
                    swal("Data Batal Di hapus!", {
                        icon: "info",
                    });
                }
            });
    }
</script>
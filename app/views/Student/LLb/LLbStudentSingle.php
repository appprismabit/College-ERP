<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.css">


    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/custom/css/ol.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <script src="<?php echo BASE_URL; ?>/plugins/custom/js/ol.js"></script>





</head>

<body>

    <div class="hold-transition sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <!-- Navbar -->
            <?php include BASE_PATH . '/layout/header.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include BASE_PATH . '/layout/aside.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="loader-overlay">
                                <div class="loader"></div>
                            </div>

                            <div class="col-12">


                                <div class="card p-3">
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-success">
                                            Active
                                        </div>
                                    </div>
                                    <div class="card-header d-flex">
                                        <!-- Image on the left -->
                                        <div class="col-6 justify-content-start">
                                            <img src="<?php echo BASE_URL; ?>/img/student/demostudent.jpg" style="height: 180px; width: 180px;">
                                            <h5 class="mt-2">Enrollment Number: <span class="text-bold">LLB20251001</span></h5>
                                        </div>
                                        <!-- Text on the right -->
                                        <div class="col-3">

                                            <h5 class="">RollNo: <span class="text-bold">2025/LLB/0001</span></h5>
                                            <h5 class="">Student Name: <span class="text-bold">Imdadul Haque</span></h5>
                                            <h5 class="">Gender: <span class="text-bold">Male</span></h5>
                                            <h5 class="">Father Name: <span class="text-bold">Samsul Hoque</span></h5>
                                            <h5 class="">Mother Name: <span class="text-bold">Moshira Begum</span></h5>

                                        </div>
                                        <div class="col-3">
                                            <h5 class="">Semester: <span class="text-bold">1st</span></h5>
                                            <h5 class="">Course: <span class="text-bold">LLB</span></h5>
                                            <h5 class="">Contact No: <span class="text-bold">1234567890</span></h5>

                                            <h5 class="">Address: <span class="text-bold">xyz</span></h5>

                                            <h5 class="">Cast: <span class="text-bold">General</span></h5>


                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h2>Education Details</h2>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-6">
                                                <h5 class="">HSLC: <span class="text-bold">Sonari public school</span></h5>
                                                <h5 class="">Percentage: <span class="text-bold">60%</span></h5>
                                                <h5 class="">Year: <span class="text-bold">2013-14</span></h5>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>Englihh</th>
                                                        <th>Science</th>
                                                        <th>Maths</th>
                                                        <th>Social Science</th>
                                                        <th>Hindi</th>

                                                    </tr>
                                                    <tbody>
                                                        <tr>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="">HS: <span class="text-bold">Dispur College</span></h5>
                                                <h5 class="">Stream: <span class="text-bold">Science</span></h5>
                                                <h5 class="">Year: <span class="text-bold">2014-15</span></h5>

                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>English</th>
                                                        <th>Alternative English</th>
                                                        <th>Physics</th>
                                                        <th>Chemistray</th>
                                                        <th>Maths</th>
                                                        <th>Biology</th>

                                                    </tr>
                                                    <tbody>
                                                        <tr>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>
                                                            <td>60</td>

                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>


                                        </div>






                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>






            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include BASE_PATH . '/layout/footer.php'; ?>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo BASE_URL; ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo BASE_URL; ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>
    <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>

    <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>


</body>

</html>
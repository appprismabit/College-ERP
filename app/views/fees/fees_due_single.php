<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fees Due</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
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
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.css">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/custom/css/ol.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/css/style.css">

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <style>

    </style>
</head>

<body>
    <div class="hold-transition sidebar-mini sidebar-collapse">
        <div class="loader-overlay">
            <div class="loader"></div>
        </div>
        <div class="wrapper">
            <!-- Navbar -->
            <?php include BASE_PATH . '/layout/header.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include BASE_PATH . '/layout/aside.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content mt-4">
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
                                            <img src="<?php echo BASE_URL; ?>/img/student/demostudent.jpg" style="height: 120px; width: 120px;">
                                            <h5 class="mt-2 text-md">Enrollment Number: <span class="text-bold">LLB20251001</span></h5>
                                        </div>
                                        <!-- Text on the right -->
                                        <div class="col-3">

                                            <h6 class="text-md">RollNo: <span class="text-bold">2025/LLB/0001</span></h6>
                                            <h5 class="text-md">Student Name: <span class="text-bold">Imdadul Haque</span></h5>
                                            <h5 class="text-md">Gender: <span class="text-bold">Male</span></h5>
                                            <h5 class="text-md">Father Name: <span class="text-bold">Samsul Hoque</span></h5>
                                            <h5 class="text-md">Mother Name: <span class="text-bold">Moshira Begum</span></h5>

                                        </div>
                                        <div class="col-3">
                                            <h5 class="text-md">Semester: <span class="text-bold">1st</span></h5>
                                            <h5 class="text-md">Course: <span class="text-bold">LLB</span></h5>
                                            <h5 class="text-md">Contact No: <span class="text-bold">1234567890</span></h5>

                                            <h5 class="text-md">Address: <span class="text-bold">xyz</span></h5>

                                            <h5 class="text-md">Cast: <span class="text-bold">General</span></h5>


                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-12 text-center text-dark">
                                                <span class="text-lg">Student Payment Details</span>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">


                                                <table class="table table-bordered text-sm">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Info</th>
                                                        <th>Total Price</th>
                                                        <th>Amount Paid</th>
                                                        <th>Discount(%)</th>
                                                        <th>Amount Due</th>


                                                    </tr>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Admission Fee</td>
                                                            <td>45000</td>
                                                            <td>10000</td>
                                                            <td>N/A</td>
                                                            <td>35000</td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Semester 1</td>
                                                            <td>10000</td>
                                                            <td>5000</td>
                                                            <td>50%</td>
                                                            <td>0</td>

                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Semester 2</td>
                                                            <td>10000</td>
                                                            <td>4000</td>
                                                            <td>50%</td>
                                                            <td>1000</td>

                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Semester 3</td>
                                                            <td>10000</td>
                                                            <td>Not yet attended</td>
                                                            <td>50%</td>
                                                            <td>N/A</td>

                                                        </tr>
                                                    </tbody>
                                                    <tfoot class="text-uppercase text-dark">
    <tr>
        <th colspan="5" class="text-right">Amount to be paid</th>
        <th>36000</th>
    </tr>
</tfoot>

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
        </div><!-- /.container-fluid -->

    </div><!-- /.content-wrapper -->

    <?php include BASE_PATH . '/layout/footer.php'; ?>

    </div>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.js"></script>

    <script>
        function getStudent() {
            var courseSelect = $('#courseSelect').val();
            var deptSelect = $('#deptSelect').val();
            var date = $('#dateSelect').val();

            $("#attendanceFor").text(courseSelect); // Set the course in the span
            $("#department").text(deptSelect); // Set the department in the span
            $("#date").text(date); // Set the date in the span
        }
    </script>

</body>

</html>
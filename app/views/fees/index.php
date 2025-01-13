<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fees</title>
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




    <style>
        .card {
            text-decoration: none;
            color: black;
        }
    </style>




</head>

<body>

    <div class="hold-transition sidebar-mini sidebar-collapse">
        <div class="loader-overlay">
            <div class="loader"></div>
        </div>
        <div class="wrapper text-sm">
            <!-- Navbar -->
            <?php include BASE_PATH . '/layout/header.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include BASE_PATH . '/layout/aside.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="m-0"><i class="fas fa-money-bill-wave me-2"></i> Manage Fees</h4>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item active">Fees</li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-8 mt-8">
                                                <a href="<?php echo BASE_URL; ?>/fees/fees_due" style="text-decoration: none; color: black;">
                                                    <div class="card shadow-lg text-center p-2 card-outline card-danger">
                                                        <!-- Image first -->
                                                        <div>
                                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/manage_attendance.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="Fees Due">

                                                        </div>
                                                        <!-- Text below the image -->

                                                        <span class="mt-3 text-sm ">Fees Due</span>

                                                    </div>
                                                </a>


                                            </div>
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-8 mt-8">
                                                <a href="<?php echo BASE_URL; ?>/fees/fees_paid" style="text-decoration: none; color: black;">
                                                    <div class="card shadow-lg text-center card-outline card-success p-2">
                                                        <!-- Image first -->
                                                        <div>
                                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/view_attendance.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="Fees Paid">

                                                        </div>
                                                        <!-- Text below the image -->
                                                        <span class="mt-3 text-sm ">Fees Paid</span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                </div>


                            </div>
                            <div class="col-12 col-md-6 mx-auto text-xs">
                                <div class="card p-3">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="search">Search</label>
                                                    <input type="text" class="form-control" placeholder="Enrollment Number Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="form-group">
                                                    <label for="search">&nbsp;</label>
                                                    <button type="button" class="form-control btn btn-outline-primary btn-sm" onclick="searchBtn();">Search</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-success">
                                            Active
                                        </div>
                                    </div>

                                    <div class="card-body" id="studentFeeDetailsInfo" style="display: none;">
                                        <div class=" d-flex">
                                            <!-- Image on the left -->
                                            <div class="col-5">
                                                <img src="<?php echo BASE_URL; ?>/img/student/demostudent.jpg" style="height: 120px; width: 120px;">
                                                <!-- Enrollment Number: <span class="text-bold">LLB20251001</span> -->
                                            </div>
                                            <!-- Text on the right -->
                                            <div class="col-3">

                                                RollNo: <span class="text-bold">2025/LLB/0001</span><br>
                                                Student Name: <span class="text-bold">Imdadul Haque</span><br>
                                                Gender: <span class="text-bold">Male</span><br>
                                                Father Name: <span class="text-bold">Samsul Hoque</span><br>
                                                Mother Name: <span class="text-bold">Moshira Begum</span><br>

                                            </div>
                                            <div class="col-3">
                                                Semester: <span class="text-bold">1st</span><br>
                                                Course: <span class="text-bold">LLB</span><br>
                                                Contact No: <span class="text-bold">1234567890</span><br>

                                                Address: <span class="text-bold">xyz</span><br>

                                                Cast: <span class="text-bold">General</span><br>


                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12 text-center text-dark">
                                                <span class="text-md">Student Payment Details</span>
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

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include BASE_PATH . '/layout/footer.php'; ?>

        </div>
    </div>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
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
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.js"></script>
    <script>
        function searchBtn() {
            $('#studentFeeDetailsInfo').show();
        }
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fees Paid</title>
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
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="m-0 text-success"> <i class="fa fa-check-circle" aria-hidden="true"></i> Fees Paid</h4>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item "><a href="<?php echo BASE_URL; ?>/fees/index">Fees</a></li>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-uppercase bg-success">
                                        <h4 class="text-sm">Fees Paid Details</h4>
                                    </div>

                                    <div class="card-body p-4 text-sm">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="courseSelect">Course</label>
                                                    <select class="form-control" id="courseSelect">
                                                        <option>Select Course</option>
                                                        <option value="Course 1">Course 1</option>
                                                        <option value="Course 2">Course 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="dateSelect">Semester</label>
                                                    <select class="form-control" id="dateSelect">
                                                        <option>Selester</option>
                                                        <option value="Course 1">All</option>
                                                        <option value="Course 2">Semester 1</option>
                                                        <option value="Course 2">Semester 2</option>
                                                        <option value="Course 2">Semester 3</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="dateSelect">Batch</label>
                                                    <select class="form-control" id="dateSelect">
                                                        <option>Year</option>
                                                        <option value="Course 1">2024</option>
                                                        <option value="Course 2">2025</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <button type="button" class="btn btn-success btn-sm p-2 form-control" onclick="getStudent();"><i class="fas fa-search"></i> Get Details</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container-fluid text-sm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-uppercase justify-content-between d-flex ">
                                        <button class="btn btn-info btn-sm float-right">Download Fee Structure</button>
                                        <div class="mt-2">course: <span id="attendanceFor"></span></div>
                                        <div class="mt-2">batch: <span id="department"></span></div>
                                    </div>

                                    <div class="card-body">

                                        <table class="table table-hover  table-bordered">
                                            <thead class="bg-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Enrollment Number</th>
                                                <th>Roll Number</th>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Semester</th>
                                                <th>Paid Amount</th>
                                                <th>Amount Break down</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1236781926</td>
                                                    <td>2024/02/02</td>
                                                    <td>Imdadul Hoque</td>
                                                    <td>Course 1</td>
                                                    <td>Semester 1 </td>
                                                    <td>45000</td>
                                                    <td><a href="<?php echo BASE_URL; ?>/fees/fees_due_single"><button type="button" class="btn btn-info btn-sm">View</button></a></td>
                                                </tr>
                                            </tbody>
                                        </table>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        $('.table').DataTable({
            "paging": true,
            "search": true,

        });

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
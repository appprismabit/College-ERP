<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Attendance</title>
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
                                        <h4 class="m-0"> <i class="fa fa-user-check" aria-hidden="true"></i> Manage Attendance</h4>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item active">Manage Attendance</li>
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
                                    <div class="card-header text-uppercase bg-primary">
                                        <h4 class="text-sm"> <i class="fas fa-plus fa-sm me-2"></i> Attendance</h4>
                                    </div>

                                    <div class="card-body p-4 text-sm">
                                        <div class="form-group">
                                            <label for="courseSelect">Course</label>
                                            <select class="form-control" id="courseSelect">
                                                <option>Select Course</option>
                                                <option value="Course 1">Course 1</option>
                                                <option value="Course 2">Course 2</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="deptSelect">Section Department</label>
                                            <select class="form-control" id="deptSelect">
                                                <option>Select Department</option>
                                                <option>Department 1</option>
                                                <option>Department 2</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="dateSelect">Date</label>
                                            <input type="date" class="form-control" id="dateSelect" />
                                        </div>

                                        <button type="button" class="btn btn-primary mt-4 btn-sm p-2" onclick="getStudent();"><i class="fas fa-search"></i> Get student</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body text-uppercase text-sm">
                                        <div class="mt-2">Attendance for: <span id="attendanceFor"></span></div>
                                        <div class="mt-2">Department: <span id="department"></span></div>
                                        <div class="mt-2">Date: <span id="date"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Roll</th>
                                                <th>Status</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mir</td>
                                                    <td>Male</td>
                                                    <td>2024/02/02</td>
                                                    <td><select class="form-control">
                                                            <option value="Present">Undefined</option>
                                                            <option value="Present">Present</option>
                                                            <option value="Absent">Absent</option>
                                                        </select></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-success btn-sm mt-4 p-2 btn-save">
                                            <i class="fas fa-save me-2"></i> Save
                                        </button>

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
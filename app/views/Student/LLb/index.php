<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L.L.B Student List</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">

    <style>

    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php include BASE_PATH . '/layout/header.php'; ?>
        <?php include BASE_PATH . '/layout/aside.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content text-sm mt-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-sm">
                                <div class="card-header">




                                    <div class="row">
                                        <div class="loader-overlay">
                                            <div class="loader"></div>
                                        </div>
                                        <div class="col-12">
                                            <h3 class="card-title">
                                                <a href="<?php echo BASE_URL; ?>/Student/index">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        Back
                                                    </button>
                                                </a>
                                            </h3>
                                            <div class="w-100 text-center text-uppercase" style="font-size: 30px;">
                                                L.L.B Student List <span id="fromDateAndTodateText"></span>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>


                                    <!-- <div class="row form-group">
                                        <div class="col-4">
                                            <label>From Date</label>
                                            <input class="form-control mr-2" type="date" id="fromDate">
                                        </div>
                                        <div class="col-4">
                                            <label>To Date</label>
                                            <input class="form-control mr-2" type="date" id="toDate">
                                        </div>
                                        <div class="col-4">
                                            <label>&nbsp;</label>
                                            <button type="button" class="btn btn-success form-control" onclick="showComplaintsByDate()">
                                                Show Complaints
                                            </button>
                                        </div>

                                    </div> -->

                                </div>



                                <div class="card-body">
                                    <table id="studentList" class="table table-bordered">
                                        <thead class="bg-dark border-bottom ">
                                            <tr class="text-center">
                                                <th>Enrollment No</th>
                                                <th>Roll No</th>
                                                <th>Student Name</th>
                                                <th>Semester</th>
                                                <th>Admission Date</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-light text-center">
                                            <!-- Table rows will be dynamically populated here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <?php include BASE_PATH . '/layout/footer.php'; ?>
    </div>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/dashboard/indexplugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/sweetalert/sweetalert.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>

    <script>
        const studentList = [{

            "id": 1,
            "enrollment_number": "LLB20251001",
            "roll_number": "2025/LLB/0001",
            "student_name": "Imdadul Haque",
            "semester": "1st",
            "admission_date": "2024-09-01",

        }, {
            "id": 2,
            "enrollment_number": "LLB20251002",
            "roll_number": "2025/LLB/0002",
            "student_name": "Ajit Hazarika",
            "semester": "1st",
            "admission_date": "2024-09-01"
        }, {
            "id": 3,
            "enrollment_number": "LLB20251003",
            "roll_number": "2025/LLB/0003",
            "student_name": "Alakesh Gogoi",
            "semester": "2nd",
            "admission_date": "2024-09-01"
        }, {
            "id": 4,
            "enrollment_number": "LLB20251004",
            "roll_number": "2025/LLB/0004",
            "student_name": "Himasree Das",
            "semester": "3rd",
            "admission_date": "2024-09-01"
        }];

        console.log(studentList);


        const tbody = $('#studentList tbody');
        studentList.forEach(student => {
            const row = `
            <tr>
            <td>${student.enrollment_number}</td>
            <td>${student.roll_number}</td>
            <td>${student.student_name}</td>
            <td>${student.semester}</td>
            <td>${student.admission_date}</td>
            <td><button class="btn btn-primary text-uppercase" onclick="LLbStudnetSingle();">Profile</button></td>
            
            </tr>
            `;
            tbody.append(row);
        });
        $('#studentList').DataTable({
            "searching": true,
            "paging": true,
            "ordering": true,
            "info": true
        });

        function LLbStudnetSingle() {
            window.location.href = "<?php echo BASE_URL; ?>/Student/LLbStudentSingle";
        }




        $(document).on("mousedown", function() {
            // Hide the element whenever any of the specified events occur
            $(".alert-danger").hide();
        });
    </script>
    <script src="./includes/js/add_stock.js"></script>
</body>

</html>
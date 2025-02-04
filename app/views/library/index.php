<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/bs-stepper/css/bs-stepper.min.css">
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
                                        <i class="fas fa-book"></i>
                                        Library
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item active">library</li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <section class="content text-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <a href="#overDueBooks" data-toggle="collapse" style="text-decoration: none; color: black;">
                                                    <div class="card shadow-lg text-center card-outline card-primary p-2">
                                                        <span class="text-lg">900</span>
                                                        <!-- Text below the image -->
                                                        <span class="text-xs mt-2">Overdue Books</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </div>
                        <div id="accordion">
                            <!-- STUDENT LIST -->
                            <?php include BASE_PATH . '/library/overdue_books.php'; ?>
                        </div>
                        <!-- model start -->
                        <div class="modal fade" id="IssueBookModel">
                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">
                                    <div class="modal-header justify-content-between">
                                        <h4 class="modal-title">
                                            Issue Books Form
                                        </h4>

                                    </div>
                                    <div class="model-body">
                                        <div class="issuebooks" style="padding: 20px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Library Card Number</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Name of Borrower</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" placeholder="Full Name" style="width: 100%; border-radius: 10px;">
                                                    </div>

                                                   

                                                </div>

                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Contact Number</label><br>
                                                        <input type="number" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">


                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Email Address (optional)</label><br>
                                                        <input type="email" class="p-2" id="exampleInputEmail1" placeholder="Phone Number" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                 
                                                </div>



                                            </div>
                                            <h5>Book Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Book Title</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" placeholder="Full Name" style="width: 100%; border-radius: 10px;">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> ISBN Number</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">


                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Date of Issue</label><br>
                                                        <input type="date" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">


                                                    </div>


                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Author Name</label><br>
                                                        <input type="email" class="p-2" id="exampleInputEmail1" placeholder="Phone Number" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Edition</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Due Date for Return</label><br>
                                                        <input type="date" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">


                                                    </div>

                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <div>
                                            <button type="button" class="btn btn-primary generate_pdf" style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Submit
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- model ending -->

<!-- model for add new book -->
                        <div class="modal fade" id="addNewBook">
                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">
                                    <div class="modal-header justify-content-between">
                                        <h4 class="modal-title">
                                            Add New Book
                                        </h4>

                                    </div>
                                    <div class="model-body">
                                        <div class="issuebooks" style="padding: 20px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Book Title</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" placeholder="Full Name" style="width: 100%; border-radius: 10px;">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> ISBN Number</label><br>
                                                        <input type="number" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Publisher</label><br>
                                                        <input type="number" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Author Name</label><br>
                                                        <input type="email" class="p-2" id="exampleInputEmail1" placeholder="Phone Number" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Edition</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Number of Copies</label><br>
                                                        <input type="text" class="p-2" id="exampleInputEmail1" style="width: 100%; border-radius: 10px;">
                                                    </div>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <div>
                                            <button type="button" class="btn btn-primary generate_pdf" style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Submit
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- model ending -->



                        <div class="row">
                            <div class="col-6">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-body">
                                        <div class=" d-flex justify-content-between">
                                            <span class="text-sm">Books Issued</span>
                                            <button class="btn btn-outline-info btn-sm  text-xs" data-toggle="modal" data-target="#IssueBookModel" style="border-radius: 8px;"><span class="text-xs">Issue Books</span></button>
                                        </div>
                                        <table class="table text-xs mt-2">
                                            <tr>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>Book Issued</th>
                                                <th>Department</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td>100021</td>
                                                    <td>Ramzan</td>
                                                    <td>12</td>
                                                    <td>Business</td>
                                                </tr>
                                                <tr>
                                                    <td>100022</td>
                                                    <td>Ramzan Hussain</td>
                                                    <td>10</td>
                                                    <td>Computer Science</td>
                                                </tr>
                                                <tr>
                                                    <td>100022</td>
                                                    <td>Ramzan Hussain</td>
                                                    <td>10</td>
                                                    <td>Computer Science</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-body">
                                        <div class=" d-flex justify-content-between">
                                            <span class="text-sm">Book List</span>
                                            <button class="btn btn-outline-info btn-sm  text-xs" data-toggle="modal" data-target="#addNewBook" style="border-radius: 8px;"><span class="text-xs">Add new Book</span></button>
                                        </div>
                                        <table class="table text-xs mt-2">
                                            <tr>
                                                <th>Book ID</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Available</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td>100021</td>
                                                    <td>Ancestor Trouble</td>
                                                    <td>Maud Newton</td>
                                                    <td>30</td>
                                                </tr>
                                                <tr>
                                                    <td>100022</td>
                                                    <td>Life is Everywhere</td>
                                                    <td>Lucy lves</td>
                                                    <td>23</td>
                                                </tr>
                                                <tr>
                                                    <td>100022</td>
                                                    <td>Stroller</td>
                                                    <td>Amanda Parrish</td>
                                                    <td>90</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <span class="text-sm">Top Choices</span>
                                <div class="row">
                                    <div class="col-md-2 mt-2 col-sm-3">
                                        <img src="<?php echo BASE_URL ?>/img/books/Book1.jpg" alt="Book Image" height="150px" width="150px" style=" border-radius: 20px;">
                                        <div class="mt-2 text-xs">Title of the Book</div>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <img src="<?php echo BASE_URL ?>/img/books/Book2.jpg" alt="Book Image" height="150px" width="150px" style=" border-radius: 20px;">
                                        <div class="mt-2 text-xs">Title of the Book</div>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <img src="<?php echo BASE_URL ?>/img/books/OIP.jpg" alt="Book Image" height="150px" width="150px" style=" border-radius: 20px;">
                                        <div class="mt-2 text-xs">Title of the Book</div>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <img src="<?php echo BASE_URL ?>/img/books/Book3.jpg" alt="Book Image" height="150px" width="150px" style=" border-radius: 20px;">
                                        <div class="mt-2 text-xs">Title of the Book</div>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <img src="<?php echo BASE_URL ?>/img/books/Book1.jpg" alt="Book Image" height="150px" width="150px" style=" border-radius: 20px;">
                                        <div class="mt-2 text-xs">Title of the Book</div>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <img src="<?php echo BASE_URL ?>/img/books/Book1.jpg" alt="Book Image" height="150px" width="150px" style=" border-radius: 20px;">
                                        <div class="mt-2 text-xs">Title of the Book</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
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
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/popper/umd/popper.min.js"></script>
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
    <script src="<?php echo BASE_URL; ?>/plugins/jspdf/js/jspdf.umd.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/html2canvas/js/html2canvas.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script>
        $("[data-bootstrap-switch]").bootstrapSwitch();

        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>
</body>

</html>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Users</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
        #loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Loader styling */
        .loader {
            border: 8px solid #f3f3f3;
            /* Light gray */
            border-top: 8px solid green;
            /* Blue */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }

        /* Spin animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php include BASE_PATH . '/layout/header.php'; ?>
        <?php include BASE_PATH . '/layout/aside.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="col-sm-6 pt-2">
                                    <h3 class="card-title"><a href="<?php echo BASE_URL; ?>/dashboard/index"><button type="button" class="btn btn-success btn-sm">
                                                <i class="fa fa-arrow-left"></i> Back
                                            </button></a></h3>


                                </div>
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-6 " id="profile">
                                            <!-- <h1 id="userregno" class="text-red"></h1> -->
                                            <h1 id="user_title"></h1>
                                            <h1 id="user_email"></h1>
                                            <h1 id="phone_number"></h1>
                                            <h1 id="user_status" class="text-red text-bold text-uppercase"></h1>

                                            <!-- <h1>Demo</h1> -->
                                        </div>
                                        <!-- MUR LOADER -->
                                        <div id="loader-overlay" style="display: none;">
                                            <div class="loader"></div>
                                        </div>





                                        <div class="col-sm-12">
                                            <h3 class="card-title float-right"><button type="button" class=" btn-success btn-sm text-uppercase" id="activeBtn" onclick="active()">
                                                    Active
                                                </button></h3>
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 class="card-title float-right"><button type="button" class="btn-danger btn-sm text-uppercase" id="blockBtn" onclick="block()">
                                                    Block
                                                </button></h3>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <b>ALL Comlaints</b>

                                    </div>

                                    <div class="card-body">
                                        <table id="complaintTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr class="text-center">

                                                    <th>Complaint ID</th>
                                                    <th>Description</th>
                                                    <th>Complaint Status</th>
                                                    <th>Technician Status</th>
                                                    <th>Details</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Table rows will be dynamically inserted here -->
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <b> Technician Area</b>
                                        <!-- Add button to open modal -->
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                                            Add area
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <table id="areaTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr class="text-center">
                                                    <!-- <th>Complaint ID</th> -->
                                                    <th>Area Name</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Table rows will be dynamically inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Technician Area</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <label>Select area</label>
                                            <select class="form-control" id="techArea">

                                            </select>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="addareas()">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

        </div>
        <?php include BASE_PATH . '/layout/footer.php'; ?>

        <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/jszip/jszip.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>


        <script>
            $(function() {
                $(".select2").select2();
                $("#example2").DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
                fetchArea();
                fetchUsersSingle();
                fetchAreaById();
                fetchUserComplaints();

                $('#loader-overlay').show();
                $('#activeBtn').hide();
                $('#blockBtn').hide();
                setTimeout(function() {
                    $('#loader-overlay').hide();

                }, 1000);



            });

            function active() {
                // $('#blockBtn').show();
                // $('#activeBtn').hide();

                const userStatus = "active";
                $.ajax({
                    url: "<?php echo BASE_URL; ?>/user/userStatus",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        userStatus: userStatus
                    },
                    success: function(response) {
                        console.log(response);
                        location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                    }

                });
            }

            function block() {
                const userStatus = "blocked";
                $.ajax({
                    url: "<?php echo BASE_URL; ?>/user/userStatus",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        userStatus: userStatus
                    },
                    success: function(response) {
                        console.log(response);
                        location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }


            function addareas() {
                var techArea = $('#techArea').val();

                $.ajax({
                    url: "<?php echo BASE_URL; ?>/user/addArea",
                    type: "POST",
                    dataType: "JSON",
                    data: {

                        techArea: techArea
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();


                        } else {
                            alert("Data not inserted" + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error fetching user data:', error);
                    }
                });
            }


            function fetchUsersSingle() {
                $.ajax({
                    url: "<?php echo BASE_URL; ?>/user/getAllUsersSingle",
                    type: "POST",
                    dataType: 'JSON',
                    success: function(response) {

                        if (response.success) {
                            var user = response.users_single;

                            var tableRows = '';



                            tableRows += `
                    <tr class="text-center">
                        <td>${user.user_name}</td>
                        <td>${user.user_reg_no}</td>
                        <td>${user.user_email}</td>
                        <td>${user.phone_number}</td>
                        <td>${user.user_status}</td>
                    </tr>`;



                            $('#userregno').text(user.user_reg_no ? 'Registration No. : ' + user.user_reg_no : "Registration number not available for now");
                            $('#user_title').text('Welcome : ' + user.user_title);
                            $('#user_email').text('Email : ' + user.user_email);
                            $('#phone_number').text('Contact Number : ' + user.phone_number);
                            $('#user_status').text('Status : ' + user.user_status);

                            if (user.user_status === "blocked") {


                                $('#activeBtn').show();
                                $('#blockBtn').hide();



                            } else if (user.user_status === "active") {

                                $('#blockBtn').show();
                                $('#activeBtn').hide();

                            }



                        } else {
                            console.log('Error fetching user data inside success:', response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error fetching user data:', error);
                    }
                });
            }




            function fetchUserComplaints() {
                $.ajax({
                    url: "<?php echo BASE_URL ?>/user/userComplaints",
                    type: "POST",
                    success: function(response) {
                        response = JSON.parse(response);


                        if (response.success) {
                            var complaints = response.data;
                            var tableRows = '';

                            complaints.forEach(function(complaint) {


                                var complaint_status = getStatusTask(parseInt(complaint.complaintStatus));
                              



                                // Build the table row dynamically
                                tableRows += `
                     <tr class="text-center">
                          <td>${complaint.complaintnumber}</td>
                           <td>${complaint.description}</td>
                           <td>${complaint_status}</td>
                              <td>${technicianStatus}</td>
                           <td>${complaint.created}</td>
                             </tr>`;
                            });

                            // Append the rows to the table body
                            $('#complaintTable tbody').html(tableRows);
                        }

                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching complaints: ", status, error);
                    }
                });
            }

            //Need to ask sir about this issue 

            function getTechnicianWorkingStatus($status) {


                var status;

                switch ($status) {

                    case 1:
                        status = '<span class="badge badge-info">Assigned</span>';
                        break;
                    case 0:
                        status = '<span class="badge badge-danger">Rejected</span>';

                }
                return status;
            }





            function fetchArea() {
                $.ajax({
                    url: "<?php echo BASE_URL; ?>/user/getAllArea",
                    type: "GET",
                    success: function(response) {

                        try {
                            response = JSON.parse(response);
                            var select = $('#techArea');
                            select.append('<option value=""> -- SELECT AREA -- </option>');

                            $.each(response.technician, function(index, data) {

                                select.append('<option value="' + data.area_id + '">' + data.title + '</option>');

                            });


                        } catch (error) {
                            console.error('Error parsing JSON:', error);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error fetching roles:', error);
                    }
                });
            }

            function fetchAreaById() {
                $.ajax({
                    url: "<?php echo BASE_URL; ?>/user/getAreaById",
                    type: "POST",
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            var areas = response.data;
                            var tableRows = '';
                            areas.forEach(function(area) {
                                tableRows += `
                        <tr class="text-center">
                            <td>${area.area_id}</td>
                            <td>${area.stamp}</td>
                        </tr>`;
                            });
                            $('#areaTable tbody').html(tableRows);
                        } else {
                            alert("Failed to fetch areas: " + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error fetching area data:', error);
                    }
                });
            }
        </script>

</body>

</html>
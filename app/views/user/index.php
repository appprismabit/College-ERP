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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php include BASE_PATH . '/layout/header.php'; ?>
        <?php include BASE_PATH . '/layout/aside.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper p-5">

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-light" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                                    <div class="w-100 text-center text-uppercase" style="font-size: 30px;">
                                        All Users
                                    </div>
                                    <h3 class="card-title"><a href="<?php echo BASE_URL; ?>/dashboard/index"><button <?php if ($_SESSION['role'] != 1) {
                                                                                                                            echo $hide;
                                                                                                                        }
                                                                                                                        ?> type="button" class="btn btn-success btn-sm">
                                                Back
                                            </button></a></h3>
                                    <h3 class="card-title float-right"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default">
                                            + Add User
                                        </button></h3>
                                </div>
                                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-info">



                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="alert alert-danger" id="error-msg" style="display:none"></div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label for="email">Name</label>
                                                                <input type="text" id="name" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label for="email">Email</label>
                                                                <input type="text" id="email" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" id="phone" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label for="password">Password</label>
                                                                <input type="text" id="password" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label for="roleSelect">Select Role</label>
                                                                <select class="form-control" id="roleSelect">

                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                <button type="button" class="btn btn-success" id="adduser" onclick="addUser()">Add</button>
                                                <button disabled class="btn btn-success" id="loadinguser" style="display:none">
                                                    <div class="spinner-border" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mur Loader-->
                                <div class="loader-overlay">
                                    <div class="loader"></div>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered ">
                                        <thead class="bg-dark">
                                            <tr class="text-center">
                                                <th>Sl No.</th>
                                                <th>User Name</th>
                                                <th>User title</th>

                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-light">
                                            <!-- Table rows will be dynamically inserted here -->
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
    <script src="<?php echo BASE_URL; ?>/plugins/sweetalert/sweetalert.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>


    <script>
        $(function() {
            var table = $("#example2").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,

            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

            $('#loader-overlay').show();
            fetchUsers();
            fetchAllRoles();
            setTimeout(function() {
                $('#loader-overlay').hide();

            }, 1000);


        });

        function fetchAllRoles() {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/user/getAllRoles",
                type: "GET",
                success: function(response) {
                    try {
                        response = JSON.parse(response);
                        var select = $('#roleSelect');
                        $.each(response.data, function(index, data) {

                            select.append('<option value="' + data.role_id + '">' + data.title + '</option>');

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

        function addUser() {
            const name = $('#name').val();
            const email = $('#email').val();
            const phone = $('#phone').val();
            const password = $('#password').val();
            const role = $('#roleSelect').val();
            if (!name || !email || !phone || !password || !role) {
                swal({
                    title: "Empty Fields",
                    text: "Please enter all fields",
                    icon: "error",
                    dangerMode: true
                });
                return;
            }

            $('#adduser').hide();
            $('#loadinguser').show();

            $.ajax({
                url: "<?php echo BASE_URL; ?>/user/registerUser",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    password: password,
                    role: role
                },
                success: function(response) {
                    response = JSON.parse(response);
                    $('#loadinguser').hide();
                    $('#adduser').show();

                    if (response.success) {

                        swal({
                            title: "Success",
                            text: "User added successfully",
                            icon: "success",

                        });


                        $('#modal-default').modal('hide');
                        resetForm();
                        fetchUsers();
                    } else {
                        swal({
                            title: "Error",
                            text: response.message,
                            icon: "error",
                            dangerMode: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $('#loadinguser').hide();
                    $('#adduser').show();
                    $('#error-msg').text('An error occurred while adding the user. Please try again.').show();
                }
            });
        }

        function resetForm() {
            $('#plantid').val('').trigger('change');
            $('#email').val('');
            $('#phone').val('');
            $('#password').val('');
            $('#error-msg').hide();
        }

        function fetchUsers() {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/user/getAllUsers",
                type: "GET",
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.success) {
                        renderUsers(response.users);
                    } else {
                        console.log('Error fetching user data inside success:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error fetching user data:', error);
                }
            });
        }

        function renderUsers(users) {
            var table = $("#example2").DataTable();
            table.clear().draw();
            users.forEach((user, index) => {
                table.row.add([
                    index + 1,
                    user.user_email,
                    user.user_title,
                    user.user_email,
                    user.phone_number,
                    user.role,
                    '<i class="fas fa-arrow-right action-icon" onclick="userSingle(' + user.user_id + ')"></i>'
                ]).draw(false);
            });

        }

        function userSingle(user_id) {

            var form = $('<form>', {
                'action': '<?php echo BASE_URL; ?>../Router/router',
                'method': 'POST',
            }).append($('<input>', {
                'type': 'hidden',
                'name': 'route_user',
                'value': user_id
            }));
            $('body').append(form);
            form.submit();

        }
    </script>
    <!--Mir Kashem Ali 
Kabyashree Buragohain
-->
</body>

</html>
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
        <div class="content-wrapper">

            <section class="content p-5">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Mur Loader-->
                        <div class="loader-overlay">
                            <div class="loader"></div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                    <h3 class="card-title"><a href="<?php echo BASE_URL; ?>/dashboard/index"><button <?php if ($_SESSION['role'] != 1) {
                                                                                                                            echo $hide;
                                                                                                                        }
                                                                                                                        ?> type="button" class="btn btn-success btn-sm">
                                                Back
                                            </button></a></h3>
                                    <div class="w-100 text-center text-uppercase" style="font-size: 30px;">
                                        All Technicians
                                    </div>

                                </div>

                                <div class="card-body">
                                    <table id="example2" class="table table-bordered">
                                        <thead class="bg-dark">
                                            <tr class="text-center">
                                                <th>Sl No.</th>
                                                <th>Technician Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-light">

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


            fetchTechnicians();



        });

        function fetchTechnicians() {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/user/getAllTechnician",
                type: "GET",
                success: function(response) {
                    response = JSON.parse(response);

                    var table = $("#example2").DataTable();
                    table.clear().draw();
                    response.data.forEach((user, index) => {
                        table.row.add([
                            index + 1,
                            user.user_title,
                            user.user_email,
                            user.phone_number,
                            '<i class="fas fa-arrow-right action-icon" onclick="userSingle(' + user.user_id + ')"></i>'
                        ]).draw(false);

                    });
                },



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

</body>

</html>
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


                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center mt-4">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                   
                                        <div id="error-msg" class="alert alert-danger" style="display: none;"></div>
                                        <div id="success-msg" class="alert alert-success" style="display: none;"></div>
                                        <div class="form-group mb-3">
                                            <label for="inputOldPassword1">Enter Old Password</label>
                                            <input type="password" class="form-control" id="inputOldPassword1" placeholder="Old Password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="inputNewPassword">Enter New Password</label>
                                            <input type="password" class="form-control" id="inputNewPassword" placeholder="New Password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="inputConfirmPassword">Confirm New Password</label>
                                            <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button  class="btn btn-success" onclick="confirmBtn()">Confirm Identity</button>
                                            <div style="display: none;" class="spinner-border text-success" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>

                                    
                                </div>
                            </div>
                        </div>
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

    <script>
        function confirmBtn() {
            $('.spinner-border').show();

            var inputOldPassword1 = $('#inputOldPassword1').val();
            var inputNewPassword = $('#inputNewPassword').val();
            var inputConfirmPassword = $('#inputConfirmPassword').val();


            if (inputNewPassword != inputConfirmPassword) {
                $('#error-msg').text('New and Confirm Password is not matching').show(); 

                setTimeout(() =>{
                    $('.spinner-border').hide();
                })
            } 
            else {
                $.ajax({
                    url: "<?php echo BASE_URL; ?>/change_password/updatePass",
                    type: "POST",
                    data: {
                        inputOldPassword1: inputOldPassword1,
                        inputNewPassword: inputNewPassword
                    },
                    success: function(response) {
                        response = JSON.parse(response);

                        if (response.success == true) {
                            $('#success-msg').text('Password Changed Successfully.').show(); 
                            setTimeout(() => {
                               
                            $('.spinner-border').hide();
                                window.location.href = "<?php echo BASE_URL; ?>/dashboard/index"; 
                              
                            }, 500);
                        } else {
                            $('#error-msg').text('Password Changing Failed.').show(); 
                            
                            setTimeout(() => { 
                                $('.spinner-border').hide();
                                window.location.reload();
                            }, 500);

                        }
                    },
                });

            }


        }
    </script>

</body>

</html>
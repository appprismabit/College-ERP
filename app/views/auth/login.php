<?php

$_SESSION['user_id'] = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="card">
                    <div class="card-body bg-aqua">
                        <div class="row ">
                            <div class="col-md-3" style="text-align:left">
                                <img class="img img-responsive" width="80px" src="<?php echo BASE_URL; ?>/img/demologo.png">
                            </div>
                            <div class="col-md-6" style="text-align:center">
                                <h4>
                                    <b>Demo Public School</b><br>
                                    <!-- <h6>GUCL</h6> -->
                                    <h6>Near Demo Guwahati , Guwahati-ABCDS</h6>
                                </h4>
                            </div>
                            <div class="col-md-3" style="text-align:right">
                                <img class="img img-responsive" width="80px" src="<?php echo BASE_URL; ?>/img/demologo.png">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card text-left">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body ">
                                        <div class="container">
                                            <h2>Login</h2>
                                            <div id="error-msg" class="alert alert-danger" style="display: none;"></div>
                                            <div id="success-msg" class="alert alert-success" style="display: none;"></div>
                                            <form id="loginForm" method="POST">
                                                <div class="form-group">
                                                    <label for="username">Username:</label>
                                                    <input type="text" class="form-control" id="username" name="username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password:</label>
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="captcha">Enter CAPTCHA:</label>
                                                    <img src="<?php echo BASE_URL; ?>/captcha.php" alt="CAPTCHA Image">
                                                    <input type="text" class="form-control" id="captcha" name="captcha" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                                <div style="display: none;" class="spinner-border text-success" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.login-card-body -->
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer bg-dark">
        <strong>Powered By <a href="#"></a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(event) {
                $('.spinner-border').show();
                $('.btn-primary').hide();
                event.preventDefault();


                var username = $('#username').val();
                var password = $('#password').val();
                var captcha = $('#captcha').val();
                if (username == 'admin' && password == '123456') {
                    $('#success-msg').text('Login successfull').show();
                    setTimeout(() => {
                        window.location.href = "<?php echo BASE_URL; ?>/dashboard/index";
                    }, 500);
                } else {
                    $('#error-msg').text('Invalid username or password').show();
                }



            });
        });
        $(document).on("mousedown", function() {
            // Hide the element whenever any of the specified events occur
            $(".alert-danger").hide();
        });
    </script>
</body>

</html>
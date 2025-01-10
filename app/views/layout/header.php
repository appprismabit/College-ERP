<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <h4 style="color: green;">Demo Public School</h4>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->



      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " style="color:red" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="<?php echo BASE_URL; ?>/auth/logout">
            Logout
          </a>
          <!-- <div class="dropdown-divider"></div>
          <a href="<?php echo BASE_URL; ?>/changePass/index" class="dropdown-item text-left bg-white text-danger">
            <i class="fas fa-key mr-2 "></i>Change Password

          </a> -->

          <div class="dropdown-divider"></div>
          <a href="<?php echo BASE_URL; ?>/change_password/index" class="dropdown-item text-left bg-white text-danger">
            <i class="fas fa-key mr-2 "></i>Change Password

          </a>

      </li>

    </ul>

  </nav>
</body>

</html>
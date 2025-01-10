<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboard" class="brand-link bg-light">
    <img src="<?php echo BASE_URL ?>/img/logo.png" height="60px" width="40px" alt="Merico" class="brand-image">
    <span class="brand-text font-weight-light"><b>Demo Public School</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <p class="d-block text-success">Online</p>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item menu-open">

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo BASE_URL; ?>/dashboard/index" class="nav-link">
                <i class="nav-icon  fas fa-home"></i>
                <p>
                  Dashboard

                </p>
              </a>

          </ul>
        </li>

        <li class="nav-item menu-open">

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?php echo BASE_URL; ?>/user/index" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  User List
                </p>
              </a>

          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-check"></i>
            <p>
              Attendance
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Manage Attendance</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>View Attendance</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
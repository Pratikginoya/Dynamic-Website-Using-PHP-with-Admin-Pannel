<?php include_once 'connection.php';

ob_start();

if (!isset($_SESSION['login_id']))
{
      header('location:index.php');
}

/* To find the URL */
$url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  
 
$url = $_SERVER['REQUEST_URI'];   

$msg = "select * from contact where status=0";
$total_msg = mysqli_query($conn,$msg);
$notification = mysqli_num_rows($total_msg);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

   <!-- Ion Slider -->
  <link rel="stylesheet" href="plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="plugins/bootstrap-slider/css/bootstrap-slider.min.css">

   <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
   <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">

   <!-- CodeMirror -->
  <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">

  <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">

  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">

  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">

   <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- pace-progress -->
  <link rel="stylesheet" href="plugins/pace-progress/themes/black/pace-theme-flat-top.css">

  <!-- flag-icon-css -->
  <link rel="stylesheet" href="plugins/flag-icon-css/css/flag-icon.min.css">

  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="view-contacts.php" class="nav-link">Contacted Us</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php if($notification>0) { echo $notification; } ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"> <?php if($notification>0) { echo $notification." Notification"; } ?></span>
          <?php if($notification>0){ ?>
          <div class="dropdown-divider"></div>
          <a href="view-contacts.php" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> <?php echo @$notification; ?> new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
            <?php } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../files/images/01_comment.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Pratikkumar Ginoya</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

<!-- Dashboard -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/dashboard.php") { echo "menu-open"; } ?>">
            <a href="dashboard.php" class="nav-link <?php if($url=="/yom/admin/dashboard.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?php if($url=="/yom/admin/dashboard.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul> -->
          </li>
        </ul>


<!-- Slider -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/add-slider.php" || $url=="/yom/admin/view-slider.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/add-slider.php" || $url=="/yom/admin/view-slider.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-slider.php" class="nav-link <?php if($url=="/yom/admin/add-slider.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-slider.php" class="nav-link <?php if($url=="/yom/admin/view-slider.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View/Manage Slider</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

<!-- Services -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/add-services.php" || $url=="/yom/admin/view-services.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/add-services.php" || $url=="/yom/admin/view-services.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-services.php" class="nav-link <?php if($url=="/yom/admin/add-services.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Services</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-services.php" class="nav-link <?php if($url=="/yom/admin/view-services.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View/Manage Services</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>


<!-- Client -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/add-client.php" || $url=="/yom/admin/view-client.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/add-client.php" || $url=="/yom/admin/view-client.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Client
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-client.php" class="nav-link <?php if($url=="/yom/admin/add-client.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Client</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-client.php" class="nav-link <?php if($url=="/yom/admin/view-client.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View/Manage Client</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>


<!-- Blog -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/add-blog.php" || $url=="/yom/admin/view-blog.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/add-blog.php" || $url=="/yom/admin/view-blog.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-blog.php" class="nav-link <?php if($url=="/yom/admin/add-blog.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-blog.php" class="nav-link <?php if($url=="/yom/admin/view-blog.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View/Manage Blog</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>


<!-- About -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/add-thought.php" || $url=="/yom/admin/view-thought.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/add-thought.php" || $url=="/yom/admin/view-thought.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-thought.php" class="nav-link <?php if($url=="/yom/admin/add-thought.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Your Thought</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-thought.php" class="nav-link <?php if($url=="/yom/admin/view-thought.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View/Manage Thoughts</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>


<!-- Latest Photos -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/add-photos.php" || $url=="/yom/admin/view-photos.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/add-photos.php" || $url=="/yom/admin/view-photos.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Latest Photos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-photos.php" class="nav-link <?php if($url=="/yom/admin/add-photos.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Photos</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-photos.php" class="nav-link <?php if($url=="/yom/admin/view-photos.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View/Manage Photos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>


<!-- Contact Us -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($url=="/yom/admin/view-contacts.php") { echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if($url=="/yom/admin/view-contacts.php") { echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data of Contact Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view-contacts.php" class="nav-link <?php if($url=="/yom/admin/view-contacts.php") { echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact Us Data</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>



<!-- Log-out -->
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="log-out.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Log-out
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


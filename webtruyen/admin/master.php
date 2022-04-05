<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MediBed</title>
  <script src="http://www.cs.washington.edu/education/courses/cse190m/09sp/scriptaculous.js" type="text/javascript"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/bootstrap-grid.min">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!--Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
 
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <link rel="stylesheet" href="../home/home.css">
   
   
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="../home/home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>BD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Medi</b>BED</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Xin Chào Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
                <p>
                <span class="hidden-xs">Xin Chào Admin </span>
                  <small>Member since May. 2018</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p >Xin Chào Admin</p>
          <!-- Status -->
          <a href=""><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form (Optional) -->
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-medkit"></i> <span>Truyện</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../truyen/create.php">Thêm Truyện</a></li>
            <li><a href="../truyen">Danh Sách Truyện</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user-md"></i> <span>Chương Truyện</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tap/create.php">Chương Mới</a></li>
            <li><a href="../tap">Danh Sách Chương</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>BTV Đề Cử</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../decu/create.php">Thêm Đề Cử</a></li>
            <li><a href="../decu">All Đề Cử</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>View Đề Cử</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../ViewDeCu">All Xep Hang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Thể Loại</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../theloai/create.php">Thêm Thể Loại</a></li>
            <li><a href="../theloai">Danh Sách The Loai</a></li>
          </ul>
        </li>
      </ul>
      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Welcome to Admin Dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> MediBed</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <?php
        echo $content;
       ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="https://codinginfinite.com">Coding Infinite</a>.</strong> All rights reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>  
<script>
</script>

</body>
</html>
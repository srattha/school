<!DOCTYPE html>
<html  ng-app="app">
<head>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">

 <title>@yield('title')</title>

 <!-- Bootstrap core CSS-->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Custom fonts for this template-->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

 <!-- Page level plugin CSS-->
 <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

 <!-- Custom styles for this template-->
 <link href="css/admin.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.4.2/sweetalert2.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.4.2/sweetalert2.min.js"></script>

 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Page level plugin JavaScript-->
 <script src="vendor/chart.js/Chart.min.js"></script>
 <script src="vendor/datatables/jquery.dataTables.js"></script>
 <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/admin.min.js"></script>

 <!-- Demo scripts for this page-->
 <script src="js/datatables.js"></script>
 <script src="js/chart-area.js"></script>


 <script type="text/javascript" src="{{ asset('assets/js/angular/angular.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/js/angular/app.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/js/angular/service.js') }}"></script>
 @yield('css')
</head>

<body id="page-top">
 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Admin</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
   <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
   <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
     <button class="btn btn-primary" type="button">
      <i class="fas fa-search"></i>
     </button>
    </div>
   </div>
  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
   <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-bell fa-fw"></i>
     <span class="badge badge-danger">9+</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
     <a class="dropdown-item" href="#">Action</a>
     <a class="dropdown-item" href="#">Another action</a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#">Something else here</a>
    </div>
   </li>
   <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-envelope fa-fw"></i>
     <span class="badge badge-danger">7</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
     <a class="dropdown-item" href="#">Action</a>
     <a class="dropdown-item" href="#">Another action</a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#">Something else here</a>
    </div>
   </li>
   <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-user-circle fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
     <a class="dropdown-item" href="#">Settings</a>
     <a class="dropdown-item" href="#">Activity Log</a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
   </li>
  </ul>

 </nav>
 <div id="wrapper">
  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
   <li class="nav-item {{ Request::is('admin-index') ? 'active' : '' }}">
    <a class="nav-link" href="admin-index">
     <i class="fas fa-fw fa-tachometer-alt"></i>
     <span>Dashboard</span>
    </a>
   </li>
   <li class="nav-item {{ Request::is('admin-user') ? 'active' : '' }}">
    <a class="nav-link " href="admin-user">
     <i class="fas fa-users"></i>
     <span>ข้อมูลผู้ใช้</span></a>
    </li>

    <li class="nav-item {{ Request::is('admin-student') ? 'active' : '' }}">
    <a class="nav-link " href="admin-student">
     <i class="fas fa-users"></i>
     <span>ข้อฒูลนักเรียน</span></a>
    </li>

    <li class="nav-item {{ Request::is('admin-news') ? 'active' : '' }}">
     <a class="nav-link" href="admin-news">
      <i class="fas fa-newspaper"></i>
      <span>ข่าว</span></a>
     </li>
    </ul>
    <div id="content-wrapper">

     <div class="container-fluid">
      @yield('content')


     </div>
    </div>

   </div>
  </body>
  @yield('script')
  </html>

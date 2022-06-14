

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- <?php if($level == 1) : ?> -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Petugas Dinsos</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>

                <!-- Heading -->
                <div class="sidebar-heading">
                </div>

                <li class="nav-item active">
                    <a class="nav-link" href="data-akun.php">
                        <i class="fas fa-fw fa-user-cog"></i>
                        <span>Data Akun</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="data-kategori.php">
                            <i class="fas fa-fw fa-list"></i>
                            <span>Data Kategori</span></a>
                        </li>

<!-- <div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    Data Wilayah
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Data Kecamatan</a>
    <a class="dropdown-item" href="#">Data Desa</a>
</div>
</div>
-->
<li class="nav-item active">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-list"></i>
          <span><b>Data Wilayah</b></span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="data-kecamatan.php">Data Kecamatan</a>
            <a class="collapse-item" href="data-desa.php">Data Desa</a>
            <div class="collapse-divider"></div>
        </div>
    </div>
</li>
            <!--  <li class="nav-item active">
                <a class="nav-link" href="data-kecamatan.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Data Kecamatan</span></a>
            </li>


             <li class="nav-item active">
                <a class="nav-link" href="data-desa.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Data Desa</span></a>
                </li> -->



                <li class="nav-item active">
                    <a class="nav-link" href="data-pmks.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Data PMKS</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="download-laporan.php">
                            <i class="fas fa-fw fa-download"></i>
                            <span>Download Laporan</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-fw fa-sign-out-alt"></i>
                                <span>Logout</span></a>
                            </li>


                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">

                            <!-- Sidebar Toggler (Sidebar) -->
                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>

                        </ul>

                        <!-- <?php elseif($level == 2) : ?> -->
                        <!-- Sidebar -->
                        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                            <!-- Sidebar - Brand -->
                            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                                <div class="sidebar-brand-icon rotate-n-15">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="sidebar-brand-text mx-3">Petugas Desa</div>
                            </a>

                            <!-- Divider -->
                            <hr class="sidebar-divider my-0">

                            <!-- Nav Item - Dashboard -->
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">
                                    <i class="fas fa-fw fa-tachometer-alt"></i>
                                    <span>Dashboard</span></a>
                                </li>

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                </div>

<!--              <li class="nav-item active">
                <a class="nav-link" href="data-kecamatan.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Data Kecamatan</span></a>
            </li>


             <li class="nav-item active">
                <a class="nav-link" href="data-desa.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Data Desa</span></a>
                </li> -->



                <li class="nav-item active">
                    <a class="nav-link" href="data-pmks.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Data PMKS</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span></a>
                        </li>


                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>

                    <!-- <?php elseif($level == 3) : ?> -->
                    <!-- Sidebar -->
                    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                            <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">Kepala Dinas</div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                            </li>

                            <!-- Heading -->
                            <div class="sidebar-heading">
                            </div>

                            <li class="nav-item active">
                                <a class="nav-link" href="data-pmks.php">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Data PMKS</span></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-fw fa-sign-out-alt"></i>
                                        <span>Logout</span></a>
                                    </li>


                                    <!-- Divider -->
                                    <hr class="sidebar-divider d-none d-md-block">

                                    <!-- Sidebar Toggler (Sidebar) -->
                                    <div class="text-center d-none d-md-inline">
                                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                    </div>

                                </ul>

                                <!-- <?php endif; ?> -->
                                <!-- End of Sidebar -->

                                <!-- Content Wrapper -->
                                <div id="content-wrapper" class="d-flex flex-column">

                                    <!-- Main Content -->
                                    <div id="content">

                                        <!-- Topbar -->
                                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                            <!-- Sidebar Toggle (Topbar) -->
                                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                                <i class="fa fa-bars"></i>
                                            </button>

                                            <!-- Topbar Navbar -->
                                            <ul class="navbar-nav ml-auto">

                                                <div class="topbar-divider d-none d-sm-block"></div>

                                                <!-- Nav Item - User Information -->
                                                <li class="nav-item dropdown no-arrow">
                                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nama; ?></span>
                                                        <img class="img-profile rounded-circle" src="assets/img/icon.jfif" alt="icon" width="15%">
                                                    </a>
                                                    <!-- Dropdown - User Information -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="data-akun.php">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Profile
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>

                                        </nav>
                <!-- End of Topbar -->
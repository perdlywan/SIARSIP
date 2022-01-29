<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Pengarsipan</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <link rel="icon" href="../assets/img/LOGO-BPS.png">

    <script src="../assets/vendor/jquery/jquery.min.js"></script>



</head>
<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] != "berhasil") {
    header("location:../index.php?pesan=belum_login");
}
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-30">
                    <img src="../assets/img/LOGO-BPS.png" alt="Logo BPS" style="width:50px;">
                </div>
                <div class="sidebar-brand-text mx-2" style="font-size:10pt;">BPS Kabupaten Serang</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="kategori.php">
                    <i class="fas fa-folder-open"></i>
                    <span>Data Kategori</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="petugas.php">
                    <i class="fas fa-user-tie"></i>
                    <span>Data Koordinator</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-user"></i>
                    <span>Data Pegawai</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="arsip.php">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Data Arsip</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="riwayat.php">
                    <i class="fas fa-download"></i>
                    <span>Riwayat Unduh</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama']; ?> <span class="font-weight-bold">(Administrator)</span></span>
                                <?php if ($_SESSION['foto'] == "") {
                                ?>
                                    <img src="<?= 'https://ui-avatars.com/api/?name=' . $_SESSION['nama'] . '&background=4e73df&color=ffffff&size=100'; ?>" class="img-profile rounded-circle">
                                <?php
                                } else {
                                ?>
                                    <img src="../assets/img/admin/<?php echo $_SESSION['foto']; ?>" size="100" class="img-profile rounded-circle">
                                <?php
                                }
                                ?>
                            </a>

                            <!-- Dropdown - User Information -->

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2"></i> Profil Saya
                                </a>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengeloaan Air Mineral (PAM)</title>
  <link href='<?php echo base_url(); ?>assets/images/header.icon' rel='shortcut icon'>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    @media print {
      .diprint {
        display: none;
      }

    }
  </style>
  <style type="text/css">
    @media print {
      #diprint {
        display: none;
      }
    }
  </style>

  <style type="text/css">
    @media print {
      .hide {
        display: inline;
      }
    }
  </style>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html" class="diprint">IS Pengeloaan Air Mineral (PAM) V1</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">

        <div class="input-group-append">
        </div>
      </div>
    </form>

    <!-- Navbar -->

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav diprint">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('page_checker/welcome'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('page_checker/gantiPassword'); ?>">
          <i class="fas fa-fw fa-key"></i>
          <span>Ganti Password</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Master Data</h6>
          <a class="dropdown-item" href="<?php echo base_url('page_checker/zona'); ?>">Zona</a>
          <a class="dropdown-item" href="<?php echo base_url('page_checker/pelanggan'); ?>">Pelanggan</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transaksi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Transaksi Data</h6>
          <a class="dropdown-item" href="<?php echo base_url('page_checker/checker'); ?>">Checker</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Laporan</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Laporan Master :</h6>
          <a class="dropdown-item fa fa-user-circle" href="<?php echo base_url('page_checker/cariPelanggan'); ?>">Laporan Pelanggan</a>
          <a class="dropdown-item fa fa-user-circle" href="<?php echo base_url('page_checker/cariZona'); ?>">Laporan Zona</a>
          <h6 class="dropdown-header">Laporan Transaksi :</h6>
          <a class="dropdown-item fa fa-envelope" href="<?php echo base_url('page_checker/cariCekMeteran'); ?>">Laporan Cek Meteran</a>
          <h6 class="dropdown-header">Laporan Periode :</h6>
          <a class="dropdown-item fa fa-envelope" href="<?php echo base_url('page_checker/laporan_checker'); ?>">Laporan Cek </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">



      </div>

      <!-- Area Chart Example-->
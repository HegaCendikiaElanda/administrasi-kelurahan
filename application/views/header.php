<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Administrasi Kelurahan</title>
        <link href="<?php echo base_url('css/styles.css'); ?>" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url('welcome');?>">Administrasi Kelurahan</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            </a>
                            <div class="sb-sidenav-menu-heading">Permohonan Surat</div>
                            <a class="nav-link" href="<?php echo base_url('permohonan_ktp') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Permohonan KTP
                            </a>
                            <a class="nav-link" href="<?php echo base_url('permohonan_kk') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Permohonan KK
                            </a>
                            <a class="nav-link" href="<?php echo base_url('permohonan_domisili') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Permohonan Domisili
                            </a>
                            <a class="nav-link" href="<?php echo base_url('permohonan_pindah') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-map"></i></div>
                                Permohonan Pindah
                            </a>
                            <a class="nav-link" href="<?php echo base_url('permohonan_skck') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Permohonan SKCK
                            </a>
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link" href="<?php echo base_url('warga'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data Warga
                            </a>
                            <a class="nav-link" href="<?php echo base_url('pegawai'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Pegawai
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata('nama'); ?>
                    </div>
                </nav>
            </div>
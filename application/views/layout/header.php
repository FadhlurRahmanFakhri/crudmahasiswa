<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Banteng Merah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>22TIB</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="profile" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?= $user['nama']; ?></h6>
                        <span><?= $user['email']; ?></span>
                    </div>
                </div>

                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <?php
                    if ($user['role'] == 'Admin') { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-school me-2"></i>Mahasiswa</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="<?= base_url('Mahasiswa') ?>" class="dropdown-item">Data Mahasiswa</a>
                                <a href="<?= base_url('Mahasiswa/tambah') ?>" class="dropdown-item">Tambah Mahasiswa</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Prodi</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="<?= base_url('Prodi') ?>" class="dropdown-item">Data Prodi</a>
                                <a href="<?= base_url('Prodi/tambah') ?>" class="dropdown-item">Tambah Prodi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-wallet me-2"></i>Pinjaman</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="<?= base_url('Pinjaman') ?>" class="dropdown-item">Data Peminjaman</a>
                                <a href="<?= base_url('Pinjaman/tambah') ?>" class="dropdown-item">Tambah Peminjaman</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>User</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="<?= base_url('Profil') ?>" class="dropdown-item">Profil</a>
                            </div>
                        </div>
                    <?php } ?>
                    <a href="<?= base_url('Auth/logout') ?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Logout</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
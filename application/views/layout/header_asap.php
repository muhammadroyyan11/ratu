<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASAP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/asap.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/asap.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v4.7.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="" class="hero-logo" data-aos="zoom-in"><img src="<?php echo base_url('assets/img/asap.png') ?>" alt=""></a>
      <h1>ASAP</h1>
      <h1 data-aos="zoom-in">Prevent Fire As Soon As Possible</h1>
      <h2 data-aos="fade-up">Avoid, Prevent and Handle Fires Properly</h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#solution" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="<?= base_url('home') ?>"><img src="<?php echo base_url('assets/img/asap.png') ?>" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <?php
          if (!$this->session->has_userdata('login_session')) : ?>
            <li><a class="nav-link scrollto active" href="<?= base_url('home') ?>">home</a></li>
            <li class="dropdown"><a href=""><span>Solution</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?= base_url('stowage') ?>">Stowage Plan</a></li>
                <li><a href="<?= base_url('home') ?>" data-bs-toggle="modal" data-bs-target="#sopKebakaran">SOP Kebakaran</a></li>
                <li><a href="<?= base_url('home') ?>" data-bs-toggle="modal" data-bs-target="#penKebakaran">Penanganan Kebakaran</a></li>
                <li><a href="<?= base_url('muster') ?>">Muster List</a></li>
                <li><a href="<?= base_url('about') ?>">About Us</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="<?= base_url('auth') ?>">Login</a></li>
          <?php elseif (is_admin()) : ?>
            <li><a class="nav-link scrollto active" href="<?= site_url('user/setting') ?>">Hi <?= userdata('nama') ?>!</a></li>
            <li class="dropdown"><a href=""><span>View Data</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?= base_url('data/data_umum') ?>">Data User</a></li>
                <li><a href="<?= base_url('') ?>">Data Umum Kapal User</a></li>
                <li><a href="<?= base_url('') ?>">Data Manifest Kargo User</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="<?= base_url('auth/logout') ?>">Logout</a></li>
          <?php else : ?>
            <li><a class="nav-link scrollto active" href="<?= site_url('user/setting') ?>">Hi <?= userdata('nama') ?>!</a></li>
            <li class="dropdown"><a href="#solution"><span>Solution</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?= base_url('stowage') ?>">Stowage Plan</a></li>
                <li><a href="<?= base_url('home') ?>" data-bs-toggle="modal" data-bs-target="#sopKebakaran">SOP Kebakaran</a></li>
                <li><a href="<?= base_url('home') ?>" data-bs-toggle="modal" data-bs-target="#penKebakaran">Penanganan Kebakaran</a></li>
                <li><a href="<?= base_url('home') ?>" data-bs-toggle="modal" data-bs-target="#inputData">Input Data</a></li>
                <li><a href="<?= base_url('muster') ?>">Muster List</a></li>
                <li><a href="<?= base_url('about') ?>">About Us</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="<?= base_url('auth/logout') ?>">Logout</a></li>
          <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
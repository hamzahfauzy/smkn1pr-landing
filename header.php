<?php 
$menu = menu();
$sitename = site_options('name');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=get_title()?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta property="og:image" content="<?= isset($og_gambar) ? $og_gambar : url('').'assets/img/logo.png' ?>">

  <!-- Favicons -->
  <link href="<?=url('')?>assets/img/logo.png" rel="icon">
  <link href="<?=url('')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=url('')?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=url('')?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=url('')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=url('')?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=url('')?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=url('')?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=url('')?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=url('')?>assets/css/style.css" rel="stylesheet">
  <link href="<?=url('')?>assets/css/theme.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.8.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?=url()?>"><?=$sitename?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a href="<?=url()?>" class="<?= !isset($_GET['slug']) ? 'active' : ''?>">Beranda</a>
          </li>
          <?php foreach($menu['data'] as $m): ?>
          <?php if(isset($m['childs']) && count($m['childs'])): ?>
          <li class="dropdown">
            <a href="#"><span><?=$m['name']?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach($m['childs'] as $child): ?>
              <li><a href="<?=$child['type_as'] == 'Page' ? url($child['content']) : ($child['type_as']=='Category'?url('category/'.$child['content']):$child['content'])?>" class="<?= $child['type_as'] == 'Page' && isset($_GET['slug']) && $_GET['slug'] == $child['content'] ? 'active' : ''?>"><?=$child['name']?></a></li>
              <?php endforeach ?>
            </ul>
          </li>
          <?php else: ?>
          <li>
            <a href="<?=$m['type_as'] == 'Page' ? url($m['content']) : ($m['type_as']=='Category'?url('category/'.$m['content']):$m['content'])?>" class="<?= $m['type_as'] == 'Page' && isset($_GET['slug']) && $_GET['slug'] == $m['content'] ? 'active' : ''?>"><?=$m['name']?></a>
          </li>
          <?php endif ?>
          <?php endforeach ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
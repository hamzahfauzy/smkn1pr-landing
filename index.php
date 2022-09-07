<?php 
require 'functions.php'; 
include('header.php'); 

$landing = Post::landing();
$landing = $landing['data'];

?>

<?php if(isset($landing['hero'])): ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <h1><?=$landing['hero']['title']?></h1>
    <h2><?=$landing['hero']['content']?></h2>
    <a href="<?=url('berita')?>" class="btn-get-started">Lihat Berita</a>
  </div>
</section><!-- End Hero -->
<?php endif ?>

<main id="main">

  <?php if(isset($landing['featured'])): ?>
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="<?=$landing['featured']['thumb_url']?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3><?=$landing['featured']['title']?></h3>
          <?=$landing['featured']['content']?>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  <?php endif ?>

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">
        <?php foreach($landing['stats'] as $stat_name => $stat_value): ?>
        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?=$stat_value?>" data-purecounter-duration="1" class="purecounter"></span>
          <p><?=$stat_name?></p>
        </div>
        <?php endforeach ?>
      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Berita</h2>
        <p>Terbaru</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php if(!count($landing['posts'])): ?>
        <div class="col-12">
          <center><i>Tidak ada data</i></center>
        </div>
        <?php endif ?>
        <?php foreach($landing['posts'] as $post): ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="<?=$post['thumb_url']?>" class="img-fluid" alt="<?=$post['title']?>">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <?=implode(',',array_map(function($p){return '<h4>'.$p['name'].'</h4>';},$post['categories']))?></h4>
              </div>

              <h3><a href="<?=url($post['name'])?>"><?=$post['title']?></a></h3>
              <p><?=$post['content']?></p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                  <span>Admin</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bx bx-comment"></i>&nbsp;50
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
        <?php endforeach ?>

      </div>

    </div>
  </section><!-- End Popular Courses Section -->

  <?php if(isset($landing['achievements'])): ?>
  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar</h2>
        <p>Prestasi</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php foreach($landing['achievements'] as $prestasi): ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4><?=$prestasi['title']?></h4>
              <?=implode(',',array_map(function($p){return '<span>'.$p['title'].'</span>';},$post['categories']))?></h4>
              <?=$prestasi['content']?>
            </div>
          </div>
        </div>
        <?php endforeach ?>

      </div>

    </div>
  </section><!-- End Trainers Section -->
  <?php endif ?>

</main><!-- End #main -->

<?php include('footer-top.php') ?>
<?php include('footer.php'); ?>
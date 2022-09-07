<?php 
require 'functions.php'; 
include('header.php'); 
$posts = Post::singleCategory($_GET['name']);
?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><?=$_GET['name']?></h2>
        <p>List dari semua postingan yang memiliki kategori <?=$_GET['name']?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php foreach($posts['data'] as $data): ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?=$data['thumb_url']?>" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <?=implode(',',array_map(function($p){return '<h4>'.$p['name'].'</h4>';},$data['categories']))?></h4>
                </div>

                <h3><a href="<?=url($data['name'])?>"><?=$data['title']?></a></h3>
                <?=$data['content']?>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?=url()?>assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php endforeach ?>
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

<?php include('footer.php'); ?>
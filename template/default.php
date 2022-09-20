<?php 
include('header.php'); 
?>
<main id="main" class="single-default">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?=$content['title']?></h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="author-section">
              <b><i class="bi bi-person-circle"></i> Admin</b> | 
              <?=implode(',',array_map(function($p){return '<span>'.$p['title'].'</span>';},$content['categories']))?> | 
              <i class="bi bi-calendar-date"></i> <?= date('d-m-Y H:i', strtotime($content['created_at'])) ?>
            </div>
            <div class="thumbnail">
              <img src="<?=$content['thumb_url']?>" alt="<?=$content['title']?>">
            </div>
            <?=$content['content']?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
<?php include('footer.php'); ?>
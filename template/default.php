<?php include('header.php'); ?>
<main id="main">
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
          <div class="col-12 col-md-8">
            <?=$content['content']?>
          </div>
          <div class="col-12 col-md-4">
            <h3>Berita Populer</h3>
            <h3>Berita Terbaru</h3>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
<?php include('footer.php'); ?>
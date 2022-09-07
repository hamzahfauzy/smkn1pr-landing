
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SMK Negeri 1 Pulau Rakyat</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> and Modified by SMK Negeri 1 Pulau Rakyat IT's Team
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <?php foreach(site_options('socials') as $option): ?>
        <a href="<?=$option['url']?>" class="<?=$option['class']?>"><i class="<?=$option['icon']?>"></i></a>
        <?php endforeach ?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=url('')?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=url('')?>assets/vendor/aos/aos.js"></script>
  <script src="<?=url('')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=url('')?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=url('')?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=url('')?>assets/js/main.js"></script>

</body>

</html>
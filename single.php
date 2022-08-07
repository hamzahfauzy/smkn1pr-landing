<?php include('header.php'); ?>

<?php $post = Post::single($_GET['slug']) ?>

<section>
  <?php if($post['data'] && !empty($post['data'])): ?>
    <?php foreach($post['data'] as $content): ?>
    <h1><?=$content['post_title']?></h1>
    <p><?=$content['post_content']?></p>
    <?php endforeach ?>

    <a href="<?=url()?>"> << Back to home</a>
  <?php else: ?>
  <center>404 Not Found</center>
  <?php endif ?>
</section>

<?php include('footer.php'); ?>
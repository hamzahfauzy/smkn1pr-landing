<?php include('header.php'); ?>

<?php $posts = Post::get() ?>
<section class="home">
  <h1>this is home</h1>
  <ul>
    <?php foreach($posts['data'] as $post): ?>
    <li><a href="<?=url($post['post_name'])?>"><?=$post['post_title']?></a></li>
    <?php endforeach ?>
  </ul>
</section>

<?php include('footer.php'); ?>
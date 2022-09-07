<?php 
require 'functions.php';
$post = Post::single($_GET['slug']); ?>

<?php 
  if($post['data'] && !empty($post['data'])):
    foreach($post['data'] as $content): 
      Site::$title = $content['title'];
      if(!empty($content['template']) && file_exists('template/'.$content['template']))
      {
        include 'template/'.$content['template'];
      }
      else
      {
        include 'template/default.php';
      }
    endforeach;
  else: ?>
  <center>
    <h1>404 Not Found</h1>
  </center>
<?php endif ?>
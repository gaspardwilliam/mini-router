<?php
add_action('header',function(){
  
});
add_action('footer',function(){
  
});


$template->setTitle('post');
/**PAGE**/
require_once(__DIR__.'/../parts/header.php');
require_once(__DIR__.'/../parts/nav.php');
?>
<main class="container">      
      <!-- Article-->
      <article id="article">
        <h2><?= get_param('slug') ?></h2>
        <p>
          Nullam dui arcu, malesuada et sodales eu, efficitur vitae dolor. Sed ultricies dolor non
          ante vulputate hendrerit. Vivamus sit amet suscipit sapien. Nulla iaculis eros a elit
          pharetra egestas. Nunc placerat facilisis cursus. Sed vestibulum metus eget dolor pharetra
          rutrum.
        </p>
        <footer>
          <small>Duis nec elit placerat, suscipit nibh quis, finibus neque.</small>
        </footer>
      </article>
      
    </main>
<?php require_once(__DIR__.'/../parts/footer.php');?>

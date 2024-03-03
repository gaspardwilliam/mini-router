<?php
add_action('header',function(){
  
});
add_action('footer',function(){
  
});



$template->setTitle('Admin');
/**PAGE**/
require_once(__DIR__.'/../parts/header.php');
require_once(__DIR__.'/../parts/nav.php');
?>
<div id="main">
    <div class="container">
        <h1>Admininstration</h1>
    </div>
    
</div>
<?php require_once(__DIR__.'/../parts/footer.php');?>

<?php
/**CONFIGURATION**/
function add_header_script(){?> 
<?php }

function add_footer_script(){?>
<?php }

$pageTitle= ('fr' == LANG) ? 'Merci' : 'bedankt';

/**PAGE**/
require_once(__DIR__.'/../parts/header.php');?>
   <div class="jumbotron">
        <h1 class="display-4"><?= (LANG=="fr") ? 'Ma page merci' : 'Bedankt' ?></h1>
        
        <a class="btn btn-primary btn-lg" href="<?= $router->generate('home',array('lang'=>LANG)) ?>" role="button"><?= (LANG=="fr") ? 'Accueil' : 'Home' ?></a>
    </div>
        
       

<?php require_once(__DIR__.'/../parts/footer.php');?>
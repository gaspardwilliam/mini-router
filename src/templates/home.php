<?php
/**CONFIGURATION**/
function add_header_script(){?>
<?php }

function add_footer_script(){?>
<?php }

$pageTitle= ('fr' == LANG) ? 'Accueil' : 'Home';

/**PAGE**/
require_once(__DIR__.'/parts/header.php');?>
    <div class="jumbotron">
        <h1 class="display-4"><?= (LANG=="fr") ? 'Ma page d\'accueil' : 'Mijn homepage' ?></h1>        
        <a class="btn btn-primary btn-lg" href="<?= $router->generate('thanks',array('lang'=>LANG)) ?>" role="button"><?= (LANG=="fr") ? 'Merci' : 'Bedankt' ?></a>
    </div>
<?php require_once(__DIR__.'/parts/footer.php');?>

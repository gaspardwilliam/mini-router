<?php
/**CONFIGURATION**/
function add_header_script(){?> 
<?php }

function add_footer_script(){?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"></script>
<?php }

$pageTitle= ('fr' == LANG) ? 'Accueil' : 'Home';

/**PAGE**/
require_once(__DIR__.'/../parts/header.php');?>
    <div class="jumbotron">
        <h1 class="display-4"><?= (LANG=="fr") ? 'Mon fabuleux titre' : 'Mijn title' ?></h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="<?= $router->generate('merci',array('lang'=>LANG)) ?>" role="button">Learn more</a>
    </div>

<?php require_once(__DIR__.'/../parts/footer.php');?>


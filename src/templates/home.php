<?php
/**CONFIGURATION**/
function add_header_script(){?>
<?php }

function add_footer_script(){?>
<?php }


$template->setTitle('Accueil');
/**PAGE**/
require_once(__DIR__.'/parts/header.php');
require_once(__DIR__.'/parts/nav.php');
?>
<div id="main">
    <div class="container">
        <h1>Ma Page d'accueil</h1>
    </div>
    
</div>
<?php require_once(__DIR__.'/parts/footer.php');?>

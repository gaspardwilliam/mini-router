<?php
/**CONFIGURATION**/
function add_header_script(){?> 
<?php }

function add_footer_script(){?>
<?php }

$pageTitle= ('fr' == LANG) ? '404' : '404';

/**PAGE**/
require_once(__DIR__.'/parts/header.php');?>
<div id="main">
    <div class="container">
        <h1>404</h1>
    </div>    
</div>

<?php require_once(__DIR__.'/parts/footer.php');?>
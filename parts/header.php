<!doctype html>
<html lang="<?= ICL_LANGUAGE_CODE ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">    
    <link rel="stylesheet" href="dist/css/style.css">

    <title><?= (!empty($pageTitle)) ? $pageTitle : 'titre par defaut'; ?></title>
    <?php 
    if(function_exists ( 'add_header_script' )){
        add_header_script();
    }
    ?>
  </head>
  <body>
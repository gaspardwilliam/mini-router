<!doctype html>
<html lang="<?= LANG ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@400;900&display=swap" rel="stylesheet"> -->
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
  
    <link rel="stylesheet" href="<?= dist_dir() ?>css/style.min.css">

    <title><?= $template->title ?></title>
    <?php 
    if(function_exists ( 'add_header_script' )){
        add_header_script();
    }
   
    ?>
  </head>
  <body>

 

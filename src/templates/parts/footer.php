    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?= dist_dir() ?>js/bootstrap.min.js"></script>
    <script src="<?= dist_dir() ?>js/custom.js"></script>
    <?php 
    if(function_exists ( 'add_footer_script' )){
        add_footer_script();
    }
    ?>
  </body>
</html>
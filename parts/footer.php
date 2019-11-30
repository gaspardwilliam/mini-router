    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?= BASEPATH ?>/dist/js/custom.js"></script>
    <?php 
    if(function_exists ( 'add_footer_script' )){
        add_footer_script();
    }
    ?>
  </body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'src/class/Autoloader.php';
Autoloader::register();
//require_once('src/class/AltoRouter.php');
require_once('src/functions.php');

$router = new AltoRouter();
$templates=new loadTemplate();
define('BASEPATH','/mini-router');
$router->setBasePath(BASEPATH);

$router->addMatchTypes(array('lang' => '[a-z]{2}'));
// map index
// $router->map( 'GET', '/[a:lang]?', 'displayPage','home');
// $router->map( 'GET', '/[a:lang]?/merci', 'merci','thanks');

$router->map( 'GET', '/[lang:lang]?/[*:slug]?', 'displayPage','page');
$router->map( 'GET', '/[lang:lang]?/[*:cat]/[*:slug]', 'displayPage','tax');




// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) ) {

   

    //redirige vers param langue si pas défini
    if(empty($match['params']['lang'])||!in_array($match['params']['lang'],array('fr','nl'))){
       
        $newParams=$match['params'];
        $newParams['lang']='fr';
        header('Location: '.$router->generate($match['name'],$newParams));
        exit;
    }

    define('ICL_LANGUAGE_CODE',get_param('lang'));
    define('LANG',get_param('lang'));

    if(method_exists($templates,$match['target'])){
        
        call_user_func_array( array($templates,$match['target']),array() );
    }elseif(is_callable( $match['target'])){
        call_user_func_array( $match['target'], $match['params'] );
    }elseif(file_exists(__DIR__.'/src/templates/'.$match['target'].'.php')){
        require_once('src/templates/'.$match['target'].'.php');
    }else{
        echo 'nothing';
    }



} else {
	// no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo 'no route found';
}

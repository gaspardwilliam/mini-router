<?php
require_once('class/alto.php');
require_once('functions.php');

$router = new AltoRouter();
define('BASEPATH','/mini-router');
$router->setBasePath(BASEPATH);




$router->map( 'GET', '/test', function(){echo 'test';},'test');

$router->map( 'GET', '/[a:lang]?/thanks', 'merci','thanks');

// map index
$router->map( 'GET', '/[a:lang]?', 'home','home');



// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) ) {

    if(!empty($match['params']['lang'])){
        if(in_array($match['params']['lang'],array('fr','nl'))){
            define('ICL_LANGUAGE_CODE',$match['params']['lang']);
            define('LANG',$match['params']['lang']);
        }else{
            header('Location: '.$router->generate('home',array('lang'=>'fr')));
            exit;
        }
    }else{//page d'accueil /
        define('ICL_LANGUAGE_CODE','fr');
        define('LANG','fr');
    }
    if(is_callable( $match['target'])){
        call_user_func_array( $match['target'], $match['params'] ); 
    }elseif(file_exists(__DIR__.'/templates/'.$match['target'].'.php')){
        require_once('templates/'.$match['target'].'.php');
    }else{
        echo 'nothing';
    }
   
    
	
} else {
	// no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo 'no route found';
}
<?php
require_once('src/class/alto.php');
require_once('src/functions.php');

$router = new AltoRouter();
define('BASEPATH','/mini-router');
$router->setBasePath(BASEPATH);




$router->map( 'GET', '/test', function(){echo 'test';},'test');

$router->map( 'GET', '/[a:lang]?/merci', 'merci','thanks');

// map index
$router->map( 'GET', '/[a:lang]?', 'home','home');



// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) ) {

    /* if(!empty($match['params']['lang'])){
        if(in_array($match['params']['lang'],array('fr','nl'))){
            define('ICL_LANGUAGE_CODE',$match['params']['lang']);
            define('LANG',$match['params']['lang']);
        }else{
            header('Location: '.$router->generate('home',array('lang'=>'fr')));
            exit;
        }
    }else{
        define('ICL_LANGUAGE_CODE','fr');
        define('LANG','fr');
    } */
    if(empty($match['params']['lang'])||!in_array($match['params']['lang'],array('fr','nl'))){
        header('Location: '.$router->generate($match['name'],array('lang'=>'fr')));
        exit;
    }
    define('ICL_LANGUAGE_CODE',get_param('lang'));
    define('LANG',get_param('lang'));
    if(is_callable( $match['target'])){
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
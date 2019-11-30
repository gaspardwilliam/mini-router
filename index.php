<?php
require_once('class/alto.php');
require_once('functions.php');

$router = new AltoRouter();
$router->setBasePath('/mini-routing');




$router->map( 'GET', '/[a:lang]?/thanks', 'merci','merci');

// map index
$router->map( 'GET', '/[a:lang]?', 'home','home');



// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) ) {
    if(!empty( $match['params']['lang'])&&$match['params']['lang']=="nl"){
        define('ICL_LANGUAGE_CODE','nl');
        define('LANG','nl');
    }else{
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
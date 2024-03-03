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
$routesController=new RoutesController();
define('BASEPATH','/mini-router');
$router->setBasePath(BASEPATH);

$router->addMatchTypes(array('lang' => '[a-z]{2}'));




$router->addRoutes([
    ['GET|POST', '/api/[*:slug]?/', 'returnApi','api'],
    ['GET', '/[lang:lang]?/admin/[*:slug]?/', 'displayAdmin','admin'],
    ['GET', '/[lang:lang]?/blog/[*:slug]?/', 'displayPost','post'],
    ['GET', '/[lang:lang]?/[*:slug]?/', 'displayPage','page'],
]);





// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) ) {   

    //redirige vers param langue si pas défini
    if(in_array($match['name'],['page'])&&(empty($match['params']['lang'])||!in_array($match['params']['lang'],array('fr','nl')))){       
        $newParams=$match['params'];
        $newParams['lang']='fr';
        header('Location: '.$router->generate($match['name'],$newParams));
        exit;
    }
    $lang=(!empty(get_param('lang')))?get_param('lang'):'fr';
    define('LANG',$lang);
    // pre($match);
    call_user_func_array( array($routesController,'routeMe'),array($match));


    // if(method_exists($templates,$match['target'])){        
    //     call_user_func_array( array($templates,$match['target']),array() );
    // }elseif(is_callable( $match['target'])){
    //     call_user_func_array( $match['target'], $match['params'] );
    // }elseif(file_exists(__DIR__.'/src/templates/'.$match['target'].'.php')){
    //     require_once('src/templates/'.$match['target'].'.php');
    // }else{
    //     header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    //      echo 'no route found';
    // }



} else {
	// no route was matched
    define('LANG','fr');
    call_user_func_array( array($templates,'displayPageTemplate'),array('404'));
}

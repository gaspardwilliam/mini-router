<?php
function pre($data) {
    echo "<pre>";
       print_r($data);
    echo "</pre>";
 }
 function dist_dir(){
    return BASEPATH.'/dist/';
 }
 function get_param($param=false){
    global $match;
    if(!empty($param)){
      if(!empty($match['params'][$param])){
         return $match['params'][$param];
      }
    }else{
      return $match['params'];

    }

 }

 function add_action($name,$callback){
   if(empty($GLOBALS['hooks'])){
      $GLOBALS['hooks']=[];
   }
   if(empty($GLOBALS['hooks'][$name])){
      $GLOBALS['hooks'][$name]=[];
   }
   $GLOBALS['hooks'][$name][]=$callback;
 }

 function do_action($name){
   if(!empty( $GLOBALS['hooks'])&&!empty( $GLOBALS['hooks'][$name])){
      foreach($GLOBALS['hooks'][$name] as $func){
         if(is_callable($func)){
            $func();
         }
      }
   }
 }
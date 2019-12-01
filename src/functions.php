<?php
function pre($data) {
    echo "<pre>";
       print_r($data);
    echo "</pre>";
 }
 function dist_dir(){
    return BASEPATH.'/dist/';
 }
 function get_param($param){
    global $match;
    if(!empty($match['params'][$param])){
       return $match['params'][$param];
    }
 }
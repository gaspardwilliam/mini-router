<?php

class ApiController
{
    function test($params){
        print_r(json_encode($params));
        die();
    }
}
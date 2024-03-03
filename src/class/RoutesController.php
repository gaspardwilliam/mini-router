<?php

class RoutesController
{
    public $templates=false;

    function __construct()
    {
        $this->templates=new loadTemplate();
    }
    function routeMe($match){
        if(method_exists($this,$match['target'])){
            call_user_func_array( array($this,$match['target']),array($match['params']));
        }else{
            $this->templates->displayPageTemplate('404'); 
        }
    }

    function displayPage($params){        
        $slug=(!empty($params['slug']))?'pages/'.$params['slug']:'pages/home';
        $this->templates->displayPageTemplate($slug); 
    }

    function displayAdmin($params){
        $slug=(!empty($params['slug']))?'admin/admin-'.$params['slug']:'admin/admin';
        $this->templates->displayPageTemplate($slug); 
    }

    function displayPost($params){
        $slug=(!empty($params['slug']))?'posts/post':'admin/admin';
        $this->templates->displayPageTemplate($slug); 
    }

    function returnApi($params){
        $api=new ApiController();

        if(method_exists($api,$params['slug'])){
            call_user_func_array( array($api,$params['slug']),array($params));
        }else{
            $this->templates->displayPageTemplate('404'); 
        }
    }
}
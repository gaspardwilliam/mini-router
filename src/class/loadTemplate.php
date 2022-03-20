<?php
class loadTemplate
{
    public $templateDir=__DIR__.'/../templates/';
    public $title='';

    public function displayPage(){
        global $match;       
        $slug=$match['params']['slug']??'home';  
       
        $this->displayPageTemplate($slug);
        
    }

    public function displayHome(){
        $this->displayPageTemplate('home');
    }
    public function setTitle($title){
       $this->title=$title;
    }

    private function displayPageTemplate($file){
        global $router;
        $template=$this;
        if(file_exists($this->templateDir.$file.'.php')){ 
            require_once($this->templateDir.$file.'.php');
        }else{
            $this->setTitle('Page not found');
            require_once($this->templateDir.'404.php');
        }
    }

}
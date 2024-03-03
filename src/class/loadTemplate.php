<?php
class loadTemplate
{
    public $templateDir=__DIR__.'/../templates/';
    public $title='';

    

    public function setTitle($title){
       $this->title=$title;
    }

    public function displayPageTemplate($file){
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
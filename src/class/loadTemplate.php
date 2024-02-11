<?php
class loadTemplate
{
    public $templateDir=__DIR__.'/../templates/';
    public $title='';

    public function displayPage(){
        global $match;       
        $slug=(!empty($match['params']['slug']))?'pages/'.$match['params']['slug']:'pages/home';  
       
        $this->displayPageTemplate($slug);        
    }

    public function displayAdmin(){
        global $match;       
        $slug=(!empty($match['params']['slug']))?'admin/admin-'.$match['params']['slug']:'admin/admin';        
        $this->displayPageTemplate($slug);
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
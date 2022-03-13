<?php
class loadTemplate
{
    public $templateDir=__DIR__.'/../templates/';

    public function displayPage(){
        global $match;       
        pre($match);
    }

    public function displayHome(){
        $this->displayPageTemplate('home');
    }

    private function displayPageTemplate($template){
        if(file_exists($this->templateDir.$template.'.php')){
            global $router;
            require_once($this->templateDir.$template.'.php');
        }else{
            echo 'nothinrrg';
        }
    }

}
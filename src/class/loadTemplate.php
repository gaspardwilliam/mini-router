<?php
class loadTemplate
{
    public $templateDir=__DIR__.'/../templates/';

    public function displayHome($params){
        pre($params);
        $this->displayPage('home');
    }

    private function displayPage($template){
        if(file_exists($this->templateDir.$template.'.php')){
            global $router;
            require_once($this->templateDir.$template.'.php');
        }else{
            echo 'nothinrrg';
        }
    }

}
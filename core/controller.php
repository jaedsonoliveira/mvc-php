<?php
class Controller{
    public function loadView($viewName){
        require 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName){
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName){
        require 'views/'.$viewName.'.php';
    }
}

?>
<?php
class homeController extends controller{
    public function index(){
        $anuncios = new Anuncios();
       
        $this->loadTemplate('home');
    }

   
}
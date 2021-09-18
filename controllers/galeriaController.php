<?php
class galeriaController{
    public function index(){
        echo "Pagina de galeria";
    }

    public function abrir($id){
        echo "Abrindo galeria: ". $id;
    }
}
<?php

class usuarioController{

    public function index(){
        echo 'Controlador usuario'; 
    }
    public function registro(){
       require_once 'views/usuario/registro.php';
    }
    public function saveUsuario(){
        if(isset($_POST)){

            
        }
    }
}
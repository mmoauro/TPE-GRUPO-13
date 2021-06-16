<?php

require_once('./libs/smarty/Smarty.class.php');

class UserView{
 
    private $smarty;

    //Creo el constructor
    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }
    
    function showLogin($mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/login.tpl'); 
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}
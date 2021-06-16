<?php
require_once 'View/View.php';

class UserView extends View{

    public function __construct($is_secretaria, $is_logged){
        parent::__construct($is_secretaria, $is_logged);
    }
    
    function showLogin($mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/login.tpl'); 
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}
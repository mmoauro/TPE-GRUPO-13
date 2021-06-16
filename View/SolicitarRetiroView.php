<?php

require_once 'View/View.php';

class SolicitarRetiroView extends View{

    public function __construct($is_secretaria, $is_logged){
        parent::__construct($is_secretaria, $is_logged);
    }

    //Muestro el formulario para solicitar un retiro
    function mostrarFormularioSolicitarRetiro(){
        $this->smarty->display('templates/formularioSolicitarRetiro.tpl');
    }

    function redireccionarFormulario () {
        header("Location: ".BASE_URL."solicitar_retiro");
    }

}
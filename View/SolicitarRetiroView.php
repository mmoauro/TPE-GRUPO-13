<?php
//Incluyo lel archivo
require_once('./libs/smarty/Smarty.class.php');

//Creo la clase
class SolicitarRetiroView {
    private $smarty;

    //Creo el constructor
    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }

    //Muestro el formulario para solicitar un retiro
    function mostrarFormularioSolicitarRetiro(){
        $this->smarty->display('templates/formularioSolicitarRetiro.tpl');
    }

    function redireccionarFormulario () {
        header("Location: ".BASE_URL."solicitar_retiro");
    }

}
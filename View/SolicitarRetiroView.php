<?php
//Incluyo lel archivo
require_once('./libs/smarty/Smarty.class.php');

//Creo la clase
class SolicitarRetiroView {

    //Creo el constructor
    public function __construct(){
    }

    //Muestro el formulario para solicitar un retiro
    function mostrarFormularioSolicitarRetiro(){
        $smarty = new Smarty();
        $smarty->display('templates/formularioSolicitarRetiro.tpl');
    }

}
<?php
//Incluyo lel archivo

require_once('View/View.php');

//Creo la clase
class CartoneroView extends View {

    public function __construct($is_secretaria, $is_logged){
        parent:: __construct($is_secretaria, $is_logged);
    }

    function SeccionCargarCartonero(){
        $this->smarty->display('templates/formularioCargarCartonero.tpl');
    }

}
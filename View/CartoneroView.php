<?php
//Incluyo lel archivo

require_once('View/View.php');

//Creo la clase
class CartoneroView extends View {

    public function __construct($is_secretaria, $is_logged){
        parent:: __construct($is_secretaria, $is_logged);
    }

    function showCartoneros($cartoneros){
        $this->smarty->assign('cartoneros', $cartoneros);
        $this->smarty->display('templates/listaCartoneros.tpl');
    }

}
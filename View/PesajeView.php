<?php
//Incluyo lel archivo
require_once('./libs/smarty/Smarty.class.php');

class PesajeView {

    private $smarty;

    //Creo el constructor
    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }


    //Muestra, por ahora, solo los materiales que se aceptan
    function showFormularioPesaje($materiales,$cartoneros, $men) {
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign('cartoneros', $cartoneros);
        $this->smarty->assign('mensaje', $men);
        $this->smarty->display('templates/formularioPesaje.tpl');
    }

}
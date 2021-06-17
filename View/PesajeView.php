<?php
require_once 'View/View.php';

class PesajeView extends View {

    public function __construct($is_secretaria, $is_logged){
        parent::__construct($is_secretaria, $is_logged);
    }

    function showFormularioPesaje($materiales,$cartoneros, $men) {
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign('cartoneros', $cartoneros);
        $this->smarty->assign('mensaje', $men);
        $this->smarty->display('templates/formularioPesaje.tpl');
    }

}
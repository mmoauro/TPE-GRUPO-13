<?php
require_once 'View/View.php';

class AcopiadoView extends View {

    public function __construct($is_secretaria, $is_logged){
        parent::__construct($is_secretaria, $is_logged);
    }

    function showAcopiadoFrom($cartonero, $pesajes) {
        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->assign('pesajes', $pesajes);
        $this->smarty->display('templates/acopiadoPorCartonero.tpl');
    }

}
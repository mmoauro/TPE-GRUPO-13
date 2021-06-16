<?php

require_once 'View/View.php';

class PostCercanosView extends View{

    public function __construct($is_secretaria, $is_logged){
        parent::__construct($is_secretaria, $is_logged);
    }


    //Muestra, por ahora, solo los materiales que se aceptan
    function mostrarPostCercanos($materiales) {
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('templates/postCercanos.tpl');
    }

}
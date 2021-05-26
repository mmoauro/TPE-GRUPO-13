<?php
//Incluyo lel archivo
require_once('./libs/smarty/Smarty.class.php');

class PostCercanosView {

    private $smarty;

    //Creo el constructor
    public function __construct(){
        $this->smarty = new Smarty();
    }


    //Muestra, por ahora, solo los materiales que se aceptan
    function mostrarPostCercanos($materiales) {
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('templates/postCercanos.tpl');
    }

}
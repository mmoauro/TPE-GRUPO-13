<?php

require_once './Model/PostCercanosModel.php';
require_once './View/PostCercanosView.php';

class PostCercanosController {

    //Atributos
    private $model, $view;

    //Creo el constructor
    public function __construct(){
        $this->model = new PostCercanosModel();
        $this->view = new PostCercanosView();
    }

    function mostrarPostCercanos() {
        $materiales = $this->model->getMateriales();
        $this->view->mostrarPostCercanos($materiales);
    }

}
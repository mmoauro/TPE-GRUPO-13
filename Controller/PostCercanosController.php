<?php

require_once 'Controller/Controller.php';
require_once './Model/PostCercanosModel.php';
require_once './View/PostCercanosView.php';
require_once 'Controller/MaterialController.php';

class PostCercanosController extends Controller {


    public function __construct(){
        parent::__construct();
        $this->model = new PostCercanosModel();
        $this->view = new PostCercanosView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
    }

    function mostrarPostCercanos() {
        $material_controller = new MaterialController();
        $materiales = $material_controller->getMateriales();
        $this->view->mostrarPostCercanos($materiales);
    }

}
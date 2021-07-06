<?php
require_once 'Model/CartoneroModel.php';
require_once 'Controller/Controller.php';
require_once 'View/CartoneroView.php';

class CartoneroController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new CartoneroModel();
        $this->view = new CartoneroView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
    }

    function showCartoneros () {
        if ($this->auth->getIsLogged() && $this->auth->getIsSecretaria()) {
            $this->view->showCartoneros($this->model->getCartoneros());
        }
    }

}
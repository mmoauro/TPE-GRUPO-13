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

    function editDatosCartonero($params = null){
        if ($this->auth->getIsLogged() && $this->auth->getIsSecretaria()) {
            $id = $params[':ID'];
            //se rompe el estilo 
            $cartoneros =  $this->model->getCartoneros();
            $cartonero = $this->model->getCartonero($id);
            $this->view->showCartoneros($cartoneros, $cartonero);
        }
    }

    function editCartonero($params = null){
        if ($this->auth->getIsLogged() && $this->auth->getIsSecretaria()) {
            $id = $params[':ID'];
            $nombre = $_POST['nombre'];
            $apellido= $_POST['apellido'];
            $dni = $_POST['dni'];
            $direccion = $_POST['direccion'];
            $fecha_nac = $_POST['fecha_nacimiento'];
          
            $this->model->editarCartonero($id, $nombre, $apellido, $dni, $direccion, $fecha_nac);
            $this->view->showCartoneros($this->model->getCartoneros());
        }
    }

}
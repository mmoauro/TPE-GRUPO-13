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

    function cargarCartonero(){
        $cartoneros = $this->model->getCartoneros();

        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["DNI"]) && isset($_POST["direccion"]) && isset($_POST["fechaNacimiento"]) ){
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $DNI = $_POST["DNI"];
            $direccion = $_POST["direccion"];
            $fechaNacimiento = $_POST["fechaNacimiento"];
        }
        $existe = false;
        foreach($cartoneros as $cartonero){
            if($DNI == $cartonero->dni){
                $existe = true;
            }
        }

        if($existe == false){
            $this->model->agregarCartonero($nombre, $apellido, $DNI, $direccion, $fechaNacimiento);
        }
        
        header('Location: '. CARGAR_CARTONERO);
    }

    function eliminarCartonero($params = null){
        if ($this->auth->getIsLogged() && $this->auth->getIsSecretaria()){ 
            $cartonero_ID = $params[':ID'];
            $this->model->deleteCartonero($cartonero_ID);
            $this->view->showCartoneros($this->model->getCartoneros());
        }
    }

    //Muestro la seccion de cargar cartonero
    function mostrarSeccionCargarCartonero(){
        $this->view->SeccionCargarCartonero();
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
            $cartonero = $this->model->GetCartonero2($id);
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
<?php
//Incluyo los archivos
require_once './Model/PesajeModel.php';
require_once './Model/CartoneroModel.php';
require_once './View/AcopiadoView.php';
require_once 'Controller/AuthHelper.php';
require_once 'Controller/Controller.php';


//Creo la clase
class AcopiadoController extends Controller {

    //Creo el constructor
    public function __construct() {
        parent::__construct();
        $this->model = new PesajeModel();
        $this->view = new AcopiadoView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
    }   

    //Muestra los materiales acopiados por un cartonero
    function acopiadoFrom($params = null) {
        if (!$this->auth->getIsSecretaria()) //Checkeo si tiene permisos de secretaria
            header("Location: ".BASE_URL); //Redirecciono al home si no tiene permisos
        $id = $params[':ID'];
        $modelCartoneros = new CartoneroModel();
        $cartonero = $modelCartoneros->getCartonero($id);
        $pesajes = $this->model->getPesajeOrderByMaterialFrom($id);
        $this->view->showAcopiadoFrom($cartonero, $pesajes);
    }

}
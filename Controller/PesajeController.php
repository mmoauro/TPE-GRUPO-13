<?php

require_once './Model/PostCercanosModel.php';
require_once './View/PesajeView.php';
require_once './Model/CartoneroModel.php';
require_once './Model/PesajeModel.php';
require_once 'Controller/Controller.php';

class PesajeController extends Controller {


    //Creo el constructor
    public function __construct(){
        parent::__construct();
        $this->view = new PesajeView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
        $this->model = new PesajeModel();
    }

    function mostrarFormularioPesaje() {
        $materialModel = new MaterialModel();
        $materiales = $materialModel->getMateriales();
        $cartoneroModel = new CartoneroModel();
        $cartoneros = $cartoneroModel->getCartoneros();
        $this->view->showFormularioPesaje($materiales,$cartoneros,'');
    }

     function agregarPesaje(){
        $materialModel = new MaterialModel();
        $materiales = $materialModel->getMateriales();
        $cartoneroModel = new CartoneroModel();
        $cartoneros = $cartoneroModel->getCartoneros();
        $mensaje = '';
        if($_POST['peso'] > 0){
            if (isset($_POST['peso']) && isset($_POST['material']) && isset($_POST['cartonero'])){
                $this->model->insertPesaje($_POST['peso'], $_POST['material'], $_POST['cartonero'] == '0' ? null : $_POST['cartonero']);
                $mensaje = 'Se registro el peso con exito!';
            }
        }
        else{
            $mensaje = "Ingrese un peso valido!";
        }
        $this->view->showFormularioPesaje($materiales,$cartoneros,$mensaje);
     }

}
<?php

require_once './Model/PostCercanosModel.php';
require_once './View/PesajeView.php';
require_once './Model/CartonerosModel.php';
require_once './Model/PesajeModel.php';

class PesajeController {

    //Atributos
    private $modelCartoneros, $view, $modelMateriales, $modelPesaje;

    //Creo el constructor
    public function __construct(){
        $this->modelMateriales = new PostCercanosModel();
        $this->modelCartoneros = new CartonerosModel();
        $this->modelPesaje = new PesajeModel();
        $this->view = new PesajeView();
    }

    function mostrarFormularioPesaje() {
        $materiales = $this->modelMateriales->getMateriales();
        $cartoneros = $this->modelCartoneros->getCartoneros();
        $this->view->showFormularioPesaje($materiales,$cartoneros,'');
    }

     function agregarPesaje(){
        $materiales = $this->modelMateriales->getMateriales();
        $cartoneros = $this->modelCartoneros->getCartoneros();
        $mensaje = '';
        if($_POST['peso'] >= 0){
            if (!empty($_POST['peso']) && !empty($_POST['material']) && !empty($_POST['cartonero'])){
                $this->modelPesaje->insertPesaje($_POST['peso'], $_POST['material'], $_POST['cartonero']);
                $mensaje = 'Se registro el peso con exito!';
            }
        }
        else{
            $mensaje = "Ingrese un peso valido!";
        }
        $this->view->showFormularioPesaje($materiales,$cartoneros,$mensaje);
     }

}
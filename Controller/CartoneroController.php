<?php
//Incluyo los archivos
require_once './Model/CartoneroModel.php';
require_once './View/CartoneroView.php';
require_once 'Controller/AuthHelper.php';
require_once 'Controller/Controller.php';


//Creo la clase
class CartoneroController extends Controller {

    //Atributos
    //private $authHelper;

    //Creo el constructor
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

    //Muestro la seccion de cargar cartonero
    function mostrarSeccionCargarCartonero(){
        $this->view->SeccionCargarCartonero();
    }
}
<?php
//Incluyo los archivos
require_once './Model/PedidoModel.php';
require_once './View/PedidoView.php';
require_once 'Controller/AuthHelper.php';
require_once 'Controller/Controller.php';


//Creo la clase
class PedidoController extends Controller {

    //Atributos
    //private $authHelper;

    //Creo el constructor
    public function __construct() {
        parent::__construct();
        $this->model = new PedidoModel();
        $this->view = new PedidoView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
    }   

    //Muestro los pedidos
    function mostrarPedidos(){
        //$usuarioLogueado = $this->autenticacionHelper->usuarioLogueado();

        //Le pido al model todos los pedidos
        $pedidos = $this->model->getPedidos();
        //Le digo al view que muestre todos los directores
        //$this->directorView->showDirectores($directores, $usuarioLogueado);
        $this->view->showPedidos($pedidos);
    }

}
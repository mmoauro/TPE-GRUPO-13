<?php
//Incluyo los archivos
require_once './Model/PedidoModel.php';
require_once './View/PedidoView.php';
//require_once './AuthHelper.php';
require_once 'Controller/Controller.php';


//Creo la clase
class PedidoController extends Controller {

    //Atributos
    private $pedidoModel;
    private $pedidoView;
    //private $authHelper;

    //Creo el constructor
    public function __construct() {
        parent::__construct();
        $this->pedidoModel = new PedidoModel();
        $this->pedidoView = new PedidoView();
        $this->authHelper = new AuthHelper();
    }   

    //Muestro los pedidos
    function mostrarPedidos(){
        //$usuarioLogueado = $this->autenticacionHelper->usuarioLogueado();

        //Le pido al model todos los pedidos
        $pedidos = $this->pedidoModel->getPedidos();
        $is_logged = $this->auth->getIsLogged();
        //Le digo al view que muestre todos los directores
        //$this->directorView->showDirectores($directores, $usuarioLogueado);
        $this->pedidoView->showPedidos($pedidos, $is_logged);
    }

}
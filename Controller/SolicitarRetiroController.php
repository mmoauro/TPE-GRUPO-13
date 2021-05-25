<?php
//Incluyo los archivos
require_once './Model/SolicitarRetiroModel.php';
require_once './View/SolicitarRetiroView.php';

//Creo la clase
class SolicitarRetiroController{
    //Atributos
    private $solicitarRetiroModel;
    private $solicitarRetiroView;

    //Creo el constructor
    public function __construct(){
        $this->solicitarRetiroModel = new SolicitarRetiroModel();
        $this->solicitarRetiroView = new SolicitarRetiroView();
    }

    //Agrego una solicitud de retiro
    function agregarSolicitudDeRetiro(){
        //Guardo todos los datos que ingreso el usuario
        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["direccion"]) &&
                 isset($_POST["telefono"]) && isset($_POST["franja_horaria"]) && isset($_POST["volumen"])){
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $franja_horaria = $_POST["franja_horaria"];
            $volumen = $_POST["volumen"];
        }

        $this->solicitarRetiroModel->agregarSolicitudDeRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $volumen);
        $this->solicitarRetiroView->redireccionarFormulario();
    }

    function mostrarFormularioSolicitarRetiro(){
        $this->solicitarRetiroView->mostrarFormularioSolicitarRetiro();
    }


}
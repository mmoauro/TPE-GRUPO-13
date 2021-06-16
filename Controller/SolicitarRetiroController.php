<?php
//Incluyo los archivos
require_once 'Controller/Controller.php';
require_once './Model/SolicitarRetiroModel.php';
require_once './View/SolicitarRetiroView.php';

//Creo la clase
class SolicitarRetiroController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->model = new SolicitarRetiroModel();
        $this->view = new SolicitarRetiroView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
    }

    //Agrego una solicitud de retiro
    function agregarSolicitudDeRetiro(){
        //Guardo todos los datos que ingreso el usuario
        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["direccion"]) && isset($_POST["telefono"]) && isset($_POST["franja_horaria"]) && isset($_POST["volumen"]) && isset($_POST['latitude']) && isset($_POST['longitude'])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $franja_horaria = $_POST["franja_horaria"];
            $volumen = $_POST["volumen"];
            $latitude = (float)$_POST['latitude'];
            $longitude = (float)$_POST['longitude'];
            $coordenadas_centro_acopio = array(-37.3238677, -59.1281242);
            $distancia = $this->calcularDistancia(array($latitude, $longitude), $coordenadas_centro_acopio);
            
            
            if ($distancia <= 6) {
                $id_solicitud = $this->model->agregarSolicitudDeRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $volumen);
                
                $file_ary = $this->reArrayFiles($_FILES['upload']);

                foreach($file_ary as $file){
                    $path = 'images/'. uniqid("", true) . "." . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                    move_uploaded_file($file['tmp_name'], $path);
                    $this->model->agregarImagen($path, $id_solicitud);
                }
                
                $this->view->redireccionarFormulario();
            }
            else
                echo "Tiene que llevar los materiales al centro de acopio debido a que la distancia es mayor a 6 km.";
        }

    }

    private function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);
    
        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
    
        return $file_ary;
    }

    private function calcularDistancia ($coord1, $coord2) {
        $lat1 = deg2rad($coord1[0]);
        $lat2 = deg2rad($coord2[0]);
        $lon1 = deg2rad($coord1[1]);
        $lon2 = deg2rad($coord2[1]);


        $theta = $lon1 - $lon2;
        $dist = sin($lat1) * sin($lat2) +  cos($lat1) * cos($lat2) * cos($theta);
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $dist = $dist * 60 * 1.1515 * 1.609344;

        return $dist;
    }

    function mostrarFormularioSolicitarRetiro(){
        $this->view->mostrarFormularioSolicitarRetiro();
    }


}
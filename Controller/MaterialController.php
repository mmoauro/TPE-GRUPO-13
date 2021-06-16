<?php
require_once 'Model/MaterialModel.php';
require_once 'Controller/Controller.php';

class MaterialController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new MaterialModel();
    }

        function insertMaterial () {
        if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];

            $this->model->insertMaterial($nombre, $descripcion);
            header('Location: '. BASE_URL);
        }
    }

    function updateMaterial ($params = null) {
        $id = $params[':ID'];
        if (isset($id) && $this->model->getMaterial($id) && isset($_POST['nombre']) && isset($_POST['descripcion'])) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->model->updateMaterial($nombre, $descripcion, $id);
            header('Location: '. BASE_URL);
        }
    }

    function deleteMaterial ($params = null) {
        $id = $params[':ID'];
        if (isset($id)) {
            $this->model->deleteMaterial($id);
            header('Location: '. BASE_URL);
        }
    }

    function getMateriales () {
        return $this->model->getMateriales();
    }
}
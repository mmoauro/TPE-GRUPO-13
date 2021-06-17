<?php
require_once 'Model/Model.php';

class PesajeModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    function insertPesaje($peso, $material, $cartonero){
        $sentencia = $this->db->prepare("INSERT INTO pesaje(peso, id_material, id_cartonero) VALUES(?,?,?)");
        $sentencia->execute(array($peso, $material, $cartonero));
    }

}
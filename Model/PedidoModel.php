<?php
require_once 'Model/Model.php';

class PedidoModel extends Model{

    public function __construct() {
        parent::__construct();
    }

    //Obtengo todos los pedidos de la base de datos
    function getPedidos(){
        $sentencia = $this->db->prepare("SELECT * FROM solicitud_retiro");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
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

    
    function getPesajeOrderByMaterialFrom($id) {
        $sentencia = $this->db->prepare("SELECT SUM(peso) AS peso, nombre 
        FROM pesaje p JOIN material m ON (p.id_material = m.id) 
        WHERE id_cartonero=? 
        GROUP BY nombre ORDER BY nombre;"
        );
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
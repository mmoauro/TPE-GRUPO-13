<?php
require_once 'Model/Model.php';

class CartoneroModel Extends Model{

    public function __construct() {
        parent::__construct();
    }

    //Pido los materiales que acepta el centro de acopio
    function getCartoneros() {
        $query = $this->db->prepare("SELECT * FROM cartonero");
        $query->execute([]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getCartonero($id) {
        $query = $this->db->prepare("SELECT nombre, apellido, dni FROM cartonero WHERE id=?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    //Cargo los datos de un cartonero en la base de datos
    function agregarCartonero($nombre, $apellido, $DNI, $direccion, $fechaNacimiento){
        $sentencia = $this->db->prepare("INSERT INTO cartonero(nombre, apellido, dni, direccion, fecha_nacimiento) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre, $apellido, $DNI, $direccion, $fechaNacimiento));
        return $this->db->lastInsertId();
    }

}
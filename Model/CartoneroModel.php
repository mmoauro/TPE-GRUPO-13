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

    function deleteCartonero($id){
        $sentencia = $this->db->prepare("DELETE FROM cartonero WHERE id=?");
        $sentencia->execute(array($id));
    }

    function GetCartonero2($id){
        $query = $this->db->prepare("SELECT * FROM cartonero WHERE id=?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);  
    }

    function editarCartonero($id, $nombre, $apellido, $dni, $direccion, $fecha_nac){
        $query = $this->db->prepare("UPDATE cartonero SET id=?, nombre=?, apellido=?, dni=?, direccion=?, fecha_nacimiento=? WHERE id=$id");
        $query->execute(array($id, $nombre, $apellido, $dni, $direccion, $fecha_nac));
    }
}
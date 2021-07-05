<?php

class CartoneroModel{
    
    private $db;

    //Conexion a la base de datos
    function __construct () {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
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

}
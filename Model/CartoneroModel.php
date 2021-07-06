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

    //Cargo los datos de un cartonero en la base de datos
    function agregarCartonero($nombre, $apellido, $DNI, $direccion, $fechaNacimiento){
        $sentencia = $this->db->prepare("INSERT INTO cartonero(nombre, apellido, dni, direccion, fecha_nacimiento) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre, $apellido, $DNI, $direccion, $fechaNacimiento));
        return $this->db->lastInsertId();
    }

}
<?php

class PesajeModel{
    private $db;

    function __construct () {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
    }


    function insertPesaje($peso, $material, $cartonero){
        $sentencia = $this->db->prepare("INSERT INTO pesaje(peso, id_material, id_cartonero) VALUES(?,?,?)");
        $sentencia->execute(array($peso, $material, $cartonero));
    }

}
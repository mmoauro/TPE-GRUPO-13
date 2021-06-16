<?php

class PostCercanosModel{
    
    private $db;

    //Conexion a la base de datos
    function __construct () {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
    }

    //Pido los materiales que acepta el centro de acopio
    function getMateriales() {
        $query = $this->db->prepare("SELECT * FROM material");
        $query->execute([]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
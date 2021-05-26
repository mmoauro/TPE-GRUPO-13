<?php

class SolicitarRetiroModel{
    private $db;

    function __construct () {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
    }

    //Conexion a la base de datos

    //Agrego una solicitud de retiro a la base de datos
    function agregarSolicitudDeRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $volumen){
        $sentencia = $this->db->prepare("INSERT INTO solicitud_retiro(nombre, apellido, direccion, telefono, franja_horaria, volumen) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($nombre, $apellido, $direccion, $telefono, $franja_horaria, $volumen));
    }

}
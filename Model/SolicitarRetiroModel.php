<?php

class SolicitarRetiroModel{

    //Conexion a la base de datos
    function GetDBConnection(){
        return  new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
    }

    //Agrego una solicitud de retiro a la base de datos
    function agregarSolicitudDeRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $volumen){
        $db = $this->GetDBConnection();
        
        $sentencia = $db->prepare("INSERT INTO solicitud_retiro(nombre, apellido, direccion, telefono, franja_horaria, volumen) VALUES(?,?,?,?,?,?");
        $sentencia->execute(array($nombre, $apellido, $direccion, $telefono, $franja_horaria, $volumen));
        
        header("Location: ".BASE_URL."solicitarRetiro");
    }

}
<?php

class PedidoModel {

    //Conexion a la base de datos
    function GetDBConnection(){
        return  new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
    }

    //Obtengo todos los pedidos de la base de datos
    function getPedidos(){
        $db = $this->GetDBConnection();
        $sentencia = $db->prepare("SELECT * FROM solicitud_retiro");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
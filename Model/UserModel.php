<?php
require_once 'Model/Model.php';

class UserModel extends Model {

    function GetUser($usuario){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE mail=?");
        $sentencia->execute(array($usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    
}
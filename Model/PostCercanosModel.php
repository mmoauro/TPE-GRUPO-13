<?php
require_once 'Model/Model.php';

class PostCercanosModel extends Model {

    //Pido los materiales que acepta el centro de acopio
    function getMateriales() {
        $query = $this->db->prepare("SELECT * FROM material");
        $query->execute([]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
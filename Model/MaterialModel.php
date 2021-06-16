<?php
require_once 'Model/Model.php';

class MaterialModel extends Model {

    function deleteMaterial ($id) {
        $query = $this->db->prepare("DELETE FROM material WHERE id = ?");
        $query->execute(array($id));
    }

    function insertMaterial ($nombre, $descripcion) {
        $query = $this->db->prepare("INSERT INTO material (nombre, descripcion) VALUES (?,?)");
        $query->execute(array($nombre, $descripcion));
    }

    function updateMaterial ($nombre, $descripcion, $id) {
        $query = $this->db->prepare("UPDATE material SET nombre = ?, descripcion = ? WHERE id = ?");
        $query->execute(array($nombre, $descripcion, $id));
    }

    function getMateriales() {
        $query = $this->db->prepare("SELECT * FROM material");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getMaterial ($id) {
        $query = $this->db->prepare("SELECT * FROM material WHERE id = ?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
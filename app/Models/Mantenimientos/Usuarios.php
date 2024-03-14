<?php

namespace App\Models\Mantenimientos;

use App\config\Conexion;

class Usuarios{

    private $conn;

    public function __construct(){
        $this->conn = new Conexion();
    }

    public function index(){
        $sql = "SELECT id_usuario, nombre, apellido, usuario, nivel FROM usuarios;";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store(array $data){
        $sql = "INSERT INTO usuarios(nombre, apellido, usuario, clave, nivel)
                VALUES('".$data['nombre']."', '".$data['apellido']."', '".$data['user']."', '".md5($data['password'])."', ".$data['nivel'].");";
        $this->conn->ejecutar($sql);
        return true;
    }

    public function delete(int $id){
        $sql = "DELETE FROM usuarios WHERE id_usuario=".$id;
        $this->conn->ejecutar($sql);
        return true;
    }

}

?>
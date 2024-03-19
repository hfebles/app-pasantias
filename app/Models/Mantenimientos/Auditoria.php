<?php

namespace App\Models\Mantenimientos;

use App\config\Conexion;

class Auditoria{

    private $conn;

    public function __construct(){
        $this->conn = new Conexion();
    }

    public function index(){
        $sql = "SELECT audi.id_auditoria, audi.hora_accion, audi.fecha_accion, audi.accion , users.usuario
                FROM auditorias audi
                INNER JOIN usuarios AS users ON audi.id_usuario = users.id_usuario;";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store_auditoria(array $data){
        date_default_timezone_set('America/Caracas');
        $sql = "INSERT INTO auditorias (id_usuario, hora_accion, fecha_accion, accion) 
                VALUES ($data[0], '".date('H:i:s')."', '".date('Y-m-d')."', '".$data[1]."')";
        return $this->conn->ejecutar($sql); 
    }

}

?>
<?php

namespace App\Models\Mantenimientos;

use App\config\Conexion;

class Conocimientos{

    private $conn;

    public function __construct(){
        $this->conn = new Conexion();
    }

    public function index(){
        $sql = "SELECT id_conocimiento, nombre_conocimiento FROM conocimientos WHERE estado=1";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store(array $data){
        if(!empty($data)){
            foreach($data['conocimientos'] as $i=>$conocimiento){
                if(!empty($conocimiento)){
                    $sql = "INSERT INTO conocimientos(nombre_conocimiento)
                            VALUES('".$conocimiento."');";
                    $this->conn->ejecutar($sql);
                }
            }
            return true;
        }
    }

    public function delete(int $id){
        $sql = "UPDATE conocimientos SET estado=0 WHERE id_conocimiento=".$id;
        $this->conn->ejecutar($sql);
    }

}

?>
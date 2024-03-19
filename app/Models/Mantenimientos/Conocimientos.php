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

    public function getConocimientos(int $id){
        $sql = "SELECT conocimientos FROM menciones WHERE estado=1 AND id_mencion=".$id;
        $conocimentosJSON = $this->conn->consultar($sql);
        $conocimientos = json_decode($conocimentosJSON[0]['conocimientos']);
        $conocimientosMencion = [];
        foreach($conocimientos as $valor){
            $sql = "SELECT id_conocimiento, nombre_conocimiento FROM conocimientos WHERE estado=1 AND id_conocimiento=".$valor;
            $result = $this->conn->consultar($sql);
            array_push($conocimientosMencion, $result[0]);
        }
        $conocimientosMencionJSON = json_encode($conocimientosMencion);
        return $conocimientosMencionJSON;
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
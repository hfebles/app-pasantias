<?php

namespace App\Models;

use App\config\Conexion;
use App\Models\Mantenimientos\Auditoria;

class Mencion{

    private $conn;
    private $auditoria;

    public function __construct(){
        $this->conn = new Conexion();
        $this->auditoria = new Auditoria();
    }

    public function getAllData(){
        $sql = "SELECT * FROM menciones WHERE estado=1";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function getMenciones(){
        $sql = "SELECT id_mencion, nombre FROM menciones WHERE estado=1";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store(array $data){
        $sql="SELECT nombre FROM menciones WHERE nombre='".$data['nombre']."';";
        $consulta = $this->conn->consultar($sql);
        if(empty($consulta)){
            $sql = "INSERT INTO menciones(nombre, area, horas_cumplir, conocimientos, habilidades) 
                    VALUES ('".$data['nombre']."', '".$data['especialidad']."', '".$data['horas_cumplir']."', '".json_encode($data['conocimientos'])."', '".json_encode($data['habilidades'])."')";
            $this->conn->ejecutar($sql);
            $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Registro la mencion ".$data['nombre']]);
            return true;
        }else{
            return false;
        }
    }

    public function delete(int $id){
        $sql = "UPDATE menciones SET estado=0 WHERE id_mencion=".$id;
        $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Elimino una mencion"]);
        $this->conn->ejecutar($sql);
        return true;
    }

}

?>
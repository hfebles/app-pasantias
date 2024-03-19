<?php

namespace App\Models\Mantenimientos;

use App\config\Conexion;

class Habilidades{

    private $conn;

    public function __construct(){
        $this->conn = new Conexion();
    }
    
    public function index(){
        $sql = "SELECT id_habilidad, nombre_habilidad FROM habilidades WHERE estado=1";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function getHabilidades(int $id){
        $sql = "SELECT habilidades FROM menciones WHERE estado=1 AND id_mencion=".$id;
        $habilidadesJSON = $this->conn->consultar($sql);
        $habilidades = json_decode($habilidadesJSON[0]['habilidades']);
        $habilidadesMencion = [];
        foreach($habilidades as $valor){
            $sql = "SELECT id_habilidad, nombre_habilidad FROM habilidades WHERE estado=1 AND id_habilidad=".$valor;
            $result = $this->conn->consultar($sql);
            array_push($habilidadesMencion, $result[0]);
        }
        $habilidadesMencionJSON = json_encode($habilidadesMencion);
        return $habilidadesMencionJSON;
    }

    public function store(array $data){
        if(!empty($data)){
            foreach($data['habilidades'] as $i=>$habilidad){
                if(!empty($habilidad)){
                    $sql = "INSERT INTO habilidades(nombre_habilidad)
                            VALUES('".$habilidad."');";
                    $this->conn->ejecutar($sql);
                }
            }
            return true;
        }
    }

    public function delete(int $id){
        $sql = "UPDATE habilidades SET estado=0 WHERE id_habilidad=".$id;
        $this->conn->ejecutar($sql);
    }

}

?>
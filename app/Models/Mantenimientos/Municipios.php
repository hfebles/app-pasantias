<?php

namespace App\Models\Mantenimientos;

use App\config\Conexion;

class Municipios{

    private $conn;

    public function __construct(){
        
        $this->conn = new Conexion();

    }

    public function getMunicipios(){

        $sql = "SELECT id_municipio, nombre FROM municipios;";

        $result = $this->conn->consultar($sql);

        return $result;

    }

    public function getParroquias(int $id){

        $sql = "SELECT nombre, id_parroquia FROM parroquias WHERE id_municipio = ".$id;

        return $this->conn->consultar($sql);
    }
}

?>
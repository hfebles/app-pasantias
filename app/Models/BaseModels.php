<?php

namespace App\Models;

use App\config\Conexion;

class BaseModels{

    private $conn;

    public function __construct(){
        
        $this->conn = new Conexion();

    }

    public function validateData($tabla, $campo, $valor, $tipo = ""){
        if($tipo == "int"){
            $sql="SELECT $campo FROM $tabla WHERE $campo=$valor;";
        }else{
            $sql="SELECT $campo FROM $tabla WHERE $campo='$valor';";
        }
        return $this->conn->consultar($sql);
    }

}

?>
<?php

namespace App\Models;

use App\config\Conexion;

class Mencion{

    public function getAllData(){

        $conn = new Conexion();

        $sql = "SELECT * FROM menciones WHERE estado=1";

        $result=$conn->consultar($sql);

        return $result;

    }

    public function store(array $data){

        $conn = new Conexion();

        $sql = "INSERT INTO menciones(nombre, area, horas_cumplir, conocimientos, habilidades) 
                VALUES ('".$data['nombre']."', '".$data['area']."', '".$data['horas_cumplir']."', '".$data['conocimientos']."', '".$data['habilidades']."')";

        $conn->ejecutar($sql);

        return true;

    }

    public function delete(int $id){

        $conn = new Conexion();

        $sql = "UPDATE menciones SET estado=0 WHERE id_mencion=".$id;

        $conn->ejecutar($sql);

        return true;

    }

}

?>
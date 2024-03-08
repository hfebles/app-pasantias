<?php

namespace App\Models;

use App\config\Conexion;

class Tutor{

    public function index(){

        $conn = new Conexion();

        $sql = "SELECT * FROM tutores WHERE estado=1";

        $result = $conn->consultar($sql);

        return $result;

    }

    public function getTutores(int $tipo){

        $conn = new Conexion();

        $sql = "SELECT * FROM tutores WHERE estado=1 AND tipo=".$tipo;

        $result = $conn->consultar($sql);

        return $result;

    }

    public function store(array $data){

        $conn = new Conexion();

        $sql = "INSERT INTO tutores(cedula_tutor, nombre, apellido, telefono, ubicacion, correo, tipo)
                VALUES('".$data['cedula_tutor']."', '".$data['nombre']."', '".$data['apellido']."', '".$data['telefono']."', '".$data['ubicacion']."', '".$data['correo']."', '".$data['tipo']."')";

        $conn->ejecutar($sql);

        return true;
    }

    public function delete(int $id){

        $conn = new Conexion();

        $sql = "UPDATE tutores SET estado=0 WHERE id_tutor=".$id;

        $conn->ejecutar($sql);

        return true;

    }

}

?>
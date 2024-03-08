<?php

namespace App\Models;

use App\config\Conexion;

class Estudiante{

    private $conn;

    public function __construct(){
        
        $this->conn = new Conexion();

    }

    public function index(){

        // $sql = "SELECT e.*, ed.*
        //         FROM estudiantes e
        //         INNER JOIN estudiantes_detalles AS ed ON e.id_estudiante = ed.id_estudiante
        //         WHERE ed.periodo='2023-2024'";

        $sql = "SELECT e.*, ed.*
                FROM estudiantes e
                INNER JOIN estudiantes_detalles AS ed ON e.id_estudiante = ed.id_estudiante";

        $result = $this->conn->consultar($sql);

        return $result;

    }

    public function store(array $data){

        $sql = "INSERT INTO estudiantes(cedula, nombres, apellidos, telefono, correo, fecha_nacimiento, sexo, id_parroquia, asignacion_empresa, asignacion_tutor, id_mencion)
                VALUES('".$data['cedula']."', '".$data['nombre1']." ".$data['nombre2']."', '".$data['apellido1']." ".$data['apellido2']."', '".$data['telefono']."', '".$data['correo']."', '".$data['fecha_nacimiento']."', '".$data['sexo']."', 1, 0, 0, 1)";

        $id = $this->conn->ejecutar($sql);

        $sql = "INSERT INTO estudiantes_detalles(id_estudiante, direccion, nombre_curriculum, conocimientos, habilidades, cursos, periodo, promedio)
                VALUES('".$id."', '".$data['direccion']."', '".$data['nombre_curriculum']."', '".$data['conocimientos']."', '".$data['habilidades']."', '".$data['cursos']."', '".$data['periodo']."', '".$data['promedio']."')";

        $this->conn->ejecutar($sql);

        return true;

    }

    public function delete(int $id){

        $sql = "DELETE FROM estudiantes WHERE id_estudiante=".$id;

        $this->conn->ejecutar($sql);

        return true;

    }

}

?>
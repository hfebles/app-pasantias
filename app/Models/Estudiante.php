<?php

namespace App\Models;

use App\config\Conexion;
use App\Models\Mantenimientos\Auditoria;

class Estudiante {

    private $conn;
    private $auditoria;
    private $base;

    public function __construct(){
        $this->conn = new Conexion();
        $this->auditoria = new Auditoria();
        $this->base = new BaseModels();
    }

    public function index(){
        // $sql = "SELECT e.*, ed.*
        //         FROM estudiantes e
        //         INNER JOIN estudiantes_detalles AS ed ON e.id_estudiante = ed.id_estudiante
        //         WHERE ed.periodo='2023-2024'";
        $sql = "SELECT e.id_estudiante, e.cedula, e.nombres, e.apellidos, men.nombre
                FROM estudiantes e
                INNER JOIN estudiantes_detalles AS ed 
                ON e.id_estudiante = ed.id_estudiante
                INNER JOIN menciones AS men
                ON e.id_mencion = men.id_mencion";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store(array $data){
        $consulta = $this->base->validateData("estudiantes", "cedula", $data['cedula'], "");
        if(empty($consulta)){
            $consulta = $this->base->validateData("estudiantes", "correo", $data['correo'], "");
            if(empty($consulta)){
                $file = base64_encode(file_get_contents($_FILES['nombre_curriculum']['tmp_name']));
                $sql = "INSERT INTO estudiantes(cedula, nombres, apellidos, telefono, correo, fecha_nacimiento, sexo, id_parroquia, asignacion_empresa, asignacion_tutor, id_mencion)
                        VALUES('".$data['cedula']."', '".$data['nombre1']." ".$data['nombre2']."', '".$data['apellido1']." ".$data['apellido2']."', '".$data['telefono']."', '".$data['correo']."', '".$data['fecha_nacimiento']."', '".$data['sexo']."', ".$data['id_parroquias'].", 0, 0, ".$data['id_mencion'].")";
                $id = $this->conn->ejecutar($sql);
                $sql = "INSERT INTO estudiantes_detalles(id_estudiante, direccion, nombre_curriculum, conocimientos, habilidades, cursos, periodo, promedio)
                        VALUES('".$id."', '".$data['direccion']."', '".$file."', '".json_encode($data['conocimientos'])."', '".json_encode($data['habilidades'])."', '".$data['cursos']."', '".$data['periodo']."', '".$data['promedio']."')";
                $this->conn->ejecutar($sql);
                $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Registro un estudiante"]);
                return true;
                return "entro";
            }else{
                return "correo encontrado";
            }
        }
        else{
            return "cedula encontrado";
        }
    }

    public function delete(int $id){
        $sql = "DELETE FROM estudiantes WHERE id_estudiante=".$id;
        $this->conn->ejecutar($sql);
        $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Elimino un estudiante"]);
        return true;
    }

    public function show(int $id){
        $sql = "SELECT nombre_curriculum FROM estudiantes_detalles WHERE id_estudiante=".$id;
        return $this->conn->consultar($sql);
    }

}

?>
<?php

namespace App\Models;

use App\config\Conexion;
use App\Models\Mantenimientos\Auditoria;

class Tutor{

    private $conn;
    private $auditoria;
    private $base;

    public function __construct(){
        $this->conn = new Conexion();
        $this->auditoria = new Auditoria();
        $this->base = new BaseModels();
    }

    public function index(){
        $sql = "SELECT id_tutor, cedula_tutor, nombre, apellido, estado  FROM tutores WHERE estado=1";
        $result = $this->conn->consultar($sql);
        return $result;

    }

    public function getTutores(int $tipo){
        $sql = "SELECT id_tutor, nombre, apellido FROM tutores WHERE estado=1 AND tipo=".$tipo;
        $result = $this->conn->consultar($sql);
        return $result;

    }

    public function store(array $data){
        $consulta = $this->base->validateData("tutores", "cedula_tutor", $data['cedula_tutor'], "");
        if(empty($consulta)){
            $sql = "INSERT INTO tutores(cedula_tutor, nombre, apellido, telefono, ubicacion, correo, tipo)
                    VALUES('".$data['cedula_tutor']."', '".$data['nombre']."', '".$data['apellido']."', '".$data['telefono']."', '".$data['ubicacion']."', '".$data['correo']."', '".$data['tipo']."')";
            $this->conn->ejecutar($sql);
            $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Registro un Tutor"]);
            return true;
        }else{
            return false;
        }
    }

    public function delete(int $id){
        $sql = "UPDATE tutores SET estado=0 WHERE id_tutor=".$id;
        $this->conn->ejecutar($sql);
        $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Elimino un Tutor"]);
        return true;
    }

}

?>
<?php

namespace App\Models\Mantenimientos;

use App\config\Conexion;
use App\Models\BaseModels;

class Usuarios{

    private $conn;
    private $auditoria;
    private $base;

    public function __construct(){
        $this->conn = new Conexion();
        $this->auditoria = new Auditoria();
        $this->base = new BaseModels();
    }

    public function index(){
        $sql = "SELECT id_usuario, nombre, apellido, usuario, nivel FROM usuarios;";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store(array $data){
        $consulta = $this->base->validateData("usuarios", "usuario", $data['user'], "");
        if(empty($consulta)){
            $consulta = $this->base->validateData("usuarios", "clave", md5($data['password']), "");
            if(empty($consulta)){
                $sql = "INSERT INTO usuarios(nombre, apellido, usuario, clave, nivel)
                        VALUES('".strtoupper($data['nombre'])."', '".strtoupper($data['apellido'])."', '".$data['user']."', '".md5($data['password'])."', ".$data['nivel'].");";
                $this->conn->ejecutar($sql);
                $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Creo un usuario"]);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function delete(int $id){
        $sql = "DELETE FROM usuarios WHERE id_usuario=".$id;
        $this->conn->ejecutar($sql);
        $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Elimino un usuario"]);
        return true;
    }

}

?>
<?php

namespace App\Models;

use App\config\Conexion;
use App\Models\Mantenimientos\Auditoria;

class Empresa{

    private $conn;
    private $auditoria;
    private $base;

    public function __construct(){
        $this->conn = new Conexion();
        $this->auditoria = new Auditoria();
        $this->base = new BaseModels();
    }

    public function index(){
        $sql = "SELECT empre.id_empresa, empre.nombre, empre.ubicacion, empre.estado, muni.nombre_municipio, parro.nombre_parroquia 
                FROM empresas empre
                JOIN parroquias parro
                ON empre.id_parroquia = parro.id_parroquia
                JOIN municipios muni
                ON parro.id_municipio = muni.id_municipio
                WHERE estado=1;";
        $result = $this->conn->consultar($sql);
        return $result;
    }

    public function store(array $data){
        $consulta = $this->base->validateData("empresas", "rif", $data['rif'], "");
        if(empty($consulta)){
            $sql = "INSERT INTO empresas(rif, nombre, ubicacion, id_parroquia, id_tutor, telefono, departamento, correo, cupos, conocimientos, habilidades, estado)
                    VALUES('".$data['rif']."', '".$data['nombre']."', '".$data['ubicacion']."', '".$data['id_parroquias']."', '".$data['id_tutor']."', '".$data['telefono']."', '".$data['departamento']."', '".$data['correo']."', '".$data['cupos']."', '".json_encode($data['conocimientos'])."', '".json_encode($data['habilidades'])."', '1');";
            $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Registro una empresa"]);
            $this->conn->ejecutar($sql);
            return true;
        }else{
            return false;
        }
    }

    public function delete(int $id){
        $sql = "UPDATE empresas SET estado=0 WHERE id_empresa=".$id;
        $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Elimino una empresa"]);
        $this->conn->ejecutar($sql);
        return true;
    }

}

?>
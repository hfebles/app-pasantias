<?php

namespace App\Models;

use App\config\Conexion;

class Empresa{

    private $conn;

    public function __construct(){
        
        $this->conn = new Conexion();

    }

    public function index(){

        $sql = "SELECT * FROM empresas WHERE estado=1";

        $result = $this->conn->consultar($sql);

        return $result;

    }

    public function store(array $data){

        $sql = "INSERT INTO empresas(nombre, ubicacion, id_parroquia, id_tutor, telefono, departamento, correo, cupos, conocimientos, habilidades, estado)
                VALUES('".$data['nombre']."', '".$data['ubicacion']."', '".$data['id_parroquias']."', '".$data['id_tutor']."', '".$data['telefono']."', '".$data['departamento']."', '".$data['correo']."', '".$data['cupos']."', '".$data['conocimientos']."', '".$data['habilidades']."', '1');";

        $this->conn->ejecutar($sql);

        return true;

    }

    public function delete(int $id){

        $sql = "UPDATE empresas SET estado=0 WHERE id_empresa=".$id;

        $this->conn->ejecutar($sql);

        return true;

    }

}

?>
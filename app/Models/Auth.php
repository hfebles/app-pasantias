<?php

namespace App\Models;

use App\config\Conexion;


class Auth{

    public static function login(string $user, string $password){

        $conn = new Conexion();

        $sql="SELECT id_usuario, nombre, apellido, usuario, nivel 
                FROM usuarios
                WHERE usuario = '{$user}'
                AND clave = '{$password}'";

        $result = $conn->consultar($sql);

        return $result;

    }

}

?>
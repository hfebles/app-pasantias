<?php

namespace App\config;

use PDO;
use PDOException;

class Conexion{

    private $dbname;
    private $servidor;
    private $usuario;
    private $password;
    private $conexion;

    public function __construct()
    {

        $this->dbname = $_ENV['DB_DATABASE'];
        $this->servidor = $_ENV['DB_HOST'];
        $this->usuario = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->dbname", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Error en la conexion: " . $e;
        }
    }

    public function ejecutar($sql)
    {

        $this->conexion->exec($sql);

        return $this->conexion->lastInsertId();
    }

    public function consultar($sql)
    {
        // return $sql;
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
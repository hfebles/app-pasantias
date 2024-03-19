<?php

namespace App\config;

use Exception;
use PDO;
use PDOException;

class Conexion
{
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
            $this->conexion = new PDO("mysql:host={$this->servidor};dbname={$this->dbname}", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error en la conexión a la base de datos: ' . $e->getMessage());
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


    public function backupDatabase($database)
    {
        try {

            if (!file_exists('./' . $_ENV['PATH_BACKUP'])) {
                mkdir('./' . $_ENV['PATH_BACKUP'], 0777, true);
            }

            $backup = fopen('./' . $_ENV['PATH_BACKUP'] . $database . "_" . date('Ymd') . "_" . date('His') . ".sql", 'w');
            if (!$backup) {
                throw new Exception("No se pudo abrir el archivo de respaldo para escribir.");
            }

            $dump = $this->conexion->prepare("SHOW CREATE DATABASE $database");
            $dump->execute();
            $databaseCreateStatement = $dump->fetchColumn(1);

            fwrite($backup, $databaseCreateStatement . ";\n\n");

            $tables = $this->conexion->query("SHOW TABLES");
            while ($table = $tables->fetch(PDO::FETCH_NUM)) {
                $tableName = $table[0];
                $tableDump = $this->conexion->prepare("SHOW CREATE TABLE $tableName");
                $tableDump->execute();
                $tableCreateStatement = $tableDump->fetchColumn(1);
                fwrite($backup, $tableCreateStatement . ";\n\n");

                $rows = $this->conexion->query("SELECT * FROM $tableName");
                while ($row = $rows->fetch(PDO::FETCH_ASSOC)) {
                    $rowValues = array_map(function ($value) {
                        return $this->conexion->quote($value);
                    }, array_values($row));
                    fwrite($backup, "INSERT INTO $tableName VALUES (" . implode(',', $rowValues) . ");\n");
                }
                fwrite($backup, "\n");
            }

            fclose($backup);

            echo "Backup realizado correctamente. Archivo: " . $database . "_" . date('Ymd') . "_" . date('His') . ".sql \n";
        } catch (Exception $e) {
            die("Error al realizar el backup: " . $e->getMessage());
        }
    }

    public function restoreDatabase($inputFile)
    {
        try {
            $sql = file_get_contents('./' . $_ENV['PATH_BACKUP'] . $inputFile);

            $this->conexion->exec($sql);

            echo "Restauración realizada correctamente desde: $inputFile\n";
        } catch (Exception $e) {
            die("Error al restaurar desde el backup: " . $e->getMessage());
        }
    }
}

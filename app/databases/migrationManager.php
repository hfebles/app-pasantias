<?php

namespace App\databases;

use App\config\Conexion;




class MigrationManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Conexion();
    }
    public function executeMigrations()
    {
        $migrationDirectory = __DIR__ . '/migrations/';
        $migrationFiles = glob($migrationDirectory . '*.sql');

        foreach ($migrationFiles as $file) {
            $sql = file_get_contents($file);

            try {
                $this->conn->ejecutar($sql);
                echo "Migración ejecutada con éxito: " . basename($file) . "\n";
            } catch (\PDOException $e) {
                echo "Error al ejecutar migración: " . $e->getMessage() . "\n";
            }
        }
    }
}

<?php

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\config\Conexion;

use App\databases\MigrationManager;


// $migrationManager = new MigrationManager();
// $migrationManager->executeMigrations();

var_dump((new Conexion())->backupDatabase($_ENV['DB_DATABASE']));
// var_dump((new Conexion())->restoreDatabase("proyecto_pasantias_20240319_220352.sql"));

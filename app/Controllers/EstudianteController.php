<?php

namespace App\Controllers;

use App\Models\Estudiante;
use App\Controllers\Mantenimientos\MunicipiosController;

class EstudianteController
{

    private $estudiante;

    public function __construct()
    {
        $this->estudiante = new Estudiante();
    }

    public function index()
    {
        $data = $this->estudiante->index();
        //require_once("app/views/estudiantes/index.php");
        require_once("public/views/estudiantes/index.php");
    }

    public function create()
    {
        $municipios = MunicipiosController::getMunicipios();
        $menciones = MencionController::getMenciones();
        require_once("app/views/estudiantes/create.php");
    }

    public function store($request, $pdf)
    {
        //$a = $this->estudiante->store($request);
        //header("Location: ".$_ENV['BASE_PATH']."/estudiante");
        var_dump($pdf);
        die();
    }

    public function delete(int $id)
    {
        $this->estudiante->delete($id);
        header("Location: " . $_ENV['BASE_PATH'] . "/estudiante");
    }
}

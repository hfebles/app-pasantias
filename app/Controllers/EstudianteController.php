<?php

namespace App\Controllers;

use App\Models\Estudiante;
use App\Controllers\Mantenimientos\MunicipiosController;
use App\Models\Mantenimientos\Conocimientos;
use App\Models\Mantenimientos\Habilidades;

class EstudianteController{

    private $estudiante;

    public function __construct()
    {
        $this->estudiante = new Estudiante();
    }

    public function index()
    {
        $data = $this->estudiante->index();
        require_once("public/views/estudiantes/index.php");
    }

    public function create(){
        $cono = new Conocimientos();
        $habi = new Habilidades();
        $conocimientos = $cono->index();
        $habilidades = $habi->index();
        $municipios = MunicipiosController::getMunicipios();
        $menciones = MencionController::getMenciones();
        require_once("public/views/estudiantes/create.php");
    }

    public function store($request, $file){
        $a = $this->estudiante->store($request);
        header("Location: ".$_ENV['BASE_PATH']."/estudiante");
    }

    public function delete(int $id)
    {
        $this->estudiante->delete($id);
        header("Location: " . $_ENV['BASE_PATH'] . "/estudiante");
    }

    public function show($id){
        $data = $this->estudiante->show($id);
        require_once("app/views/estudiantes/show.php");
    }

}

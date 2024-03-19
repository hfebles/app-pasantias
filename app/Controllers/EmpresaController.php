<?php

namespace App\Controllers;

use App\Models\Empresa;
use App\Controllers\Mantenimientos\MunicipiosController;
use App\Models\Mantenimientos\Conocimientos;
use App\Models\Mantenimientos\Habilidades;

class EmpresaController{

    private $empresa;

    public function __construct(){
        $this->empresa = new Empresa;
    }

    public function index(){
        $data = $this->empresa->index();
        require_once("public/views/empresas/index.php");
    }

    public function create(){
        $cono = new Conocimientos();
        $habi = new Habilidades();
        $municipios = MunicipiosController::getMunicipios();
        $tutores = TutorController::getTutores();
        $conocimientos = $cono->index();
        $habilidades = $habi->index();
        require_once("public/views/empresas/create.php");
    }

    public function store($request){
        $this->empresa->store($request);
        header("Location: ".$_ENV['BASE_PATH']."/empresa");
    }

    public function delete(int $id){
        $this->empresa->delete($id);
        header("Location: ".$_ENV['BASE_PATH']."/empresa");
    }

}

?>
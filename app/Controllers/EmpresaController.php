<?php

namespace App\Controllers;

use App\Models\Empresa;

use App\Controllers\Mantenimientos\MunicipiosController;

class EmpresaController{

    private $empresa;

    private $auditoria;

    public function __construct(){

        $this->empresa = new Empresa;

    }

    public function index(){

        $data = $this->empresa->index();

        require_once("public/views/empresas/index.php");

        // $this->auditoria->store_auditoria([1, "hola"]);
    }

    public function create(){

        $municipios = MunicipiosController::getMunicipios();

        $tutores = TutorController::getTutores();

        require_once("app/views/empresas/create.php");

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
<?php

namespace App\Controllers;

use App\Models\Estudiante;

class EstudianteController{

    private $estudiante;

    public function __construct(){
        
        $this->estudiante = new Estudiante();

    }

    public function index(){

        $data = $this->estudiante->index();

        require_once("app/views/estudiantes/index.php");

    }

    public function create(){

        require_once("app/views/estudiantes/create.php");

    }

    public function store($request){

        $this->estudiante->store($request);
        
        header("Location: ".$_ENV['BASE_PATH']."/estudiante");

    }

    public function delete(int $id){

        $this->estudiante->delete($id);

        header("Location: ".$_ENV['BASE_PATH']."/estudiante");

    }

    

}

?>
<?php

namespace App\Controllers;
use App\Models\Tutor;
use App\Controllers\Mantenimientos\MunicipiosController;

class TutorController{

    private $tutores;

    public function __construct(){
        $this->tutores = new Tutor();
    }

    public function index(){
        $data = $this->tutores->index();
        require_once("public/views/tutor/index.php");
    }

    public static function getTutores(){
        $tutores = new Tutor();
        $result = $tutores->getTutores(2);
        return $result;
    }

    public function create(){
        $municipios = MunicipiosController::getMunicipios();
        require_once("public/views/tutor/create.php");
    }

    public function store($request){
        $bool = $this->tutores->store($request);
        header("Location: ".$_ENV['BASE_PATH']."/tutor");
    }

    public function delete(int $id){
        $this->tutores->delete($id);
        header("Location: ".$_ENV['BASE_PATH']."/tutor");
    }

}

?>
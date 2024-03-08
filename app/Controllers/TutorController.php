<?php

namespace App\Controllers;

use App\Models\Tutor;

use App\Controllers\Mantenimientos\MunicipiosController;

class TutorController{

    public function index(){

        $tutores = new Tutor();

        $data = $tutores->index();

        require_once("app/views/tutores/index.php");

    }

    public static function getTutores(){

        $tutores = new Tutor();

        $result = $tutores->getTutores(2);

        return $result;

    }

    public function create(){

        $municipios = MunicipiosController::getMunicipios();

        // $parroquia = (new MunicipiosController())->getParroquias(1);

        // var_dump($parroquia);

        // die();

        require_once("app/views/tutores/create.php");

    }

    public function store($request){

        $tutores = new Tutor();

        $tutores->store($request);

        header("Location: ".$_ENV['BASE_PATH']."/tutor");

    }

    public function delete(int $id){

        $tutores = new Tutor();

        $tutores->delete($id);

        header("Location: ".$_ENV['BASE_PATH']."/tutor");

    }

}

?>
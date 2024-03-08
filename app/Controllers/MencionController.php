<?php

namespace App\Controllers;

use App\Models\Mencion;

class MencionController{

    public function index(){

        $menciones = new Mencion();

        $data = $menciones->getAllData();

        // var_dump($menciones);

        require_once("app/views/menciones/index.php");

    }

    public function create(){

        require_once("app/views/menciones/create.php");

    }

    public function store($request){

        $mencion = new Mencion();

        $mencion->store($request);

        header("Location: ".$_ENV['BASE_PATH']."/mencion");

    }

    public function delete(int $id){

        $mencion = new Mencion();

        $mencion->delete($id);

        header("Location: ".$_ENV['BASE_PATH']."/mencion");

    }

}

?>
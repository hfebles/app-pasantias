<?php

namespace App\Controllers;

use App\Models\Mencion;
use App\Models\Mantenimientos\Conocimientos;
use App\Models\Mantenimientos\Habilidades;

class MencionController{

    private $mencion;

    public function __construct(){
        $this->mencion = new Mencion();
    }

    public function index(){
        $data = $this->mencion->getAllData();
        require_once("public/views/mencion/index.php");
    }

    public static function getMenciones(){
        $mencion = new Mencion();
        $data = $mencion->getMenciones();
        return $data;
    }

    public function create(){
        $cono = new Conocimientos();
        $habi = new Habilidades();
        $conocimientos = $cono->index();
        $habilidades = $habi->index();
        require_once("public/views/mencion/create.php");
    }

    public function store($request){
        $this->mencion->store($request);
        header("Location: ".$_ENV['BASE_PATH']."/mencion");
    }

    public function delete(int $id){
        $this->mencion->delete($id);
        header("Location: ".$_ENV['BASE_PATH']."/mencion");
    }

}

?>
<?php

namespace App\Controllers\Mantenimientos;

use App\Models\Mantenimientos\Conocimientos;

class ConocimientosController{

    private $conocimientos;

    public function __construct(){
        $this->conocimientos = new Conocimientos();
    }

    public function index(){
        $data = $this->conocimientos->index();
        require_once("app/views/Mantenimientos/conocimientos/index.php");
    }

    public function create(){
        require_once("app/views/Mantenimientos/conocimientos/create.php");
    }

    public function store(array $request){
        $this->conocimientos->store($request);
        header("Location: ".$_ENV['BASE_PATH']."/conocimientos");
    }

    public function delete(int $id){
        $this->conocimientos->delete($id);
        header("Location: ".$_ENV['BASE_PATH']."/conocimientos");
    }

}

?>
<?php

namespace App\Controllers\Mantenimientos;

use App\Models\Mantenimientos\Habilidades;

class HabilidadesController{

    private $habilidades;

    public function __construct(){
        $this->habilidades = new Habilidades();
    }

    public function index(){
        $data = $this->habilidades->index();
        require_once("app/views/Mantenimientos/habilidades/index.php");
    }

    public function getHabilidades(int $id){
        $data = $this->habilidades->getHabilidades($id);
        $dataJSON = json_encode($data);
        header('Content-Type: application/json');
        echo $dataJSON;
    }

    public function create(){
        require_once("app/views/Mantenimientos/habilidades/create.php");
    }

    public function store(array $request){
        $this->habilidades->store($request);
        header("Location: ".$_ENV['BASE_PATH']."/habilidades");
    }

    public function delete(int $id){
        $this->habilidades->delete($id);
        header("Location: ".$_ENV['BASE_PATH']."/habilidades");
    }

}

?>
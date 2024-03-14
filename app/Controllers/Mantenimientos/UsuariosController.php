<?php

namespace App\Controllers\Mantenimientos;

use App\Models\Mantenimientos\Usuarios;

class UsuariosController{

    private $usuarios;

    public function __construct(){
        
        $this->usuarios = new Usuarios();

    }

    public function index(){

        $data = $this->usuarios->index();

        require_once("app/views/Mantenimientos/usuarios/index.php");

    }

    public function create(){

        require_once("app/views/Mantenimientos/usuarios/create.php");

    }

    public function store(array $request){

        $this->usuarios->store($request);

        header("Location: ".$_ENV['BASE_PATH']."/usuario");

    }

    public function delete(int $id){

        $this->usuarios->delete($id);

        header("Location: ".$_ENV['BASE_PATH']."/usuario");

    }

}

?>
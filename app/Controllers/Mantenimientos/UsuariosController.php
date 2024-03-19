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
        require_once("public/views/mantenimientos/usuarios/index.php");
    }

    public function create(){
        require_once("public/views/mantenimientos/usuarios/create.php");
    }

    function validatePassword($contrasena){
        if (strlen($contrasena) < 6 || strlen($contrasena) > 16) {
            return false;
        }
        if (!preg_match('/[A-Z]/', $contrasena)) {
            return false;
        }
        if (!preg_match('/[a-z]/', $contrasena)) {
            return false;
        }
        if (!preg_match('/[0-9]/', $contrasena)) {
            return false;
        }
        if (!preg_match('/[^a-zA-Z0-9]/', $contrasena)) {
            return false;
        }
        return true;
      }

    public function store(array $request){
        if(UsuariosController::validatePassword($request['password'])){
            $this->usuarios->store($request);
            header("Location: ".$_ENV['BASE_PATH']."/usuario");
        }else{
            require_once("public/views/mantenimientos/usuarios/create.php");
            echo '<script> alert("La contraseña ingresa no es segura"); </script>';
        }
    }

    public function delete(int $id){
        $this->usuarios->delete($id);
        header("Location: ".$_ENV['BASE_PATH']."/usuario");
    }

}

?>
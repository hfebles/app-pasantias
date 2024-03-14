<?php

namespace App\Controllers;

use App\Models\Auth;

use App\Models\Mantenimientos\Auditoria;

class AuthController{

    private $auditoria;

    public function __construct(){
        
        $this->auditoria = new Auditoria;

    }

    public static function validarLogueo()
    {
        if (empty($_SESSION['nombre_usuario'])) {
            header("location: /app-pasantias/login");
        }
    }

    public function login($user, $password)
    {
        $auth = Auth::login($user, $password);

        if ($auth) {
            foreach ($auth as $valor) {
                $_SESSION["nombre_usuario"] = $valor['usuario'];
                $_SESSION["nivel_acceso"] = $valor['nivel'];
                $_SESSION["id_usuario"] = $valor['id_usuario'];
            }
            $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Inicio Sesion"]);
            header("location: /app-pasantias/home");

        } else {
            return false;
        }
    }

    public function logout()
    {
        $this->auditoria->store_auditoria([$_SESSION["id_usuario"], "Cerro Sesion"]);
        session_destroy();
        header("location: /app-pasantias/login");

    }

}

?>
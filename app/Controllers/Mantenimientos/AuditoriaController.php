<?php

namespace App\Controllers\Mantenimientos;

use App\Models\Mantenimientos\Auditoria;

class AuditoriaController{

    private $auditoria;

    public function __construct(){
        $this->auditoria = new Auditoria();
    }

    public function index(){
       $data = $this->auditoria->index();
       require_once("public/views/mantenimientos/auditorias/index.php");
    }

}

?>
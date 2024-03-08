<?php

namespace App\Models;

use App\config\Conexion;

class BaseModels{

    private $conn;

    public function __construct(){
        
        $this->conn = new Conexion();

    }

    

}

?>
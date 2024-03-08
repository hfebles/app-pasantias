<?php

namespace App\Controllers\Mantenimientos;

use App\Models\Mantenimientos\Municipios;

class MunicipiosController{

    public static function getMunicipios(){

        $municipios = new Municipios;

        $data = $municipios->getMunicipios();

        return $data;

    }

    public function getParroquias(int $id){

        $municipios = new Municipios;

        $data = $municipios->getParroquias($id);

        $dataJSON = json_encode($data);

        header('Content-Type: application/json');

        echo $dataJSON;

    }

}

?>
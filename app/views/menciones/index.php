<?php

// echo "<pre>";

// var_dump($data);

// echo "</pre>";

echo "<table border=2>";

foreach($data as $d)
{
    echo "<tr> <td>";
    echo $d['nombre']."</td>";
    echo "<td><a href='/app-pasantias/mencion-delete/".$d['id_mencion']."'>eliminar</a>";
    echo "</td> </tr>";

}

echo "</table>";

?>
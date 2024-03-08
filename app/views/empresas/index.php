<?php

// echo "<pre>";

// print_r($data);

// echo "</pre>";

?>

<table border="2" width="100%">
    <tr>
        <th>nombre</th>
        <th>ubicacion</th>
        <th>telefono</th>
        <th>promedio</th>
        <th>correo</th>
    </tr>
    <?php 
    if(empty($data)){
        echo '<tr align="center"><td colspan="5">sin registros</td></tr>';
    }else{
    foreach($data as $d){ ?>
        <tr>
        <td><?php echo $d['nombre']; ?></td>
        <td><?php echo $d['ubicacion']; ?></td>
        <td><?php echo $d['telefono']; ?></td>
        <td><?php echo $d['correo']; ?></td>
        <td><a href='/app-pasantias/empresa-delete/<?php echo $d['id_empresa']; ?>'>eliminar</a></td>
    </tr>
    <?php }} 
    echo "</table> <br> <br> <a href='/app-pasantias/empresa-create'>agregar empresa</a>";
    ?>
</table>
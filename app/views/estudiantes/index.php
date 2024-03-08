<?php

// echo "<pre>";

// print_r($data);

// echo "</pre>";

?>

<table border="2" width="100%">
    <tr>
        <th>nombres</th>
        <th>apellidos</th>
        <th>cedula</th>
        <th>promedio</th>
        <th>acciones</th>
    </tr>
    <?php 
    if(empty($data)){
        echo '<tr align="center"><td colspan="5">sin registros</td></tr>';
    }else{
    foreach($data as $d){ ?>
        <tr>
        <td><?php echo $d['nombres']; ?></td>
        <td><?php echo $d['apellidos']; ?></td>
        <td><?php echo $d['cedula']; ?></td>
        <td><?php echo $d['promedio']; ?></td>
        <td><a href='/app-pasantias/estudiante-delete/<?php echo $d['id_estudiante']; ?>'>eliminar</a></td>
    </tr>
    <?php }} 
    echo "</table> <br> <br> <a href='/app-pasantias/estudiante-create'>agregar estudiante</a>";
    ?>
</table>
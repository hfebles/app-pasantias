<?php

// echo "<pre>";

// var_dump($data);

// echo "</pre>";

?>

<table border="2" width="100%">
    <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>cedula</th>
        <th>acciones</th>
    </tr>
    <?php 
    if(empty($data)){
        echo '<tr><td colspan="4">sin registros</td></tr>';
    }else{
    foreach($data as $d){ ?>
        <tr>
        <td><?php echo $d['nombre']; ?></td>
        <td><?php echo $d['apellido']; ?></td>
        <td><?php echo $d['cedula_tutor']; ?></td>
        <td>accion</td>
    </tr>
    <?php }} ?>
</table>
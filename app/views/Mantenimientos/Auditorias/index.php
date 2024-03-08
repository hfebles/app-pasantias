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
    </tr>
    <?php }} ?>
</table>
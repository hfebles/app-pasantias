<?php

// echo "<pre>";

// print_r($data);

// echo "</pre>";

?>

<table border="2" width="100%">
    <tr>
        <th>#</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Accion</th>
    </tr>
    <?php 
    if(empty($data)){
        echo '<tr align="center"><td colspan="5">sin registros</td></tr>';
    }else{
    foreach($data as $d){ ?>
        <tr>
        <td><?php echo $d['id_auditoria']; ?></td>
        <td><?php echo $d['usuario']; ?></td>
        <td><?php echo date('d-m-Y', strtotime($d['fecha_accion'])); ?></td>
        <td><?php echo /*date('h:i:s A', strtotime(*/$d['hora_accion']/*))*/; ?></td>
        <td><?php echo $d['accion']; ?></td>
    </tr>
    <?php }} ?>
</table>
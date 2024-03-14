<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>

<table border="2" width="100%">
    <tr>
        <th>#</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>usuario</th>
        <th>nivel</th>
        <th>accion</th>
    </tr>
    <?php 
    if(empty($data)){
        echo '<tr align="center"><td colspan="6">sin registros</td></tr>';
    }else{
    foreach($data as $d){ ?>
        <tr>
        <td><?php echo $d['id_usuario']; ?></td>
        <td><?php echo $d['nombre']; ?></td>
        <td><?php echo $d['apellido']; ?></td>
        <td><?php echo $d['usuario']; ?></td>
        <td><?php echo $d['nivel']; ?></td>
        <td><a href='/app-pasantias/usuario-delete/<?php echo $d['id_usuario']; ?>'>eliminar</a></td>
    </tr>
    <?php }} 
    echo "</table> <br> <br> <a href='/app-pasantias/usuario-create'>agregar usuario</a>";
    ?>
</table>
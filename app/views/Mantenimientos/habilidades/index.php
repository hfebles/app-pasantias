<?php 
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
?>

<table border="2" width="100%">
    <tr>
        <th>#</th>
        <th>nombre</th>
        <th>accion</th>
    </tr>
    <?php 
    if(empty($data)){
        echo '<tr align="center"><td colspan="3">sin registros</td></tr>';
    }else{
    foreach($data as $d){ ?>
        <tr>
        <td><?php echo $d['id_habilidad']; ?></td>
        <td><?php echo $d['nombre_habilidad']; ?></td>
        <td><a href='/app-pasantias/habilidades-delete/<?php echo $d['id_habilidad']; ?>'>eliminar</a></td>
    </tr>
    <?php }} 
    echo "</table> <br> <br> <a href='/app-pasantias/habilidades-create'>agregar habilidades</a>";
    ?>
</table>
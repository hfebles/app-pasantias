<?php

// echo "<pre>";

// var_dump($municipios);

// echo "</pre>";

?>

<form action="/app-pasantias/tutor-store" method="post">

    <label for="">cedula tutor</label>
    <input type="text" name="cedula_tutor" required>

    <label for="">nombre</label>
    <input type="text" name="nombre" required>

    <label for="">apellido</label>
    <input type="text" name="apellido" required>

    <label for="">telefono</label>
    <input type="tel" name="telefono" pattern="[0-9]{4}[0-9]{7}" title="Un número de teléfono válido debe tener 4 dígitos, un guión (-) y 7 dígitos más" required>

    <label for="">ubicacion</label>
    <input type="text" name="ubicacion" required>

    <label for="">correo</label>
    <input type="email" name="correo" required>

    <label for="">Seleccione un tipo de tutor</label>
    <select name="tipo" name="tipo" required>
        <option>- Seleccione -</option>
        <option value="1">Academico</option>
        <option value="2">Empresarial</option>
    </select>

    <label for="">Seleccione un municipio</label>
    <select name="id_municipio" required onchange="selectParroquia(this.value);">
        <option>- Seleccione -</option>
        <?php foreach($municipios as $municipio){ ?>
        <option value="<?php echo $municipio['id_municipio']; ?>"><?php echo $municipio['nombre']; ?></option>
        <?php } ?>
    </select>

    <label for="">Seleccione un municipio</label>
    <select name="id_parroquias" required id="select-parroquias">
        <option>- Seleccione -</option>
    </select>

    <input type="submit" value="enviar">

</form>

<script>

        function selectParroquia(id_municipio){

            console.log(id_municipio);

            var selectParroquias = document.getElementById('select-parroquias');

            fetch(`/app-pasantias/parroquia-get/${id_municipio}`, {
                method: 'GET',
                headers: {
                    'content-type': 'application/json',
                }
            }).then(response => {
                return response.json();
            }).then(data => {
                console.log(data)
                selectParroquias.innerHTML = ''
                var option = ''
                for(let i in data){
                    option += `<option value="${data[i].id_parroquia}">${data[i].nombre}</option>`
                    // console.log(data[i].nombre)
                }
                selectParroquias.innerHTML = option
            });
        }

</script>
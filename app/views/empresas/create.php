<?php // print_r($tutores); ?>

<form action="/app-pasantias/empresa-store" method="post">

    <label for="">nombre de la empresa:</label>
    <input type="text" name="nombre" required>

    <label for="">ubicacion:</label>
    <input type="text" name="ubicacion" required>

    <label for="">telefono:</label>
    <input type="tel" name="telefono" pattern="[0-9]{4}[0-9]{7}" title="Un número de teléfono válido debe tener 4 dígitos, un guión (-) y 7 dígitos más" required>

    <label for="">departamento</label>
    <input type="text" name="departamento" required>

    <label for="">correo:</label>
    <input type="email" name="correo" required>

    <label for="">cupos disponibles:</label>
    <input type="text" name="cupos" required>

    <label for="">conocimientos:</label>
    <input type="text" name="conocimientos" required>

    <label for="">habilidades:</label>
    <input type="text" name="habilidades" required>

    <label for="">Seleccione un tutor empresarial:</label>
    <select name="id_tutor" class="form-select bg-body-secondary mb-3" required>
        <option>- Seleccione -</option>
        <?php foreach($tutores as $tutor){ ?>
        <option value="<?php echo $tutor['id_tutor']; ?>"><?php echo $tutor['nombre']; ?></option>
        <?php } ?>
    </select>

    <label for="">Seleccione un municipio:</label>
    <select name="id_municipio" class="form-select bg-body-secondary mb-3" onchange="selectParroquia(this.value);" required>
        <option>- Seleccione -</option>
        <?php foreach($municipios as $municipio){ ?>
        <option value="<?php echo $municipio['id_municipio']; ?>"><?php echo $municipio['nombre_municipio']; ?></option>
        <?php } ?>
    </select>

    <label for="">Seleccione una parroquia:</label>
    <select name="id_parroquias" class="form-select bg-body-secondary mb-3" id="select-parroquias" required>
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
                    option += `<option value="${data[i].id_parroquia}">${data[i].nombre_parroquia}</option>`
                    // console.log(data[i].nombre)
                }
                selectParroquias.innerHTML = option
            });
        }

</script>
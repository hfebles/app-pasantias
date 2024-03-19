<form action="/app-pasantias/estudiante-store" enctype="multipart/form-data" method="post">

    <label for="">cedula:</label>
    <input type="text" name="cedula" required>

    <label for="">primer nombre:</label>
    <input type="text" name="nombre1" required>

    <label for="">segundo nombre:</label>
    <input type="text" name="nombre2" required>

    <label for="">primer apellido</label>
    <input type="text" name="apellido1" required>

    <label for="">segundo apellido:</label>
    <input type="text" name="apellido2" required>

    <label for="">telefono:</label>
    <input type="tel" name="telefono" pattern="[0-9]{11}" title="Un número de teléfono válido debe tener 4 dígitos, un guión (-) y 7 dígitos más" required>

    <label for="">correo:</label>
    <input type="email" name="correo" required>

    <label for="">fecha_nacimiento</label>
    <input type="date" name="fecha_nacimiento" required>

    <label for="">sexo:</label>
    <select name="sexo" required>
        <option value="N" selected disabled>- Seleccione -</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
    
    <label for="">direccion:</label>
    <input type="text" name="direccion" required>

    <label for="">curriculum:</label>
    <input type="file" name="nombre_curriculum" required>

    <label for="">conocimientos:</label>
    <input type="text" name="conocimientos" required>

    <label for="">habilidades:</label>
    <input type="text" name="habilidades" required>

    <label for="">cursos:</label>
    <input type="text" name="cursos" required>

    <label for="">periodo:</label>
    <input type="date" name="periodo" required>

    <label for="">Seleccione un municipio:</label>
    <select name="id_municipio" id="id_municipio" onchange="selectParroquia(this.value);" required>
        <option>- Seleccione -</option>
        <?php foreach($municipios as $municipio){ ?>
        <option value="<?php echo $municipio['id_municipio']; ?>"><?php echo $municipio['nombre_municipio']; ?></option>
        <?php } ?>
    </select>

    <label for="">Seleccione una parroquia:</label>
    <select name="id_parroquias" id="select-parroquias" required>
        <option>- Seleccione -</option>
    </select>

    <label for="">Seleccione una mencion:</label>
    <select name="id_mencion" onchange="selectParroquia(this.value);" required>
        <option>- Seleccione -</option>
        <?php foreach($menciones as $mencion){ ?>
        <option value="<?php echo $mencion['id_mencion']; ?>"><?php echo $mencion['nombre']; ?></option>
        <?php } ?>
    </select>

    <label for="">promedio:</label>
    <input type="number" step="0.01" name="promedio" required>

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

        function selectConoHabi(id_mencion){
            console.log(id_mencion);
            var conocimientos = document.getElementById('select-parroquias');
            var habilidades = document.getElementById


        }

</script>
<?php include_once "./public/views/layouts/header.php"; ?>

    <form action="/app-pasantias/estudiante-store" method="post" enctype="multipart/form-data">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Registrar Estudiante</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label>Cédula: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="cedula" required>
                    </div>
                    <div>
                        <label> Primer Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre1" required>
                    </div>
                    <div>
                        <label> Segundo Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre2" required>
                    </div>
                    <div>
                        <label> Primer Apellido: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="apellido1" required>
                    </div>
                    <div>
                        <label> Segundo Apellido: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="apellido2" required>
                    </div>

                    <label for="">sexo:</label>
                    <select name="sexo" required>
                        <option value="N" selected disabled>- Seleccione -</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <img width="380"  height="380" src="./public/assets/images/Estudiantes.jpg" alt="">
                    </div>
                </div>
                <div class="col-5">
                        <div>
                            <label>Mención: </label>
                            <select name="id_mencion" id="id_mencion" class="form-select bg-body-secondary mb-3" onchange="checkConoHabi(this.value);" required>
                            <option value="0" disabled selected>- Seleccione -</option>
                                <?php foreach($menciones as $mencion){ ?>
                                <option value="<?php echo $mencion['id_mencion']; ?>"><?php echo $mencion['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Ingrese Curriculum: </label>
                        <input type="file" class="form-control  bg-body-secondary mb-3" name="nombre_curriculum" required>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Fecha de Nacimiento: </label>
                        <input type="date" class="form-control  bg-body-secondary mb-3" name="fecha_nacimiento" required>  
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Ubicación: </label>
                        <input type="text" class="form-control  bg-body-secondary mb-3" name="direccion" required>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Teléfono: </label>
                        <input type="tel" pattern="[0-9]{11}" title="Un número de teléfono válido debe tener 11 dígitos" class="form-control bg-body-secondary mb-3" name="telefono" required>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Municipio: </label>
                        <select name="id_municipio" class="form-select bg-body-secondary mb-3" onchange="selectParroquia(this.value);" required>
                        <option value="0" disabled selected>- Seleccione -</option>
                            <?php foreach($municipios as $municipio){ ?>
                            <option value="<?php echo $municipio['id_municipio']; ?>"><?php echo $municipio['nombre_municipio']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Correo Electrónico: </label>
                        <input type="email" class="form-control bg-body-secondary mb-3" name="correo" required>
                    </div>
                    <label for="">periodo:</label>
                    <input type="date" name="periodo" required>
                </div>
                <div class="col-5">
                        <div>
                            <label>Parroquia: </label>
                            <select name="id_parroquias" class="form-select bg-body-secondary mb-3" id="select-parroquias" required>
                                <option value="0" disabled selected>- Seleccione -</option>
                            </select>
                        </div>
                        <label for="">promedio:</label>
                <input type="number" step="0.01" name="promedio" required>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12 text-center mb-3 ">
                    <hr class="center mb-3">
                    <h1 class="text-primary-emphasis">Perfil Ocupacional</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-5 mb-3">
                    <div>
                        <label>Conocimientos: </label>
                    </div>
                    <div id="divConocimientos">
                        
                    </div>
                    <label for="">cursos:</label>
                    <input type="text" name="cursos" required>
                </div>
                <div class="col-5 mb-3">
                    <div>
                        <label>Habilidades: </label>
                    </div>
                    <div id="divHabilidades">
                        
                    </div>
                </div>
            </div>
            <div class="row text-center">
            <div class="col-3">
                    <a href="/app-pasantias/estudiante"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-success btn-lock">Registrar</button>
                    <button type="reset" value="limpiar" class="btn btn-warning btn-lock" onclick="limpiar()">Limpiar</button>
                </div>
            </div>
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

        function checkConoHabi(id_mencion){
            console.log(id_mencion);
            var divConocimientos = document.getElementById('divConocimientos');
            var divHabilidades = document.getElementById('divHabilidades');
            fetch(`/app-pasantias/conocimientos-get/${id_mencion}`, {
                method: 'GET',
                headers: {
                    'content-type': 'application/json',
                }
            }).then(response => {
                return response.json();
            }).then(data => {
                console.log(data)
                var datadecode = JSON.parse(data);
                console.log(datadecode);
                divConocimientos.innerHTML = ''
                var div = '';
                for(let i in datadecode){
                    div += `<div class="form-check"> <input class="form-check-input" type="checkbox" name="conocimientos[]" value="${datadecode[i].id_conocimiento}" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">${datadecode[i].nombre_conocimiento}</label></div>`;
                }
                divConocimientos.innerHTML = div;
            });
            fetch(`/app-pasantias/habilidades-get/${id_mencion}`, {
                method: 'GET',
                headers: {
                    'content-type': 'application/json',
                }
            }).then(response => {
                return response.json();
            }).then(data => {
                console.log(data)
                var datadecode = JSON.parse(data);
                console.log(datadecode);
                divHabilidades.innerHTML = ''
                var div = '';
                for(let i in datadecode){
                    div += `<div class="form-check"> <input class="form-check-input" type="checkbox" name="habilidades[]" value="${datadecode[i].id_habilidad}" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">${datadecode[i].nombre_habilidad}</label></div>`;
                }
                divHabilidades.innerHTML = div;
            });
        }

        function limpiar(){
            const divConocimientos = document.getElementById('divConocimientos');
            const divHabilidades = document.getElementById('divHabilidades');
            var selectParroquias = document.getElementById('select-parroquias');
            divConocimientos.innerHTML = '';
            divHabilidades.innerHTML = '';
            selectParroquias.innerHTML = '<option value="0" disabled selected>- seleccione -</option>';
        }
    </script>

<?php include_once "./public/views/layouts/footer.php"; ?>
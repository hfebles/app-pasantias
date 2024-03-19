<?php include_once "./public/views/layouts/header.php"; ?>

    <form action="/app-pasantias/tutor-store" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Registrar Tutor Academico</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label>Cédula: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="cedula_tutor" required>
                    </div>
                    <div>
                        <label>Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre" required>
                    </div>
                    <div>
                        <label>Apellido: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="apellido" required>
                    </div>
                    <div>
                        <label>Teléfono: </label>
                        <input type="text" pattern="[0-9]{4}[0-9]{7}" title="Un número de teléfono válido debe tener 11 dígitos" class="form-control bg-body-secondary mb-3" class="form-control bg-body-secondary " name="telefono" required>
                    </div>
                    <div>
                        <label for="">Seleccione un tipo de tutor: </label>
                        <select name="tipo" required>
                            <option>- Seleccione -</option>
                            <option value="1">Academico</option>
                            <option value="2">Empresarial</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <img width="350"  height="325" src="./public/assets/images/tutor.jpg" alt="">
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Correo Electrónico: </label>
                        <input type="email" class="form-control bg-body-secondary mb-3" name="correo" required>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Municipio: </label>
                        <select name="id_municipio" class="form-select bg-body-secondary mb-3" required onchange="selectParroquia(this.value);">
                            <option>- Seleccione -</option>
                            <?php foreach($municipios as $municipio){ ?>
                            <option value="<?php echo $municipio['id_municipio']; ?>"><?php echo $municipio['nombre_municipio']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Ubicación: </label>
                        <input type="text" class="form-control  bg-body-secondary mb-4" name="ubicacion" required>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Parroquia: </label>
                        <select name="id_parroquias" class="form-select bg-body-secondary mb-3" required id="select-parroquias">
                            <option>- Seleccione -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-3">
                    <a href="/app-pasantias/tutor"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-success btn-lock">Registrar</button>
                    <button type="reset" value="limpiar" class="btn btn-warning btn-lock">Limpiar</button>
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
    </script>
    
<?php include_once "./public/views/layouts/footer.php"; ?>
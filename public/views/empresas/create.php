<?php include_once "./public/views/layouts/header.php"; ?>

    <form action="/app-pasantias/empresa-store" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Registrar Empresa</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label>Rif: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="rif" required>
                    </div>
                    <div>
                        <label>Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre" required>
                    </div>
                    <div>
                        <label>Teléfono: </label>
                        <input type="text" pattern="[0-9]{4}[0-9]{7}" title="Un número de teléfono válido debe tener 11 dígitos" class="form-control bg-body-secondary mb-3" name="telefono" required>
                    </div>
                    <div>
                        <label>Tutor Empresarial: </label>
                        <select name="id_tutor" class="form-select bg-body-secondary mb-3 " required>
                            <option>- Seleccione -</option>
                            <?php foreach($tutores as $tutor){ ?>
                                <option value="<?php echo $tutor['id_tutor']; ?>"><?php echo $tutor['nombre']." ".$tutor['apellido']; ?></option>
                            <?php } ?>
                        </select>
                        <!-- <input type="text" class="form-control  bg-body-secondary mb-3" name="tutor" required>   -->
                    </div>
                    <div>
                        <label>Número de Cupos: </label>
                        <input class="form-control bg-body-secondary mb-3" type="number" name="cupos" min=0 required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <img width="280"  height="280" src="./public/assets/images/edificio.png" alt="">
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
                        <input type="text" class="form-control  bg-body-secondary mb-3" name="ubicacion" required>
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
            <div class="row">
                <div class="col-12 text-center mb-3 ">
                    <hr class="center mb-3">
                    <h1 class="text-primary-emphasis">Perfil de Empresa</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-5 mb-3">
                    <div>
                    <label>Conocimientos: </label>
                    </div>
                    <?php foreach($conocimientos as $conocimiento){ ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="conocimientos[]" value="<?php echo $conocimiento['id_conocimiento']; ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <?php echo $conocimiento['nombre_conocimiento']; ?>
                        </label>
                    </div>        
                    <?php } ?>
                </div>
                <div class="col-5 mb-3">
                <div>
                    <label>Habilidades: </label>
                    </div>
                    <?php foreach($habilidades as $habilidad){ ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="habilidades[]" value="<?php echo $habilidad['id_habilidad']; ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <?php echo $habilidad['nombre_habilidad']; ?>
                        </label>
                    </div>        
                    <?php } ?>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-2">
                    <a href="/app-pasantias/empresa">
                    <button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    </a>
                </div>
                <div class="col-8">
                    <button type="submit" class="btn btn-success btn-lock">Registrar</button>
                    <button type="reset" class="btn btn-warning btn-lock">Limpiar</button>
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
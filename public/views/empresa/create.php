<?php include_once "../layouts/header.php"; ?>

            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1>Registrar Empresa</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label>Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre" required>
                    </div>
                    <div>
                        <label>Teléfono: </label>
                        <input type="text" pattern="|^\d{7}$|" class="form-control bg-body-secondary mb-3" name="telefono" required>
                    </div>
                    <div>
                        <label>Tutor Empresarial: </label>
                        <input type="text" class="form-control  bg-body-secondary mb-3" name="tutor" required>  
                    </div>
                    <div>
                        <label>Municipio: </label>
                        <select class="form-select  bg-body-secondary mb-3" name="municipio" required>
                            <option>- seleccione -</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <img width="280"  height="280" src="../../assets/images/edificio.png" alt="">
                    </div>
                </div>
                <div class="col-5">
                        <div>
                            <label>Parroquia: </label>
                            <select class="form-select bg-body-secondary mb-3" name="parroquia" required>
                                <option>- seleccione -</option>
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
                        <label>Correo Electrónico: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3" name="correo" required>
                    </div>
                </div> 
                <div class="col-5">
                    <div>
                        <label>Número de Cupos: </label>
                        <input class="form-control bg-body-secondary" type="number" name="cupos" min=0 required>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-12 text-center mb-3 ">
                    <hr class="center mb-3">
                    <h1>Perfil de Empresa</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-5 mb-3">
                    <div>
                        <label>Conocimientos: </label>
                    </div>
                </div>
                <div class="col-5 mb-3">
                    <div>
                        <label>Habilidades: </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-lock">Regresar</button>
                    <button type="button" class="btn btn-success btn-lock">Registrar</button>
                    <button type="button" class="btn btn-warning btn-lock">Limpiar</button>
                </div>
            </div>

<?php include_once "../layouts/footer.php"; ?>
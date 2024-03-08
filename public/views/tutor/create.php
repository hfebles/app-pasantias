<?php include_once "../layouts/header.php"; ?>

            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1>Registrar Tutor Academico</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label>Cédula: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="cedula" required>
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
                        <input type="text" pattern="|^\d{7}$|" class="form-control bg-body-secondary mb-3" name="telefono" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="content-center">
                        <img width="320"  height="320" src="../../assets/images/tutor.jpg" alt="">
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
                        <label>Municipio: </label>
                        <select class="form-select  bg-body-secondary mb-3" name="municipio" required>
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
                            <label>Parroquia: </label>
                            <select class="form-select bg-body-secondary mb-3" name="parroquia" required>
                                <option>- seleccione -</option>
                            </select>
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
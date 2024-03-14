<?php include_once "../layouts/header.php"; ?>

    <form action="edit.php" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Actualizar Tutor Academico</h1>
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
                    <div class="text-center">
                        <img width="320"  height="320" src="../../assets/images/tutor-actua.png" alt="">
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
                        <input type="text" class="form-control  bg-body-secondary mb-4" name="ubicacion" required>
                    </div>
                </div>
                <div class="col-5">
                        <div>
                            <label>Parroquia: </label>
                            <select class="form-select bg-body-secondary mb-4" name="parroquia" required>
                                <option>- seleccione -</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-3">
                    <a href="index.php"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-success btn-lock">Actualizar</button>
                    <button type="reset" value="limpiar" class="btn btn-warning btn-lock">Limpiar</button>
                </div>
            </div>
    </form>

<?php include_once "../layouts/footer.php"; ?>
<?php include_once "../layouts/header.php"; ?>

            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1>Actualizar Estudiante</h1>
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
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="primernombre" required>
                    </div>
                    <div>
                        <label> Segundo Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="segundonombre" required>
                    </div>
                    <div>
                        <label> Primer Apellido: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="primerapellido" required>
                    </div>
                    <div>
                        <label> Segundo Apellido: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="segundoapellido" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="content-center">
                        <img width="380"  height="380" src="../../assets/images/Estudiantes.jpg" alt="">
                    </div>
                </div>
                <div class="col-5">
                        <div>
                            <label>Mención: </label>
                            <select class="form-select bg-body-secondary mb-3" name="mencion" required>
                                <option>- seleccione -</option>
                            </select>
                        </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Ingrese Curriculum: </label>
                        <input type="file" class="form-control  bg-body-secondary mb-3" name="curriculum" required>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Fecha de Nacimiento: </label>
                        <input type="date" class="form-control  bg-body-secondary mb-3" name="fecha" required>  
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
                        <label>Teléfono: </label>
                        <input type="text" pattern="|^\d{7}$|" class="form-control bg-body-secondary mb-3" name="telefono" required>
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
                        <label>Correo Electrónico: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3" name="correo" required>
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
                <div class="col-12 text-center mb-3 ">
                    <hr class="center mb-3">
                    <h1>Perfil Ocupacional</h1>
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
                    <button type="button" class="btn btn-success btn-lock">Actualizar</button>
                    <button type="button" class="btn btn-warning btn-lock">Limpiar</button>
                </div>
            </div>

<?php include_once "../layouts/footer.php"; ?>
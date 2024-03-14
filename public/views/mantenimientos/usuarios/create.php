<?php include_once "../../layouts/header.php"; ?>

<form action="create.php" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Creación de Usuario</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="text-center mb-3">
                        <img width="260"  height="260" src="../../../assets/images/UserCrear.png" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label> Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre" required>
                    </div>
                    <div>
                        <label> Apellido: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="apellido" required>
                    </div>
                    <div>
                        <label> Nombre de Usuario: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombreusuario" required>
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label> Contraseña: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="contraseña" required>
                    </div>
                    <div>
                        <label>Nivel de Acceso: </label>
                            <select class="form-select bg-body-secondary mb-3" name="niveldeacceso" required>
                                <option>- seleccione -</option>
                            </select>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-2">
                    <a href="index.php"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-success btn-lock">Registrar</button>
                    <button type="reset" class="btn btn-warning btn-lock">Limpiar</button>
                </div>
            </div>
    </form>

<?php include_once "../../layouts/footer.php"; ?>
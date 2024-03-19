<?php include_once "./public/views/layouts/header.php"; ?>

<form action="/app-pasantias/usuario-store" method="post" id="form">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Creación de Usuario</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="text-center mb-3">
                        <img width="260"  height="260" src="./public/assets/images/UserCrear.png" alt="">
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
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="user" id="user" required>
                        <span></span>
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label> Contraseña: </label>
                        <input type="password" class="form-control bg-body-secondary mb-3 " name="password" id="password" placeholder="Ej: Segura123!" required>
                    </div>
                    <div>
                        <label>Nivel de Acceso: </label>
                            <select class="form-select bg-body-secondary mb-3" name="nivel" required>
                            <option value="0">- Seleccione -</option>
                            <option value="1">Administrador</option>
                            <option value="2">Coordinador Pasantias</option>
                            <option value="3">Coor. Media Tecnica</option>
                            <option value="4">Secretaria</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-2">
                    <a href="/app-pasantias/usuario"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-success btn-lock">Registrar</button>
                    <button type="reset" class="btn btn-warning btn-lock">Limpiar</button>
                </div>
            </div>
    </form>

<?php include_once "./public/views/layouts/footer.php"; ?>
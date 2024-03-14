<?php include_once "./public/views/layouts/header.php"; ?>

<form action="/app-pasantias/mencion-store" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Registrar Mención</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label> Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="nombre" required>
                    </div>
                    <div>
                        <label> Especialidad: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " name="especialidad" required>
                    </div>
                    <div>
                        <label> Horas Cumplidas: </label>
                        <input type="time" class="form-control bg-body-secondary mb-3 " name="horas" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center">
                        <img width="290"  height="290" src="./public/assets/images/Libros.jpg" alt="">
                    </div>
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
                    <a href="/app-pasantias/mencion">
                        <button type="button" class="btn btn-primary btn-lock">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                    </a>
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-success btn-lock">Registrar</button>
                    <button type="reset" class="btn btn-warning btn-lock">Limpiar</button>
                </div>
            </div>
    </form>

<?php include_once "./public/views/layouts/footer.php"; ?>
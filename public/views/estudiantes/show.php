<?php include_once "../layouts/header.php"; ?>

    <form action="create.php" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Gabriel Enrique Hernandez Lopez</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label>Cédula: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " disabled>
                    </div>
                    <div>
                        <label>Mención: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " disabled>
                    </div>
                    <div>
                        <label>Fecha de Nacimiento: </label>
                        <input type="text" class="form-control  bg-body-secondary mb-3" disabled>  
                    </div>
                    <div>
                        <label>Teléfono: </label>
                        <input type="text" pattern="|^\d{7}$|" class="form-control bg-body-secondary mb-3" disabled>
                    </div>
                    <div>
                        <label>Correo Electrónico: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3" disabled>
                    </div>
                    <div>
                        <label>Ubicación: </label>
                        <textarea type="text" class="form-control  bg-body-secondary mb-3"  disabled></textarea>
                    </div>
                </div>
                <div class="col-5">
                    <label>Curriculum: </label>
                    
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
                </div>
                <div class="col-5 mb-3">
                    <div>
                        <label>Habilidades: </label>
                    </div>
                </div>
            </div>
            <div class="row text-center">
            <div class="col-3">
                    <a href="index.php"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
            </div>
    </form>

<?php include_once "../layouts/footer.php"; ?>
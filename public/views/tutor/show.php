<?php include_once "../layouts/header.php"; ?>

    <form action="create.php" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">Datos Tutor Academico</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="text-center">
                        <img width="350"  height="325" src="../../assets/images/tutor-datos.jpeg" alt="">
                        <h1 class="text-primary-emphasis">Luis Aponte</h1>
                    </div>
                </div>
                <div class="col-5">
                    <div>
                        <label>Cédula: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " disabled>
                    </div>
                    <div>
                        <label>Teléfono: </label>
                        <input type="text" pattern="|^\d{7}$|" class="form-control bg-body-secondary  mb-3" disabled>
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
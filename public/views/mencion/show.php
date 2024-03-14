<?php include_once "../layouts/header.php"; ?>

<form action="create.php" method="post">
            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-primary-emphasis">informatica</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div>
                        <label> Nombre: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " disabled>
                    </div>
                    <div>
                        <label> Especialidad: </label>
                        <input type="text" class="form-control bg-body-secondary mb-3 " disabled>
                    </div>
                    <div>
                        <label> Horas Cumplidas: </label>
                        <input type="number" min=0 class="form-control bg-body-secondary mb-3 " disabled>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center">
                        <img width="300"  height="230" src="../../assets/images/VerRegis.gif" alt="">
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
                </div>
                <div class="col-5 mb-3">
                    <div>
                        <label>Habilidades: </label>
                    </div>
                </div>
            </div>  
            <div class="row text-center">
                <div class="col-2">
                    <a href="index.php"><button type="button" class="btn btn-primary btn-lock">
                    <i class="fa-solid fa-arrow-left"></i>
                    </button></a>
                </div>
            </div>
    </form>

<?php include_once "../layouts/footer.php"; ?>
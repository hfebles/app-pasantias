<?php include_once "../layouts/header.php"; ?>

            <div class="row ">
                <div class="col-12 text-center mb-3">
                    <h1>Actualizar Mención</h1>
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
                        <input type="number" min=0 class="form-control bg-body-secondary mb-3 " name="horas" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="content-center">
                        <img width="290"  height="290" src="../../assets/images/Libros.jpg" alt="">
                    </div>
                </div>
            </div>  
            <div class="row text-center">
                
                    <div class="col-2">
                        <button type="button" class="btn btn-primary btn-lock">
                        <i class="fa-solid fa-arrow-left"></i>
                        </button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-success btn-lock">Actualizar</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-warning btn-lock">Limpiar</button>
                    </div>
            </div>
        

<?php include_once "../layouts/footer.php"; ?>
<?php include_once "./public/views/layouts/header.php"; ?>

        <div class="row justify-content-center g-2">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form action="/app-pasantias/login" method="post"> 
                            <div class="mb-3">
                                <span>Usuario: </span>
                                <input type="text" name="user" class="form-control">
                            </div>
                            <div class="mb-3">
                                <span>Contraseña: </span>
                                <input type="password" name="password" class="form-control" >
                            </div>
                            <div class="text-center ">
                                <button type="submit" class="btn btn-success btn-lock">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

<?php include_once "./public/views/layouts/footer.php"; ?>
<?php include_once "../../layouts/header.php"; ?>

        <div class="row">
        <div class="text-center mb-3">
                <h1 class="text-primary-emphasis">Listado de Usuarios</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-10">
                <div class="card mb-3">
                    <div class="card-body bg-light-subtle">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="create.php"><button type="button" class="btn btn-success btn-sm align-middle">
                                <i class="fa-solid fa-user-plus"></i>   Nuevo
                                </button></a>
                            </div>
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control bg-body-secondary" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-sm table-bordered mb-0">
                    <thead>
                        <tr>
                            <th width="3%" scope="col" class="text-center bg-body-tertiary">#</th>
                            <th scope="col" class="text-center bg-body-tertiary">Nombre</th>
                            <th scope="col" class="text-center bg-body-tertiary">Apellido</th>
                            <th scope="col" class="text-center bg-body-tertiary">Usuario</th>
                            <th width="15%" scope="col" class="text-center bg-body-tertiary">Nivel de Acceso</th>
                            <th width="10%" class="text-center bg-body-tertiary" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Gabriel</td>
                            <td class="text-center">Hernandez</td>
                            <td class="text-center">Gab</td>
                            <td class="text-center">1</td>
                            <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="edit.php"><button type="button" class="btn btn-warning btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                                </button></a>
                                <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Dylam</td>
                            <td class="text-center">Pacheco</td>
                            <td class="text-center">DAPM</td>
                            <td class="text-center">1</td>
                            <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="edit.php"><button type="button" class="btn btn-warning btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                                </button></a>
                                <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        

<?php include_once "../../layouts/footer.php"; ?>
<?php include_once "../../layouts/header.php"; ?>

        <div class="row">
        <div class="text-center mb-3">
                <h1 class="text-primary-emphasis">Listado de Auditoria</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-10">
                <div class="card mb-3">
                    <div class="card-body bg-light-subtle">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
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
                            <th width="15%"scope="col" class="text-center bg-body-tertiary">Usuario</th>
                            <th width="10%"scope="col" class="text-center bg-body-tertiary">Fecha</th>
                            <th width="10%" scope="col" class="text-center bg-body-tertiary">Hora</th>
                            <th width="40%" class="text-center bg-body-tertiary" scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">admin</td>
                            <td class="text-center">09-03-2024</td>
                            <td class="text-center">21:03:59</td>
                            <td>Inicio Sesion</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">admin</td>
                            <td class="text-center">09-03-2024</td>
                            <td class="text-center">22:03:59</td>
                            <td>Cierre Sesion</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        

<?php include_once "../../layouts/footer.php"; ?>
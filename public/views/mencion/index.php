<?php include_once "./public/views/layouts/header.php"; ?>

        <div class="row">
        <div class="text-center mb-3">
                <h1 class="text-primary-emphasis">Listado de Menciones</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-10">
                <div class="card mb-3">
                    <div class="card-body bg-light-subtle">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="/app-pasantias/mencion-create">
                                <button type="button" class="btn btn-success btn-sm align-middle">
                                <i class="fa-solid fa-plus"></i> Nuevo
                                </button>
                                </a>
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
                            <th scope="col" class="text-center bg-body-tertiary">Nombre</th>
                            <th scope="col" class="text-center bg-body-tertiary">Especialidad</th>
                            <th width="15%" scope="col" class="text-center bg-body-tertiary">Estado</th>
                            <th width="15%" class="text-center bg-body-tertiary" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    if(empty($data)){
                        echo '<tr align="center"><td colspan="4">sin registros</td></tr>';
                    }else{
                        foreach($data as $d){ ?>
                            <tr>
                                <td><?php echo $d['nombre']; ?></td>
                                <td ><?php echo $d['area']; ?></td>
                                <td class="text-center"><?php if($d['estado']==1){ echo "Habilitado"; }else{ echo "Deshabilitado"; } ?></td>
                                <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#">
                                    <button type="button" class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    </a>
                                    <a href="#">
                                    <button type="button" class="btn btn-warning btn-sm">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    </a>
                                    <a href="/app-pasantias/mencion-delete/<?php echo $d['id_mencion']; ?>">
                                    <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-xmark"></i>
                                    </button>
                                    </a>
                                </div>
                                </td>
                            </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
        

<?php include_once "./public/views/layouts/footer.php"; ?>
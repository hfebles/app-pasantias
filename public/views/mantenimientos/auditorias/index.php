<?php include_once "./public/views/layouts/header.php"; ?>

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
                        <?php 
                        if(empty($data)){
                            echo '<tr align="center"><td colspan="5">sin registros</td></tr>';
                        }else{
                        foreach($data as $d){ ?>
                            <tr>
                                <td class="text-center"><?php echo $d['id_auditoria']; ?></td>
                                <td class="text-center"><?php echo $d['usuario']; ?></td>
                                <td class="text-center"><?php echo date('d-m-Y', strtotime($d['fecha_accion'])); ?></td>
                                <td class="text-center"><?php echo date('h:i:s A', strtotime($d['hora_accion'])) ?></td>
                                <td><?php echo $d['accion']; ?></td>
                            </tr>
                            <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
        

<?php include_once "./public/views/layouts/footer.php"; ?>
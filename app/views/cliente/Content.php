<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Clientes</div>
                <div class="ibox-tools">
                    <button class="btn btn-primary" id="insertCliente" data-toggle="modal" data-target="#modalCliente"><i class="fa fa-plus"></i> Insertar</button>
                    <button class="btn btn-warning" id="refreshView" disabled><i class="fa fa-refresh"></i> Actualizar</button>
                </div>
            </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DOCUMENTO</th>
                                <th>CELULAR</th>
                                <th>GENERO</th>
                                <th>DIRECCION</th>
                                <th>RUTA</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DOCUMENTO</th>
                                <th>CELULAR</th>
                                <th>GENERO</th>
                                <th>DIRECCION</th>
                                <th>RUTA</th>
                                <th>ACCIONES</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($datos["clientes"] as $value):?>
                                <tr class="text-center">
                                    <td><?php print($value->tbl_cliente_id);?></td>
                                    <td><?php print($value->tbl_cliente_nombre . " " . $value->tbl_cliente_apellido1);?></td>
                                    <td><?php print($value->tbl_cliente_documento);?></td>
                                    <td><?php print($value->tbl_cliente_celular1);?></td>
                                    <td><?php print($value->tbl_cliente_genero);?></td>
                                    <td><?php print($value->tbl_cliente_direccion);?></td>
                                    <td><?php print($value->tbl_ruta_nombre);?></td>
                                    <td><a href="" class="btn btn-primary btn-sm tableAccion" data-id=<?php print($value->tbl_cliente_id); ?>><i class="fa fa-list"></i></a>
                                    <a href="" class="btn btn-primary btn-sm accionMod" data-id=<?php print($value->tbl_cliente_id); ?>><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-primary btn-sm accionDel" data-id=<?php print($value->tbl_cliente_id); ?>><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
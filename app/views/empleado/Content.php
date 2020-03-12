<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Empleado</div>
                <div class="ibox-tools">
                    <button class="btn btn-primary" id="insertEmpleado" data-toggle="modal" data-target="#modalEmpleado"><i class="fa fa-plus"></i> Insertar</button>
                    <button class="btn btn-warning" id="refreshView" disabled><i class="fa fa-refresh"></i> Actualizar</button>
                </div>
            </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="tableEmpleado" cellspacing="0" width="100%">
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
                            <?php foreach ($datos["empleado"] as $value):?>
                                <tr class="text-center">
                                    <td><?php print($value->tbl_empleado_id);?></td>
                                    <td><?php print($value->tbl_empleado_nombre . " " . $value->tbl_empleado_apellido1);?></td>
                                    <td><?php print($value->tbl_empleado_documento);?></td>
                                    <td><?php print($value->tbl_empleado_celular1);?></td>
                                    <td><?php print($value->tbl_empleado_genero);?></td>
                                    <td><?php print($value->tbl_empleado_direccion);?></td>
                                    <td><?php print($value->tbl_ruta_nombre);?></td>
                                    <td><a href="" class="btn btn-primary btn-sm tableAccion" data-id=<?php print($value->tbl_empleado_id); ?>><i class="fa fa-list"></i></a>
                                    <a href="" class="btn btn-primary btn-sm accionMod" data-id=<?php print($value->tbl_empleado_id); ?>><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-primary btn-sm accionDel" data-id=<?php print($value->tbl_empleado_id); ?>><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
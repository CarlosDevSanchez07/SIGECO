<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong"><?php print($datos["funciones"]->numSolicitudes($datos["prestamos"])[0]);?></h2>
                    <div class="m-b-5">Nuevas solicitudes</div><i class="fa fa-warning widget-stat-icon"></i>
                    <div><small>Total peticiones: <?php print($datos["funciones"]->numSolicitudes($datos["prestamos"])[1]);?></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong"><?php print($datos["funciones"]->numActivos($datos["prestamos"])[0]);?></h2>
                    <div class="m-b-5">Prestamos activos</div><i class="fa fa-money widget-stat-icon"></i>
                    <div><i class="m-r-5"></i><small>Capital: <?php print($datos["funciones"]->numActivos($datos["prestamos"])[1]);?>, Ganancia: <?php print($datos["funciones"]->numActivos($datos["prestamos"])[2]);?></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="ibox bg-primary color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">201</h2>
                    <div class="m-b-5">Total recaudado</div><i class="fa fa- widget-stat-icon"></i>
                    <div><i class="m-r-5"></i><small>Total: </small></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>CLIENTE</th>
                                <th>MONTO</th>
                                <th>RANGO PRESTAMO</th>
                                <th>REEMBOLSO</th>
                                <th>RUTA</th>
                                <th>FECHA</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>CLIENTE</th>
                                <th>MONTO</th>
                                <th>RANGO PRESTAMO</th>
                                <th>REEMBOLSO</th>
                                <th>RUTA</th>
                                <th>FECHA</th>
                                <th>ESTADO</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach($datos["prestamos"] as $prestamo): ?>
                                <tr>
                                    <td><a href=<?php echo RUTA_URL . "/Prestamo/gestionar/" . $prestamo->tbl_prestamos_id;?> class="btn btn-sm"><i class="fa fa-cog"></i></a></td>
                                    <td><?php print($prestamo->tbl_prestamos_id);?></td>
                                    <td><?php print($prestamo->tbl_cliente_nombre . " " . $prestamo->tbl_cliente_apellido1); ?></td>
                                    <td>$ <?php print(number_format($prestamo->tbl_prestamos_monto, null, null,',')); ?></td>
                                    <td><?php print($prestamo->tbl_prestamos_fecha_inicio . " Al " .$prestamo->tbl_prestamos_fecha_final);?></td>
                                    <td><?php print($prestamo->tbl_prestamos_reembolso);?></td>
                                    <td><?php print($prestamo->tbl_ruta_nombre);?></td>
                                    <td><?php print($prestamo->tbl_prestamos_fecha); ?></td>
                                    <td class=""><?php print($datos["funciones"]->colorEstado($prestamo->tbl_prestamos_estado)); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Datos Monto de prestamo</div>
                </div>
                <div class="ibox-body">
                    <form action=<?php echo RUTA_URL . "/Prestamo/addPrestamo"; ?> method="POST" name="formPrestamo">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 form-group">
                                <label for="">Monto requerido:</label>
                                <input type="text" class="form-control prestamo" id="inputmask" name="monto" required/>
                            </div>
                            <div class="col-md-5 col-sm-12 form-group" id="date_5">
                                <label class="font-normal">Periodo de prestamo:</label>
                                <input type="text" class="form-control prestamo" name="daterange" required>
                            </div>
                            <div class="col-md-3 col-sm-12 form-group">
                                <label for="">Tipo de pago:</label>
                                <select name="tipo_pago" id="" class="form-control prestamo" required>
                                    <option value="">---Tipo pago</option>
                                    <option value="1">Diario</option>
                                    <option value="7">Semanal</option>
                                    <option value="15">Quincenal</option>
                                    <option value="30">Mensual</option>
                                </select>
                            </div>
                            <!--<div class="col-sm-4 form-group">
                                <label for="">Primer pago apartir de:</label>
                                <select name="" id="" class="form-control">
                                    <?php #$dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
                                        #foreach($dias as $value):
                                    ?>
                                        <option value="<?php #print($value); ?>"><?php #print($value); ?></option>
                                        <?php #endforeach;?>
                                </select>
                            </div>-->
                            <div class="col-md-4 col-sm-12 form-group">
                                <label for="">Cliente</label>
                                <div class="input-group">
                                    <select name="cliente" id="" class="form-control select2_demo_1" required>
                                        <?php foreach($datos["clientes"] as $cliente):?>
                                            <option value=<?php print($cliente->tbl_cliente_id);?>><?php print($cliente->tbl_cliente_nombre . " " . $cliente->tbl_cliente_apellido1);?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalCliente"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label for="">Fiador:</label>
                                <div class="input-group">
                                    <select name="fiador" id="" class="form-control select2_demo_2" required>
                                        <?php foreach($datos["fiadores"] as $fiador):?>
                                            <option value=<?php print($fiador->tbl_fiador_id);?>><?php print($fiador->tbl_fiador_nombre . " " . $fiador->tbl_fiador_apellido1);?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalFiador"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label for="">Ingresos:</label>
                                <div class="input-group">
                                    <select name="ingresos" id="" class="form-control select2_demo_3" >
                                    </select>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalIngresos"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label for="">Ruta:</label>
                                <select name="ruta_cobro" id="" class="form-control" required>
                                    <option value="1">MALAMBO</option>
                                    <option value="2">BARRANQUILLA</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label for="">Porcentaje de cobro:</label>
                                <select name="porcentaje_cobro" id="" class="form-control prestamo" required>
                                    <?php for($i = 1; $i < 21; $i++): ?>
                                        <option value="0.<?php echo $i < 10 ? '0'.$i : $i; ?>"><?php print($i); ?> %</option>
                                    <?php endfor;?>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 form-group" id="date_5">
                                <label class="font-normal">Valor total a pagar:</label>
                                <input type="text" class="form-control" name="valor_total" placeholder="$ 1.000.000" disabled>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group" id="date_5">
                                <label class="font-normal">Numero de cuotas:</label>
                                <input type="text" class="form-control" name="no_cuota_pago" placeholder="1, 2, 3" disabled>
                            </div>
                            <div class="col-md-3 col-sm-12 form-group" id="date_5">
                                <label class="font-normal">Valor cuota aproximada a pagar:</label>
                                <input type="text" class="form-control" name="cuota_pago" placeholder="$ 54.000 Semanal" disabled>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label for="">Estado:</label>
                                <input type="text" class="form-control text-warning" name="estado" placeholder="Estado" value="VERIFICACION" readonly="true">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label for="">Tipo de reembolso:</label>
                                <select name="reembolso" id="" class="form-control" required>
                                    <option value="EFECTIVO">EFECTIVO</option>
                                    <option value="TARJETA">TARJETA</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="text-right">
                        <button class="btn btn-success" id="addSolicitudPrestamo">Enviar Solicitud</button>
                        <button class="btn btn-danger">Borrar Solicitud </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
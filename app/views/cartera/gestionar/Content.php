<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Solicitud</div>
                    <div class="ibox-tools">
                        <input type="text" class="form-control" value="ID" name="tbl_prestamos_id">
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="row" action="" method="POST" name="formPrestamos">
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="">Monto requerido:</label>
                            <input type="text" class="form-control prestamo" id="inputmask" name="tbl_prestamos_monto" required/>
                        </div>
                        <div class="col-md-5 col-sm-12 form-group" id="date_5">
                            <label class="font-normal">Periodo de prestamo:</label>
                            <input type="text" class="form-control prestamo" name="tbl_prestamos_fecha_final" required>
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <label for="">Tipo de pago:</label>
                            <select name="tbl_prestamos_tipo" id="" class="form-control prestamo" required>
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
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="">Ruta:</label>
                            <input type="text" name="tbl_ruta_nombre" id="" class="form-control" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="">Porcentaje de cobro:</label>
                            <select name="tbl_prestamos_porcentaje" id="" class="form-control prestamo" required>
                                <?php for($i = 1; $i < 21; $i++): ?>
                                    <option value="0.<?php echo $i < 10 ? '0'.$i : str_replace("0","",$i); ?>"><?php print($i); ?> %</option>
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
                            <select class="form-control" name="tbl_prestamos_estado">
                                    <option value="VERIFICACION">VERIFICACION</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="CANCELADO">CANCELADO</option>
                                    <option value="DENEGADO">DENEGADO</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="">Tipo de reembolso:</label>
                            <select name="tbl_prestamos_reembolso" id="" class="form-control" required>
                                <option value="EFECTIVO">EFECTIVO</option>
                                <option value="TARJETA">TARJETA</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="ibox-footer">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-success" id="updatePrestamos"><i class="fa fa-save"></i> Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Cliente solicitante</div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Nombres:</label>
                            <input class="form-control" type="text" name="tbl_cliente_nombre" placeholder="Nombres" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Primer apellido:</label>
                            <input class="form-control" type="text" name="tbl_cliente_apellido1" placeholder="Primer apellido" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Segundo apellido:</label>
                            <input class="form-control" type="text" name="tbl_cliente_apellido2" placeholder="Segundo apellido" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Documento:</label>
                            <input type="number" class="form-control" name="tbl_cliente_documento" minlength="5" placeholder="Documento" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Telefono:</label>
                            <input type="number" class="form-control" name="tbl_cliente_telefono" placeholder="Telefono" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Celular:</label>
                            <input type="text" class="form-control" name="tbl_cliente_celular1" minlength="9" maxlength="10" placeholder="Celular" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Celular 2:</label>
                            <input type="text" class="form-control" name="tbl_cliente_celular2" minlength="9" maxlength="10" placeholder="Celular 2" disabled/>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="">Direccion:</label>
                            <input type="text" class="form-control" name="tbl_cliente_direccion" placeholder="Direccion" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Ruta:</label>
                            <input type="text" name="tbl_ruta_tbl_ruta_id" id="" class="form-control" disabled />
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Rol:</label>
                            <input type="text" class="form-control" name="rol_cliente" placeholder="3 Cliente" disabled />
                        </div>
                        <div class="col-md-3 form-group" id="date_1">
                            <label class="font-normal">Fecha nacimiento </label>
                            <div class="input-group date">
                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" type="text" value="" name="tbl_cliente_fecha_nacimiento" disabled/>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="">Correo:</label>
                            <input type="email" class="form-control" name="tbl_cliente_correo" placeholder="Correo" disabled/>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="">Personas a cargo:</label>
                            <input type="number" class="form-control" name="tbl_cliente_personas_cargo" placeholder="1, 2, 3.." disabled/>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="">Genero:</label>
                            <input type="text" class="form-control" name="tbl_cliente_genero" disabled>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="">Estado civil:</label>
                            <input type="text" class="form-control" name="tbl_cliente_estado_civil" disabled>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="">Tipo vivienda:</label>
                            <input type="text" class="form-control" name="tbl_cliente_tipo_casa" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Fiador Relacionado</div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Nombres:</label>
                            <input class="form-control" type="text" name="tbl_fiador_nombre" placeholder="Nombres" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Primer apellido:</label>
                            <input class="form-control" type="text" name="tbl_fiador_apellido1" placeholder="Primer apellido" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Segundo apellido:</label>
                            <input class="form-control" type="text" name="tbl_fiador_apellido2" placeholder="Segundo apellido" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Documento:</label>
                            <input type="number" class="form-control" name="tbl_fiador_documento" minlength="5" placeholder="Documento" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Telefono:</label>
                            <input type="number" class="form-control" name="tbl_fiador_telefono" placeholder="Telefono" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Celular:</label>
                            <input type="text" class="form-control" name="tbl_fiador_celular1" minlength="9" maxlength="10" placeholder="Celular" disabled/>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Celular 2:</label>
                            <input type="text" class="form-control" name="tbl_fiador_celular2" minlength="9" maxlength="10" placeholder="Celular 2" disabled/>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="">Direccion:</label>
                            <input type="text" class="form-control" name="tbl_fiador_direccion" placeholder="Direccion" disabled/>
                        </div>
                        <div class="col-md-3 form-group" id="date_1">
                            <label class="font-normal">Fecha nacimiento </label>
                            <div class="input-group date">
                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" type="text" value="" name="tbl_fiador_fecha_nacimiento" disabled/>
                            </div>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Rol:</label>
                            <input type="text" class="form-control" name="rol_fiador" placeholder="4 fiador" disabled />
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="">Correo:</label>
                            <input type="email" class="form-control" name="tbl_fiador_correo" placeholder="Correo" disabled/>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="">Profesion:</label>
                            <input type="text" name="tbl_fiador_profesion" id="" class="form-control" disabled>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="">Genero:</label>
                            <input type="text" class="form-control" name="tbl_fiador_genero" disabled>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="">Imagen documento:</label>
                            <input type="file" class="form-control" name="tbl_fiador_imagen_documento" disabled/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Datos Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="formClientes">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Nombres:</label>
                    <input class="form-control" type="text" name="tbl_cliente_nombre" placeholder="Nombres" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Primer apellido:</label>
                    <input class="form-control" type="text" name="tbl_cliente_apellido1" placeholder="Primer apellido" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Segundo apellido:</label>
                    <input class="form-control" type="text" name="tbl_cliente_apellido2" placeholder="Segundo apellido" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Documento:</label>
                    <input type="number" class="form-control" name="tbl_cliente_documento" minlength="5" placeholder="Documento" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Telefono:</label>
                    <input type="number" class="form-control" name="tbl_cliente_telefono" placeholder="Telefono" />
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Celular:</label>
                    <input type="text" class="form-control" name="tbl_cliente_celular1" minlength="9" maxlength="10" placeholder="Celular" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Celular 2:</label>
                    <input type="text" class="form-control" name="tbl_cliente_celular2" minlength="9" maxlength="10" placeholder="Celular 2" />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Direccion:</label>
                    <input type="text" class="form-control" name="tbl_cliente_direccion" placeholder="Direccion" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Ruta:</label>
                    <select name="tbl_ruta_tbl_ruta_id" id="" class="form-control" required>
                        <option value="">---Ruta</option>
                        <option value="1">MALAMBO</option>
                    </select>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Rol:</label>
                    <input type="text" class="form-control" name="rol_cliente" placeholder="3 Cliente" disabled />
                </div>
                <div class="col-md-3 form-group" id="date_1">
                    <label class="font-normal">Fecha nacimiento </label>
                    <div class="input-group date">
                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                        <input class="form-control" type="text" value="" name="tbl_cliente_fecha_nacimiento" required/>
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Correo:</label>
                    <input type="email" class="form-control" name="tbl_cliente_correo" placeholder="Correo" />
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Imagen:</label>
                    <input type="file" class="form-control" name="tbl_cliente_imagen" disabled/>
                </div>
                <div class="col-md-3 form-group">
                    <label for="">Personas a cargo:</label>
                    <input type="number" class="form-control" name="tbl_cliente_personas_cargo" placeholder="1, 2, 3.." required/>
                </div>
                <div class="col-md-3 form-group">
                    <label for="">Genero:</label>
                    <select class="form-control" name="tbl_cliente_genero" required>
                      <option value="MASCULINO">MASCULINO</option>
                      <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Estado civil:</label>
                    <div class="m-b-10">
                        <label class="ui-radio ui-radio-inline">
                            <input type="radio" name="tbl_cliente_estado_civil" value="SOLTERO" />
                            <span class="input-span"></span>Soltero(a)</label>
                        <label class="ui-radio ui-radio-inline">
                            <input type="radio" name="tbl_cliente_estado_civil" value="CASADO" />
                            <span class="input-span"></span>Casado(a)</label>
                        <label class="ui-radio ui-radio-inline">
                            <input type="radio" name="tbl_cliente_estado_civil" value="VIUDO" />
                            <span class="input-span"></span>Viudo(a)</label>
                        <label class="ui-radio ui-radio-inline">
                            <input type="radio" name="tbl_cliente_estado_civil" value="DIVORCIADO" />
                            <span class="input-span"></span>Divorciado(a)</label>
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Tipo vivienda:</label>
                    <div class="m-b-10">
                        <label class="ui-radio ui-radio-inline">
                            <input type="radio" name="tbl_cliente_tipo_casa" value="PROPIA" />
                            <span class="input-span"></span>Propia</label>
                        <label class="ui-radio ui-radio-inline">
                            <input type="radio" name="tbl_cliente_tipo_casa" value="ARRENDADA" />
                            <span class="input-span"></span>Arrendada</label>
                    </div>
                </div>
            </div>
            <div class="float-right">
              <button type="submit" class="btn btn-success" id="addClientes">Guardar</button>
              <button type="submit" class="btn btn-primary" id="modCliente">Modificar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Datos Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="formEmpleado">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Nombres:</label>
                    <input class="form-control" type="text" name="tbl_empleado_nombre" placeholder="Nombres" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Primer apellido:</label>
                    <input class="form-control" type="text" name="tbl_empleado_apellido1" placeholder="Primer apellido" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Segundo apellido:</label>
                    <input class="form-control" type="text" name="tbl_empleado_apellido2" placeholder="Segundo apellido" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Documento:</label>
                    <input type="number" class="form-control" name="tbl_empleado_documento" minlength="5" placeholder="Documento" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Telefono:</label>
                    <input type="number" class="form-control" name="tbl_empleado_telefono" placeholder="Telefono" />
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Celular:</label>
                    <input type="text" class="form-control" name="tbl_empleado_celular1" minlength="9" maxlength="10" placeholder="Celular" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Celular 2:</label>
                    <input type="text" class="form-control" name="tbl_empleado_celular2" minlength="9" maxlength="10" placeholder="Celular 2" />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Direccion:</label>
                    <input type="text" class="form-control" name="tbl_empleado_direccion" placeholder="Direccion" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Ruta:</label>
                    <select name="tbl_ruta_tbl_ruta_id" id="" class="form-control" required>
                        <option value="">---Ruta</option>
                        <option value="1">MALAMBO</option>
                    </select>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Rol:</label>
                    <input type="text" class="form-control" name="rol_empleado" placeholder="2 Empleado" disabled />
                </div>
                <div class="col-md-3 form-group" id="date_1">
                    <label class="font-normal">Fecha nacimiento </label>
                    <div class="input-group date">
                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                        <input class="form-control" type="text" value="" name="tbl_empleado_fecha_nacimiento" required/>
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Correo:</label>
                    <input type="email" class="form-control" name="tbl_empleado_correo" placeholder="Correo" />
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Imagen:</label>
                    <input type="file" class="form-control" name="tbl_empleado_imagen" disabled/>
                </div>
                <div class="col-md-3 form-group">
                    <label for="">Genero:</label>
                    <select class="form-control" name="tbl_empleado_genero" required>
                      <option value="MASCULINO">MASCULINO</option>
                      <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
              </div>
            <div class="float-right">
              <button type="submit" class="btn btn-success" id="addEmpleado">Guardar</button>
              <button type="submit" class="btn btn-primary" id="modEmpleado">Modificar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalFiador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Datos Fiador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="formFiador">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Nombres:</label>
                    <input class="form-control" type="text" name="tbl_fiador_nombre" placeholder="Nombres" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Primer apellido:</label>
                    <input class="form-control" type="text" name="tbl_fiador_apellido1" placeholder="Primer apellido" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Segundo apellido:</label>
                    <input class="form-control" type="text" name="tbl_fiador_apellido2" placeholder="Segundo apellido" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Documento:</label>
                    <input type="number" class="form-control" name="tbl_fiador_documento" minlength="5" placeholder="Documento" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Telefono:</label>
                    <input type="number" class="form-control" name="tbl_fiador_telefono" placeholder="Telefono" />
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Celular:</label>
                    <input type="text" class="form-control" name="tbl_fiador_celular1" minlength="9" maxlength="10" placeholder="Celular" required/>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Celular 2:</label>
                    <input type="text" class="form-control" name="tbl_fiador_celular2" minlength="9" maxlength="10" placeholder="Celular 2" />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Direccion:</label>
                    <input type="text" class="form-control" name="tbl_fiador_direccion" placeholder="Direccion" required/>
                </div>
                <div class="col-md-3 form-group" id="date_1">
                    <label class="font-normal">Fecha nacimiento </label>
                    <div class="input-group date">
                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                        <input class="form-control" type="text" value="" name="tbl_fiador_fecha_nacimiento" required/>
                    </div>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Rol:</label>
                    <input type="text" class="form-control" name="rol_fiador" placeholder="4 fiador" disabled />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Correo:</label>
                    <input type="email" class="form-control" name="tbl_fiador_correo" placeholder="Correo" />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Profesion:</label>
                    <select name="tbl_fiador_profesion" id="" class="form-control" required>
                        <option value="">---Profesion</option>
                    </select>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Imagen:</label>
                    <input type="file" class="form-control" name="tbl_fiador_imagen" disabled/>
                </div>
                <div class="col-md-3 form-group">
                    <label for="">Genero:</label>
                    <select class="form-control" name="tbl_fiador_genero" required>
                      <option value="MASCULINO">MASCULINO</option>
                      <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Imagen documento:</label>
                    <input type="file" class="form-control" name="tbl_fiador_imagen_documento" required/>
                </div>
              </div>
            <div class="float-right">
              <button type="submit" class="btn btn-success" id="addFiador">Guardar</button>
              <button type="submit" class="btn btn-primary" id="modFiador">Modificar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalIngresos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Datos Ingresos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
              <div class="col-sm-3 form-group">
                  <label for="">Tipo de Ingresos</label>
                  <select name="" id="" class="form-control">
                      <option value="">---Tipo ingreso</option>
                      <option value="">Nogocio Propio</option>
                      <option value="">Empleado</option>
                  </select>
              </div>
              <div class="col-sm-6 form-group">
                  <label for="">Nombre Empresa / Negocio:</label>
                  <input type="text" class="form-control" placeholder="Antiguedad">
              </div>
              <div class="col-sm-3 form-group">
                  <label for="">Antiguedad (A~os):</label>
                  <select name="" id="" class="form-control">
                      <option value="">---A~os</option>
                  </select>
              </div>
              <div class="col-sm-6 form-group">
                  <label for="">Direccion:</label>
                  <input type="text" class="form-control" placeholder="Direccion">
              </div>
              <div class="col-sm-3 form-group">
                  <label for="">Ingresos (Mensuales):</label>
                  <input type="text" class="form-control" plcaeholder="Ingresos">
              </div>
              <div class="col-sm-3 form-group">
                  <label for="">Egresos (Mensuales):</label>
                  <input type="text" class="form-control" plcaeholder="Egresos">
              </div>
              <div class="col-sm-4 form-group">
                  <label for="">Carta laboral (Solo empleado)</label>
                  <input type="file" class="form-control" disabled>
              </div>
              <div class="col-sm-3 form-group">
                  <label for="">Telefono donde labora: </label>
                  <input type="text" class="form-control" placeholder="Telefono">
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalIngresos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Datos de ingresos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-body">
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
				
									  <form method="POST" autocomplete="off"  action="../view/doctor/nuevo.php">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Cedula</label>
								<input name="dnidoc" type="text" class="form-control" maxlength="8" placeholder="Ingrese dni" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>
						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Nombre</label>
								<input name="nomdoc" type="text" class="form-control" placeholder="Ingrese nombre">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellidos</label>
								<input name="apedoc" type="text" class="form-control" placeholder="Ingrese apellidos">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Especialidad</label>
								<select class="form-control" id="doctor" name="codespe">
								
				
								</select>
							</div>
						</div>
						
					
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Sexo</label>
					<select class="form-control" name="sexo">
						<option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
				
					</select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Teléfono</label>
								<input name="telefo" type="text" class="form-control" maxlength="9" placeholder="Ingrese teléfono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Fecha nacimiento</label>
								<input name="fechanaci" type="date" class="form-control" placeholder="Ingrese fecha">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Correo</label>
								<input name="correo" type="text" class="form-control" placeholder="Ingrese correo">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Nacionalidad</label>
					<select class="form-control" name="naciona">
						<option value="Colombiana(o)">Colombiana(o)</option>
						<option value="Venezolana(o)">Venezolana(o)</option>
						<option value="Argentina(o)">Argentina(o)</option>
						<option value="Ecuatoriana(o)">Ecuatoriana(o)</option>
						<option value="Uruguaya(o)">Uruguaya(o)</option>
				
					</select>
							</div>
						</div>
						
						<div class="col-md-6" style="display:none;">
							<div class="form-group form-group-default">
								<label>Estado</label>
								<select class="form-control" name="estado">
							<option value="1">1</option>
							</select>
							</div>
						</div>
						
					</div>
			
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar
				
				
				</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
			
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->
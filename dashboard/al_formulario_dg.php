<?php 

	include("./bd/conex.php");

	date_default_timezone_set('America/Mexico_City');

	$fechahoy=date("y/m/d");

?>



<form id="form_productos" action="" method="post">
	<div class="modal fade" id="myModals" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
						<h2 style="color:blue;text-align:center" class="modal-title">
								Nuevo Alumno
						</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
<!-- codigo -->
				<div style="color:#000000;background:#EFFBF5" class="modal-body">
					<div class="md-form">
						<input type="number" name="codigo" id="codigo" class="form-control"  maxlength="15" required readonly>
						<label for="codigo">Id (Asignado por el sistema)</label>
				</div>

<!-- Nivel escolar -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Nivel Escolar</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="nivel" 
								id="nivel" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_nivel,desc_nivel FROM al_nivel_escolar WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_nivel'].">

															".$res['desc_nivel']."

															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!-- Entidad Federativa  -->	
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Entidad Fed.</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="entidad" 
								id="entidad" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_estado,desc_estado FROM co_estados WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_estado'].">
															".$res['desc_estado']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>
<!-- Nombre complaeto  -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form" >
								<input type="text" name="nombre" id="nombre" class="form-control" maxlength="100" required>
								<label for="nombre"> Nombre </label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="text" name="paterno" id="paterno" class="form-control" maxlength="100">
								<label for="paterno">Apellido Paterno </label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="text" name="materno" id="materno" class="form-control" maxlength="100">
								<label for="materno">Apellido Materno </label>
							</div>
						</div>
					</div>

				</div>

<!-- Edad (anios, mes, dias)-->					
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number"  name="anios" id="anios" class="form-control" min="0" max="85" step="1"  required>
								<label for="anios">Anios</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="meses" id="meses" class="form-control" min="0" max="11"   step="1"  required>
								<label for="Meses">Meses</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="dias" id="dias" class="form-control" min="0" max="30" step="1" required>
								<label for="Dias">Dias</label>
							</div>
						</div>
					</div>
				</div>


<!-- sexo -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Sexo</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="sexo" 
								id="sexo" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_sexo,desc_sexo FROM co_sexo WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_sexo'].">
															".$res['desc_sexo']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!--curp, peso, estatura-->					
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="text"  name="curp" id="curp" class="form-control" maxlength="15" required>
								<label for="curp">CURP</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="peso" id="peso" class="form-control" min="1" max="85"   step="1"  required>
								<label for="peso">Peso (kg)</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="estatura" id="estatura" class="form-control" min="30" max="200" step="1" required>
								<label for="estatura">Estatura (cm)</label>
							</div>
						</div>
					</div>
				</div>

<!-- Fecha alta -->					
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="date" name="fecha_alta" id="fecha_alta" class="form-control" value="<?php echo $fechahoy ?>" readonly>
								<label for="producto">Fecha Alta</label>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div class="modal-footer">
						<button type="submit" class="btn btn-success" id="btniniciar">Ingresar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
</form>





<!-- Editar -->
<form id="frmedit" class="form-horizontal" method="POST">
	<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12 ocultar">
		<div class="modal fade" id="form_editar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<h2 style="color:blue;text-align:center" class="modal-title" id="modalEliminarLabel">
									Editar Alumnos
							</h2>
							 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

					<div style="color:#000000;background:#EFFBF5" class="modal-body">
						<input type="hidden" id="idperfil" name="idperfil" value="0">
						<input type="hidden" id="opcion" name="opcion" value="modificar">
						<input type="hidden" class="form-control  form-control-sm" id="pro" name="pro">
						<input type="hidden" class="form-control  form-control-sm" id="dc" name="dc">
<!-- codigo -->						
						<div class="md-form">
							<input type="text" name="codigo" id="codigo" class="form-control" readonly="true">
							<label for="codigo">Código</label>
						</div>

<!-- datos del formulario -->


<!-- Nivel escolar -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Nivel Escolar</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="nivel" 
								id="nivel" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_nivel,desc_nivel FROM al_nivel_escolar WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_nivel'].">

															".$res['desc_nivel']."

															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!-- Entidad Federativa  -->	
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Entidad Fed.</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="entidad" 
								id="entidad" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_estado,desc_estado FROM co_estados WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_estado'].">
															".$res['desc_estado']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>
<!-- Nombre complaeto  -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form" >
								<input type="text" name="nombre" id="nombre" class="form-control" maxlength="100" required>
								<label for="nombre"> Nombre </label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="text" name="paterno" id="paterno" class="form-control" maxlength="100">
								<label for="paterno">Apellido Paterno </label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="text" name="materno" id="materno" class="form-control" maxlength="100">
								<label for="materno">Apellido Materno </label>
							</div>
						</div>
					</div>

				</div>

<!-- Edad (anios, mes, dias)-->					
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number"  name="anios" id="anios" class="form-control" min="0" max="85" step="1"  required>
								<label for="anios">Anios</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="meses" id="meses" class="form-control" min="0" max="11"   step="1"  required>
								<label for="Meses">Meses</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="dias" id="dias" class="form-control" min="0" max="30" step="1" required>
								<label for="Dias">Dias</label>
							</div>
						</div>
					</div>
				</div>


<!-- sexo -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Sexo</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="sexo" 
								id="sexo" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_sexo,desc_sexo FROM co_sexo WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_sexo'].">
															".$res['desc_sexo']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!--curp, peso, estatura-->					
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="text"  name="curp" id="curp" class="form-control" maxlength="15" required>
								<label for="curp">CURP</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="peso" id="peso" class="form-control" min="0" max="85"   step="1"  required>
								<label for="peso">Peso (kg)</label>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form">
								<input type="number" name="estatura" id="estatura" class="form-control" min="0" max="200" step="1" required>
								<label for="estatura">Estatura (cm)</label>
							</div>
						</div>
					</div>
				</div>

<!-- Fin del formulario -->
					</div>
					<div class="modal-footer">
							<button type="submit" class="btn btn-success" id="btniniciar">Ingresar</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</div>
			</div>
		</div>
	</div> 
</form>




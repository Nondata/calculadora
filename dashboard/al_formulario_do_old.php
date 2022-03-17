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
								Nueva Condicion
						</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
<!-- codigo -->
				<div style="color:#000000;background:#EFFBF5" class="modal-body">
					<div class="md-form">
						<input type="number" name="codigo" id="codigo" class="form-control"  maxlength="15" required readonly>
						<label for="codigo">Id (Asignado por el sistema)</label>
				</div>

<!-- Alumno -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Alumno</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="alumno" 
								id="alumno" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT al.id_alumno,CONCAT(al.`nombre`,' ',al.`a_paterno`,' ',al.`a_materno`) alumno FROM al_alumnos_dg al WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_alumno'].">
															".$res['alumno']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!-- Estado  -->	
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Estado</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="estado" 
								id="estado" required>
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
<!-- Municipio  -->	
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Municipio</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
                			<select name="Municipio" id="fi_Municipio" class="form-control">
                    
                  			</select>
						</div>
					</div>
				</div>

<!-- Cual  -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form" >
								<input type="text" name="cual" id="cual" value="No Aplica" class="form-control" maxlength="50" required>
								<label for="nombre"> Cual? </label>
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
				<div style="color:#000000;background:#EFFBF5" class="modal-body">
					<div class="md-form">
						<input type="number" name="codigo" id="codigo" class="form-control"  maxlength="15" required readonly>
						<label for="codigo">Id (Asignado por el sistema)</label>
				</div>

<!-- Alumno -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Alumno</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="alumno" 
								id="alumno" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT al.id_alumno,CONCAT(al.`nombre`,' ',al.`a_paterno`,' ',al.`a_materno`) alumno FROM al_alumnos_dg al WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_alumno'].">
															".$res['alumno']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!-- Pregunta  -->	
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Pregunta</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="pregunta" 
								id="pregunta" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_pregunta,desc_pregunta FROM co_preguntas WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_pregunta'].">
															".$res['desc_pregunta']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>
<!-- Respuestas  -->	
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<label for="">Respuesta</label>
						</div>
					</div>

					<div class="col-9">
						<div class="md-form mt-0">
							<select class="form-control form-control-sm" name="respuesta" 
								id="respuesta" required>
								<option value="" class="z-depth-5">Seleccione</option>
									<?php 
											$query = $conexion_sid -> query("SELECT id_respuesta,desc_respuesta FROM co_respuestas WHERE estado = 'A'");
											while($res = mysqli_fetch_array($query))
											{
													echo "<option value =".$res['id_respuesta'].">
															".$res['desc_respuesta']."
															</option>";
											}
									?>
							</select>
						</div>
					</div>
				</div>

<!-- Cual  -->
				<div class="row">
					<div class="col">
						<div class="md-form mt-0">
							<div class="md-form" >
								<input type="text" name="cual" id="cual" value="No Aplica" class="form-control" maxlength="50" required>
								<label for="nombre"> Cual? </label>
							</div>
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




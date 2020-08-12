<main class="container header">
	<div class="row">
		<h1 class="col-12 d-flex justify-content-center">Nuevo Estudiantes</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-100 m-auto">
			<div class="card-header container bg-dark">
				<h2 class="m-auto">Informacion del estudiante</h2>
			</div>
			<div class="card-body w-100 bg-success">
				<form action="?controller=student&method=save" method="POST" class="needs-validation" novalidate>
					<div class="form-group row">
						<div class="col-6">
							<label class="float-left text-dark">Nombres</label>
							<input type="text" name="nombres" class="form-control" placeholder="Nombres*" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-6">
							<label class="float-left text-dark">Apellidos</label>
							<input type="text" name="apellidos" class="form-control" placeholder="Apellidos*" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-4">
							<label class="float-left text-dark">Tipo de identificación</label>
							<select name="id_tipo_id" class="form-control" required>
								<option value="">Seleccione...</option>
								<?php foreach($typesId as $typeId){ ?>
									<option value="<?php echo $typeId->id?>"><?php echo $typeId->tipo_id?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-8">
							<label class="float-left text-dark">Numero de identificación</label>
							<input type="number" name="numero_id" class="form-control" placeholder="Numero de id*" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-8">
							<label class="float-left text-dark">Programa</label>
							<select name="id_programa" class="form-control" required>
								<option value="">Seleccione...</option>
								<?php foreach($programs as $program){ ?>
									<option value="<?php echo $program->id?>"><?php echo $program->descripcion?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-4">
							<label class="text-float text-dark">Semestre</label>
							<input type="text" name="semestre" class="form-control" placeholder="El semestre en letras o en numeros*" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-3">
							<label class="float-left text-dark">Edad</label>
							<input type="number" name="edad" class="form-control" placeholder="edad*" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-6">
							<label class="float-left text-dark">Fecha de nacimiento</label>
							<input type="date" name="fecha_nacimiento" class="form-control" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-3">
							<label class="float-left text-dark">Tipo de sangre</label>
							<select name="id_tipo_sangre" class="form-control" required>
								<option value="">Seleccione...</option>
								<?php foreach($typeBloods as $typeBlood){ ?>
									<option value="<?php echo $typeBlood->id?>"><?php echo $typeBlood->tipo_sangre?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="video-container">
		<video src="Assets/img/videosena.mp4" autoplay loop muted poster=""></video>
	</section>
</main>
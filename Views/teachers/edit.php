<main class="container header">
	<div class="row">
		<h1 class="col-12 d-flex justify-content-center">Actualizar Profesor</h1>
	</div>
	<section class="row mt-3">
		<div class="card w-100 m-auto">
			<div class="card-header container bg-dark">
				<h2 class="m-auto">Información del profesor</h2>
			</div>
			<div class="card-body w-100 bg-success">
				<form action="?controller=teacher&method=update" method="POST" class="needs-validation" novalidate>
					<input type="hidden" name="id" value="<?php echo $data[0]->id?>">
					<div class="form-group row">
						<div class="col-6">
							<label class="float-left text-dark">Nombres</label>
							<input type="text" name="nombres" class="form-control" placeholder="Nombres*" value="<?php echo $data[0]->nombres?>" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-6">
							<label class="float-left text-dark">Apellidos</label>
							<input type="text" name="apellidos" class="form-control" placeholder="Apellidos*" value="<?php echo $data[0]->apellidos?>" required>
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
							<input type="number" name="numero_id" class="form-control" placeholder="Numero de id*" value="<?php echo $data[0]->numero_id?>" required>
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
							<input type="text" name="semestre" class="form-control" placeholder="El semestre en letras o en numeros*" value="<?php echo $data[0]->semestre?>" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-3">
							<label class="float-left text-dark">Edad</label>
							<input type="number" name="edad" class="form-control" placeholder="edad*" value="<?php echo $data[0]->edad?>" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-6">
							<label class="float-left text-dark">Fecha de nacimiento</label>
							<input type="date" name="fecha_nacimiento" class="form-control" value="<?php echo $data[0]->fecha_nacimiento?>" required>
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
					<div class="form-group row">
						<div class="col-6">
							<label class="float-left text-dark">Nomina(Salario mensual)</label>
							<input type="number" name="nomina" class="form-control" placeholder="&#36;Salario mensual*" value="<?php echo $data[0]->nomina?>" required>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
						<div class="col-6">
							<label class="float-left text-dark">Tipo de vinculacion</label>
							<select name="id_tipo_vinculacion" class="form-control" required>
								<option value="">Seleccione...</option>
								<?php foreach($typesVinculation as $typeVinculation){ ?>
									<option value="<?php echo $typeVinculation->id?>"><?php echo $typeVinculation->tipo_vinc?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">Por favor no dejes el campo vacio</div>
							<div class="valid-feedback">Campo valido</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-warning">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="video-container">
		<video src="Assets/img/videosena.mp4" autoplay loop muted poster=""></video>
	</section>
</main>
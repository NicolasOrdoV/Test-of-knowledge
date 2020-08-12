<main class="container">
	<section class="row">
		<section class="col-12 text-center header">
			<h1>Lista de profesores</h1>
			<div class="justify-content-between d-flex m-2">
				<h2>Profesores</h2>
				<a href="?controller=teacher&method=new" class="btn btn-success">+Agregar</a>
			</div>
			<section>
				<table class="table table-striped table-hover">
					<thead class="thead-dark">
						<th scope="col">Id</th>
						<th scope="col">Nombres</th>
						<th scope="col">Apellidos</th>
						<th scope="col">Tipo de identificacion</th>
						<th scope="col">Numero de id</th>
						<th scope="col">Programa</th>
						<th scope="col">Semestre</th>
						<th scope="col">Edad</th>
						<th scope="col">Fecha nacimiento</th>
						<th scope="col">Tipo de sangre</th>
						<th scope="col">Nomina(Salario mensual)</th>
						<th scope="col">Tipo de vinculación</th>
						<th scope="col">Acciones</th>
					</thead>
					<tbody class="bg-success">
						<?php foreach($teachers as $teacher){?>
							<tr>
								<td><?php echo $teacher->id?></td>
								<td><?php echo $teacher->nombres?></td>
								<td><?php echo $teacher->apellidos?></td>
								<td><?php echo $teacher->typeId?></td>
								<td><?php echo $teacher->numero_id?></td>
								<td><?php echo $teacher->program?></td>
								<td><?php echo $teacher->semestre?></td>
								<td><?php echo $teacher->edad?></td>
								<td><?php echo $teacher->fecha_nacimiento?></td>
								<td><?php echo $teacher->typeOfBlood?></td>
								<td><?php echo $teacher->nomina?></td>
								<td><?php echo $teacher->typeVinculation?></td>
								<td>
									<a href="?controller=teacher&method=edit&id=<?php echo $teacher->id ?>" class="btn btn-warning">Editar</a>
									<a href="?controller=teacher&method=delete&id=<?php echo $teacher->id ?>" class="btn btn-danger my-2">Eliminar</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</section>
		</section>
		<section class="video-container">
			<video src="Assets/img/videosena.mp4" autoplay loop muted poster=""></video>
		</section>
	</section>
</main>
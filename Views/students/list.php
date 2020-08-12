<main class="container">
	<section class="col-md-12 text-center header">
		<h1>Lista de estudiantes</h1>
		<div class="col-12 justify-content-between d-flex m-2">
			<h2>Estudiantes</h2>
			<a href="?controller=student&method=new" class="btn btn-success">+Agregar</a>
		</div>
		<section class="col-md-12">
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
					<th scope="col">Acciones</th>
				</thead>
				<tbody class="bg-success">
					<?php foreach($students as $student){?>
						<tr>
							<td><?php echo $student->id?></td>
							<td><?php echo $student->nombres?></td>
							<td><?php echo $student->apellidos?></td>
							<td><?php echo $student->typeId?></td>
							<td><?php echo $student->numero_id?></td>
							<td><?php echo $student->program?></td>
							<td><?php echo $student->semestre?></td>
							<td><?php echo $student->edad?></td>
							<td><?php echo $student->fecha_nacimiento?></td>
							<td><?php echo $student->typeOfBlood?></td>
							<td>
								<a href="?controller=student&method=edit&id=<?php echo $student->id ?>" class="btn btn-warning">Editar</a>
								<a href="?controller=student&method=delete&id=<?php echo $student->id ?>" class="btn btn-danger my-2">Eliminar</a>
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
</main>
<main class="container">
	<section class="col-md-12 text-center header">
		<h1>Lista de programas</h1>
		<div class="col-12 justify-content-between d-flex m-2">
			<h2>Programas</h2>
		</div>
		<section class="col-md-12">
			<table class="table table-striped table-hover">
				<thead class="thead-dark">
					<th scope="col">Id</th>
					<th scope="col">Descripcion</th>
				</thead>
				<tbody class="bg-success">
					<?php foreach($programs as $program){?>
						<tr>
							<td><?php echo $program->id?></td>
							<td><?php echo $program->descripcion?></td>
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
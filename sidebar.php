<?php ?>
<!-- Sidebar Widgets Column -->
<div class="col-md-4">
	<!-- Search Widget -->
	<div class="card my-4">
		<h5 class="card-header">Buscar</h5>
		<div class="card-body">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Buscar por...">
				<span class="input-group-append"><button class="btn btn-secondary" type="button">Go!</button></span>
			</div>
		</div>
	</div>

	<!-- Categories Widget -->
	<div class="col-md-12">
		<?php dynamic_sidebar( 'sidebar-raiola' ); ?>
	</div>
</div>
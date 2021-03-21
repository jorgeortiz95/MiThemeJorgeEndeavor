<?php get_header(); ?>

	<!-- Page Content -->
	<div class="container" style="margin-top: 7% !important;">
		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-md-8">
				<h1 class="my-4"><?php 
				//Verificar que el archivo sea de fecha
				if(get_the_archive_title()){
					//Si es un archivo de fecha, mostrar el titulo de fecha
					the_archive_title();
				}else{//Si NO es una fecha Mostrar el título del término
					single_term_title();            
				} ?> 
				</h1>
				<p><?php //Mostrar descripción del objeto
				echo term_description(); ?></p>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       
				<div class="card mb-4">
					<?php the_post_thumbnail(); ?>
					<div class="card-body">
						<h2 class="card-title"><?php the_title(); ?></h2>
						<p class="card-text"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más &rarr;</a>
					</div>
					<div class="card-footer text-muted">
						<?php echo get_the_date(); ?> - <?php the_author(); ?>
					</div>
				</div>
				<?php endwhile; else : ?>
					<p>Lo siento, no hemos encontrado ningún post.</p>
				<?php endif; ?>
			</div>

			<!-- Sidebar Widgets Column -->
			<?php get_sidebar(); ?>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php get_footer(); ?>
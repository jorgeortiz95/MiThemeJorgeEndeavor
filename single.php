<?php get_header(); ?>
<!-- Page Content -->
	<div class="container" style="margin-top: 7% !important;">
		<div class="row">
			<!-- Post Content Column -->
			<div class="col-lg-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- Title -->
				<h1 class="mt-4"><?php the_title(); ?></h1>
				<!-- Author -->
				<p class="lead"> Por <?php the_author(); ?></p>
				<hr>
				<!-- Date/Time -->
				<p>Publicado <?php the_date();?> </p>
				<hr>
				<!-- Preview Image -->
				<?php the_post_thumbnail('destacada',array( 'class' => 'img-fluid rounded' )); ?>
				<hr>
				<!-- Post Content -->
				<?php the_content(); ?>
				<hr>
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
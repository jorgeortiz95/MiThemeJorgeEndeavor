<!--  CONTENIDO D EUNA PAGINA ESPECIFICA -->
<?php get_header(); ?>
	<!-- Page Content -->
	<div class="container" style="margin-top: 7% !important;">
		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-md-8">
				<h1 class="my-4">Todas las Publicaciones</h1> 

				<!-- Loop del blog -->
				<?php   
					global $post;
					$last_posts = get_posts(array('posts_per_page' => 20));
        
					foreach ( $last_posts as $post ) :
					setup_postdata( $post );
				?>
        
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
               
				<?php endforeach; wp_reset_postdata();?>
				
			</div>

		<!-- Sidebar Widgets Column -->
		<?php get_sidebar(); ?>
		</div>
		<!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
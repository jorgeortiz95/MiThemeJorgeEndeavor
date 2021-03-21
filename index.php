<?php get_header(); ?>
	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-md-12">
				<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="margin-top: 9% !important;">
					<div class="col-md-8 p-lg-8 mx-auto my-8">
						<h1 class="display-4 font-weight-normal">La Nasa</h1>
						<p class="lead font-weight-normal">La Administración Nacional de Aeronáutica y el Espacio, más conocida como NASA, es la agencia del gobierno estadounidense responsable del programa espacial civil, así como de la investigación aeroespacial.</p>
						<a class="btn btn-outline-secondary" href="https://www.nasa.gov/" target="_blank">Conoce Más</a>
					</div>
					<div class="product-device shadow-sm d-none d-md-block"></div>
					<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
				</div>
					
				<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
					<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
						<div class="my-3 py-3">
							<h2 class="display-5">Misiones</h2>
							<p class="lead">Viajamos sin límites espaciales.</p>
						</div>
						<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
					</div>
					<div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
						<div class="my-3 p-3">
							<h2 class="display-5">Nosotros</h2>
							<p class="lead">investigación aeronáutica y aeroespacial.</p>
						</div>
						
						<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
					</div>
					<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
						<div class="my-3 py-3">
							<h2 class="display-5">Historia</h2>
							<p class="lead">Vigentes desde 1 de octubre de 1958.</p>
						</div>
						<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
					</div>
				</div>			
				<h1 class="my-4" >Bienvenidos a Endeavor<small> Últimos Post</small></h1> 
			</div>
			<!-- /.row -->
		
			<div class="album py-5 ">
				<div class="container">
					<div class="row">
			  							
						<!-- Loop del blog -->
						<?php   
							global $post;
							$last_posts = get_posts(array('posts_per_page' => 3));
				
							foreach ( $last_posts as $post ) :
							setup_postdata( $post );
						?>
        
						<div class="col-md-4">
							<div class="card mb-4">
							<?php the_post_thumbnail(); ?>
								<div class="card-body">
									<h2 class="card-title"><?php the_title(); ?></h2>
									<p class="card-text" ><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más &rarr;</a>
								</div>

								<div class="card-footer text-muted">
									<?php echo get_the_date(); ?> - <?php the_author(); ?>          
								</div>
							</div>
						</div>
						
						<?php endforeach; wp_reset_postdata();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
<?php get_footer(); ?>
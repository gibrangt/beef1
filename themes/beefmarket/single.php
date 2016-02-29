<?php

get_header(); ?>


	<section class="home full-height">
		<div class="container">
			<div class="full-height">
				<div class="row">
					<div class="col-12">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-6 center orientacion">
							<?php
									if ( has_post_thumbnail() ) { 
							                the_post_thumbnail('large', array( 'class' => 'pollo' ) );
							          }
							 ?> 
						<!--	<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/img-pastel1.jpg" class="img-1">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/img-pastel2.jpg" class="img-2">
						-->
						</div>
						<div class="col-5 layout_t">
							
								<div class="row linebuttom">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="row">
									<?php the_content(); ?>
								</div>
							

						</div>
						<div class="col-1 orientacion">
							<div class="orient-1">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/people.png" class="time">
						 		<h5 class="time_p">4 PERSONAS</h5>
							</div>
							<div class="orient-2">
								<img  src="<?php bloginfo( 'template_url' ); ?>/images/recetas/time.png" class="time">
						 		<h5 class="time_p">20 MINUTOS</h5>
							</div>	
						</div>
					<?php endwhile; ?>
					</div>				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="full-height division">
				<div class="row">
					<div class="col-12">
						<div class="col-3 orientacion">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/costilla.jpg" class="img">
						</div>
						<div class="col-3 orientacion">
							<h2 class="title">Costillas en salsa BBQ</h2>
					     	<p class="text">Suaves y jugosos  trozos de carne que se desprenden solos del hueso, bañadas en una deliciosa salsa BBQ endulzada... <a href="costilla.html" class="read">LEER MAS</a></p>
					     	<div class="orient-1">
					     		<img  src="<?php bloginfo( 'template_url' ); ?>/images/recetas/time.png" class="time">
					       		<h5 class="time_p">60 MINUTOS</h5>
					     	</div>
					     	<div class="orient-2">
					     		<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/people.png" class="time">
					       		<h5 class="time_p">4 PERSONAS</h5>
					     	</div>
						</div>
						<div class="col-3 orientacion">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/pollo.jpg" class="img">
						</div>
						<div class="col-3 orientacion">
								<h2 class="title">Pollo al Vino</h2>
					       		<p class="text">Receta rápida y fácil. El pollo se cuece con vino tinto, cebolla y pasitas, dando como resultado una carne suave con un 	sabor ligeramente dulce... <a href="pollo.html" class="read">LEER MAS</a></p>
					     	<div class="orient-1">
					     		<img  src="<?php bloginfo( 'template_url' ); ?>/images/recetas/time.png" class="time">
					       		<h5 class="time_p">20 MINUTOS</h5>
					     	</div>
					     	<div class="orient-2">
					     		<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/people.png" class="time">
					       		<h5 class="time_p">4 PERSONAS</h5>
					     	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php get_footer(); ?>
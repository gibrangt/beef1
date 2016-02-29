<?php get_header(); ?>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/google.js"></script>
<script type="text/javascript">
		initialize();
	</script>


  <section id="main" class="home full-height">
		<div class="container ">
			<div class="row">
				<div class="col-12">
			        
			           
			           <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			           		<div class="col-4 orientacion center">
							      <?php
							          if ( has_post_thumbnail() ) { 
							                the_post_thumbnail('large', array( 'class' => 'same-width' ) );
							          }
							      ?>
							     <div class="center">
					            	<div class="row layout_t">
							       		<img  src="<?php bloginfo( 'template_url' ); ?>/images/recetas/time.png" class="time">
							       		<h5 class="time_p">20 MINUTOS</h5>
							       		<img src="<?php bloginfo( 'template_url' ); ?>/images/recetas/people.png" class="time">
							       		<h5 class="time_p">4 PERSONAS</h5>
							       	</div>
							    </div>
							    <div>
							    	<div class="row">
							       		<h2 class="title"><a href="<?php the_permalink(); ?>" class="read"><?php the_title(); ?></a></h2>
							       		<p class="text"><?php the_excerpt_max_charlength(120); ?>
							       				<a href="<?php the_permalink(); ?>" class="read">LEER MÁS</a>
							       		</p>
							       	</div>
							    </div>
					   		 </div>  
						  <?php endwhile; else: ?>
						    <p><?php _e('No hay entradas .'); ?></p>
						<?php endif; ?>

			         
			        
			      
	
			    </div>
			</div>  
			
			<div class="full-height">
				<div class="col-12">
					<div class="row around">
						<div class="layout_t marco" id="googleMap" style="width:600px ;height:300px;"></div>

						<div class="layout_t margen">
							<p class="fondo adress">Océano Atlántico No.2  <br/>C.P 28218<br/>Colonia del Mar<br/>(Atras de "La Sonrisa")</p>
						</div>
								
						<div class="layout_t margen">
							<div class="row">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/fb.png" class="sociales">
								<p class="contacto">/BeefMarketManzanillo</p>
							</div>
							<div class="row">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/phone.png" class="sociales">
								<p class="contacto">(314) 334 11 13</p>
							</div>
							<div class="row">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/car.png" class="sociales">
								<p class="contacto">Servicio a Domicilio</p>
							</div>
							<div class="row">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/horario.png" class="sociales">
								<p class="contacto">Lun - Vier 08:00 hrs a 16:30 hrs<br/>Sab 08:00 hrs a 17:hrs</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


  </section> <!-- Fin de main -->

  <?php  get_sidebar()?>
  <?php get_footer(); ?>



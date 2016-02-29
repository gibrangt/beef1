<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		//do_action( 'woocommerce_before_main_content' );
	?>


		<section class="home full-height">
		<div class="container">

				<?php while ( have_posts() ) : the_post(); ?>

			<div class="row">
				<div class="col-5 col-offset-6">
					<div class="row linebuttom">
						<?php
							$args = array(
										'delimiter' => ' / ',
										'home' => false
								);
							?>


						<h3><?php woocommerce_breadcrumb($args); ?></h3>

					</div>		
				</div>
			</div>
			<div class="row">
			
					<div class="col-6 orientacion">
						<?php
									if ( has_post_thumbnail() ) { 
							                the_post_thumbnail('large', array( 'class' => 'img' ) );
							          }
							 ?> 
					</div>
					<div class="col-5 orientacion">
						<div class="row">
							<h3><br/> <?php the_title(); ?></h3>
						</div>
						<div class="row">
							<?php the_content(); ?>
						</div>
						<div class="col-12 orientacion">
							<!-- <img src="<?php bloginfo( 'template_url' ); ?>/images/res/arrachera2.jpg" class="img-1">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/res/arrachera3.jpg" class="img-2"> 
						-->
						</div>
					</div>
			</div>
		</div>
		<div class="container">


			
			<div class="full-height division">
				<div class="row">
					<div class="col-12">

							<?php

							      $defaults = array(
								      'posts_per_page' => 4,
								      'columns'        => 2,
								      'orderby'        => 'rand'
								    );

								    $args = wp_parse_args( $args, $defaults );

								    wc_get_template( 'single-product/related.php', $args );

							?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	



			<?php// wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>

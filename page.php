<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emad-alsheikh
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		$args = array(
			'post_type'=> 'post',
			'orderby'    => 'ID',
			'post_status' => 'publish',
			'order'    => 'DESC',
			'posts_per_page' => -1 // this will retrive all the post that is published 
			);
			$result = new WP_Query( $args );
			if ( $result-> have_posts() ) : ?>
				<div class="container mt-5 p-5">
					<div class="row">
						<?php
							while ( $result->have_posts() ) : 
								$result->the_post(); 
									get_template_part( 'template-parts/content', 'page' );
							endwhile; ?>
					</div>
				</div>
			<?php
			endif; 
			wp_reset_postdata();
		?>
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

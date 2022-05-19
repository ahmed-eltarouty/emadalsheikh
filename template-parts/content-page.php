<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emad-alsheikh
 */

?>

<article id="post-<?php the_ID(); ?>"  class="col-md-6 col-lg-4">
	<div class="card" style="width: 18rem;">
	<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" style="height: 161px;" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?php the_title(); ?></h5>
			<p class="card-text"><?php the_excerpt();?></p>
			<a href="<?php echo the_permalink(); ?>" class="btn btn-primary text-light d-flex justify-content-center">اقرأ المزيد</a>
		</div>
	</div>
	<div class="entry-content">
		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'emad-alsheikh' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'emad-alsheikh' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

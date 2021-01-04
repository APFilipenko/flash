<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flash
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * flash_before_post_content hook
	 */
	do_action( 'flash_before_post_content' ); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'flash' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	

	<?php
	/**
	 * flash_after_post_content hook
	 */
	do_action( 'flash_after_post_content' ); ?>

</article><!-- #post-## -->

<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rikke
 */

?>

<?php do_action('rikke_before_post'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( rikke_meta_check() ) : ?>
	<div class="entry-meta">
		<?php rikke_entry_meta(); ?>
	</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rikke' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( rikke_meta_check() ) : ?>
	<footer class="entry-footer">
		<?php rikke_entry_tags(); ?>
	</footer>
	<?php endif; ?>

</article><!-- #post-## -->

<?php do_action('rikke_after_post'); ?>
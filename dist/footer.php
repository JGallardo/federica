<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rikke
 */

?>
	
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner-footer">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://github.com/JGallardo/federica', 'federica' ) ); ?>"><?php printf( esc_html__( 'Federica theme by %s', 'Juan Gallardo' ), 'Juan Gallardo' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Child theme of: %s', 'rikke' ), 'Rikke' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
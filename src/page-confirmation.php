<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rikke
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
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
				<header class="entry-header">
					<h1>Contact | Message Sent</h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><strong>Your message was sent</strong></p>
					<p>I will be in touch soon.</p>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php do_action('rikke_after_post'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<aside id="sidebar-1" class="widget">
			<h4 class="widget-title">Social Links</h4>
			<ul>
				<li>
					<a href="https://stackoverflow.com/users/1120027/jgallardo" title="StackOverflow - Juan Gallardo" target="_blank">StackOverflow</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/in/jgallardo2600/" title="LinkedIn - Juan Gallardo" target="_blank">LinkedIn</a>
				</li>
				<li>
					<a href="https://github.com/JGallardo" title="GitHub - Juan Gallardo" target="_blank">GitHub</a>
				</li>
				<li>
					<a href="https://twitter.com/JGallardo2600" title="Twitter - Juan Gallardo" target="_blank">Twitter</a>
				</li>
			</ul>
		</aside>
	</div><!-- #secondary -->

<?php get_footer(); ?>
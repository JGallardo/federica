<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rikke
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	        <div class="posts-layout">
                <article class="post">
                	<div class="post-wrapper">
                		<div class="post-inner">
                			<h1>Portfolio</h1>
							<ul>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php if (in_category('portfolio')) : ?>
								<li>
			                    <?php if (has_post_thumbnail()): ?>
			                    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(150, 150)); ?>
			                    <?php else: ?>
			                    	<!-- Add default -->
			                        <div class=""></div>
			                    <?php endif; ?>      
			                    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
			                    	<div>
			                    		<?php the_excerpt(); ?>
			                    	</div>
	                    		</li>
								<?php endif; endwhile; endif; ?>
							</ul>
	                    </div>
                    </div>
                </article>
	        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<aside id="sidebar-1" class="widget">
			<h4 class="widget-title">Other Work Examples</h4>
			<ul>
				<li>
					<a href="https://www.behance.net/jgallardo" title="Behance - Juan Gallardo" target="_blank">Behance</a>
				</li>
				<li>
					<a href="https://stackoverflow.com/users/1120027/jgallardo" title="StackOverflow - Juan Gallardo" target="_blank">StackOverflow</a>
				</li>
				<li>
					<a href="https://dribbble.com/jgallardo" title="Dribbble - Juan Gallardo" target="_blank">Dribbble</a>
				</li>
			</ul>
		</aside>
	</div><!-- #secondary -->
<?php get_footer(); ?>
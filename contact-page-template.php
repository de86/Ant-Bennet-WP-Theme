<?php
/*Template Name: Contact Form no comments
/*
* @package Anthony Bennett
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container960">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

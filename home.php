<?php
/*Template Name: Home Template

/*
@package Anthony Bennett
*/

get_header(); ?>

	<div id="story" class="container-full-width">
		<div class="container960">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

	<div id="donate" class="container-full-width">
		<div class="container960">
		</div>
	</div>

	<div id="primary" class="content-area">
		<div class="container960">
			<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- .container690 -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

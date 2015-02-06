<?php
/*Template Name: Static with Loop

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

	<div id="help" class="help clear">
		<!-- <div class="container960 help-container"> -->
			<h2>How you can help</h2>
			<div class="help-div">
				<img src="<?php echo get_template_directory_uri(); ?>/img/donate.png" class="help-img donate">
				<h3>Donate</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt dui consectetur nisi tempor euismod. Mauris sed tincidunt mi.</p>
			</div>
			<div class="help-div">
				<img src="<?php echo get_template_directory_uri(); ?>/img/challenge.png" class="help-img challenge">
				<h3>Challenge Me</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt dui consectetur nisi tempor euismod. Mauris sed tincidunt mi.</p>
			</div>
		<!-- </div> -->
	</div>

	<div id="primary" class="content-area">
		<div class="container960">
			<h2>Latest News...</h2>
			<main id="main" class="site-main" role="main">
			<?php
				$args = array( 'posts_per_page' => 5 );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				  setup_postdata( $post ); ?>
					<div class="front-page-post">
						<h2 class="front-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<time class="entry-date published updated"><?php the_date(); ?></p>
						<?php the_content(' Read more...'); ?>
					</div>
				<?php endforeach; 
				wp_reset_postdata(); ?>

			</main><!-- #main -->
		</div><!-- .container690 -->
	</div><!-- #primary -->


<?php get_footer(); ?>
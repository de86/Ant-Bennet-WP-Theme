<?php
/**
 * @package Anthony Bennett
 */
?>

<div class="content-area container960">
	<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php anthony_bennett_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
</div>

<?php 
	if (has_post_thumbnail()) {
		echo '<div class="single-post-thumb clear">';
		echo the_post_thumbnail('large_thumb');
		echo '</div>';
	}
?>

<div id="primary" class="content-area container960 clear">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'anthony-bennett' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php anthony_bennett_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
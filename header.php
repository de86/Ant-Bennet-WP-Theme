<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Anthony Bennett
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php _e( 'Skip to content', 'anthony-bennett' ); ?>
	</a>
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'anthony-bennett' ); ?></button>
			<div class="logo-wrapper">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
					<img src="<?php echo get_template_directory_uri(); ?>/img/ant_bennet_ico.png" alt="" class="bennett-logo">
				</a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		
		<?php if ( get_header_image() && (get_header_textcolor() ==='blank') ) : ?>
			<div class="header-img">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
			</div>
		<?php endif; // End header image check. ?>

		<div class="site-branding header-background-img" style="background-image: url(<?php header_image(); ?>)">
			<div class="container960">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div><!-- .site-branding -->

		<?php bennett_social_media_menu(); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

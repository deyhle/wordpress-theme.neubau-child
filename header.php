<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main-wrap">
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Der Food-Blog für alle, die gerne herzhaft kochen. Neben der wunderbaren Welt des Fleisches geht es aber durchaus auch mal in vegetarische oder gar vegane Gefilde.">
<meta property="og:site_name" content="Dining Tales" />
<meta property="fb:pages" content="677695375684389" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="load-overlay"></div>
<div class="main-container">

	<header id="masthead" class="site-header cf" role="banner">
		<div id="site-branding">
			<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo"><img src="<?php header_image(); ?>"  alt=""></a><!--width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>"-->
			<?php endif; ?>

			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link" rel="home"><?php esc_html_e( 'Back', 'neubau' ); ?></a>
			<?php endif; ?>

			<?php if ( '' != get_bloginfo('description') ) : ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
		</div><!-- end #site-branding -->

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<div id="overlay-wrap" class="overlay-wrap cf">	
		<nav id="site-navigation" class="main-navigation cf" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location'	=> 'primary',
					'menu_class'    	=> 'primary-menu',
					'container' 		=> false,
				 ) );
			?>
		</nav><!-- .main-navigation -->
		<button id="overlay-close" class="overlay-btn"><span><?php esc_html_e( 'Close', 'neubau' ); ?></span></button>
	</div><!-- end #overlay-wrap -->
	<button id="overlay-open" class="overlay-btn"><span><?php esc_html_e( 'Menu', 'neubau' ); ?></span></button>
	<?php endif; ?>

	</header><!-- end #masthead -->

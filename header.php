<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Awaken
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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'awaken' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<?php if ( has_nav_menu( 'top_navigation' ) || get_theme_mod( 'display_social_icons', false ) ) : ?>
			<div class="top-nav">
				<div class="container">
					<div class="row">
						<?php is_rtl() ? $rtl = 'awaken-rtl' : $rtl = ''; ?>
						<div class="col-xs-12 col-sm-6 col-md-8 <?php echo $rtl; ?>">
							<?php if ( has_nav_menu( 'top_navigation' ) ) : ?>
								<nav id="top-navigation" class="top-navigation" role="navigation">
									<?php wp_nav_menu( array( 'theme_location' => 'top_navigation' ) ); ?>
								</nav><!-- #site-navigation -->
								<a href="#" class="navbutton" id="top-nav-button"><?php _e( 'Top Menu', 'awaken' ); ?></a>
								<div class="responsive-topnav"></div>
							<?php endif; ?>
						</div><!-- col-xs-12 col-sm-6 col-md-8 -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<?php awaken_socialmedia(); ?>
						</div><!-- col-xs-12 col-sm-6 col-md-4 -->
					</div><!-- row -->
				</div><!-- .container -->
			</div>
		<?php endif; ?>

		<div id="barra-governo">
			<div id="barra-governo-content">
				<div id="barra-governo-block">
					<div class="logo">
						<a href="<?php echo bloginfo('url')?>" ><img src="<?php bloginfo('template_directory'); ?>/images/s5_logo.alagoas.png" alt="Lacen" /></a>
					</div>
					<div class = "titulo_site">
						<h1>LACEN</h1>
						<h5>Laboratório Central de Alagoas</h5>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="awaken-navigation-container">
				<nav id="site-navigation" class="main-navigation cl-effect-10" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'main_navigation' ) ); ?>
				</nav><!-- #site-navigation -->
				<a href="#" class="navbutton" id="main-nav-button"><?php _e( 'Main Menu', 'awaken' ); ?></a>
				<div class="responsive-mainnav"></div>

				<div class="awaken-search-button-icon"></div>
				<div class="awaken-search-box-container">
					<div class="awaken-search-box">
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="awaken-search-form" method="get">
							<input type="text" value="" name="s" id="s" />
							<input type="submit" value="<?php _e( 'Search', 'awaken' ); ?>" />
						</form>
					</div><!-- th-search-box -->
				</div><!-- .th-search-box-container -->
			</div><!-- .awaken-navigation-container-->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">


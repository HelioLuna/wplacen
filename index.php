<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Awaken
 */

get_header(); ?>
<div class="row">
	<?php is_rtl() ? $rtl = 'awaken-rtl' : $rtl = ''; ?>
	<div class="col-xs-12 col-sm-12 col-md-8 <?php echo $rtl ?>">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div id="campanha">

				</div>
				<div id="slide-destaque">

				</div>
				<!-- ABAIXO -->
				<div id="tabs-noticias">

				</div>

				<div id="artigo">

				</div>

				<div id="servicos-lacen">

				</div>
				<!-- ABAIXO -->

				<div id="redes-lacen">

				</div>

				<div id="banner"></div>

				<div id="multimidia">

				</div>
				<!-- ABAIXO -->

				<div id="banner-footer">

				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .bootstrap cols -->
	<?php if (!is_front_page()) {?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<?php get_sidebar(); ?>
		</div><!-- .bootstrap cols -->
	<?php } ?>
</div><!-- .row -->
<?php get_footer(); ?>

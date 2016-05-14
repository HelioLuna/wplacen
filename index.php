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
					<?php echo do_shortcode('[tabby title="Notícias"]'); ?>

					<div id="noticias-unidades">

						<!--noticias do lacen-->
						<div id="noticias-lacen">

							<?php query_posts('category_name=noticias&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div arbovirus -->
						<div id="noticias-arbovirus" style="display:none">
							<?php query_posts('category_name=noticias-arbovirus&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div enteroparasitoses -->
						<div id="noticias-enteroparasitoses" style="display:none">
							<?php query_posts('category_name=noticias-enteroparasitoses&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div entomologia -->
						<div id="noticias-entomologia" style="display:none">
							<?php query_posts('category_name=noticias-entomologia&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div tuberculose -->
						<div id="noticias-tuberculose" style="display:none">
							<?php query_posts('category_name=noticias-tuberculose&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>


					</div>



					<hr />
					<div id="bt-unidades">
						<ul id="mycarousel" class="jcarousel-skin-tango">
							<!--botoes das unidades para mostrar as noticias-->
							<li><img class="apps active" id ="lacen" src="<?php bloginfo('template_directory'); ?>/images/lacen.jpg" alt="LACEN" title="Notícias do LACEN"/></li>
							<li><img class="apps" id ="arbovirus" src="<?php bloginfo('template_directory'); ?>/images/arbovirus.jpg" alt="Arbovirus" title="Notícias: Arbovirus" /></li>
							<li><img class="apps" id ="enteroparasitoses" src="<?php bloginfo('template_directory'); ?>/images/enteroparasitoses.jpg" alt="Enteroparasitoses" title="Notícias: Enteroparasitoses"/></li>
							<li><img class="apps" id ="entomologia" src="<?php bloginfo('template_directory'); ?>/images/entomologia.jpg" alt="Entomologia" title="Notícias: Entomologia"/></li>
							<li><img class="apps" id ="tuberculose" src="<?php bloginfo('template_directory'); ?>/images/tuberculose.jpg" alt="Tuberculose" title="Notícias: Tuberculose"/></li>

						</ul>
					</div>

					<script>
						$( document ).ready(function() {
							$(".apps").click( function() {
								nome_botao = $(this).attr('id');

								//loop pra esconder os viviveis
								$("#noticias-unidades").find("div").each(function (index, element) {
									//verificar se o display esta none
									if ($(element).css("display") == 'block') {
										//esconde
										$(element).css('display','none');
									}
								});
								$("#noticias-" + nome_botao).css('display', 'block');
								//loop pra remover a Active dos botões
								$("#bt-unidades").find('.apps').each(function(index, element){
									$(element).removeClass('active');
								});
								$('#' + nome_botao).addClass('active');
							})
						});
					</script>

					<?php echo do_shortcode('[tabby title="Eventos"]'); ?>
					<div>
						<?php
						$cp_url = site_url();
						echo do_shortcode("[event-list url_to_page='$cp_url/eventos' show_details='false' num_events=2]")?>
					</div>
					<?php echo do_shortcode('[tabbyending]'); ?>

				</div> <!-- FINAL DIV TABS NOTICIAS-->

				<div id="artigo">
					<?php echo do_shortcode('[tabby title="ARTIGOS"]'); ?>

					<?php query_posts('category_name=artigos&showposts=1'); ?>
					<div class="post-row">
						<?php while ( have_posts() ): the_post(); ?>
							<?php get_template_part('content'); ?>
						<?php endwhile; ?>


					</div>
					<?php echo do_shortcode('[tabbyending]'); ?>
				</div><!-- FINAL DIV TABS ARTIGOS-->

				<div id="servicos-lacen">
					<?php echo do_shortcode('[tabby title="SERVIÇOS"]'); ?>
					<div id="servicos-lacen-tab">
						<?php
						$links = get_bookmarks('category_name=servicos&orderby=rating');
						foreach($links as $link) {
							?>

							<a href="<?php echo $link->link_url ?>" target="<?php echo $link->link_target ?>">
								<img src="<?php echo $link->link_image ?>" />
							</a>
							<?php
						}
						?>
					</div>
					<?php echo do_shortcode('[tabbyending]'); ?>
				</div>
				<!-- ABAIXO -->

				<div id="redes-lacen">

				</div>

				<div id="banner"></div>

				<div id="multimidia">

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

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

						<!--noticias da sede-->
						<div id="noticias-sesau">

							<?php query_posts('category_name=noticias&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div do HGE -->
						<div id="noticias-hge" style="display:none">
							<?php query_posts('category_name=noticias-hge&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div do SAMU -->
						<div id="noticias-samu" style="display:none">
							<?php query_posts('category_name=noticias-samu&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div do HEMOAL -->
						<div id="noticias-hemoal" style="display:none">
							<?php query_posts('category_name=noticias-hemoal&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div do Vigilancia Ambiental -->
						<div id="noticias-va" style="display:none">
							<?php query_posts('category_name=noticias-va&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div do Atenção Basica -->
						<div id="noticias-lacen" style="display:none">
							<?php query_posts('category_name=noticias-lacen&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>


						<!--div do Vigilância Sanitária -->
						<div id="noticias-vs" style="display:none">
							<?php query_posts('category_name=noticias-vs&showposts=3'); ?>

							<?php while ( have_posts() ): the_post(); ?>

								<a href="<?php the_permalink() ?>">
									<h3><?php the_title()?></h3>
									<p><?php the_excerpt() ?></p>
								</a>

							<?php endwhile; ?>
						</div>

						<!--div do Vigilância Epidemiologica -->
						<div id="noticias-ve" style="display:none">
							<?php query_posts('category_name=noticias-ve&showposts=3'); ?>

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
							<li><img class="apps active" id ="sesau" src="<?php bloginfo('template_directory'); ?>/images/sesau.jpg" alt="SESAU" title="Notícias da SESAU"/></li>
							<li><img class="apps" id ="hge" src="<?php bloginfo('template_directory'); ?>/images/hge.jpg" alt="HGE" title="Notícias do HGE" /></li>
							<li><img class="apps" id ="samu" src="<?php bloginfo('template_directory'); ?>/images/samu.jpg" alt="SAMU" title="Notícias do SAMU"/></li>
							<li><img class="apps" id ="hemoal" src="<?php bloginfo('template_directory'); ?>/images/hemoal.jpg" alt="HEMOAL" title="Notícias do HEMOAL"/></li>
							<li><img class="apps" id ="va" src="<?php bloginfo('template_directory'); ?>/images/va.jpg" alt="Vigilância Ambiental" title="Notícias da Vigilância Ambiental"/></li>
							<li><img class="apps" id ="lacen" src="<?php bloginfo('template_directory'); ?>/images/lacen.jpg" alt="LACEN" title="Notícias do LACEN"/></li>
							<li><img class="apps" id ="vs" src="<?php bloginfo('template_directory'); ?>/images/vs.jpg" alt="Vigilância Sanitária" title="Notícias da Vigilância Sanitária"/></li>
							<li><img class="apps" id ="ve" src="<?php bloginfo('template_directory'); ?>/images/ve.jpg" alt="Vigilância Epidemiológica" title="Notícias da Vigilância Epidemiológica"/></li>
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

				</div>

				<div id="servicos-lacen">

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

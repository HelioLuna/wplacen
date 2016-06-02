<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Awaken
 */
?>
</div><!-- container -->
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="footer-widget-area">
				<div class="col-md-4">
					<div class="left-footer">
						<div class="widget-area" role="complementary">
							<?php if ( ! dynamic_sidebar( 'footer-left' ) ) : ?>

							<?php endif; // end sidebar widget area ?>
						</div><!-- .widget-area -->
					</div>
				</div>

				<div class="col-md-4">
					<div class="mid-footer">
						<div class="widget-area" role="complementary">
							<?php if ( ! dynamic_sidebar( 'footer-mid' ) ) : ?>

							<?php endif; // end sidebar widget area ?>
						</div><!-- .widget-area -->						</div>
				</div>

				<div class="col-md-4">
					<div class="right-footer">
						<div class="widget-area" role="complementary">
							<?php if ( ! dynamic_sidebar( 'footer-right' ) ) : ?>

							<?php endif; // end sidebar widget area ?>
						</div><!-- .widget-area -->
					</div>
				</div>
			</div><!-- .footer-widget-area -->
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="footer-site-info">
		<div class="container">
			<div class="row">
				<div id="maps-google"> <!--     IFRAME GOOGLEMAPS          -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.329017869322!2d-35.71765408476979!3d-9.652902504617641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70145bccf749981%3A0x4ecff06a280cef68!2sLacen%2FAL!5e0!3m2!1spt-BR!2sbr!4v1464875915490" width="380" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div> <!--     FIM IFRAME GOOGLEMAPS          -->

				<div id="logo_rodape">
					<hr>
					<a href="<?php echo bloginfo('url')?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo_rodape.png" alt="SESAU"/></a>
					<span id="span-rodape" ><span id="span-contato">Contato:</span> 82 3315-2763 </span>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
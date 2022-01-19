<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center py-4">
                    <div class="site-info">
                
                <p class="my-0 text-center text-dark">Copyright &copy; <?php echo date('Y'); ?> zadanie-rekrutacyjne-advist. All rights reserved.</p>

            </div><!-- close .site-info -->
                </div>
            </div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/custom_js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/custom_js/slick-slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/custom_js/core.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/custom_js/main.js"></script>
</body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
            <span class="sep">2019 © Все права защищены</span><span class="sep"> | </span>
            <a href="http://www.autobit.od.ua/">Поставщик авто-запчастей на все иномарки http://www.autobit.od.ua/</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

    <script src="wp-content/themes/sydney/js/jquery.maskedinput.min.js"></script>
<script>
        jQuery(".phone_vv").mask("(999) 999-9999");
        let block_bg= jQuery(".slide-item");
        if(jQuery(window).width()<= 700){
            block_bg.css({"background-image": "url('http://goodzapa.com.ua/wp-content/uploads/2019/10/photo-1494976388531-d1058494cdd8-min.png')"});
        }
        else {
            block_bg.css({"background-image": "url('http://goodzapa.com.ua/wp-content/uploads/2019/10/goodzapa-min_2.png')"});
        }
</script>
	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

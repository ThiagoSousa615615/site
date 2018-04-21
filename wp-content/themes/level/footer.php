<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Level
 */

?>

	</div><!-- #page --></div><!-- #content -->
<div id="footer-widget">
<div class="row">
<div class="large-3 columns">
	<?php dynamic_sidebar( 'footer-1' ); ?></div>
<div class="large-3 columns">
	<?php dynamic_sidebar( 'footer-2' ); ?></div>
<div class="large-3 columns">
	<?php dynamic_sidebar( 'footer-3' ); ?></div> 
<div class="large-3 columns">
	<?php dynamic_sidebar( 'footer-4' ); ?></div>
</div>
</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
		<div class="small-12 medium-6 large-6 columns">
		<div class="site-info">
			<?php _e('Theme: ','level'); ?><a href="<?php echo esc_url( __( 'https://www.insertcart.com/product/level-wordpress-theme/', 'level' ) ); ?>"><?php printf( esc_html__( '%s', 'level' ), 'Level' ); ?></a>
			<span class="sep"> | </span>
			<?php echo ( get_theme_mod('level_footer_text') == '' ) ? ('&copy; '.date_i18n('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','level')) : get_theme_mod('level_footer_text'); ?>
		</div><!-- .site-info -->
		<?php if (has_nav_menu('footer')) {
		wp_nav_menu( array( 'theme_location' => 'footer','menu_id' => 'footerhorizontal', 'echo' => true,'depth' =>'1','fallback_cb' => false ) ); }?>	
		</div>
		<div class="small-12 medium-6 large-6 columns social">
		<?php
		/*
		** Template to Render Social Icons on Top Bar
		*/
			for ($i = 1; $i < 8; $i++) : 
			$social = get_theme_mod('level_social_'.$i);
			if ( ($social != 'none') && ($social != '') ) : ?>
			<a class="hvr-ripple-out" href="<?php echo esc_url( get_theme_mod('level_social_url'.$i) ); ?>"><i class="fa fa-<?php echo $social; ?>"></i></a>
			<?php endif;

		endfor; ?>
		</div>
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</div></div>
</body>
</html>
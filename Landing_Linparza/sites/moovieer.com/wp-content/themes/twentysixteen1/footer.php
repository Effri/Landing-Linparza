<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							)
						);
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							)
						);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php //wp_footer(); ?>
<!-- <script>
jQuery('#username_login').on('submit',function(e){
    e.preventDefault();
    var data = jQuery(this).serializeArray();
    data.push({ name:'action',value:'username_login' });
    jQuery.ajax({
        url:">",
        type: 'POST',
        dataType: 'json',
        data:data,
        success:function(response){
            if(response.error_code == 1){
                alert('user cannot login')
            } else {
                alert('user logged in');
                location.reload();
            }
        }
    });
});
</script> -->
<script>
jQuery('#specialist').click(function(){
	if (jQuery(this).is(':checked')){
		jQuery('#btnsbm').removeAttr('disabled');
	} else {
		jQuery('#btnsbm').attr('disabled', 'disabled'); 
	}
});
</script>
</body>
</html>
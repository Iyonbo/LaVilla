<?php
/**
 * The template part for header
 *
 * @package VW Interior Designs 
 * @subpackage vw_interior_designs
 * @since VW Interior Designs 1.0
 */
?>
<?php
  $vw_interior_designs_search_hide_show = get_theme_mod( 'vw_interior_designs_search_hide_show' );
  if ( 'Disable' == $vw_interior_designs_search_hide_show ) {
   $colmd = 'col-lg-10 col-md-10';
  } else { 
   $colmd = 'col-md-8 col-lg-9 col-4';
  } 
?>
<div class="container">
	<div id="header" class="menubar">
		<div class="header-menu <?php if( get_theme_mod( 'vw_interior_designs_sticky_header', false) != '' || get_theme_mod( 'vw_interior_designs_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
			<div class="row">
				<div class="<?php echo esc_html( $colmd ); ?> align-self-center">
					<?php if(has_nav_menu('primary')){ ?>
						<div class="toggle-nav mobile-menu">
		        			<button onclick="vw_interior_designs_menu_open_nav()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-interior-designs'); ?></span></button>
		    			</div>
		    		<?php } ?>
				  	<div id="mySidenav" class="nav sidenav">
			          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-interior-designs' ); ?>">
			            <?php 
							if(has_nav_menu('primary')){
								wp_nav_menu( array( 
									'theme_location' => 'primary',
									'container_class' => 'main-menu clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
								) ); 
							} 
						?>
			            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_interior_designs_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_res_close_menus_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-interior-designs'); ?></span></a>
			          </nav>
	        		</div>
				</div>
				<div class="col-md-2 col-lg-2 col-4 align-self-center">
					<?php if(class_exists('woocommerce')){ ?>
						<div class="cart_icon">
				          	<a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_cart_icon','fas fa-shopping-bag')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Cart','vw-interior-designs'); ?></span></a>
			            	<li class="cart_box">
				              	<span class="cart-value"> <?php echo esc_html (wp_kses_data( WC()->cart->get_cart_contents_count() ) );?></span>
			            	</li>
				        </div>
				    <?php } ?>
				</div>
				<?php if ( 'Disable' != $vw_interior_designs_search_hide_show ) {?>
					<div class="search-box col-md-2 col-lg-1 col-4 align-self-center">
				        <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_search_icon','fas fa-search')); ?>"></i></a></span>
			      	</div>
			    <?php } ?> 
			    <div class="serach_outer">
					<div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
					<div class="serach_inner">
					  <?php get_search_form(); ?>
					</div>
				</div>     	
			</div>
		</div>
	</div>
</div>


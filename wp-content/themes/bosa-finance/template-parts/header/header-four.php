<header id="masthead" class="site-header header-four">
	<?php
	$header_btn_defaults = array(
		array(
			'header_btn_type' 			=> 'button-outline',
			'header_btn_bg_color'		=> '#EB5A3E',
			'header_btn_border_color'	=> '#1a1a1a',
			'header_btn_text_color'		=> '#1a1a1a',
			'header_btn_hover_color'	=> '#086abd',
			'header_btn_text' 			=> '',
			'header_btn_link' 			=> '',
			'header_btn_target'			=> true,
			'header_btn_radius'			=> 0,
		),		
	);

	$header_buttons = get_theme_mod( 'header_button_repeater', $header_btn_defaults );
	$has_header_btn = false;
	if ( is_array( $header_buttons ) ){
		foreach( $header_buttons as $value ){
			if( !empty( $value['header_btn_text'] ) ){
				$has_header_btn = true;
				break;
			}
		}
	}
	?>

	<div class="top-header">
		<?php if( !get_theme_mod( 'disable_mobile_top_header', false ) ){ ?>
			<?php if( ( !get_theme_mod( 'disable_header_social_links', false ) && bosa_has_social() ) || ( !get_theme_mod( 'disable_contact_detail', false ) && ( get_theme_mod( 'contact_phone', '' )  || get_theme_mod( 'contact_email', '' )  || get_theme_mod( 'contact_address', '' ) ) ) || !get_theme_mod( 'disable_search_icon', false ) || ( !get_theme_mod( 'disable_header_button', false ) && $has_header_btn  ) || has_nav_menu( 'menu-3') || is_active_sidebar( 'menu-sidebar' ) ){ ?>
				<div class="alt-menu-icon d-lg-none">
					<a class="offcanvas-menu-toggler" href="#">
						<span class="icon-bar-wrap">
							<span class="icon-bar"></span>
						</span>
						<span class="iconbar-label d-lg-none"><?php echo esc_html( get_theme_mod( 'top_bar_name', esc_html__( 'Top Bar', 'bosa-finance' ) ) ); ?></span>
					</a>
				</div>
			<?php } ?>
		<?php } ?>
		<?php if( !get_theme_mod( 'disable_top_header_section', false ) ){ ?>
			<div class="top-header-inner header-image-wrap">
				<?php if( bosa_has_header_media() ){ bosa_header_media(); } ?>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<?php get_template_part( 'template-parts/site', 'branding' ); ?>
						</div>
						<div class="col-lg-8 d-none d-lg-block">
							<?php get_template_part( 'template-parts/header', 'contact' ); ?>
						</div>
						<div class="col-lg-2">
							<?php if( !get_theme_mod( 'disable_header_social_links', false ) && bosa_has_social() ) { ?>
								<div class="header-icons">
									<?php if( !get_theme_mod( 'disable_header_social_links', false ) && bosa_has_social() ){
										echo '<div class="social-profile d-none d-lg-inline-block">';
											bosa_social();
										echo '</div>'; 
									} ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="overlay"></div>
			</div>
		<?php } ?>
	</div>
	<div class="bottom-header fixed-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 d-none d-lg-flex">
					<?php if( !get_theme_mod( 'disable_hamburger_menu_icon', false ) && is_active_sidebar( 'menu-sidebar' ) ){ ?>
						<div class="alt-menu-icon">
							<a class="offcanvas-menu-toggler" href="#">
								<span class="icon-bar-wrap">
									<span class="icon-bar"></span>
								</span>
							</a>
						</div>
					<?php } ?>
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bosa-finance' ); ?></button>
						<?php if ( has_nav_menu( 'menu-1' ) ) :
							wp_nav_menu( 
								array(
									'container'      => '',
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'menu nav-menu',
								)
							);
						?>
						<?php else :
							wp_page_menu(
								array(
									'menu_class' => 'menu-wrap',
									'before'     => '<ul id="primary-menu" class="menu nav-menu">',
									'after'      => '</ul>',
								)
							);
						?>
						<?php endif; ?>
					</nav><!-- #site-navigation -->
				</div>
				<?php if( ( !get_theme_mod( 'disable_header_button', false ) && $has_header_btn ) || !get_theme_mod( 'disable_search_icon', false ) ){ ?>
					<div class="col-lg-3 d-none d-lg-flex justify-content-end">
						<div class="header-icons d-flex align-items-center">
							<!-- Search form structure -->
							<?php if( !get_theme_mod( 'disable_search_icon', false ) ): ?>
								<div id="search-form" class="header-search-wrap d-none d-lg-inline-block">
									<button class="search-icon">
										<span class="fas fa-search"></span>
									</button>
								</div>
							<?php endif; ?>
						</div>
						<?php 
						if ( !get_theme_mod( 'disable_header_button', false ) ){
							if( $has_header_btn ){ ?>
								<div class="header-btn">
									<?php 
										$i = 1;
						            	foreach( $header_buttons as $value ){
						            		if( !empty( $value['header_btn_text'] ) ){
						            			$link_target = '';
												if( $value['header_btn_target'] ){
													$link_target = '_blank';
												}else {
													$link_target = '';
												} ?>
												
												<a href="<?php echo esc_url( $value['header_btn_link'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="header-btn-<?php echo $i.' '.esc_attr( $value['header_btn_type'] ); ?>">
													<?php echo esc_html( $value['header_btn_text'] ); ?>
												</a>
												
											<?php
						            		}
						            		$i++;
						            	}
						            ?>
						        </div> 	
						<?php }
						} ?>
					</div>	
				<?php } ?>		
			</div>
		</div>	
		<!-- header search form -->
		<div class="header-search">
			<div class="container">
				<?php get_search_form(); ?>
				<button class="close-button">
					<span class="fas fa-times"></span>
				</button>
			</div>
		</div>
		<!-- header search form end-->	
		<div class="mobile-menu-container"></div>
	</div>
	<?php get_template_part( 'template-parts/offcanvas', 'menu' ); ?>
</header><!-- #masthead -->
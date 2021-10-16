<?php

function bosa_finance_default_styles(){

	// Begin Style
	$css = '<style>';

	$site_title_color = get_theme_mod( 'site_title_color', '#030303' );
	$site_tagline_color = get_theme_mod( 'site_tagline_color', '#767676' );
	$css .= '
		/* Site Title */
		.header-four .site-branding .site-title {
			color: '. esc_attr( $site_title_color ) .';
		}
		/* Tagline */
		.header-four .site-branding .site-description {
			color: '. esc_attr( $site_tagline_color ) .';
		}
	';

	# Header Color
	/* Top Header Background */
	$top_header_background_color = get_theme_mod( 'top_header_background_color', '' );
	$top_header_text_color = get_theme_mod( 'top_header_text_color', '#333333' );
	$top_header_text_link_hover_color = get_theme_mod( 'top_header_text_link_hover_color', '#086abd' );
	$css .= '
		.header-four .top-header .overlay {
			background-color: '. esc_attr( $top_header_background_color ) .';
		}
	';

	$css .= '
		.header-four .social-profile ul li a,
		.header-four .header-contact ul li, 
		.header-four .header-contact ul li a, 
		.header-four .header-contact ul li span,
		.header-four .header-contact ul li i {
			color: '. esc_attr( $top_header_text_color ) .';
		}

		@media only screen and (max-width: 991px) {
			.header-four .top-header .alt-menu-icon {
				background-color: '. esc_attr( $top_header_background_color ) .';
			}
		}

		.header-four .site-branding .site-title a:hover,
		.header-four .site-branding .site-title a:focus,
		.header-four .site-branding .site-title a:active,
		.header-four .header-contact ul li a:hover, 
		.header-four .header-contact ul li a:focus, 
		.header-four .header-contact ul li a:active,
		.header-four .social-profile ul li a:hover,
		.header-four .social-profile ul li a:focus,
		.header-four .social-profile ul li a:active {
			color: '. esc_attr( $top_header_text_link_hover_color ) .';
		}
	';

	/* Bottom Header Background */
	$bottom_header_background_color 	 = get_theme_mod( 'bottom_header_background_color', '' );
	$bottom_header_text_color 			 = get_theme_mod( 'bottom_header_text_color', '#333333' );
	$menu_items_color 					 = get_theme_mod( 'menu_items_color', '#333333' );
	$bottom_header_text_link_hover_color = get_theme_mod( 'bottom_header_text_link_hover_color', '#086abd' );
	$sub_menu_link_hover_color 			 = get_theme_mod( 'sub_menu_link_hover_color', '#086abd' );
	$css .= '
		.header-four .bottom-header {
			background-color: '. esc_attr( $bottom_header_background_color ) .';
		}

		.header-four .main-navigation ul.menu > li > a,
		.header-four .header-icons .search-icon {
			color: '. esc_attr( $bottom_header_text_color ) .';
		}

		.header-four .main-navigation ul.menu li a:hover,
		.header-four .main-navigation ul.menu li a:focus,
		.header-four .main-navigation ul.menu li a:active,
		.header-four .main-navigation ul.menu li.current-menu-item > a,
		.header-four .main-navigation ul.menu li.current_page_item > a,
		.header-four .main-navigation ul.menu > li:hover > a, 
		.header-four .main-navigation ul.menu > li:focus > a, 
		.header-four .main-navigation ul.menu > li:active > a, 
		.header-four .header-icons .search-icon:hover, 
		.header-four .header-icons .search-icon:focus, 
		.header-four .header-icons .search-icon:active {
			color: '. esc_attr( $bottom_header_text_link_hover_color ) .';
		}

		.header-four .alt-menu-icon a:hover, 
		.header-four .alt-menu-icon a:focus, 
		.header-four .alt-menu-icon a:active,
		.header-four .alt-menu-icon a:hover .icon-bar:before, 
		.header-four .alt-menu-icon a:focus .icon-bar:before, 
		.header-four .alt-menu-icon a:active .icon-bar:before, 
		.header-four .alt-menu-icon a:hover .icon-bar:after,
		.header-four .alt-menu-icon a:focus .icon-bar:after,
		.header-four .alt-menu-icon a:active .icon-bar:after {
			background-color: '. esc_attr( $bottom_header_text_link_hover_color ) .';
		}
	';

	# Header four hamburger icon background color 
	$header_hamburger_bg_color = get_theme_mod( 'header_hamburger_bg_color', '#EB5A3E' );
	$header_hamburger_icon_color = get_theme_mod( 'header_hamburger_icon_color', '#FFFFFF' );
	$css .= '
		.header-four .alt-menu-icon a {
			background-color: '. esc_attr( $header_hamburger_bg_color ) .';
		}
		.header-four .alt-menu-icon .iconbar-label {
	      color: '. esc_attr( $header_hamburger_icon_color ) .';
	    }
		.header-four .alt-menu-icon a .icon-bar,
		.header-four .alt-menu-icon a .icon-bar:before,
		.header-four .alt-menu-icon a .icon-bar:after {
			background-color: '. esc_attr( $header_hamburger_icon_color ) .';
		}
	';

	# Header Border For Desktop
	if( get_theme_mod( 'disable_top_header_border', false ) ){
		$css .= '
			@media screen and (min-width: 992px){
				.header-four .top-header {
					border-bottom: none;
				}
			}
		';
	}

	# Header Border For mobile
	if( get_theme_mod( 'disable_mobile_top_header_border', false ) ){
		$css .= '
			@media screen and (max-width: 991px){
				.header-four .alt-menu-icon {
					border-bottom: none;
				}
			}
		';
	}
	if( get_theme_mod( 'disable_mobile_mid_header_border', false ) ){
		$css .= '
			@media screen and (max-width: 991px){
				.header-four .mobile-menu-container {
					border-top: none;
				}
			}
		';
	}

	$header_icon_color = get_theme_mod( 'header_icon_color', '#B7B7B7' );
	$css .= '
		.header-four .header-contact ul li i {
			color: '. esc_attr( $header_icon_color ) .';
		}
	';

	# Header Button
	if( !get_theme_mod( 'disable_header_button', false ) ){
		if( get_theme_mod( 'header_layout', 'header_four' ) == 'header_one' || get_theme_mod( 'header_layout', 'header_four' ) == 'header_four' ){
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
			if( !empty( $header_buttons ) && is_array( $header_buttons ) ){
				$i = 1;
		    	foreach( $header_buttons as $value ){
		    		$header_btn_bg_color 		= $value['header_btn_bg_color'];
		    		$header_btn_border_color 	= $value['header_btn_border_color'];
		    		$header_btn_text_color 		= $value['header_btn_text_color'];
		    		$header_btn_hover_color 	= $value['header_btn_hover_color'];
		    		$header_btn_radius 	= $value['header_btn_radius'];
		    		if( $value['header_btn_type'] == 'button-primary' ){
			    		$css .= '
							.site-header .header-btn-'. $i .'.button-primary {
								background-color: '. esc_attr( $header_btn_bg_color ) .';
								color: '. esc_attr( $header_btn_text_color ) .';
							}

							.site-header .header-btn-'. $i .'.button-primary:hover,
							.site-header .header-btn-'. $i .'.button-primary:focus,
							.site-header .header-btn-'. $i .'.button-primary:active {
								background-color: '. esc_attr( $header_btn_hover_color ) .';
								color: #ffffff;
							}

							.site-header .header-btn-'. $i .'.button-primary {
								border-radius: '. esc_attr( $header_btn_radius ) .'px;
							}
						';
					}elseif( $value['header_btn_type'] == 'button-outline' ){
						$css .= '

							.site-header .header-btn-'. $i .'.button-outline {
								border-color: '. esc_attr( $header_btn_border_color ) .';
								color: '. esc_attr( $header_btn_text_color ) .';
							}

							.site-header .header-btn-'. $i .'.button-outline:hover,
							.site-header .header-btn-'. $i .'.button-outline:focus,
							.site-header .header-btn-'. $i .'.button-outline:active {
								background-color: '. esc_attr( $header_btn_hover_color ) .';
								border-color: '. esc_attr( $header_btn_hover_color ) .';
								color: #ffffff;
							}

							.site-header .header-btn-'. $i .'.button-outline {
								border-radius: '. esc_attr( $header_btn_radius ) .'px;
							}
						';
					}elseif( $value['header_btn_type'] == 'button-text' ){
						$css .= '
							.site-header .header-btn-'. $i .'.button-text {
								color: '. esc_attr( $header_btn_text_color ) .';
								padding: 0;
							}
							.site-header .header-btn-'. $i .'.button-text:hover,
							.site-header .header-btn-'. $i .'.button-text:focus,
							.site-header .header-btn-'. $i .'.button-text:active {
								color: '. esc_attr( $header_btn_hover_color ) .';
							}
						';
					}
					$i++;
		    	}
		    }
		}
	}

	$feature_posts_height = get_theme_mod( 'feature_posts_height', 350 );
	$css .= '
		.feature-posts-layout-one .feature-posts-image {
			height: '. esc_attr( $feature_posts_height ) .'px;
			overflow: hidden;
		}
	';

	# Header Image / Slider
	#Header Image Height
	$header_image_height = get_theme_mod( 'header_image_height', 120 );
	$css .= '
		@media only screen and (min-width: 992px) {
			.site-header:not(.sticky-header) .header-image-wrap {
				height: '. esc_attr( $header_image_height ) .'px;
				width: 100%;
				position: relative;
			}
		}
	';
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'bosa_finance_default_styles', 99 );
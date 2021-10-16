<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_interior_designs_first_color = get_theme_mod('vw_interior_designs_first_color');

	$vw_interior_designs_custom_css = '';

	if($vw_interior_designs_first_color != false){
		$vw_interior_designs_custom_css .='.search-box i, input[type="submit"], #footer .tagcloud a:hover, #sidebar .tagcloud a:hover, #footer-2, .scrollup i, #sidebar input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, .pagination span, .pagination a, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a, #preloader, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button{';
			$vw_interior_designs_custom_css .='background-color: '.esc_attr($vw_interior_designs_first_color).';';
		$vw_interior_designs_custom_css .='}';
	}
	if($vw_interior_designs_first_color != false){
		$vw_interior_designs_custom_css .='#comments input[type="submit"].submit{';
			$vw_interior_designs_custom_css .='background-color: '.esc_attr($vw_interior_designs_first_color).'!important;';
		$vw_interior_designs_custom_css .='}';
	}
	if($vw_interior_designs_first_color != false){
		$vw_interior_designs_custom_css .='a, .post-main-box:hover .video-btn a, .post-main-box:hover h3.section-title a, .cart_icon i, #footer h3, .woocommerce-info::before, .woocommerce-message::before, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,#footer li a:hover, .main-navigation ul.sub-menu a:hover, .main-navigation a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .page-content i:hover, #footer .custom-social-icons i, #sidebar .custom-social-icons i, #sidebar ul li a:hover, .logo .site-title a:hover, #slider .more-btn a:hover, #video-section .video-btn a:hover, #slider .inner_carousel h1 a:hover, #footer .wp-block-search .wp-block-search__label{';
			$vw_interior_designs_custom_css .='color: '.esc_attr($vw_interior_designs_first_color).';';
		$vw_interior_designs_custom_css .='}';
	}
	if($vw_interior_designs_first_color != false){
		$vw_interior_designs_custom_css .='.video-content, #footer .custom-social-icons i, #sidebar .custom-social-icons i, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_interior_designs_custom_css .='border-color: '.esc_attr($vw_interior_designs_first_color).';';
		$vw_interior_designs_custom_css .='}';
	}
	if($vw_interior_designs_first_color != false){
		$vw_interior_designs_custom_css .='.video-content hr, .woocommerce-info, .woocommerce-message, .post-info hr, .main-navigation ul ul{';
			$vw_interior_designs_custom_css .='border-top-color: '.esc_attr($vw_interior_designs_first_color).';';
		$vw_interior_designs_custom_css .='}';
	}
	if($vw_interior_designs_first_color != false){
		$vw_interior_designs_custom_css .='.video-btn a, .video-btn a, .main-navigation ul ul, .error-btn a{';
			$vw_interior_designs_custom_css .='border-bottom-color: '.esc_attr($vw_interior_designs_first_color).';';
		$vw_interior_designs_custom_css .='}';
	}

	/*-----------------Width Layout -------------------*/

	$vw_interior_designs_theme_lay = get_theme_mod( 'vw_interior_designs_width_option','Full Width');
    if($vw_interior_designs_theme_lay == 'Boxed'){
		$vw_interior_designs_custom_css .='body{';
			$vw_interior_designs_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='right: 100px;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.scrollup.left i{';
			$vw_interior_designs_custom_css .='left: 100px;';
		$vw_interior_designs_custom_css .='}';
	}else if($vw_interior_designs_theme_lay == 'Wide Width'){
		$vw_interior_designs_custom_css .='body{';
			$vw_interior_designs_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='right: 30px;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.scrollup.left i{';
			$vw_interior_designs_custom_css .='left: 30px;';
		$vw_interior_designs_custom_css .='}';
	}else if($vw_interior_designs_theme_lay == 'Full Width'){
		$vw_interior_designs_custom_css .='body{';
			$vw_interior_designs_custom_css .='max-width: 100%;';
		$vw_interior_designs_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_interior_designs_theme_lay = get_theme_mod( 'vw_interior_designs_slider_opacity_color','0.5');
	if($vw_interior_designs_theme_lay == '0'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.1'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.1';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.2'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.2';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.3'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.3';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.4'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.4';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.5'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.5';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.6'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.6';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.7'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.7';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.8'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.8';
		$vw_interior_designs_custom_css .='}';
		}else if($vw_interior_designs_theme_lay == '0.9'){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='opacity:0.9';
		$vw_interior_designs_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_interior_designs_theme_lay = get_theme_mod( 'vw_interior_designs_slider_content_option','Center');
    if($vw_interior_designs_theme_lay == 'Left'){
		$vw_interior_designs_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn{';
			$vw_interior_designs_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_interior_designs_custom_css .='}';
	}else if($vw_interior_designs_theme_lay == 'Center'){
		$vw_interior_designs_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn{';
			$vw_interior_designs_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_interior_designs_custom_css .='}';
	}else if($vw_interior_designs_theme_lay == 'Right'){
		$vw_interior_designs_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn{';
			$vw_interior_designs_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_interior_designs_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_interior_designs_slider_height = get_theme_mod('vw_interior_designs_slider_height');
	if($vw_interior_designs_slider_height != false){
		$vw_interior_designs_custom_css .='#slider img{';
			$vw_interior_designs_custom_css .='height: '.esc_attr($vw_interior_designs_slider_height).';';
		$vw_interior_designs_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_interior_designs_slider = get_theme_mod('vw_interior_designs_slider_hide_show');
	if($vw_interior_designs_slider == false){
		$vw_interior_designs_custom_css .='.page-template-custom-home-page #topbar{';
			$vw_interior_designs_custom_css .='position: static;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.page-template-custom-home-page #header{';
			$vw_interior_designs_custom_css .='margin-top: -1em; margin-bottom: 0%;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_interior_designs_custom_css .='background: #313040; padding: 0 0 20px 0;';
		$vw_interior_designs_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_interior_designs_theme_lay = get_theme_mod( 'vw_interior_designs_blog_layout_option','Default');
    if($vw_interior_designs_theme_lay == 'Default'){
		$vw_interior_designs_custom_css .='.post-main-box{';
			$vw_interior_designs_custom_css .='';
		$vw_interior_designs_custom_css .='}';
	}else if($vw_interior_designs_theme_lay == 'Center'){
		$vw_interior_designs_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, #our-services .service-text p, .related-post .new-text p, #our-services .related-post p{';
			$vw_interior_designs_custom_css .='text-align:center;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.post-info, .content-bttn{';
			$vw_interior_designs_custom_css .='margin-top:10px;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.post-info hr{';
			$vw_interior_designs_custom_css .='margin:15px auto;';
		$vw_interior_designs_custom_css .='}';
	}else if($vw_interior_designs_theme_lay == 'Left'){
		$vw_interior_designs_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .video-btn, #our-services p{';
			$vw_interior_designs_custom_css .='text-align:Left;';
		$vw_interior_designs_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_interior_designs_resp_stickyheader = get_theme_mod( 'vw_interior_designs_stickyheader_hide_show',false);
	if($vw_interior_designs_resp_stickyheader == true && get_theme_mod( 'vw_interior_designs_sticky_header',false) != true){
    	$vw_interior_designs_custom_css .='.page-template-custom-home-page .header-fixed, .header-fixed{';
			$vw_interior_designs_custom_css .='position:static;';
		$vw_interior_designs_custom_css .='} ';
	}
    if($vw_interior_designs_resp_stickyheader == true){
    	$vw_interior_designs_custom_css .='@media screen and (max-width:575px) {';
		$vw_interior_designs_custom_css .='.page-template-custom-home-page .header-fixed, .header-fixed{';
			$vw_interior_designs_custom_css .='position:fixed;';
		$vw_interior_designs_custom_css .='} }';
	}else if($vw_interior_designs_resp_stickyheader == false){
		$vw_interior_designs_custom_css .='@media screen and (max-width:575px){';
		$vw_interior_designs_custom_css .='.page-template-custom-home-page .header-fixed, .header-fixed{';
			$vw_interior_designs_custom_css .='position:static;';
		$vw_interior_designs_custom_css .='} }';
	}

	$vw_interior_designs_resp_slider = get_theme_mod( 'vw_interior_designs_resp_slider_hide_show',false);
	if($vw_interior_designs_resp_slider == true && get_theme_mod( 'vw_interior_designs_slider_hide_show', false) == false){
    	$vw_interior_designs_custom_css .='#slider{';
			$vw_interior_designs_custom_css .='display:none;';
		$vw_interior_designs_custom_css .='} ';
	}
    if($vw_interior_designs_resp_slider == true){
    	$vw_interior_designs_custom_css .='@media screen and (max-width:575px) {';
		$vw_interior_designs_custom_css .='#slider{';
			$vw_interior_designs_custom_css .='display:block;';
		$vw_interior_designs_custom_css .='} }';
	}else if($vw_interior_designs_resp_slider == false){
		$vw_interior_designs_custom_css .='@media screen and (max-width:575px) {';
		$vw_interior_designs_custom_css .='#slider{';
			$vw_interior_designs_custom_css .='display:none;';
		$vw_interior_designs_custom_css .='} }';
	}

	$vw_interior_designs_resp_sidebar = get_theme_mod( 'vw_interior_designs_sidebar_hide_show',true);
    if($vw_interior_designs_resp_sidebar == true){
    	$vw_interior_designs_custom_css .='@media screen and (max-width:575px) {';
		$vw_interior_designs_custom_css .='#sidebar{';
			$vw_interior_designs_custom_css .='display:block;';
		$vw_interior_designs_custom_css .='} }';
	}else if($vw_interior_designs_resp_sidebar == false){
		$vw_interior_designs_custom_css .='@media screen and (max-width:575px) {';
		$vw_interior_designs_custom_css .='#sidebar{';
			$vw_interior_designs_custom_css .='display:none;';
		$vw_interior_designs_custom_css .='} }';
	}

	$vw_interior_designs_resp_scroll_top = get_theme_mod( 'vw_interior_designs_resp_scroll_top_hide_show',true);
	if($vw_interior_designs_resp_scroll_top == true && get_theme_mod( 'vw_interior_designs_hide_show_scroll',true) != true){
    	$vw_interior_designs_custom_css .='.scrollup i, .scrollup{';
			$vw_interior_designs_custom_css .='visibility:hidden !important;';
		$vw_interior_designs_custom_css .='} ';
	}
    if($vw_interior_designs_resp_scroll_top == true){
    	$vw_interior_designs_custom_css .='@media screen and (max-width:575px) {';
		$vw_interior_designs_custom_css .='.scrollup i, .scrollup{';
			$vw_interior_designs_custom_css .='visibility:visible !important;';
		$vw_interior_designs_custom_css .='} }';
	}else if($vw_interior_designs_resp_scroll_top == false){
		$vw_interior_designs_custom_css .='@media screen and (max-width:575px){';
		$vw_interior_designs_custom_css .='.scrollup i, .scrollup{';
			$vw_interior_designs_custom_css .='visibility:hidden !important;';
		$vw_interior_designs_custom_css .='} }';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_interior_designs_sticky_header_padding = get_theme_mod('vw_interior_designs_sticky_header_padding');
	if($vw_interior_designs_sticky_header_padding != false){
		$vw_interior_designs_custom_css .='.header-fixed, .page-template-custom-home-page .header-fixed{';
			$vw_interior_designs_custom_css .='padding: '.esc_attr($vw_interior_designs_sticky_header_padding).';';
		$vw_interior_designs_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_interior_designs_search_padding_top_bottom = get_theme_mod('vw_interior_designs_search_padding_top_bottom');
	$vw_interior_designs_search_padding_left_right = get_theme_mod('vw_interior_designs_search_padding_left_right');
	$vw_interior_designs_search_font_size = get_theme_mod('vw_interior_designs_search_font_size');
	$vw_interior_designs_search_border_radius = get_theme_mod('vw_interior_designs_search_border_radius');
	if($vw_interior_designs_search_padding_top_bottom != false || $vw_interior_designs_search_padding_left_right != false || $vw_interior_designs_search_font_size != false || $vw_interior_designs_search_border_radius != false){
		$vw_interior_designs_custom_css .='.search-box i{';
			$vw_interior_designs_custom_css .='padding-top: '.esc_attr($vw_interior_designs_search_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_interior_designs_search_padding_top_bottom).';padding-left: '.esc_attr($vw_interior_designs_search_padding_left_right).';padding-right: '.esc_attr($vw_interior_designs_search_padding_left_right).';font-size: '.esc_attr($vw_interior_designs_search_font_size).';border-radius: '.esc_attr($vw_interior_designs_search_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_interior_designs_button_padding_top_bottom = get_theme_mod('vw_interior_designs_button_padding_top_bottom');
	$vw_interior_designs_button_padding_left_right = get_theme_mod('vw_interior_designs_button_padding_left_right');
	if($vw_interior_designs_button_padding_top_bottom != false || $vw_interior_designs_button_padding_left_right != false){
		$vw_interior_designs_custom_css .='.post-main-box .video-btn{';
			$vw_interior_designs_custom_css .='padding-top: '.esc_attr($vw_interior_designs_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_interior_designs_button_padding_top_bottom).';padding-left: '.esc_attr($vw_interior_designs_button_padding_left_right).';padding-right: '.esc_attr($vw_interior_designs_button_padding_left_right).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_button_border_radius = get_theme_mod('vw_interior_designs_button_border_radius');
	if($vw_interior_designs_button_border_radius != false){
		$vw_interior_designs_custom_css .='.post-main-box .video-btn{';
			$vw_interior_designs_custom_css .='border-radius: '.esc_attr($vw_interior_designs_button_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	$btn_border = get_theme_mod( 'vw_interior_designs_blog_button_border', false);
	if($btn_border == true){
		$vw_interior_designs_custom_css .='.post-main-box .video-btn{';
			$vw_interior_designs_custom_css .='border:1px solid #313040; display:inline-block;';
		$vw_interior_designs_custom_css .='}';
		$vw_interior_designs_custom_css .='.post-main-box .video-btn a{';
			$vw_interior_designs_custom_css .='border-bottom:none;';
		$vw_interior_designs_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_interior_designs_single_blog_post_navigation_show_hide = get_theme_mod('vw_interior_designs_single_blog_post_navigation_show_hide',true);
	if($vw_interior_designs_single_blog_post_navigation_show_hide != true){
		$vw_interior_designs_custom_css .='.post-navigation{';
			$vw_interior_designs_custom_css .='display: none;';
		$vw_interior_designs_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_interior_designs_copyright_font_size = get_theme_mod('vw_interior_designs_copyright_font_size');
	if($vw_interior_designs_copyright_font_size != false){
		$vw_interior_designs_custom_css .='.copyright p{';
			$vw_interior_designs_custom_css .='font-size: '.esc_attr($vw_interior_designs_copyright_font_size).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_copyright_padding_top_bottom = get_theme_mod('vw_interior_designs_copyright_padding_top_bottom');
	if($vw_interior_designs_copyright_padding_top_bottom != false){
		$vw_interior_designs_custom_css .='#footer-2{';
			$vw_interior_designs_custom_css .='padding-top: '.esc_attr($vw_interior_designs_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_interior_designs_copyright_padding_top_bottom).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_copyright_alignment = get_theme_mod('vw_interior_designs_copyright_alignment');
	if($vw_interior_designs_copyright_alignment != false){
		$vw_interior_designs_custom_css .='.copyright p{';
			$vw_interior_designs_custom_css .='text-align: '.esc_attr($vw_interior_designs_copyright_alignment).';';
		$vw_interior_designs_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_interior_designs_scroll_to_top_font_size = get_theme_mod('vw_interior_designs_scroll_to_top_font_size');
	if($vw_interior_designs_scroll_to_top_font_size != false){
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='font-size: '.esc_attr($vw_interior_designs_scroll_to_top_font_size).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_scroll_to_top_padding = get_theme_mod('vw_interior_designs_scroll_to_top_padding');
	$vw_interior_designs_scroll_to_top_padding = get_theme_mod('vw_interior_designs_scroll_to_top_padding');
	if($vw_interior_designs_scroll_to_top_padding != false){
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='padding-top: '.esc_attr($vw_interior_designs_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_interior_designs_scroll_to_top_padding).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_scroll_to_top_width = get_theme_mod('vw_interior_designs_scroll_to_top_width');
	if($vw_interior_designs_scroll_to_top_width != false){
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='width: '.esc_attr($vw_interior_designs_scroll_to_top_width).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_scroll_to_top_height = get_theme_mod('vw_interior_designs_scroll_to_top_height');
	if($vw_interior_designs_scroll_to_top_height != false){
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='height: '.esc_attr($vw_interior_designs_scroll_to_top_height).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_scroll_to_top_border_radius = get_theme_mod('vw_interior_designs_scroll_to_top_border_radius');
	if($vw_interior_designs_scroll_to_top_border_radius != false){
		$vw_interior_designs_custom_css .='.scrollup i{';
			$vw_interior_designs_custom_css .='border-radius: '.esc_attr($vw_interior_designs_scroll_to_top_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_interior_designs_social_icon_font_size = get_theme_mod('vw_interior_designs_social_icon_font_size');
	if($vw_interior_designs_social_icon_font_size != false){
		$vw_interior_designs_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_interior_designs_custom_css .='font-size: '.esc_attr($vw_interior_designs_social_icon_font_size).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_social_icon_padding = get_theme_mod('vw_interior_designs_social_icon_padding');
	if($vw_interior_designs_social_icon_padding != false){
		$vw_interior_designs_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_interior_designs_custom_css .='padding: '.esc_attr($vw_interior_designs_social_icon_padding).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_social_icon_width = get_theme_mod('vw_interior_designs_social_icon_width');
	if($vw_interior_designs_social_icon_width != false){
		$vw_interior_designs_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_interior_designs_custom_css .='width: '.esc_attr($vw_interior_designs_social_icon_width).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_social_icon_height = get_theme_mod('vw_interior_designs_social_icon_height');
	if($vw_interior_designs_social_icon_height != false){
		$vw_interior_designs_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_interior_designs_custom_css .='height: '.esc_attr($vw_interior_designs_social_icon_height).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_social_icon_border_radius = get_theme_mod('vw_interior_designs_social_icon_border_radius');
	if($vw_interior_designs_social_icon_border_radius != false){
		$vw_interior_designs_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_interior_designs_custom_css .='border-radius: '.esc_attr($vw_interior_designs_social_icon_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_interior_designs_products_padding_top_bottom = get_theme_mod('vw_interior_designs_products_padding_top_bottom');
	if($vw_interior_designs_products_padding_top_bottom != false){
		$vw_interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_interior_designs_custom_css .='padding-top: '.esc_attr($vw_interior_designs_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_interior_designs_products_padding_top_bottom).'!important;';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_products_padding_left_right = get_theme_mod('vw_interior_designs_products_padding_left_right');
	if($vw_interior_designs_products_padding_left_right != false){
		$vw_interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_interior_designs_custom_css .='padding-left: '.esc_attr($vw_interior_designs_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_interior_designs_products_padding_left_right).'!important;';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_products_box_shadow = get_theme_mod('vw_interior_designs_products_box_shadow');
	if($vw_interior_designs_products_box_shadow != false){
		$vw_interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_interior_designs_custom_css .='box-shadow: '.esc_attr($vw_interior_designs_products_box_shadow).'px '.esc_attr($vw_interior_designs_products_box_shadow).'px '.esc_attr($vw_interior_designs_products_box_shadow).'px #ddd;';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_products_border_radius = get_theme_mod('vw_interior_designs_products_border_radius', 0);
	if($vw_interior_designs_products_border_radius != false){
		$vw_interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_interior_designs_custom_css .='border-radius: '.esc_attr($vw_interior_designs_products_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_products_button_border_radius = get_theme_mod('vw_interior_designs_products_button_border_radius', 0);
	if($vw_interior_designs_products_button_border_radius != false){
		$vw_interior_designs_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_interior_designs_custom_css .='border-radius: '.esc_attr($vw_interior_designs_products_button_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_woocommerce_sale_font_size = get_theme_mod('vw_interior_designs_woocommerce_sale_font_size');
	if($vw_interior_designs_woocommerce_sale_font_size != false){
		$vw_interior_designs_custom_css .='.woocommerce span.onsale{';
			$vw_interior_designs_custom_css .='font-size: '.esc_attr($vw_interior_designs_woocommerce_sale_font_size).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_woocommerce_sale_border_radius = get_theme_mod('vw_interior_designs_woocommerce_sale_border_radius', 100);
	if($vw_interior_designs_woocommerce_sale_border_radius != false){
		$vw_interior_designs_custom_css .='.woocommerce span.onsale{';
			$vw_interior_designs_custom_css .='border-radius: '.esc_attr($vw_interior_designs_woocommerce_sale_border_radius).'px;';
		$vw_interior_designs_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_interior_designs_site_title_font_size = get_theme_mod('vw_interior_designs_site_title_font_size');
	if($vw_interior_designs_site_title_font_size != false){
		$vw_interior_designs_custom_css .='.logo h1 a, .logo p.site-title a{';
			$vw_interior_designs_custom_css .='font-size: '.esc_attr($vw_interior_designs_site_title_font_size).';';
		$vw_interior_designs_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_interior_designs_site_tagline_font_size = get_theme_mod('vw_interior_designs_site_tagline_font_size');
	if($vw_interior_designs_site_tagline_font_size != false){
		$vw_interior_designs_custom_css .='.logo p.site-description{';
			$vw_interior_designs_custom_css .='font-size: '.esc_attr($vw_interior_designs_site_tagline_font_size).';';
		$vw_interior_designs_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_interior_designs_preloader_bg_color = get_theme_mod('vw_interior_designs_preloader_bg_color');
	if($vw_interior_designs_preloader_bg_color != false){
		$vw_interior_designs_custom_css .='#preloader{';
			$vw_interior_designs_custom_css .='background-color: '.esc_attr($vw_interior_designs_preloader_bg_color).';';
		$vw_interior_designs_custom_css .='}';
	}

	$vw_interior_designs_preloader_border_color = get_theme_mod('vw_interior_designs_preloader_border_color');
	if($vw_interior_designs_preloader_border_color != false){
		$vw_interior_designs_custom_css .='.loader-line{';
			$vw_interior_designs_custom_css .='border-color: '.esc_attr($vw_interior_designs_preloader_border_color).'!important;';
		$vw_interior_designs_custom_css .='}';
	}
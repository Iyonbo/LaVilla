<?php
/**
 * Theme functions and definitions
 *
 * @package Bosa Finance 1.0.0
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'bosa_finance_enqueue_styles' ) ) :
	/**
	 * @since Bosa Finance 1.0.0
	 */
	function bosa_finance_enqueue_styles() {
		wp_enqueue_style( 'bosa-finance-style-parent', get_template_directory_uri() . '/style.css',
			array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'fontawesome',
				'bosa-blocks',
				'bosa-google-font'
				)
		);

		wp_enqueue_style( 'bosa-finance-google-fonts', "https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap", false );
		wp_enqueue_style( 'bosa-finance-google-fonts-two', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", false );

	}

endif;
add_action( 'wp_enqueue_scripts', 'bosa_finance_enqueue_styles', 1 );

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
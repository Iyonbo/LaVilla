<?php 

// teczilla corporate css js enqueue

load_theme_textdomain('teczilla-corporate', get_stylesheet_directory_uri() .'/lang');


register_nav_menus( array(
  'footer' => esc_html__('Footer Menu' , 'teczilla-corporate')
));

function teczilla_corporate_scripts_enqueue() {

    $avadanta_typography_show = get_theme_mod('teczilla_show_typography', 0);
    If($avadanta_typography_show == 0) {
      wp_enqueue_style('teczilla-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap'); 
    }
    $teczilla_corporate_depend = array( 'bootstrap-min', 'aoff-canvas','owl-carousel','responsive','teczilla-main');
	wp_enqueue_style( 'teczilla-corporate-parent-style', get_template_directory_uri() . '/style.css',array('animate'));	
	wp_enqueue_style('teczilla-corporate-tecz',get_stylesheet_directory_uri() .'/assets/theme-tec.css',$teczilla_corporate_depend);
	
}
add_action('wp_enqueue_scripts', 'teczilla_corporate_scripts_enqueue');

function teczilla_corporate_theme_sidebars() {

    // Blog Sidebar

    register_sidebar(array(
        'name' => esc_html__( 'Blog Sidebar', "teczilla-corporate"),
        'id' => 'top-sidebar',
        'description' => esc_html__( 'Sidebar on the blog layout.', "teczilla-corporate"),
        'before_widget' => '<div id="%1$s" class="sidebar-search sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="sidebar-title"><h3 class="title semi-bold mb-20">',
        'after_title' => '</h3></div>',
    ));
        
}
add_action( 'widgets_init', 'teczilla_corporate_theme_sidebars' );


  function avadant_corporate_custom_header_setup()
    {
        add_theme_support('custom-header', apply_filters('avadanta_custom_header_args', array(
            'default-image'          => get_stylesheet_directory_uri() . '/assets/img/header.jpg',
            'default-text-color' => 'fff',
            'width'              => 1000,
            'height'             => 250,
            'flex-height'        => true,
            'wp-head-callback'   => 'avadanta_corporate_header_style',
        )));
    }

    add_action( 'after_setup_theme', 'avadant_corporate_custom_header_setup' );


if ( !function_exists('avadanta_corporate_header_style') ) :
    /**
     * Add Header And background Images
     */
    function avadanta_corporate_header_style()
    {
        $header_text_color = get_header_textcolor();

        ?>
        <style type="text/css">
            <?php
                // When Text Is Hidden
                if (  display_header_text() ) :
            ?>
            .header-bg-image
           {
            background-image:url('<?php header_image(); ?>') !important;
           }
           
            .teczilla-title a,
            .teczilla-desc
            {
                color: #<?php echo esc_attr( $header_text_color ); ?> !important;
            }

            <?php endif; ?>
        </style>
        <?php
    }
endif;

require( get_stylesheet_directory() . '/include/customizer.php');
require( get_stylesheet_directory() . '/include/primary-color.php');  
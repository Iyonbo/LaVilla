<?php
function teczilla_corporate_sections_settings( $wp_customize ) {
    $wp_customize->remove_setting( 'teczilla_menubar_bg_color' );
     $wp_customize->remove_setting( 'teczilla_menu_item_color' );
      $wp_customize->remove_setting( 'teczilla_menu_item_hover_color' );
       $wp_customize->remove_setting( 'teczilla_menu_link_bg_color' );
       $wp_customize->remove_setting( 'teczilla_submnubg_scheme' );
        $wp_customize->remove_setting( 'teczilla_submnu_link' );
        


        $wp_customize->add_setting('teczilla_theme_color_scheme',array(
        'default' => esc_html__('#e8151b','teczilla-corporate'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','teczilla-corporate'),           
            'description' => esc_html__('Change Theme Color','teczilla-corporate'),
            'section' => 'colors',
            'settings' => 'teczilla_theme_color_scheme'
        ))
    ); 

}
add_action( 'customize_register', 'teczilla_corporate_sections_settings', 30);
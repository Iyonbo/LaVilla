<?php

/**
 * Plugin Name: Tipo de Cambio
 * Description: Obtenemos el tipo de cambio del Banco de Guatemala
 * Version: 1.0
 * Author: Luis Chavarria <luisfer.chavarria@gmail.com>
 * Author URI: mailto:luisfer.chavarria@gmail.com
 * License: copyring
 */
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Tipo de Cambio');
}


require_once (dirname(__FILE__).'/integration.php');

add_action('wp_ajax_nopriv_get_tipo_cambio', 'get_tipo_cambio');
add_action('wp_ajax_get_tipo_cambio', 'get_tipo_cambio');
function get_tipo_cambio(){
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
	header('Content-type: application/json'); 
	$data = array();
	$integration = new IntegrationsCambio\tipo_de_cambio($data);
    $message = $integration->getCambio();
	echo json_encode($message);
	wp_die();
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ca6722079419',
	'title' => 'Configuración Landing',
	'fields' => array(
		array(
			'key' => 'field_5ca6724e56f7c',
			'label' => 'Información Landing',
			'name' => 'informacion_landing',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5ca6770956f7d',
					'label' => 'URL Servicio',
					'name' => 'url_servicio',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),	
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-tipo-cambio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

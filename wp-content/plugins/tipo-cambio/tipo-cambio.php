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
	$data = array(
		"Body" => array(
			"TipoCambioDia" => ""
		)
	);
	$integration = new IntegrationsCambio\tipo_de_cambio($data);
    $message = $integration->getCambio();
	echo json_encode($message);
	wp_die();
}

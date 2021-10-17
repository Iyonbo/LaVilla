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


add_action('wp_ajax_nopriv_git_deploy', 'git_deploy');
add_action('wp_ajax_git_deploy', 'git_deploy');
function git_deploy(){
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
	header('Content-type: application/json'); 
	// echo "Deploy Test\n";

	// Use in the “Post-Receive URLs” section of your GitHub repo.

	// if ( $_POST['payload'] ) {
		$response = shell_exec( 'cd /var/www/html/ && sudo git reset --hard && sudo git pull origin develop 2>&1' );
	// }	
	wp_send_json($response);
}
<?php
namespace IntegrationsCambio;
// var_dump(dirname(__FILE__));
require_once (dirname(__FILE__).'/SoapControllerCambio.php');
// require_once (dirname(__FILE__)."/Models/apartamento.php");
class tipo_de_cambio{
	public static $request;
	public static $response;
	public static $parameters;
	protected $soapController;

	public static $inforResponse;

	public function __construct($parameters){
		$this->soapController = new \SOAPClient\SoapControllerCambio();
		self::$parameters = $parameters;
	}

	//GET RESPONSE
	public static function getResponse(){
		// devolver toda la respuesta
		return self::$response;
	}

	public static function getStatusResponse(){
		// devolver status ver si no hay diffgram
        // var_dump(self::$response);
		$status = isset(self::$response["TipoCambioDiaResponse"]) ? true : false;
		return $status;
	}

	public static function getResponseContent(){
		//devolver solo el contenido

		return self::$response;
	}

	//GET ERROR
	public static function getErrors(){
		return self::$error;
	}

	public function getCambio(){
	    self::$response = $this->soapController->callFunction('TipoCambioDia', self::$parameters);
        
    	$resultado = array();
    	// var_dump($this->getResponseContent());
    	var_dump($this->getStatusResponse());
	    // if ($this->getStatusResponse()) {
	    	$response = $this->getResponseContent();
	    	$resultado = array(
				'status' => true, 
				'message' => "Exitoso",
				'moneda' => 'USD',
				'fecha' => $response['TipoCambioDiaResult']['CambioDolar']['VarDolar']['fecha'],
				'cambio' => $response['TipoCambioDiaResult']['CambioDolar']['VarDolar']['referencia']
			);
	    // }else{
	    //     $resultado = array(
		// 		'status' => false, 
		// 		'message' => "Ocurrio un error, intentelo más tarde"
		// 	);
	    // }
    	return array( 
			"resultado" => $resultado,
			"response" => $response,
		);
	}
}
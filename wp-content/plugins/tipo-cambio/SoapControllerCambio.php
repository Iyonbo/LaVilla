<?php 
namespace SOAPClient; 
// require_once (dirname(__FILE__)."/nusoap/src/nusoap.php");


// use nusoap_client;
// use Exception;
// use Log;
class SoapControllerCambio{
  protected static $wsdl;
  public static $response;
  public static $inforResponse;
  public static $responseContent;
  public static $error;
  public static $client;


  public function __construct() {
    $landing = get_field("informacion_landing", "option");
    $url = $landing["url_servicio"]; 
    self::$wsdl = $url; 
    // self::$wsdl = dirname(__FILE__)."/wsdl.xml";
    self::$error = array(
      'status' => false,
      'code' => '0',
      'message' => ''
    );
    try {
      $this->createSoapConection();
    } catch (Exception $e) {
      $this->setErrors($e->getMessage(), $e->getCode());
    }
  }

  protected function setErrors($message, $code){
      self::$error = array(
        'status' => true,
        'code' => $code,
        'message' => $message
      );
  }

  protected static function initErrors(){
      self::$error = array(
        'status' => false,
        'code' => '0',
        'message' => ''
      );
  }


  // INIT CURL WITH NUSOAP
  protected function createSoapConection(){

    try {
        self::$client = new \nusoap_client(self::$wsdl, true);
        self::$client->setCurlOption(CURLOPT_SSL_VERIFYPEER, false);
        self::$client->setCurlOption(CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_0);
        self::$client->setCurlOption(CURLOPT_RETURNTRANSFER, true);
        self::$client->setCurlOption(CURLOPT_VERBOSE, 1);
        // self::$client->setCurlOption(CURLOPT_PORT, 443);
        self::$client->setCurlOption(CURLOPT_CONNECTTIMEOUT, 150);
        self::$client->setCurlOption(CURLOPT_FRESH_CONNECT, 1);
        // self::$client->setCurlOption(CURLOPT_SSL_VERIFYHOST, false);
        // self::$client->setCurlOption(CURLOPT_STDERR, fopen('log.log', 'a+'));
        //DECODING UTF-8
        // self::$client->soap_defencoding = 'ISO-8859-1';
        self::$client->soap_defencoding = 'UTF-8';
        self::$client->decode_utf8 = false;
        //TIME OUT
        self::$client->timeout = 0;
        self::$client->response_timeout = 400;
      } catch (exception $e) {
        throw new exception($e->getMessage(), 3);
      }
      $error = self::$client->getError();
      if ($error) {
        throw new exception($error, 3);
      }
  }

  //CALL SERVICES IN WSDL
  public static function callFunction($url, $parameters) {

    self::initErrors();

    // Log::debug($parameters);
    $response = self::$client->call($url, $parameters);
    $error = self::$client->getError();
    // dd( $response);
    if ($error) {
        // throw new Exception($error, 3);
      // dd($error);
      // abort(500, $error);
    }
    // self::$response = reset($response);
    // self::statusResponse();
    // self::responseContent();
    // Log::debug(self::getLastRequest());


    $d_init = date('Y-m-d H:i:s');
    $date_file = date("m-Y");
    error_log("Spectrum - ".$url."-". $d_init . "\n", 3, "lead".$date_file.".log");
    error_log(self::getLastRequest(), 3, "lead".$date_file.".log");
    error_log(self::getLastResponse(), 3, "lead".$date_file.".log");

    return $response;
  }

  public static function getLastRequest(){
    $text = "";
    $text .=  "\n<h2>Request</h2>\n";
    $text .=  "" . htmlspecialchars(self::$client->request, ENT_QUOTES) . "\n";
    return $text;
    die();
  }

  public static function getLastResponse(){
    $text = "";
    $text .=  "\n<h2>Response</h2>\n";
    $text .=  "" . htmlspecialchars(self::$client->response, ENT_QUOTES) . "\n\n";

    // Display the debug messages
    // echo '<h2>Debug</h2>';
    // echo '<pre>' . htmlspecialchars(self::$client->debug_str, ENT_QUOTES) . '</pre>';
    return $text;
    die();
  }

  public static function dump(){
    return self::$client->getDebug();
  }

}
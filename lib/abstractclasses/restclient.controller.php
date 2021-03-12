<?php
// Include autoloader.
require __DIR__ . '/vendor/autoload.php';

use Openprovider\Api\Rest\Client\Auth\Model\AuthLoginRequest;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Client;
use GuzzleHttp\Client as HttpClient;

 class RestClientController{

    public function GetClientRest( ){
      $httpClient = new HttpClient();
     // Create new configuration.
      $configuration = new Configuration();
            // Build api client for using created client & configuration.
     $client = new Client($httpClient, $configuration);
    
        // Retrieve token for further using.
    //$loginResult = $client->getAuthModule()->getAuthApi()->login(
    //    new AuthLoginRequest([
    //        'username' => $username,
     //       'password' => $password,
    //    ])
    
   
      return $httpClient;
    }

 }


?>
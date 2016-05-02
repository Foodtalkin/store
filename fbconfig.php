<?php
session_start();
if(!isset($_SESSION['source']) || ($_SESSION['target']== null)){
	header("Location: views/store.php");
}
// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '567830766693152','1a65bcf7762bec777087a127d26d6295' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://store.foodtalk.in/fbconfig.php' );


try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
      $gender = $graphObject->getProperty('gender');
      
      if($femail == null){
        $scope = array('email');
        $loginUrl = $helper->getReRequestUrl($scope);
        header("Location: ".$loginUrl);
      }else{
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;
      $_SESSION['FULLNAME'] = $fbfullname;
      $_SESSION['EMAIL'] =  $femail;
      $_SESSION['GENDER'] =  $gender;
      //checking if user exist or not
      
      //post rquest
      $url = "http://api.foodtalk.in/user";    
      $dataarray = array('facebook_id' => $_SESSION['FBID'],'name' => $_SESSION['FULLNAME'],'email' => $_SESSION['EMAIL'],'gender' => $_SESSION['GENDER']);
      $data_string = json_encode($dataarray);
                                                                                
                                                                                                                           
      $ch = curl_init($url);                                                                      
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
          'Content-Type: application/json',                                                                                
          'Content-Length: ' . strlen($data_string))                                                                       
      );                                                                                                                   
                                                                                                                           
      $result = curl_exec($ch);
      $userdata = json_decode($result);
      $userdata = (array) $userdata;
      $_SESSION['USER'] =  $userdata;
      curl_close($ch);
      function url_exists($ur) {
          if($_SESSION['type'] == "contest"){
            $url = "http://api.foodtalk.in/contest/".$ur;
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            curl_close($ch);
              $response = json_decode($response);
              $response = (array) $response;
              return $response['message'];
          }else{
            $url = "http://api.foodtalk.in/event/".$ur;
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($ch);
            curl_close($ch);
              $response = json_decode($response);
              $response = (array) $response;
              return $response['message'];
          }
        }
        
        $target = $_SESSION['target'];
        $url1= "views/".$target.".php";
        $res = url_exists($target);

        if($res == "Success"){
          header("location: ".$url1);
        }else{
          header('location: views/store.php');
        }
 
    }
} else {

	$scope = array('email');
  $loginUrl = $helper->getLoginUrl($scope);
  header("Location: ".$loginUrl);
}

?>
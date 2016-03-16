<?php 
	//Main Index File for FTStore
	//Redirect on the basis of the parameters 
	//simply get a login and send to the store in case no parameter

	session_start();
	include('functions.php');
	
	$SOURCE = null;
	$TARGET = null;
	$FBID = null;
	$NEW = false;
	$USER = null;
	$TYPE = null;
	$check = null;

	//If no parameters were passed
	if(empty($_GET)) {
		header('location: views/store.php');
	}

	if(isset($_GET['source'])){
		$SOURCE = ($_GET['source'] == '' ? null : $_GET['source']);
	}else{
		$SOURCE = null;
	}
	
	if(isset($_GET['target'])){
		$TARGET = ($_GET['target'] == '' ? null : $_GET['target']);
	}else{
		$TARGET = null;
	}

	if(isset($_GET['fbid'])){
		$FBID = ($_GET['fbid'] == '' ? null : $_GET['fbid']);
	}else{
		$FBID = null;
	}

	if(isset($_GET['uname'])){
		$USER = ($_GET['uname'] == '' ? null : $_GET['uname']);
	}else{
		$USER = null;
	}

	if(isset($_GET['type'])){
		$TYPE = ($_GET['type'] == '' ? null : $_GET['type']);
	}else{
		$TYPE = null;
	}
	if($TYPE =="event"){
		$check = "event/upcomming";
	}elseif ($TYPE=="contest") {
		$check = "contest/ongoing";
	}else{
		$check = NULL;
	}
	//SET SESSION VARIABLES
	$_SESSION['source'] = $SOURCE;
	$_SESSION['target'] = $TARGET;
	$_SESSION['fbid'] = $FBID;
	$_SESSION['username'] = $USER;
	$_SESSION['type'] = $TYPE;
	$_SESSION['check'] = $check;
	// If source is app and no fbid is provided
	if($SOURCE == 'APP'){
		if($FBID && $USER){
			$url = "http://api.foodtalkindia.com/user";    
		      $dataarray = array('facebook_id' => $FBID,'name' => $_SESSION['username']);
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
		      //var_dump($result);
		      $userdata = json_decode($result);
		      $userdata = (array) $userdata;
		      $_SESSION['USER'] =  $userdata;
		      //var_dump($_SESSION['USER']);
		      curl_close($ch);
		      function url_exists($ur) {
		          if($TYPE == "contest"){
		            $url = "http://api.foodtalkindia.com/contest/".$ur;
		            $ch = curl_init();
		            curl_setopt($ch,CURLOPT_URL,$url);
		            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		            $response = curl_exec($ch);
		            curl_close($ch);
		              $response = json_decode($response);
		              $response = (array) $response;
		              return $response['message'];
		          }else{
		            $url = "http://api.foodtalkindia.com/event/".$ur;
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
		        //var_dump($res);
		        if($res == "Success"){
		          header("location: ".$url1);
		        }else{
		          header("location: ".$url1);
		          //header('location: views/store.php');
		        }
		}else{
			//app user without fbid !!!
			header('location: views/store.php');
		}
	}else{
		header('location: login.php');
	}
?>
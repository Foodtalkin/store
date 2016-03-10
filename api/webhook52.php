
<?php
$filename = "newfile.txt";
foreach($_POST as $key => $value)
{
   file_put_contents($filename, "$key: $value\n", FILE_APPEND);
}
$source;
$user_id;
$nv;
$guest;
file_put_contents($filename, "----------\n", FILE_APPEND);
foreach ($_POST as $data => $val) {
	if($data == 'custom_fields'){
		$custom = json_decode($val, true);
		$custom = (array) $custom;

		$source = (array) $custom['Field_74329'];
		$source = $source['value'];

		
		$user_id = (array) $custom['Field_70626'];
		$user_id = $user_id['value'];

		$nv = (array) $custom['Field_27955'];
		$nv = $nv['value'];

		$guest = (array) $custom['Field_13730'];
		$guest = $guest['value'];

	}
}
file_put_contents($filename, $source."\n", FILE_APPEND);
	include('functions.php');
	$con = connect($config);
	if(!$con) die('No database connection available');
	$query = "INSERT INTO insta_payment (user_id, offer_slug, currency, mac, buyer_phone, custom_fields, status, offer_title, payment_id, fees, unit_price, buyer, variants, quantity, buyer_name, amount)
								 VALUES (:user_id, :offer_slug, :currency, :mac, :buyer_phone, :custom_fields, :status, :offer_title, :payment_id, :fees, :unit_price, :buyer, :variants, :quantity,
								 		 :buyer_name, :amount)";
	$params = array(':user_id' => $user_id, ':offer_slug' => $_POST['offer_slug'], ':currency' => $_POST['currency'], ':mac' => $_POST['mac'], ':buyer_phone' =>  $_POST['buyer_phone'],
					 ':custom_fields' => $source, ':status' => $_POST['status'], ':offer_title' => $_POST['offer_title'], ':payment_id' => $_POST['payment_id'],
					  ':fees' => $_POST['fees'], ':unit_price' => $_POST['unit_price'], ':buyer' => $_POST['buyer'], ':variants' => $_POST['variants'], ':quantity' => $_POST['quantity'],
					   ':buyer_name' => $_POST['buyer_name'], ':amount' => $_POST['amount']);
	$result = insertto($query, $params, $con);

	$query1 = "INSERT INTO response ( event_id, user_id, source, response, amount) VALUES ( :event_id, :user_id, :source, :response, :amount)";
              $bind1 = array('event_id'=> 5,
                  'user_id'=> $user_id,
                  'source'=> $source,
                  'response'=> $guest,
                  'amount'=> $_POST['amount']);
                  $result1 = insertto($query1, $bind1, $con);

		$query2 = "UPDATE `user` SET `food_type`=:food_type WHERE `user_id`=".$_SESSION['FBID'];
		$bind2 = array(
        'food_type'=> $nv); 
        $result2 = queryu($query2, $bind2, $con);

	
?>
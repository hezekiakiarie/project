<?php
require_once('configii.php');
?>
<?php

if(isset($_POST)){

	$name 		= $_POST['name'];
	$address 		= $_POST['address'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$service		= $_POST['service'];

		$sql = "INSERT INTO request_customer (name, address, email, phonenumber, service ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $address, $email, $phonenumber, $service]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
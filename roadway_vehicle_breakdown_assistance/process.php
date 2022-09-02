<?php
require_once('configii.php');
?>
<?php

if(isset($_POST)){

	$name 		= $_POST['name'];
	$address 		= $_POST['address'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$gender		= $_POST['gender'];

		$sql = "INSERT INTO request_mechanic (name, address, email, phonenumber, gender ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $address, $email, $phonenumber, $gender]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
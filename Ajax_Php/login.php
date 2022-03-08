<?php
	
      include('../include/connection.php');



	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$sql = "select * from users WHERE email='$email' AND password='$pass'";

	if (mysqli_query($con, $sql)) {
		// echo json_encode(array("statusCode"=>200));
		echo 'loginCorrect';
	} 
	else {
		// echo json_encode(array("statusCode"=>201));
		// echo "Error: " . $sql . "" . mysqli_error($conn);
	}

	mysqli_close($con);
?>
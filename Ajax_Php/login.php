<?php
	
	include('../include/connection.php');
	session_start();  

	$status = $_POST['status'];

	if($status === "userCheck")
	{	
			$email=$_POST['email'];
			$pass=$_POST['password'];
			
			$sql = "select * from users WHERE email='$email' AND password='$pass'";

			if (mysqli_query($con, $sql)) {
				// echo json_encode(array("statusCode"=>200));
				echo $email;
			} 
			else {
				// echo json_encode(array("statusCode"=>201));
				// echo "Error: " . $sql . "" . mysqli_error($conn);
				echo 'loginFailed';
			}
	}
	

	if($status === "doLogin")
	{	
			// $email=$_POST['email'];
			$email=$_POST['email'];

			$sql = "select * from users WHERE email='$email'";
			$query_run = mysqli_query($con, $sql);
			if ($query_run) {
				// echo json_encode(array("statusCode"=>200));
						$row = mysqli_fetch_assoc($query_run);

						$_SESSION['userid']= $row['userID'];
						$_SESSION['name']= $row['name'];
						$_SESSION['email']= $row['email'];
						$_SESSION['sex']= $row['gender'];
						$_SESSION['contact']= $row['contact'];
						$_SESSION['dp']= $row['dp'];
						$_SESSION['age']= $row['age_group'];
						$_SESSION['purpose']= $row['perpose'];


				echo 'Loggedin';

			} 
			else {
				// echo json_encode(array("statusCode"=>201));
				// echo "Error: " . $sql . "" . mysqli_error($conn);
				echo 'loginFailed';
			}
	}
	


	mysqli_close($con);
?>
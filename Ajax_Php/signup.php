<?php
	
    include('../include/connection.php');
    session_start();

    $name= $_POST['name'];
    $sex= $_POST['sex'];
    $purpose= $_POST['purpose'];
    $age= $_POST['age'];
    $contact= $_POST['contact'];
	$email= $_POST['email'];
	$pass= $_POST['password'];
    $dp = "";
	
	$sql = "select * from users WHERE email='$email' AND password='$pass'";

	if (mysqli_num_rows(mysqli_query($con, $sql))>0) {
		echo "UserExist";
	} 
	else {
		
                    $sql2 = "INSERT INTO `users`( `name`, `gender`, `email`, `contact`, `age_group`, `dp`, `perpose`,`password`)
                                         VALUES ('$name','$sex','$email','$contact','$age','$dp','$purpose','$pass')";

                    if (mysqli_query($con, $sql2)) {
                        // echo json_encode(array("statusCode"=>200));
                         echo 'userSaved';
                    } 
                    else {
                        // echo json_encode(array("statusCode"=>201));
                        // echo "Error: " . $sql . "" . mysqli_error($conn);
                        echo 'userNOtSaved';
                    }

	}

	mysqli_close($con);
?>
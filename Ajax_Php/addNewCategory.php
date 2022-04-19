<?php	
    include('../include/connection.php');
    // session_start();
    $category= $_POST['category'];
    $userid= $_POST['userid'];
    
	$sql = "select * from category WHERE userid='$userid' AND category='$category'";

	if (mysqli_num_rows(mysqli_query($con, $sql))>0) {
		    echo "Same Category Your Are Adding";
	} 
	else
    {		
           $sql2 = "INSERT INTO `category`( `category`, `userid`) VALUES ('$category','$userid')";
    

            if (mysqli_query($con, $sql2)) {
                // echo json_encode(array("statusCode"=>200));
                echo $category." Category Added";                         
            } 
            else {
                // echo json_encode(array("statusCode"=>201));
                // echo "Error: " . $sql . "" . mysqli_error($conn);
                echo 'Failed to Add';
            }
    }
	

	mysqli_close($con);
?>
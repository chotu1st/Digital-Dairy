<?php
	
    include('../include/connection.php');


    $noteDate= $_POST['noteDate'];
    $category= $_POST['category'];
    $noteTitle= $_POST['noteTitle'];
    $noteText= $_POST['noteText']; 
    $userid= $_POST['userid'];   
	
                    $query = "SELECT id FROM `category` WHERE userid = '$userid' AND category = '$category' ";
                    $result = mysqli_query($con, $query);

                    $row = mysqli_fetch_array($result);

                    $categoryID = $row['id'];

		
                    $sql2 = "INSERT INTO `notes`( `userID`, `noteTitle`, `note`, `categoryID`)
                             VALUES ('$userid','$noteTitle','$noteText','$categoryID')";

                    if (mysqli_query($con, $sql2) && (mysqli_num_rows($result)>0)) {
                        // echo json_encode(array("statusCode"=>200));
                                              
                            echo 'noteSaved';
                                              
                    } 
                    else {
                        // echo json_encode(array("statusCode"=>201));
                        // echo "Error: " . $sql . "" . mysqli_error($conn);
                        echo 'noteNOtSaved';
                    }

	

	mysqli_close($con);
?>
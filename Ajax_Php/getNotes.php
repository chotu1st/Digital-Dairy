<?php
	
	include('../include/connection.php');
		
			$userid=$_GET['userid'];
            $status=$_GET['status'];		

            if($status==1){
                $sql = "SELECT *FROM notes JOIN category ON notes.categoryID=category.id WHERE notes.userID = '$userid' ORDER BY noteID DESC ;";
            }
            else{
                $sql = "SELECT *FROM notes JOIN category ON notes.categoryID=category.id WHERE notes.userID = '$userid' ORDER BY noteID DESC LIMIT $status;";
            }
					
            $sql_Run = mysqli_query($con, $sql);

			if ($sql_Run) {
				// echo json_encode(array("statusCode"=>200));
                
				while($row = mysqli_fetch_array($sql_Run)){
                    ?>

            <tr>
                <td><?php echo $row["noteTitle"]; ?></td>
                <td><?php echo $row["note"]; ?></td>
                <td><?php echo $row["category"]; ?></td>
                <td>
                    <?php 
                                                    $date =  date_create($row["timeStamp"]);
                                                    echo date_format($date,"d M Y - H:i");
                                                ?>
                    <!-- 08 Mar 2022 07:05 PM -->
                </td>
            </tr>

<?php 
                  }    
                  if(mysqli_num_rows($sql_Run)==0){
                    echo '<tr> <td colspan="4" style="color:red; text-align:center"> No Note Saved yet </td> </tr>';
                } 
                                      
                }
                              
			
			else {
				// echo json_encode(array("statusCode"=>201));
				// echo "Error: " . $sql . "" . mysqli_error($conn);
				echo 'No Category';
			}
	

	


	mysqli_close($con);
?>
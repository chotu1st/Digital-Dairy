<?php
	
	include('../include/connection.php');
		
			$userid=$_GET['userid'];		
			
			$sql = "SELECT DISTINCT category from `category` WHERE userid ='$userid'";
            $sql_Run = mysqli_query($con, $sql);

			if ($sql_Run) {
				// echo json_encode(array("statusCode"=>200));
                 echo '<option disabled selected>What you want to write ☻</option>';
				while($row = mysqli_fetch_array($sql_Run)){
                    ?>
                        <option value="<?php echo $row['category']; ?>"><?php echo $row["category"]; ?></option>
                <?php 
                }
			} 
			else {
				// echo json_encode(array("statusCode"=>201));
				// echo "Error: " . $sql . "" . mysqli_error($conn);
				echo 'No Category';
			}
	

	


	mysqli_close($con);
?>
<?php
    include('include/connection.php');   


 if (isset($_POST['register'])) 


{
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $purpose =  $_POST['purpose'];
    $sex =  $_POST['sex'];
    $contact =  $_POST['contact'];
    $age =  $_POST['age'];

             $query = "SELECT * FROM `users` WHERE name ='$name' AND email='$email' AND contact='$contact' ";
             $query_run = mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {    
                    $_SESSION['status'] = "Record Already Saved !!!"; 
                                              
                    header('Location: start_exam.php');
                    
                } 
}





?>
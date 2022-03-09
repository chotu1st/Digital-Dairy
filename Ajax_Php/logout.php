<?php
              include('../include/security.php');
              if(isset($_POST['logout']))
				{
					session_destroy();

					unset($_SESSION['customer']);
                    unset($_SESSION['userid']);
                    unset($_SESSION['name']);
                    unset($_SESSION['email']);
                    unset($_SESSION['sex']);
                    unset($_SESSION['contact']);
                    unset($_SESSION['dp']);
                    unset($_SESSION['age']);
                    unset($_SESSION['purpose']);

					header('Location: ../index.php');
				}
?>
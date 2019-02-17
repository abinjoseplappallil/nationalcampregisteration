<?php
require('conn.php');
session_start();

if (isset($_POST['submit'])){

	$email = $_POST["mailid"];

	$password = $_POST["password"];

        $query = "SELECT * FROM registration WHERE mail='".$email."'and pswd='".$password."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;

	    //header("Location: userhome.php");
				echo '<script>
							swal({
								
								title: "Validating!!",
								text: "Verify Your Login Credential.",
								text: "Wait a Moment Redirecting.....",
								type: "warning",
								timer: 2000
								},
								function() 
									{
										window.location = "userhome.php";
									}
								);
						</script>';
        }
		else
		{
			echo '<script>
							swal({
								
								title: "Invalid Credential!",
								text: "Verify Your Login Credential.",
								text: "Wait a Moment Redirecting.....",
								type: "warning",
								timer: 2000
								},
								function() 
									{
										window.location = "login.php";
									}
								);
						</script>';
		}
	}
	
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="floating-labels.css" rel="stylesheet">
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
  </head>
  <body>
<?php
include"conn.php";
$usr=$_POST['mailid'];
$psw=$_POST['password'];
$qry="select * from registration where mail='$usr' and pswd='$psw'";
$res=mysqli_query($conn,$qry);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_array($res);
echo $row['2'];
session_start();

$_SESSION['email'] = $usr;
if($usr=="admin@xbnyc.in")
{
    ?>
<script>swal({
								
								title: "Validating!!",
								text: "Verify Your Login Credential.",
								text: "Wait a Moment Redirecting.....",
								type: "warning",
								timer: 2000
								},
								function() 
									{
										window.location = "adminpage.php";
									}
                                );
                                </script>
<?php

}
 else
 {
    
?>
<script>swal({
								
								title: "Validating!!",
								text: "Verify Your Login Credential.",
								text: "Wait a Moment Redirecting.....",
								type: "warning",
								timer: 2000
								},
								function() 
									{
										window.location = "userpg.php";
									}
                                );
                                </script>
<?php

 }
}
else
{
?>
<script>swal({
								
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
</script>
<?php
}
?>
</body>
</html>
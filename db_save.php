<!Doctype html>
<html>
<head>
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
</head>
<body>
<?php
include ('conn.php');
if(isset($_POST['submit']))
{	
	$name = $_POST['Rname'];
	$college = $_POST['cname'];
	$mobile=$_POST['pno'];
	$email = $_POST['email'];
	
	$gend = $_POST['gend'];
	$age = $_POST['age'];
    $city = $_POST['city'];
	$state = $_POST['state'];
	$amt = $_POST['amt'];
	$pswd= $_POST['pwd'];
	
	$tno= $_POST['tno'];
	$remark= $_POST['remark'];
	
	$query2="select mail from registration where mail='$email'";
	$sql2=mysqli_query($conn,$query2);
	$rowcount=mysqli_num_rows($sql2);
	if($rowcount!=0)
	{
		echo '<script>
								setTimeout(function() {
									swal({
										title: "Email Already Exist",
										type: "error"	
									}, function() {
										window.location = "registeration.php";
									});
								}, 1);
							</script>';
	}
	else
	{
	$sql=(" insert into registration(name,college,phone,mail,age,gender,city,state,pswd,amount,tno,remark) values ('".$name."','".$college."',".$mobile.",'".$email."',".$age.",'".$gend."','".$city."','".$state."','".$pswd."',".$amt.",".$tno.",'".$remark."')");
	mysqli_query($conn,$sql);
	
		echo '<script>
								setTimeout(function() {
									swal({
										title: "Registration Success!",
										type: "success"	
									}, function() {
										window.location = "login.php";
									});
								}, 1);
							</script>';

	
	
	
    }	
}
?>

</body>
</html>
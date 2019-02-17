<?php   include ('auth.php');?>

<?php
						include ('conn.php');
						$sel = "SELECT * FROM registration WHERE mail = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc())
						{
			?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
<style>
body  {
 
    background-image: url("land.jpg") ; 

background-size: 1350px;
  background-repeat: no-repeat;
background-color:#f0f5f5;
}
div2au
{
font-family: 'Open Sans';font-size:50px;
font-weight: bold;
}
div3
{
    background-image: url("id.jpg");
}

#id1
{

font-family: 'Sofia';
font-size:50px;
  
}
#p11
{
color: #343434;
	font-weight: normal;
	font-family: 'Ultra', sans-serif;   
	font-size: 36px;
	line-height: 42px;
	text-transform: uppercase;
	text-shadow: 0 2px white, 0 3px #777;
}
.registerbn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
margin: auto;
    opacity: 0.9;
}
.registerbtn:hover {
    opacity: 1;
}
input[type=email] {
    width: 50;
    padding: 12px 50px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
background: transparent;
}
div4
{
    background-image: url("id.JPG");
}

fieldset
{
margin-right:30px;
margin-left:30px;
border-color:#8B0000;
}
</style>
 
</head>
<body>
<?php

include ('conn.php');

?>
<div class="row">
  <div class="col-sm-6"></div>
   <div class="col-sm-4"></div>
  <div class="col-sm-2"><div1 class="container">
<a href="logout.php" class="btn btn-default btn-md">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div1></div>
 
</div>
</br><div2>  

<h1 id="id1" align=center > xb national youth conferance 2017 </h1>

</div2>
</br>

<div class="row">
<div class="col-sm-1"> </div>
  <div class="col-sm-4" >
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="id2.jpg" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title" style="text-align: center;">Participant Info</h2>
    <p class="text-info">Name :
     <?php
echo $rws['name'];
   


?>
</br>
 </br> College:<?php
 echo $rws['college'];

?> </p>

    
  </div>
</div>
  </div>
	<div class="col-sm-7">
  
<div class="container">
	<fieldset>
</br> <h3> congragulations!!! </br>
  <h3>
  Your Registeration is succesful.</br> you can collect your conferance id card from the</br> camp counter by showing this . </br>for any assistance for the travelling and others, contact us . </br>wish u a safe journey to kuttikkanam
 </h3>
 	</fieldset>
 </div>
  
</div>
</br>	
</br>

</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</body>
</html>
<?php } ?>
 
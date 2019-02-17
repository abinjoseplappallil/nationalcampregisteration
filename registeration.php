<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
<style>
body  {
 
    background-image: url("land.jpg") ; 

background-size: 1350px;
  background-repeat: no-repeat;
background-color:#f0f5f5;
   
}
div
{
font-family: 'Open Sans';font-size: 22px;
font-weight: bold;
}
#id1
{

font-family: 'Sofia';font-size:50px;

  
}
fieldset { 
    display: block;
    margin-left: 2px;
    margin-right: 2px;
    padding-top: 0.35em;
    padding-bottom: 0.625em;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 2px groove (internal value);
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
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
margin: auto;
    opacity: 0.9;
}
.registerbtn:hover {
    opacity: 1;
}
input[type=text] {
    width: 50;
    padding: 12px 50px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
background: transparent;
}
input[type=password] {
    width: 50;
    padding: 12px 50px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
background: transparent;
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
input[type=number] {
    width: 50;
    padding: 12px 50px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
background: transparent;
}
</style>
<script>
function myFunction()
{
  var gen2=document.forms["form1"]["pwd"].value;
			var gen1=document.forms["form1"]["cpwd"].value;
			if (gen1!=gen2)
			{
			swal("password mismatch");
			document.getelementbyid("pwd ").focus();
			return false
			}
} 
function myFunction2()
{
  var gen=document.forms["form1"]["gend"].value;
			
			if (!(gen=="female"|| gen=="male" ))
			{
        
			swal("Enter the valid  gender male or female");
		  document.forms["form1"]["gend"].value;	
			}
}
function myFunction3()
{
  var nam=document.forms["form1"]["Rname"].value;
			var y=/^[a-z]/i;
			if (!y.test(nam)|| nam=="")
			{
			swal("Enter the valid name");
			return false;
			}
  
}
function myFunction4()
{
  
  var cnam=document.forms["form1"]["cname"].value;
			var y=/^[a-z]/i;
			if (!y.test(cnam)|| cnam=="")
			{
			swal("Enter the valid  COLLEGE name");
			return false;
			}
}
function validate(){


		
		
			var gen2=document.forms["form1"]["pwd"].value;
			var gen1=document.forms["form1"]["cpwd"].value;
			if (gen1!=gen2)
			{
			alert("password mismatch");
			document.getelementbyid("pwd ").focus();
			return false
			}
		
		
}

</script>
</head>
<body>
</br>
</br>
</br>  
<h1 id="id1" align=center > xb national youth conferance 2017 </h1>

<p1 id="p11"  align=center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REGISTER NOW </p1>
</br>
</br>
</br>
<div align=center>
<form name="form1" onsubmit="return validate()" method="post" action ="db_save.php"> 
<fieldset>
  <legend>Personal details </legend>
<table >
  <tr>
 <th><label for="name">Name</label></th>
    <th>
  <input type="text" id="fname" name="Rname"  onfocusout="myFunction3()"></th>
    <th>
  <label for="lname">college </label></th>
    <th>
  <input type="text" id="lname" name="cname" onfocusout="myFunction4()"></th>
 
</tr>
  <tr>
 <th><label for="name">Ph No</label></th>
    <th>
  <input type="number" id="fname" name="pno" pattern=".{10,10}" title="10 digit phone number should be entered" required ></th>
    <th>
  <label for="lname">Mail id </label></th>
    <th>
  <input type="email" id="lname" name="email" required  ></th>
 
</tr>
  <tr>
 <th><label for="name">Gender</label></th>
    <th>
  <input type="text" id="gend" name="gend" onfocusout="myFunction2()"></th>
    <th>
  <label for="lname">Age </label></th>
    <th>
  <input type="number" id="age" name="age" required ></th>
 
</tr>
  <tr>
 <th><label for="name">city</label></th>
    <th>
  <input type="text" id="fname" name="city" required ></th>
    <th>
  <label for="lname">state </label></th>
    <th>
  <input type="text" id="lname" name="state" required ></th>
 
</tr>
<tr>
<th>
  <label for="lname"> set password </label></th>
     
    <th>
	</br>
  <input type="password"  id="pwd" name="pwd"  pattern=".{6,}" title="Six or more characters" ></th> 
 <th>
  <label for="lname"> confirm password </label></th>
     
    <th>
	</br>
  <input type="password" id="cpwd" name="cpwd" onfocusout="myFunction()" ></th> 
</tr>
 </table>

  </fieldset>



</br>

</br>
<fieldset>
  <legend> payment details </legend>
<table >
  <tr>
 <th><label for="name">amount</label></th>
    <th>
  <input type="number" id="fname" name="amt" required ></th>
    <th>
  <label for="lname"></label></th>
  <td rowspan="4" ><img src="upi.png"  style="width:300px;height:300px;"></td> 
 
</tr>
  <tr>
 <th><label for="name">UPI/NEFT/IMPS no</label></th>
    
  
    <th>
  <input type="number" id="upino" name="tno" required ></th>
 
</tr>
  <tr>
 <th><label for="name">Remarks</label></th>
    <th>
  <input type="text" id="fname" name="remark"></th>
  
 
</tr>
 <tr>
 <th colspan="2"><label for="name">scan the qr code and pay or NEFT/IMPS to Bank Name: SBI Peermade, Account Name: Principal Marian College Kuttikkanam
</br>IFS Code: SBIN0070109 Account Number: 57061268943
</br>
*Name of the participating College with place must be entered when transferring the amount.
</label></th>
    
  
   
 
</tr> 
 </table>

  </fieldset>
</br>
</br>
<div1 class="container">
  <button type="submit" class="registerbtn"  value="submit" name="submit" >Register</button>
</div1>
</br> <a href="login.html">Already Registered LOG IN NOW</a>
  </div> 
</form>
<table >
 
</ table>
</div>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>
</br></br></br>


</body>
</html>

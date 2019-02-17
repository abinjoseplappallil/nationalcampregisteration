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
div2
{
font-family: 'Open Sans';font-size:50px;
font-weight: bold;
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


</style>
 
</head>
<body>
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
<p1 id="p11"  align=center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; participant details </p1>
        

<?php
include ('auth.php');
include ('conn.php');
$result = mysqli_query($conn,"SELECT * FROM registration WHERE NOT mail='admin@xbnyc.in' ");
?>
</div2>
</br>
<  <button class="btn btn-primary hidden-print" 
            id="btPrint" onclick="createPDF()" /><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
<div id="tab">
<table  class="table table-striped table-bordered table-sm" cellspacing="0" width="80%">
  <thead>
    <tr>
      <th class="th-sm">Name

      </th>
      <th class="th-sm">college 
      
      </th>
      <th class="th-sm">	phone
      </th>
      <th class="th-sm">mail
      </th>
      <th class="th-sm">Age

      </th>
      <th class="th-sm">gender

      </th>
      <th class="th-sm">city
      </th>
      <th class="th-sm">state
      </th>
      <th class="th-sm">amount paid
      </th>
      <th class="th-sm">transaction no
      </th>
      <th class="th-sm">remarks
        

      </th>
    </tr>
  </thead>
  <tbody>
    <tr>";
<?php

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['mail'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['tno'] . "</td>";
echo "<td>" . $row['remark'] . "</td>";
echo "</tr>"; 
}
echo "</tbody>
  
</table> ";

mysqli_close($conn);
?>

</div>

<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>
	
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
 
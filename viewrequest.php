<?php
session_start();
?>
<html>
<link rel="stylesheet" href="formstyle.css">
<style>
body{
	margin-left: 0px;
	margin-top: 0px;
}
.rl{
	color: blue;
	text-align: center;
	margin-top:0px;
	font-size: 30px;
}
header{
	height:25%;
	font-size: 40px;
	text-align: center;
	color: white;
}
form {
   border: 3px solid #f1f1f1;
	width: 250px;
	height: 550px;
	<!--background: rgba(0,0,0,0.5);-->
	margin-top:1px;
	margin-left:0px;
}

button {
    background-color:black ;
    color: white;
    padding: 14px 20px;
    margin-left: 09px;
	margin-top: 10px;
    border: none;
    cursor: pointer;
    width: 90%;
	}
	
	nav 
	{
    font-size:20;
    max-width: 200px;
	height: 900px;
    margin-left: 0px;
	margin-top: 1px;
    padding: 1em;
	background: rgba(0,0,0,0.5);
	}
	.con{
		margin-top: -840px;
		margin-left: 450px;
		border:1px solid black;
		
	}

</style>
<body>
<?php
include("header.php");
?>
<div class = "head">
<header style="background-color: rgb(60, 60, 60)">
<br><center><label>Welcome to Online Complaint Mangement System</label><center><br>
</header>
</div>

<nav>
    <a href="RequestRegister.php"><button type="submit">Register a Request</button>
	<a href="RegisterDemand.html"><button type="submit">Register a Demand</button></a>
    <a href="viewrequest.php"><button type="submit">View a Request</button>
	<button type="submit">View a Demands</button>
</nav>
<div class="con" style="overflow-x:auto;">
  <table>
    <tr>
	  <th>loginid</th>
      <th>Department</th>
	  <th>Item name</th>
      <th>Date</th>
      <th>Complaint Description</th>
      <th>Area</th>
      <th>Location/Room no</th>
      <th>Contant no</th>
	 
	  
    </tr>
	 <tr>
<?php
include("database.php");
extract($_SESSION);
$result=mysql_query("select * from requests where loginid='$loginid'",$cn);

//echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['loginid'] . "</td><td>" . $row['category'] . "</td><td>" . $row['itemname'] . "</td><td>" . $row['date'] . "</td><td>" . $row['description'] . "</td><td>" . $row['area'] . "</td><td>" . $row['location'] . "</td><td>" . $row['contact'] . "</td> </tr>" ;  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection

?>

	<!--<td><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">OPEN</button></td>-->
	
  </tr>
	</table>
	</div>

</body>
</html>
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
	background: rgba(0,0,0,0.5);
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
    width: 30%;
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
	
	.buttons{
		margin-left: 280px;
		margin-top: 30px;
	}

	table {
    border-collapse: collapse;
    width: 100%;
	}

	th, td {
    text-align: left;
    padding: 8px;
	border: 1px solid #ddd;
	}

	.data{
	margin-top: 10px;
	
	}
	
	.container {
    padding: 16px;
}

   
span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 50%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: white;
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

label{
	margin-left:50px;
}
</style>
<body>
<?php
include("header2.php");
?>
<div class = "head">
<header style="background-color: rgb(60, 60, 60)">
<br><center><label>Welcome to Online Complaint Mangement System</label><center><br>
</header>
</div>

 <!--<div id="id01" class="modal">
     <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	<div class="rl">
	<label><b>Request Form</b></label>
	</div>
	<br><br>
	<div class="page">
    <div class="row">
      <div class="col-25">
	  <label for="fname">Request Id</label>
      </div>
      <div class="col-75">
      <label for="fname"></label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Complaint Category</label>
      </div>
      <div class="col-75">
         <label for="lname"></label>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="category">Item Name</label>
      </div>
      <div class="col-75">
        <label for="category"></label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Date</label>
      </div>
      <div class="col-75">
         <label for="country"></label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Complaint Description</label>
      </div>
      <div class="col-75">
        <label for="subject"></label>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Area</label>
      </div>
      <div class="col-75">
        <label for="subject"></label>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Location/Room no</label>
      </div>
      <div class="col-75">
         <label for="subject"></label>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Contact no</label>
      </div>
      <div class="col-75">
         <label for="subject"></label>
      </div>
    </div>
	<br>
    <div class="row" id="button2">
      <input type="button" value="approve" name="approve">
		<br><br>
      <input type="button" value="reject" name="reject">
		<br><br>
      <input type="button" value="Solved" name="Solved">
    </div>

</div>
 
      

    
  
</div>
-->
<div class = "buttons">
<a href="AcknowledgerReq.html"><button type="submit">View all Requests</button></a>
<a href="AcknowledgerDem.html"><button type="submit">View all Demands</button></a>
</div>
<div class="data" style="overflow-x:auto;">
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
$department = mysql_query("select dept from admin where login='$login'",$cn);
$temp = mysql_fetch_array($department);
$dept = $temp['dept'];
$result=mysql_query("select * from $dept",$cn);

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
	
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


	



</body>
</html>
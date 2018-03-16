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

</style>
<body>
<?php
include("header.php");
include("database.php");
if(isset($_POST["submit"]))
{
	$dept=$_POST['dept'];
	$category=$_POST['category'];
	$item=$_POST['item'];
	$date=$_POST['date'];
	$des=$_POST['des'];
	$area=$_POST['area'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
	$loginid=$_SESSION[loginid];
	$query="insert into $dept (loginid,category,itemname,date,description,area,location,contact) values('$loginid','$category','$item','$date','$des','$area','$loc','$contact')";
	$rs=mysql_query($query)or die("Could Not Perform the Query");
	$query="insert into requests (loginid,category,itemname,date,description,area,location,contact) values('$loginid','$category','$item','$date','$des','$area','$loc','$contact')";
	$rs=mysql_query($query)or die("Could Not Perform the Query");
	echo "record entered successfully";
}
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
<form method="POST" action="RequestRegister.php">
<div class="container">
	<div class="rl">
	<label><b>Register a new Request</b></label>
	</div>
	<br><br>
    <div class="row">
      <div class="col-25">
        <label for="fname">Select Department</label>
      </div>
      <div class="col-75">
        <select  name="dept">
          <option value="learning">learning</option>
          <option value="computer">computer</option>
          <option value="chemical">chemical</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Select Complaint Category</label>
      </div>
      <div class="col-75">
        <select name="category">
          <option value="housekeeping">House-Keeping</option>
          <option value="plumbing">Plumbing</option>
          <option value="electrical">Electrical</option>
        </select>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="category">Item Name</label>
      </div>
      <div class="col-75">
       <input type="text" id="Itemname" name="item" placeholder="Itemname"></text>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Select Date</label>
      </div>
      <div class="col-75">
        <input type="date" name="date">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Complaint Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="des" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Area</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="area" placeholder="Area"></text>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Location/Room no</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="loc" placeholder="location"></text>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Contact no</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="contact" placeholder="contact no"></text>
      </div>
    </div>
	<br>
    <div class="row">
      <input type="submit" value="submit" name="submit">
    </div>
	<br>
	<div class="row">
      <input type="button" value="Add new Request">
    </div>

</div>
</form>


</body>
</html>
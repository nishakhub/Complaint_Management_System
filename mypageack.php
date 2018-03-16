<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="Style.css">
<style type="text/css">
header
{
    color:white;	 
    height:125%;
    font-size:80px;
    width:max-width;
    background-repeat: no-repeat;
    opacity: 18;
	margin-top: 1px;
}


.services{
	background-color:#3c3c3c;
	width: max-width;
	height: 400px;
	margin-top: 1px;
	margin-left: 0px;
}


.flip3D{ width:240px; height:200px; margin:10px; float:left; }
.flip3D > .front{
	position:absolute;
	text-align: center;
	-webkit-transform: perspective( 600px ) rotateY( 0deg );
	transform: perspective( 600px ) rotateY( 0deg );
	background:black; width:150px; height:150px; border-radius: 100px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s linear 0s;
	transition: transform .5s linear 0s;
	color: white;
	font-family: "Times New Roman", Times, serif;
	
}
.flip3D > .back{
	position:absolute;
	-webkit-transform: perspective( 600px ) rotateY( 180deg );
	transform: perspective( 600px ) rotateY( 180deg );
	background: black ; width:150px; height:150px; border-radius: 100px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .5s linear 0s;
	transition: transform .5s linear 0s;
}
.flip3D:hover > .front{
	-webkit-transform: perspective( 600px ) rotateY( -180deg );
	transform: perspective( 600px ) rotateY( -180deg );
}
.flip3D:hover > .back{
	-webkit-transform: perspective( 600px ) rotateY( 0deg );
	transform: perspective( 600px ) rotateY( 0deg );
}
.flips{
	margin-left:280px;
	margin-top:100px;
	font-family: "Times New Roman", Times, serif;
}
.servicetext{
	color:white;
	
}
.buttonstart{
	width: 200px;
	height: 50px;
	background-color: #3c3c3c ;
	border-radius: 30px;
	font-size: 20px;
	margin-top: -40px;
}

body {
    font-family: "Lato", sans-serif;
	margin-top: 0px;
}

.sidenav {
	margin-top: 0px;
    height: 125%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	color: white;
	text-align: center;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
	margin-top: 2px;
}

.sidenav a:hover {
    color: #f1f1f1;
	margin-top: 0px;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
	margin-top: 0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .result > services{ height:1000px;}
}

#process{
	margin-top:20px;

}

form{
	width:1330px;
	margin-bottom:0px;
}

.about > p{
	margin-top:-250px;
	margin-left: 300px;
	width: 700px;
	color: white;
	font: 25px sans-serif;
}

.col{
    width: 45%;
    height:500px;
    float: left;
    text-align: center;
    padding:2rem;
}
.col1{ background:white;
		text-align:center;}
.col2{ background:white;}

.result{
	width:100%;
	float:left;
	padding:0rem;
	
	}
	
</style>
</head>
<body>
<?php
include("header2.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from admin where login='$login' and password='$psw'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$login;
	}
}
if (isset($_SESSION[login]))
{
	header('Location: http://localhost/Complaint_System/AcknowledgerReq.php');
   
		exit;
		

}
?>

<div id="side"> 
<header style="background-image: url(images/slider/1.jpg)">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#below">About</a>
  <a href="#">Services</a>
  <a href="#">Contact</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<br><br><center><label>Welcome to Online Complaint Mangement System</label><center><br><br>
<a href="#below"><button class="buttonstart">Start</button></a>
</header>
</div>
	</div>
<img src="home1.png" alt="info" style=" align:center;  width:1000px; height:500px;">
</div>
<a name="below">
<div class="content">
	<form method="POST">
<div class="container">

	<label><b><center>LOGIN HERE</center></b></label><br>
	<div align=\"right\"><strong><a href="mypageuser.php"> User login </a>&nbsp|&nbsp<a href="mypageack.php">Admin login</a></strong></div><br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

   <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
	</form>

  <div class="about" >
	
	<p>ABOUT US <br><br>Online Complaint Management System is a software developed for handling complaints , requests and demands in an organization.

We focuses on automating the handling of complaints from various departments in an organization

Our business is focused on getting you out of trouble and getting you paid for righteous. After all, that's what we do best.
With our team of professional Complaint Consultants we work for complaint resolution. We just don't post your complaints, we work to resolve your complaints.

 As a team of hardcore service industry, getting your complaint resolved is our prime objective.
	

Our Aim is to eliminate the paper work and improves the digitization in an organization to make it more effective.
</p>
	
  </div>
  
  </div>
</form>

  
 
<div class="col col1" style="text-align:left; text-size:15px;" >
       <h1><b> Work On 5 Step</b></h1>        
<p><b>1.&nbsp;You as a consumer Register your complaint with us.</p><br>

<p><b>2.&nbsp;We immediately Act upon it, understanding the case history.</p><br>
 

<p><b>3.&nbsp;We take-up your matter to the appelete authority of company(against which the complaint is filed).</p><br>

<p><b>4.&nbsp;We involve not for the sake of just solving the problem but to set a trend thereafter so that no one faces similar concerns.</p><br>
 
<p><b>5.&nbsp;The delivery depends on numerous factors. Your satisfaction & delight is what makes us run an extra mile. 
We keep you posted about every happening related to your complaint</p><br>

  </div>
  <div class="col col2">
  <img src="about.png" style="height:500px; width:500px;" />
  </div>
  </div>

</a>
<div class="result">

<div class="services">
<div class="servicetext">
<br><br><br><br><label><center><b>OUR COMPLAINTS</b></center></label>
</div>
<div class="flips">
<div class="flip3D">
  <div class="back"></div>
  <div class="front"><br><br><br><center><label>Complaint<br> Requests<label><center></div>
</div>
<div class="flip3D">
  <div class="back"></div>
  <div class="front"><br><br><br><center><label>Complaint<br> Resolved<label><center></div>
</div>
<div class="flip3D">
  <div class="back"></div>
  <div class="front"><br><br><br><center><label>Complaint<br>Under Progress<label><center></div>
</div>
</div>
</div>
</div >
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("side").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("side").style.marginLeft= "0";
}
</script>
</body>
</html>

 
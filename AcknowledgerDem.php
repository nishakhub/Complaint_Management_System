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
</style>
<body>
<div class = "head">
<header style="background-color: rgb(60, 60, 60)">
<br><center><label>Welcome to Online Complaint Mangement System</label><center><br>
</header>
</div>

<div class = "buttons">
<a href="AcknowledgerReq.html"><button type="submit">View all Requests</button></a>
<a href="AcknowledgerDem.html"><button type="submit">View all Requests</button></a>
</div>
<div class="data" style="overflow-x:auto;">
  <table>
    <tr>
      <th>Request No</th>
      <th>Department</th>
	  <th>Item name</th>
	  <th>No of Items</th>
      <th>Date</th>
      <th>Complaint Description</th>
      <th>Area</th>
      <th>Location/Room no</th>
      <th>Contant no</th>
	  <th>Status</th>
	  <th>Open</th>
    </tr>
	 <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
  </tr>
	</table>
	</div>

	



</body>
</html>
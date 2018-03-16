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
<div class = "head">
<header style="background-color: rgb(60, 60, 60)">
<br><center><label>Welcome to Online Complaint Mangement System</label><center><br>
</header>
</div>

<nav>
    <a href="RequestRegister.html"><button type="submit">Register a Request</button></a>	
	<button type="submit">Register a Demand</button>
    <button type="submit">View a Request</button>
	<button type="submit">View a Demands</button>
</nav>
<div class="container">
	<div class="rl">
	<label><b>Register a new Demand</b></label>
	</div>
	<br><br>
    <div class="row">
      <div class="col-25">
        <label for="fname">Select Department</label>
      </div>
      <div class="col-75">
        <select id="dept" name="dept">
          <option value="learning">Learning Center</option>
          <option value="computer">Computer department</option>
          <option value="chemical">Chemical department</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="category">Select Demand Category</label>
      </div>
      <div class="col-75">
        <select id="category" name="country">
          <option value="hk">House-Keeping</option>
          <option value="pl">Plumbing</option>
          <option value="el">Electrical</option>
        </select>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="category">Item Name</label>
      </div>
      <div class="col-75">
       <input type="text" id="Itemname" name="Itemname" placeholder="Itemname"></text>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">No of Items</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="no of items"></text>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="date">Select Date</label>
      </div>
      <div class="col-75">
        <input type="date" name="bday">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Demand Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Area</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="Area"></text>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Location/Room no</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="location"></text>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="subject">Contact no</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="contact no"></text>
      </div>
    </div>
	<br>
    <div class="row">
      <input type="button" value="Submit">
    </div>
	<br>
	<div class="row">
      <input type="button" value="Add new Demand">
    </div>
  </form>
</div>


</body>
</html>
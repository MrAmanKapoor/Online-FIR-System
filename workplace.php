
<?php 
include("connection.php");

error_reporting(0);

SESSION_start();
unset($_SESSION['cn']);
$agent_id=$_SESSION['agent_id'];
if($agent_id =="")
{
	header('180.47.140.25.php');
}


$query="SELECT * FROM agent WHERE agent_id='$agent_id'";
$result=mysqli_query($conn,$query);
$b=mysqli_fetch_assoc($result);
?>
<html>
<head>
<title><?php echo $b['agent_name'];?></title>
<style>
* {
  box-sizing: border-box;
  margin:0%;
  padding:0%;
}

body {
  font-family: Arial;
  padding: 0px;
  background-image: url("admin_background.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  margin:0%;
  margin-bottom:0%;
  
  
  }

/* Header/Blog Title */
#header {
  float:right;
  text-align: center;
  
  height:auto;
  width:80%;
  background-repeat: no-repeat;
  background-position:center top;
  text-shadow: 5px 5px 5px black;
  color:white
   
  
}

#header h1 {
  font-size: 30px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  border-bottom:solid black;
  
}

/* Left column */
.leftcolumn {   
  float: left;
  width: 20%;
  height:77%;
  background:black;
  color:white;
  background: rgba(0, 0, 0, 0.5);
}

/* Right column */
.rightcolumn {
  float:right;
  width: 18%;
  height:auto;
  padding-left: 20px;
  float:;
  margin-top:2%;
  margin-left:3%;
  margin-right:5%;
  box-shadow: 0px 0px 5px 3px black;
  padding:2%;
  border-radius:20px;
  transition-duration: 0.3s;
   background: rgba(0, 0, 0, 0.5);
}
.rightcolumn:hover
	{
		box-shadow: 0px 0px 5px 3px white;
	}
  

/* Fake image */
.fakeimg {
  background-color:;
  width: 80%%;
  
}

/* Add a card effect for articles */
.card {
  background-color: ;
  padding: 20px;
  margin-top: 20px;
}
#container{
	
		width: 90%;
		padding: 20px;
		margin: auto;
		background:none;
		display: flex;
		flex-direction: row;
		justify-content: center;
	}
#box
{
	float:left;
	width:800px;
	height:350px;
	background-color:none;
	border-radius:10px;
	transition: 1s;
	font-family:Copperplate;
	font-weight:bold;
	box-shadow: 0.5px 0.5px 0.5px 4px red;
	font-size:15;
	margin:auto;
	margin-top:1%;
	padding:5px;
	text-allign:center;
	color:white;
		
	
}
#box:hover
{
		transform: scale(1.1);
		z-index: 2;
		box-shadow: 0.5px 0.5px 0.5px 4px green;
	
}

.button {
  background: none;
  border: 3px solid white;
  width:120px;
  border-radius: 15px;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 9px 5px;
  padding: 10px 10px;
  cursor: pointer;
  transition-duration: 0.4s;
}
.button:hover {
  background-color: #008CBA;
  color: white;
}
.profile{
  background: none;
  border-bottom:solid white;
  width:120px;
  border-radius: 15px;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 9px 5px;
  padding: 10px 10px;
  cursor: pointer;
  transition-duration: 0.4s;
}
h3
{
	text-shadow: 2px 2px 5px blue;
	text-align: center;
	color:Yellow;
}
h6
{
	
	text-align: center;
	color:white;
	font-size:12px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
 
}

/* Footer */
.footer 
{
  padding:20px;
  text-align: center;
  background: black;
  margin-top: 0px;
  color:white;
  background: rgba(0, 0, 0, 0.9);	
  
  
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1000px) 

{
 .leftcolumn, .rightcolumn {   
    width: 100%;
	height:auto;
    padding: 0;
	font-size:15;
  }
  .rightcolumn{width:100%;}
  #header h1 
  {
	  font-size:25px;
  }
  #header
  {
	width:100%;  
  }
  
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 800px)
 {
  .topnav a 
  {
    float: none;
    width: 25%;
	font-size:12;
  }
}
</style>
</head>
<body>
<div class="topnav">

		<img src="logo.png" alt="Girl in a jacket" width="289" height="60">
		<a class="button"  href="180.47.140.25.php" style="float:right">Sign Out<br></a>
		
</div>
<div id="header">
    <h1>Complaint's Management System</h1>
  
</div>

	
<div class="row">
		<div class="leftcolumn">
	
				<img  src="user1.png" alt="Girl in a jacket"style="display: block;margin-left: auto;margin-right: auto;" width="100" height="100">
				<a class="profile"  href="login.php" style="float:left;height:10%; width:99%;">Name:-<?php echo $b['agent_name'];?><br></a><br>
				<a class="profile" href="login.php" style="float:left;height:10%; width:99%;">ID:-<?php echo $b['agent_id'];?><br></a><br>
				<a class="profile" href="login.php" style="float:left; height:10%; width:99%;">E-mail:-<?php echo $b['agent_email'];?><br></a><br><br>
				<a class="button" href="change.php" style="float:left;font-size:10px; width:auto; height:auto;">Change Your Password</a>
				<a class="button" href="login.php" style="font-size:10px;float:right;width:auto; height:auto;">Set Security Ques</a>
		</div>
	

		<div class="rightcolumn">
				<h3>New Reminder</h3><br>
				<h6>Send Reminders for Complaint crossing SLA timelines.</h6>
				<a   href="checkreminder.php" style="float:center;width:100%;"class="button">Click Here</a>
			
		</div>
		
		<div class="rightcolumn">
		
				<h3>All Complaints</h3><br>
				<h6>Contact the concerned department and officers directly.</h6>
				<a   href="data.php" style="float:center;width:100%;"class="button">Click Here</a>
			
		</div>

		<div class="rightcolumn">
			
				<h3>All Feedbacks</h3><br>
				<h6>Track status of Complaint through Complaint Number.</h6>
				<a   href="checkfeedback.php" style="float:center;width:100%;"class="button">Click Here</a>
			
		</div>
		
		
		
		<div class="rightcolumn">

				<h3>Change Password</h3><br>
				<h6>Send Feedback/ Suggessions regarding disposal of Complaint.</h6>
				<a   href="" style="float:center;width:100%;"class="button">Click Here</a>
				
		
		</div>
		<div class="rightcolumn">

				<h3>Pending Complaints</h3><br>
				<h6>Send Feedback/ Suggessions regarding disposal of Complaint.</h6>
				<a   href="data.php" style="float:center;width:100%;"class="button">Click Here</a>
				
				
		
		</div>
		<div class="rightcolumn">

				<h3>View Complaint</h3><br>
				<h6>Send Feedback/ Suggessions regarding disposal of Complaint.</h6>
				<a   href="Solution.php" style="float:center;width:100%;"class="button">Click Here</a>
				
		
		</div>
</div>
			<div class="footer">
				<p>?? Content owned, updated by the Online Consumer Complaint's Portal. Website is designed, developed, maintained and hosted by <br>Avantika Mishra.</p>
			</div>
			

</body>
</html>

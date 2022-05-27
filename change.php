<?phperror_reporting(0);include("connection.php");session_start();	$email=$_SESSION['email'];if($email =="")	{	header('location:login.php');	}$query="SELECT * FROM registeration WHERE email='$email'";$result=mysqli_query($conn,$query);$b=mysqli_fetch_assoc($result);?>
<html>

<head><style>#main{	width:250px;	height:auto;	margin-left:10%;	padding:30px;	text-align:left;	margin-top:7%;	box-shadow:0px 0px 5px 3px black;	font-weight:bold;	border-radius:20px;}#main:hover{				box-shadow: 0px 0px 5px 3px white;		}body{ padding: 0px;  background-image: url("ministry_banner.jpg");  background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;  background-position: center;}#box{		width: 100%;		height: 20px;	    margin: auto;    transition: 1s;	border-radius:5px;	}		h3{	color:Black;	font-family:Copperplate;	font-weight:bold;text-align:center;text-shadow: 2px 2px 5px white;		}h4{	color:red;		}.topnav {  overflow: hidden;  border-bottom:solid black;  }.button {  background: none;  border: 3px solid white;  width:auto;  border-radius: 15px;  color: white;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 9px 5px;  padding: 10px 10px;  cursor: pointer;  transition-duration: 0.4s;}.button:hover {  background-color: #008CBA;  color: white;}@media screen and (max-width: 800px)	{		#main				{					width:250px;					height:350px;					padding:30px;					text-align:left;					margin:auto;					margin-top:5%;					box-shadow:0px 0px 5px 3px black;					font-weight:bold;}#main:hover{				box-shadow: 0px 0px 5px 3px white;		}	}</style>
<title>Create New Password</title>
</head>


<body><div class="topnav">  <img src="logo.png" alt="Girl in a jacket" width="289" height="60">  <a class="button" href="home.php" style="float:right">Home</a>  </div><div id="main">

<h3>Create New Password</h3><br>
<form action="" method="post">
Email:<br>
<input Style="color:white;" type="text" 	id="box"	placeholder="Enter Email"  	name="email"	value="<?php echo $b['email'];?>" disabled />	<br><br>   Old Password:<br>
<input type="password"  id="box" 	placeholder="Enter Old Password" name="password" value=""/><br><br>New Password:<br><input type="password"  id="box" 	placeholder="Enter New Password" name="pass" value=""/>
 <br><br>
<br>
<input style="width:90%;" class="button" type="submit" name="submit" value="Change Password">
</form><h4><?phpif(isset($_POST['submit'])){$email= $b['email'];$password=$_POST['password'];$query="SELECT * FROM registeration WHERE email='$email' && password='$password'";$result=mysqli_query($conn,$query);$temp=mysqli_num_rows($result);if($temp){	$newpass=$_POST['pass'];$q="UPDATE registeration set password='$newpass' WHERE email='$email'";$result=mysqli_query($conn,$q);$tempe=mysqli_num_rows($result);if(tempe){	echo "Password Successfully Changed.";}	}else{	echo "Incorrect ID or Password, Please try again.";}}?></h4><br>
</h4>
</div>
</body>
</html>






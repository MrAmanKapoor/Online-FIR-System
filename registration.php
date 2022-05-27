<?phpinclude("connection.php");error_reporting(0);session_start();$email=$_SESSION['email'];if($email !=""){	header('location:home.php');}$email=$_SESSION['email'];?>
<html>

<head><style>#main{		width:250px;	height:520px;	margin-left:10%;	text-align:center;	padding:30px;	margin-top:45px;	box-shadow: 0px 0px 2px 3px #000;	border-radius:20px;	}#main:hover{			box-shadow:0px 2px 5px 3px white;}body{ padding: 0px;  background-image: url("ministry_banner.jpg");  background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;   background-position: center;}#btn{	width:100px;	height:25px;	background-color:33F3FF;	box-shadow:0px 0px 2px 1px grey;	border-radius:10px;	transition: 1s;	font-family:Copperplate;	font-weight:bold;	font-size:15;	}#btn:hover{		transform: scale(1.1);				z-index: 2;		box-shadow: 2px 2px 2px #000;		}.topnav {  overflow: hidden;  border-bottom:solid black;  }.button {  background-color: none;  border: 3px solid white;  width:120px;  border-radius: 15px;  color: white;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 9px 5px;  padding: 10px 10px;  cursor: pointer;  transition-duration: 0.4s;}.button:hover {  background-color: #008CBA;  color: white;}@media screen and (max-width: 800px)	{		#main				{											height:520px;						margin:auto;						text-align:center;						padding:30px;						margin-top:45px;						box-shadow: 0px 0px 2px 3px #000;}#main:hover{				box-shadow: 0px 0px 5px 3px white;		}</style>
<title>NEW REGISTRATION</title>
</head>


<body><div class="topnav">  <img src="logo.png" alt="Girl in a jacket" width="289" height="60">  <a class="button" href="login.php" style="float:right">Sign In</a>  </div><div id="main">

<h3 style="text-shadow: 2px 2px 5px white;" >Registration for New User</h3><br>



<form style="width:100%;" action="" method="GET">

<input style="width:90%;"type="text" 		placeholder="User Name"  	name="user"	required autofocus/>	<br><br> <b>Gender </b><input type="RADIO"    name="Gender"  value="M"> Male<input type="RADIO"     name="Gender"  value="F"> Female<br><br><input style="width:90%;"type="text" 		placeholder="DD-MM-YYYY"  	name="DOB"	required autofocus /><br> <br> <input style="width:90%;"type="text" 		placeholder="Mobile"  	name="Mobile"	required autofocus />	<br><br> <input style="width:90%;"type="password" 	placeholder="Password" 	 	name="pass"	required /><p style="font-size:10 ;color:white">Please don't use Bank Password.</p><input style="width:90%;"type="email" 		placeholder="Email"  	name="Email"	required autofocus /> <p style="font-size:13 ;color:white">What was the name of your primary school?</p> <input style="width:90%;"type="text" 		placeholder="School ?"  	name="answer"	required autofocus /><br><br><br>

<input style="width:90%;" id="btn" type="submit" name="submit" value="Register Now">
</form><?phpif($_GET['submit']){
$email=$_GET['Email'];$user=$_GET['user'];$mobile=$_GET['Mobile'];$DOB=$_GET['DOB'];$gender=$_GET['Gender'];$password=$_GET['pass'];$answer=$_GET['answer'];}if($email!="" && $user!="" && $mobile!="" && $DOB!="" && $gender!="" && $password!="" && $answer!=""){
$query="INSERT INTO registeration VALUES('$email','$user','$mobile','$DOB','$gender','$password','$answer')";$result=mysqli_query($conn,$query);if($result){	echo"Successfully Registered";}else{	echo"user already exist";}}
?>
<p>If you have already an account.</p>

<a style="text-align:center;color:red;"class="" href="login.php">Login</a><br>
<a style="text-align:center;color:red;" href="index.php">Back to Portal</a>
</div>
</body>
</html>






<?phpinclude("connection.php");error_reporting(0);session_start();$email=$_SESSION['email'];if($email !=""){	header('location:home.php');}$email=$_SESSION['email'];?>
<html>

<head><style>#main{	width:250px;	height:350px;	margin-left:10%;	padding:30px;	text-align:left;	margin-top:7%;	box-shadow:0px 0px 5px 3px black;	font-weight:bold;	border-radius:20px;}#main:hover{				box-shadow: 0px 0px 5px 3px white;		}body{ padding: 0px;  background-image: url("ministry_banner.jpg");  background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;  background-position: center;}#box{		width: 100%;		height: 20px;	    margin: auto;    transition: 1s;	border-radius:5px;	}#btn{	width:100%;	height:25px;	background-color:green;	box-shadow:0px 0px 2px 1px grey;	border-radius:10px;	transition: 1s;	font-family:Copperplate;	font-weight:bold;	font-size:15;	}#btn:hover{		transform: scale(1.1);				z-index: 2;		box-shadow: 2px 2px 2px #000;		}h3{	color:Black;	font-family:Copperplate;	font-weight:bold;text-align:center;text-shadow: 2px 2px 5px white;		}h4{	color:red;		}.topnav {  overflow: hidden;  border-bottom:solid black;  }.button {  background-color: none;  border: 3px solid white;  width:120px;  border-radius: 15px;  color: white;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 9px 5px;  padding: 10px 10px;  cursor: pointer;  transition-duration: 0.4s;}.button:hover {  background-color: #008CBA;  color: white;}@media screen and (max-width: 800px)	{		#main				{					width:250px;					height:350px;					padding:30px;					text-align:left;					margin:auto;					margin-top:5%;					box-shadow:0px 0px 5px 3px black;					font-weight:bold;}#main:hover{				box-shadow: 0px 0px 5px 3px white;		}	}</style>
<title>Log In</title>
</head>


<body><div class="topnav">  <img src="logo.png" alt="Girl in a jacket" width="289" height="60">  <a class="button" href="registration.php" style="float:right">Sign Up</a>  </div><div id="main">

<h3>Login Here</h3><br>
<form action="" method="post">
Email:<br>
<input type="text" 	id="box"	placeholder="Enter Email"  	name="email"	value=""/>	<br><br>   Password:<br>
<input type="password"  id="box" 	placeholder="Enter Password" name="password" value=""/>
 <br>
<a style="font-size:10;color:red;" href="forgot.php">  Forgot Password	</a>				<br><br>

<input  id="btn" type="submit" name="submit" value="Login">
</form><h4>
<?phpif(isset($_POST['submit'])){$email=$_POST['email'];
$password=$_POST['password'];$query="SELECT * FROM registeration WHERE email='$email' && password='$password'";$result=mysqli_query($conn,$query);$temp=mysqli_num_rows($result);if($temp){	$_SESSION['email']=$email;	header('location:home.php');	}else{	echo "Incorrect ID or Password, Please try again.";}
}
?></h4><br>
<p style="text-align:center;color:white;">Don't have an account yet? <br>    

<a style="text-align:center;color:red;" href="registration.php">Create an account</a><br><br>
<a style="text-align:center;color:red;" href="index.php">Back to Home</a></p>
</div>
</body>
</html>






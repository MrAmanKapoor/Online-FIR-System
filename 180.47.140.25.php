<?phpsession_start();include("connection.php");error_reporting(0);?>
<html>

<head><style>#main{	width:250px;	float:right;	height:280px;	margin:auto;	padding:30px;	text-align:left;	margin-top:5%;	margin-right:15%;	box-shadow:0px 0px 5px 3px black;	font-weight:bold;	border-radius:20px;}#main:hover{				box-shadow: 0px 0px 5px 3px white;		}body{ padding: 0px;  background-image: url("q.jpg");  background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;  background-position: center;}#box{		width: 100%;		height: 20px;	    margin: auto;    transition: 1s;	border-radius:5px;	}#btn{	width:100%;	height:25px;	background-color:33F3FF;	box-shadow:0px 0px 2px 1px grey;	border-radius:10px;	transition: 1s;	font-family:Copperplate;	font-weight:bold;	font-size:15;	}#btn:hover{		transform: scale(1.1);				z-index: 2;		box-shadow: 2px 2px 2px #000;		}h2{	color:Black;	font-family:Copperplate;	font-weight:bold;text-align:center;text-shadow: 2px 2px 5px white;	}h1{	color:Black;	font-family:Copperplate;	font-weight:bold;	text-align:center;	text-shadow: 2px 2px 5px white;		font-size:55px;}</style>
<title>Admin</title>
</head>


<body><h1>Complaint's Management System</h1><div id="main">

<h2>Admin Login Here</h2><br>
<form action="" method="post">
Email:<br>
<input type="text" 	id="box"	placeholder="Enter ID"  	name="agent_id"	value=""/>	<br><br>   Password:<br>
<input type="password"  id="box" 	placeholder="Enter Password" name="password" value=""/>
 <br>
<br><br>

<input  id="btn" type="submit" name="submit" value="Login">
</form><h4>
<?phpif(isset($_POST['submit'])){$agent_id=$_POST['agent_id'];
$password=$_POST['password'];$query="SELECT * FROM agent WHERE agent_id='$agent_id' && password='$password'";$result=mysqli_query($conn,$query);$temp=mysqli_num_rows($result);if($temp){	$_SESSION['agent_id']=$agent_id;	header('location:workplace.php');	}else{	echo "Incorrect ID or Password, Please try again.";}
}
?></div>
</body>
</html>






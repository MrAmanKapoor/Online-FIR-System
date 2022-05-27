<?php 
include("connection.php");
SESSION_start();
error_reporting(0);
$email=$_SESSION['email'];
if($agent_id ="")
{
	header('location:180.47.140.25.php');
}



$query="SELECT * FROM registeration WHERE email='$email'";
$result=mysqli_query($conn,$query);
$b=mysqli_fetch_assoc($result);
?>
<html>



<head>
<style>
#main
{
	
	width:auto;
	height:auto;
	margin:10%;
	text-align:center;
	padding:30px;
	margin-top:70px;
	box-shadow: 0px 0px 2px 3px #000;
	background:white;
    background: rgba(0, 0, 0, 0.5);	
	border-radius:30px;
}
#main:hover{
			box-shadow:0px 2px 5px 3px white;

}
body
{
 padding: 0px;
  background-image: url("admin_background.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   background-position: center;
}
.topnav {
  overflow: hidden;
  border-bottom:solid black;
  
}
#header {
  float:right;
  text-align: center;
  
  height:auto;
  width:100%;
  background-repeat: no-repeat;
  background-position:center top;
  text-shadow: 5px 5px 5px black;
  color:white
   
  
}

#header h1 {
  font-size: 30px;
}
.heading
		{
			font-size:30;
			color:red;
			width:100%;
			text-align:center;"
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


#btn
{
	width:100px;
	height:25px;
	border-radius:10px;
	transition: 1s;
	font-family:Copperplate;
	font-weight:bold;
	font-size:15;

	
}

table{width:100%;}
table,th,td
{
	
	height:auto;
	text-align: center;
	color:red;
	margin:auto;
	border-collapse:collapse;
	border:2px solid black;
	font-size:25px;
	
}
td{
	
	color:white;
	font-size:15px;
}

.content
{
	background:none;
	width:auto;
	border:none;
	float:left;
	font-size:12;
	
	color: #f1f1f1;
}
.footer
 {
  padding: 20px;
  text-align: center;
  background: black;
  margin-top: 20px;
  color:white;
background: rgba(0, 0, 0, 0.5);	
}
@media screen and (max-width: 800px)
 {
	 table{width:100%;}
	table,th,td
					{
	
					height:auto;
					text-align: center;
					color:red;
					margin:auto;
					border-collapse:collapse;
					border:2px solid black;
					font-size:18px;
	
					}
td{
	
	color:white;
	font-size:12px;
}
 }
  
</style>
<title>New Complaint:<?php echo $b['user'];?></title>
</head>





<body>

<div class="topnav">

		<img src="logo.png" alt="Girl in a jacket" width="289" height="60">
		
		<a class="button" href="workplace.php" style="float:right">Home</a>
</div>
<div id="header">
    <h1>Complaint's Management System</h1>

  
</div>
<br>
<div id="main">

<a style="font-size:15;color:white;float:center"><?php
echo "Date & TIme: " . date("Y-m-d") ."&nbsp&nbsp". date("h:i:sa");


?></a>
<h2 style="text-shadow: 2px 2px 5px white;widht:100%;background:#008CBA;border-radius:10px;" ></h2>
<br>
			<form id="btn" style="width:auto;float:left;" action="" method="GET">
						<input id="btn" style="width:auto;float:left;"class="content"type="text"placeholder="Enter Case Date"  	name="time" value="">
						<input style="width:auto;float:right;" id="btn" type="submit" name="submit" value="View Data">
					</form>

<?php
if(isset($_GET['submit']))
{
$time=$_GET['time'];
$query="SELECT * FROM reminder WHERE time='$time'";
$result=mysqli_query($conn,$query);
$array=mysqli_num_rows($result);

?>
 
<table>
		<tr>
				<th>Complaint Number</th>
				<th>Complaint Date</th>
				<th>User Comment</th>
		
		</tr>


<?php
 while($b=mysqli_fetch_assoc($result))
 {
	 
	 echo "<tr>
				<td>".$b['cn']."</td>
				<td>".$b['time']."</td>
				<td>".$b['comment']."</td>
		
		</tr> <br/>";
 }
 }
?>	
</table>
	
</div>



<div class="footer">
  <h5>© Content owned, updated by the Online Consumer Complaint's Portal. Website is designed, developed, maintained and hosted by <br>Avantika Mishra.</h5>
</div>
</body>

</html>












<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "data";

$conn= mysqli_connect($servername,$username,$password,$dbname);

?>

<html>



<head>
<style>
#main
{
	
	width:250px;
	height:auto;

	text-align:center;
	padding:30px;
	margin-auto;
	box-shadow: 0px 0px 2px 3px #000;
	border-radius:20px;
	
}
</style>
<title></title>
</head>

<body>
<div id="main">

<form style="width:100%;" action="" method="GET">

		<input style="width:90%;border-radius:5px;"type="text" 		placeholder="User Name"  	name="user"	required autofocus/>	<br><br> 
		<input style="width:90%;border-radius:5px;"type="text" 		placeholder="Mobile"  	name="Mobile"	required autofocus />	<br><br> 
		<input style="width:90%;border-radius:5px;"type="text" 		placeholder="Address"  	name="address"	required autofocus />	<br><br> 
		<input style="width:90%;border-radius:5px;" id="btn" type="submit" name="submit" value="insert">

</form>

<?php
if($_GET['submit'])
{
$name=$_GET['user'];
$mobile=$_GET['Mobile'];
$address=$_GET['address'];
}
if($name!="" && $mobile!="" && $address!="")
{

$query="INSERT INTO data VALUES('$name','$mobile','$address')";
$result=mysqli_query($conn,$query);
if($result)
{
	echo"Successfully Registered";
}
else
{
	echo"user already exist";
}
}
?>

<div>
</body>

</body>

</html>

















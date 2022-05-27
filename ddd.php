<?php 
include("connection.php");
SESSION_start();
error_reporting(0);
$email=$_SESSION['email'];


$query="SELECT * FROM user WHERE email='$email'";
$result=mysqli_query($conn,$query);
$b=mysqli_fetch_assoc($result);
?>
<html>
<head>
<title><?php echo $b['username'];?></title>
<style>
#main
{
background-color:black;	
	width:100%;
   
	margin:auto;
	padding:2%;
	flex-direction:row;
	justify-content:center;
	
	
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
	width:300px;
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
#header
{

	width:100%;
	background-color:red;
	
	display: flex;
		flex-direction: row;
		
	
		
}
</style>
</head>

<body>
<div id="main">
<div id="header">
<h5><?php echo $b['username'];?></h5>

<button style="	float: right; width:100px; height:30px; border-radius:5px;">SignOut</button>
</div>
<form action="" method="GET">
<input type="submit" style="width=auto; height:30px;" name="submit" value="Add to cart">

<div id="container">
<div id="box">

 <img src="aaluparatha.jpeg" style="width=400px; height:200px;"><br>
  
<p style="font-size:20px;"><input type="checkbox"  	name="food1"	value="Aalu Paratha"/>Aalu Paratha</p>
<input type="radio"  	name="price1"	value="60"/>2 Pcs(60 Rs)<br>
<input type="radio"  	name="price1"	value="100"/>4 pcs(100 Rs)	<br>






</div>
<div id="box">
 <img src="paneerparatha.jpeg" style="width=400px; height:200px;"><br> 

<p style="font-size:20px;"><input type="checkbox"  	name="food2"	value="Paneer Paratha"/>Paneer Paratha</p>
<input type="radio"  	name="price2"	value="80"/>2 Pcs(80 Rs)<br>
<input type="radio"  	name="price2"	value="140"/>4 pcs(140 Rs)	<br>




</div>
<div id="box">
<img src="gobhiparatha.jpeg" style="width=400px; height:200px;"><br>
   
<p style="font-size:20px;"><input type="checkbox"  	name="food3"	value="Gobhi Paratha"/>Gobhi Paratha</p>
<input type="radio"  	name="price3"	value="70"/>2 Pcs(70 Rs)<br>
<input type="radio"  	name="price3"	value="130"/>4 pcs(130 Rs)	<br>



</div>
</div>
<div id="container">
<div id="box">

<img src="cheeseparatha.jpeg" style="width=400px; height:200px;"><br>

<p style="font-size:20px;"><input type="checkbox"  	name="food4"	value="Cheese Paratha"/>Cheese Paratha</p>
<input type="radio"  	name="price4"	value="90"/>2 Pcs(90 Rs)<br>
<input type="radio"  	name="price4"	value="170"/>4 pcs(170 Rs)	<br>



</div>
<div id="box">


<img src="plainparatha.jpeg" style="width=400px; height:200px;"><br>

<p style="font-size:20px;"><input type="checkbox"  	name="food5"	value="Plain Paratha"/>Plain Paratha</p>
<input type="radio"  	name="price5"	value="30"/>2 Pcs(30 Rs)<br>
<input type="radio"  	name="price5"	value="50"/>4 pcs(50 Rs)	<br>



</div>
<div id="box">


<img src="mixvegparatha.jpeg" style="width=400px; height:200px;"><br>

<p style="font-size:20px;"><input type="checkbox"  	name="food6"	value="Mix Veg  Paratha"/>Mix Veg Paratha</p>
<input type="radio"  	name="price6"	value="100"/>2 Pcs(100 Rs)<br>
<input type="radio"  	name="price6"	value="190"/>4 pcs(190 Rs)	<br>


  

</div>
</div>
<div id="container">
<div id="box">

<img src="lacchaparatha.jpg" style="width=400px; height:200px;"><br>

<p style="font-size:20px;"><input type="checkbox"  	name="food7"	value="Laccha Paratha"/>Laccha Paratha</p>
<input type="radio"  	name="price7"	value="70"/>2 Pcs(70 Rs)<br>
<input type="radio"  	name="price7"	value="130"/>4 pcs(130 Rs)	<br>


  

</div>
<div id="box">
<img src="mughlaiparatha.jpg" style="width=400px; height:200px;"><br>

<p style="font-size:20px;"><input type="checkbox"  	name="food8"	value="Mughlai Paratha"/>Mughlai Paratha</p>
<input type="radio"  	name="price8"	value="90"/>2 Pcs(90 Rs)<br>
<input type="radio"  	name="price8"	value="170"/>4 pcs(170 Rs)	<br>


   
</div>
<div id="box">
<img src="paalakparatha.jpg" style="width=400px; height:200px;"><br>

<p style="font-size:20px;"><input type="checkbox"  	name="food9"	value="Palak Paratha"/>Palak Paratha</p>
<input type="radio"  	name="price9"	value="40"/>2 Pcs(40 Rs)<br>
<input type="radio"  	name="price9"	value="70"/>4 pcs(70 Rs)	<br>
</div>

<?php
if($_GET['submit'])
{

$food1=$_GET['food1'];
$price1=$_GET['price1'];
$food2=$_GET['food2'];
$price2=$_GET['price2'];
$food3=$_GET['food3'];
$price3=$_GET['price3'];
$food4=$_GET['food4'];
$price4=$_GET['price4'];
$food5=$_GET['food5'];
$price5=$_GET['price5'];
$food6=$_GET['food6'];
$price6=$_GET['price6'];
$food7=$_GET['food7'];
$price7=$_GET['price7'];
$food8=$_GET['food8'];
$price8=$_GET['price8'];
$food9=$_GET['food9'];
$price9=$_GET['price9'];

$query="INSERT INTO bill VALUES('$email','$food1','$price1','$food2','$price2','$food3','$price3','$food4','$price4','$food5','$price5','$food6','$price6','$food7','$price7','$food8','$price8','$food9','$price9')";
$result=mysqli_query($conn,$query);
}




?>
</div>
</form>
</div>

</body>











</html>
<?php
<html>

<head>
<title>Log In</title>
</head>


<body>

<h3>Login Here</h3><br>
<form action="" method="post">

<input type="text" 	id="box"	placeholder="Enter Email"  	name="email"	value=""/>	<br><br>   
<input type="password"  id="box" 	placeholder="Enter Password" name="password" value=""/>
 
<a style="font-size:10;color:red;" href="forgot.php">  Forgot Password	</a>				<br><br>

<input  id="btn" type="submit" name="submit" value="Login">
</form>
<?php
$password=$_POST['password'];

?></h4><br>
<p style="text-align:center;color:white;">Don't have an account yet? <br>    

<a style="text-align:center;color:red;" href="registration.php">Create an account</a><br><br>
<a style="text-align:center;color:red;" href="index.php">Back to Home</a></p>

</body>
</html>





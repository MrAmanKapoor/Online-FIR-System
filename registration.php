<?php
<html>

<head>
<title>NEW REGISTRATION</title>
</head>


<body>

<h3 style="text-shadow: 2px 2px 5px white;" >Registration for New User</h3><br>



<form style="width:100%;" action="" method="GET">

<input style="width:90%;"type="text" 		placeholder="User Name"  	name="user"	required autofocus/>	<br><br> 

<input style="width:90%;" id="btn" type="submit" name="submit" value="Register Now">
</form>
$email=$_GET['Email'];
$query="INSERT INTO registeration VALUES('$email','$user','$mobile','$DOB','$gender','$password','$answer')";
?>
<p>If you have already an account.</p>

<a style="text-align:center;color:red;"class="" href="login.php">Login</a><br>
<a style="text-align:center;color:red;" href="index.php">Back to Portal</a>

</body>
</html>





<?php
<html>

<head>
<title>Admin</title>
</head>


<body>

<h2>Admin Login Here</h2><br>
<form action="" method="post">

<input type="text" 	id="box"	placeholder="Enter ID"  	name="agent_id"	value=""/>	<br><br>   
<input type="password"  id="box" 	placeholder="Enter Password" name="password" value=""/>
 
<br>

<input  id="btn" type="submit" name="submit" value="Login">
</form>
<?php
$password=$_POST['password'];

?>
</body>
</html>





<?php
<html>

<head>
<title>Create New Password</title>
</head>


<body>

<h3>Create New Password</h3><br>
<form action="" method="post">

<input Style="color:white;" type="text" 	id="box"	placeholder="Enter Email"  	name="email"	value="<?php echo $b['email'];?>" disabled />	<br><br>   
<input type="password"  id="box" 	placeholder="Enter Old Password" name="password" value=""/><br><br>
 

<input style="width:90%;" class="button" type="submit" name="submit" value="Change Password">
</form>


</body>
</html>





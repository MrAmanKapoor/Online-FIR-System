<?php 
<html>

<head>
<title>New Complaint:<?php echo $b['user'];?></title>
</head>


<body>

<h2 style="text-shadow: 2px 2px 5px white;widht:100%;background:green;border-radius:10px;" >Complaint's Management System</h2>
			<h4 class="heading">Update Complaint Status</h4>
							<input style="width:90%;margin-top:4%;" class="button" type="submit" name="submit" value="Submit a Complaint"><br>
</form>
$query1="UPDATE complaint set status='$status' WHERE cn='$cn'";
?>

</body>
</html>





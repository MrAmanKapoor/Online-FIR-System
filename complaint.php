<?php 
<html>

<head>
<title>New Complaint:<?php echo $b['user'];?></title>
</head>


<body>

<h2 style="text-shadow: 2px 2px 5px white;widht:100%;background:#008CBA;border-radius:10px;" >Online Register Your Complaint<br>Samadhan</h2>
			<h4 class="heading">Reference Document and Details of Your Complaint</h4>
							<input style="width:90%;margin-top:4%;" class="button" type="submit" name="submit" value="Submit a Complaint"><br>
</form>
$email=	$b['email'];
$query="INSERT INTO complaint VALUES('$email','$cn','$user','$mobile','$DOB','$address','$subject','$statement','$time','$status')";
?>

</body>
</html>





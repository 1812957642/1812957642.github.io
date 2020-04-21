
<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Samiya Enterprise</title>
</head>
<div class="admintitle" align="center">
	<h1 style="float: center;margin-right: 30px;color: purple;font-size: 60px;">Samiya Enterprise</h1>
</div>
<div>
<p style="font-size: 25px;color:black;"><marquee>All kinds of chemical products including <span style="color:green"> Methanol, Perafin Oil, I.P.A, M.E.K, Thinner, Xylin, Toluene, Aceton etc</span> products are available here</marquee></p>	
</div>
	
<body>
	<form method="post" action="adminLogin.php">
	<table align="center" border="1" width="40%">
		<tr>
			<th colspan="2" style="font-size: 30px;">Administration Login</th>
		</tr>
		<tr>
			<td style="font-size: 25px;">Username</td>
			<td><input type="text" name="username" required></td>
		</tr>
		<tr>
			<td style="font-size: 25px;">Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
					<input type="submit" name="login" value="login">
			</td>
		</tr>
	</table>	
	</form>

</body>
</html>
<?php

include('databaseConnection.php');
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM `adminLogin` WHERE `username`='$username' AND `password`='$password' ";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)<1)
	{
		?>
		<script>
			alert('Username or Password do not matched!!!');
			window.open('adminLogin.php','_self');
		</script>
		<?php
	}
	else
	{
		header('location:productDash.php');
	}
}

?>
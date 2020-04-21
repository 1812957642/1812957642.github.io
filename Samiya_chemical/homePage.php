<?php
session_start();
?>
<?
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Samiya Enterprise</title>
</head>

<div class="admintitle" align="center">
	<h1 style="float: center;margin-right: 30px;color: purple;font-size: 60px;">Samiya Enterprise</h1>
</div>
<div>
<p style="font-size: 25px;color:black;"><marquee>All kinds of chemical products including <span style="color:green"> Methanol, Perafin Oil, I.P.A, M.E.K, Thinner, Xylin, Toluene, Aceton etc</span> products are available here</marquee></p>	
</div>
<h3 align="left" style="margin-right: 30px;"><a href="adminLogin.php"> Administration Login</a> </h3>

<h3 align="left" style="margin-right: 30px;"><a href="adminLogin.php"> View Products</a> </h3>
<body>
	<form method="post" action="homePage.php">
		<table style="width: 40%;" align="center" border="1">
			<tr>
				<th colspan="2" style="font-size: 30px">Product Information</th>
			</tr>
			<tr>
				<td align="left" style="font-size: 25px;">
					Product name
				</td>
				<td>
					<input type="text" name="productName" placeholder="Enter the product name" required>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="showDetails" value="Show details" required>
				</td>
			</tr>
			
		</table>
		
	</form>

</body>
</html>

<?php
if(isset($_POST['showDetails']))
{
	include('databaseConnection.php');
	$productName=$_POST['productName'];

	$query="SELECT * FROM `productInfo` WHERE `productName`LIKE'%$productName%' ";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<br><br>
		<table align="left" width="80%" border="5" style="margin-right: 10px">
			<tr style="background-color: white;color: black">
				<th>Product Name</th>
				<th>Net Weight</th>
				<th>Total Drums</th>
				<th>Price</th>
			</tr>
			<tr>
				<td style="font-size: 25px">
				   	<?php echo $data['productName']; ?>
				</td>
				<td style="font-size: 25px">
					<?php echo $data['netWeight']; ?>
				</td>
				<td style="font-size: 25px">
					<?php echo $data['totalDrum']; ?>
				</td>
				<td style="font-size: 25px">
					<?php echo $data['price']; ?>
				</td>
			</tr>
			
		</table>
		<?php		
	}
	else
	{
		echo "<script>alert('No product Found!!!')</script>";
	}
}

?>
<?php
session_start();
?>
<?php
include('header.php');
include('databaseConnection.php');

$productName=$_GET['productName'];

$query="SELECT * FROM `productInfo` WHERE `productName`='$productName' ";

$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Samiya Enterprise</title>
</head>
<div class="admintitle" align="center">
	<h4>
		<a href="productDash.php" style="float: left;margin-right: 30px;color: white;font-size: 20px;">Back</a>
		<a href="Logout.php" style="float: right;margin-right: 30px;color: white;font-size: 25px">logout</a></h4>
		<h1 style="float: center;margin-right: 30px;color: purple;font-size: 60px;">Samiya Enterprise</h1>
	
</div>
<div>
<p style="font-size: 25px;color:black;"><marquee>All kinds of chemical products including <span style="color:green"> Methanol, Perafin Oil, I.P.A, M.E.K, Thinner, Xylin, Toluene, Aceton etc</span> products are available here</marquee></p>	
</div>
<body>
	<form method="post" action="updateProductInfo.php" enctype="multipart/form-data">
		<table style="width: 40%;" align="center" border="1">
			<tr>
				<th colspan="2" style="font-size: 30px">Product Update</th>
			</tr>
			<tr>
				<td align="left" style="font-size: 25px;">
					Product name
				</td>
				<td align="left" style="font-size: 25px;">
					<input type="text" name="productName" value="<?php echo $data['productName']; ?>" readonly required>
				</td>
			</tr>
			<tr>
				<td align="left" style="font-size: 25px;">
					Total Drums
				</td>
				<td align="left" style="font-size: 25px;">
					<input type="text" name="totalDrum" value="<?php echo $data['totalDrum']; ?>" required>
				</td>
			</tr>
			<tr>
				<td align="left" style="font-size: 25px;">
					Price
				</td>
				<td align="left" style="font-size: 25px;">
					<input type="text" name="price" value="<?php echo $data['price']; ?>" required>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="submit" value="Submit" required>
				</td>
			</tr>
			
		</table>
		
	</form>

</body>
</html>

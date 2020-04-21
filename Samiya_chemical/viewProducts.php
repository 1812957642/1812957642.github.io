<?php
session_start();
?>
<?php
include('header.php');
include('databaseConnection.php');
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
<?php

	$query="SELECT * FROM `productInfo` ";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)>0)
	{
		?>
		<table align="left" width="100%" border="5" style="margin-right: 10px">
			<tr>
				<th colspan="4" align="center" style="color: blue;font-size: 40px"> Chemical Products</th>
			</tr>

			<tr style="background-color: white;color: black">
				<th align="center" width="25%">Product Name</th>
				<th align="center" width="25%">Net Weight</th>
				<th align="center" width="25%">Total Drums</th>
				<th align="center" width="25%">Price</th>
			</tr>
		</table>
		<?php
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			<br><br>
			<table align="left" width="100%" border="5" style="margin-right: 10px">
				
				<tr>
					<td style="font-size: 25px" align="center" width="25%">
					   	<?php echo $data['productName']; ?>
					</td>
					<td style="font-size: 25px" align="center" width="25%">
						<?php echo $data['netWeight']; ?>
					</td>
					<td style="font-size: 25px" align="center" width="25%">
						<?php echo $data['totalDrum']; ?>
					</td>
					<td style="font-size: 25px" align="center" width="25%">
						<?php echo $data['price']; ?>
					</td>
				</tr>
				
			</table>
			<?php
	}
		
	}
	else
	{
		echo "<script>alert('No product Found!!!')</script>";
	}

?>
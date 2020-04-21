<?php
include('databaseConnection.php');
$productName=$_POST['productName'];
$totalDrum=$_POST['totalDrum'];
$price=$_POST['price'];
$query="UPDATE `productInfo` SET `totalDrum`='$totalDrum',`price`='$price' WHERE `productName`='$productName' ";
echo $query;
$run=mysqli_query($con,$query);
if($run==true)
{
	?>
	<script type="text/javascript">
		alert('Product Info has been updated successfully!!!');
		window.open('updateProduct.php?productName=<?php echo $productName; ?>','_self');
	</script>
	<?php
}
?>
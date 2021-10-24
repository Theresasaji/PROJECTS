<html>
<head>
</head>
<body>
		<?php
		include('dbconnection.php');
			$i=$_GET['id'];
			$rtx=mysql_query("SELECT * FROM `cartdetails` WHERE cid='$i'");
			$gtx=mysql_fetch_array($rtx);
			?>
	<form name='qual' method='POST'>
	<input type='text' name='value' value='<?php echo $gtx[5]; ?>'><br><br>
	<input type='submit' name='submit' value='Change'>
	</form>
</body>
</html>
<?php
include('dbconnection.php');
$id=$_GET['id'];
if(isset($_POST['submit']))
{
	$ii=$_GET['id'];
	$aa=$_POST['value'];
	$name=$_SESSION['name'];
	$quer=mysql_query("UPDATE `cartdetails` SET `quantity`='$aa' WHERE cid='$ii'");
	echo "<br><br>Quantity Changed";
	header('location:cart.php');
}
?>
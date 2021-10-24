<?php
include('dbconnection.php');
$qq=$_GET['id'];
$q=mysql_query("SELECT * FROM `products` where pid='$qq'");
$re=mysql_fetch_array($q);
?>
<html>
<head>
<title>ll</title>
<style>
<style>
a{
text-decoration:none;
color:green;
}
input[type=text]{
  width: 50%;
height:150% /* Full width */
  padding: 30px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 8px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 7px; /* Add a top margin */
  margin-bottom: 20px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 15px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

::placeholder
{
	text-align:center;
}
*
{
	color:black;
}
      .container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
  width:1000px;
}

</style>

</style>
</head>
<body background="picc7.jpg">
<center>
<form method='POST' enctype='multipart/form-data'>
	<center>
<font size=6 face="Reem Kufi Regular">UPDATE HERB DETAILS</font>
<br><br>
	<div class="container">
<table>
<tr><td>Herb Name</td><td><input type="text" value='<?php echo $re[1]; ?>' name='bname'></td></tr>
<tr><td>cure</td><td><input type="text" value='<?php echo $re[2]; ?>' name='bauthor'></td></tr>
<tr><td>Description</td><td><input type="text" value='<?php echo $re[5]; ?>' name='bdes'></td></tr>
<tr><td>Price</td><td><input type="text" value='<?php echo $re[3]; ?>' name='bprice'></td></tr>
<tr><td>SET NEW IMAGE</td><td><input type="file" name='pic'></td></tr><br>
<tr><td><input type="submit" name='submit' value='update'></tr></td>
</td></tr>
</table>
</form>
<a href='edit.php'><b>ADMIN</b></a>
</center>
</body>
</html>
<?php
$sre=$_GET['id'];
if(isset($_POST['submit']))
{
       $bname=$_POST['bname'];
       $bauth=$_POST['bauthor'];
       $bdes=$_POST['bdes'];
       $bprice=$_POST['bprice']; 
	$files=$_FILES['pic']['name'];
	move_uploaded_file($_FILES['pic']['tmp_name'],"images/".$files);
$k=mysql_query("UPDATE `products` SET `pname`='$bname',`pcure`='$bauth',`pcost`='$bprice',`pimage`='$files',`pdescription`='$bdes' WHERE pid='$sre'");
echo "<center>succefully updated";
}
?>

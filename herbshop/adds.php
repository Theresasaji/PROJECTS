<?php
include("dbconnection.php");
?>
<html>
<head>
<title>ff</title>
<style>
a{
text-decoration:none;
color:black;
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

      .container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
  width:1000px;
}
</style>
</head>
<body background="picc7.jpg">
<center>
<font size=6 face="Reem Kufi Regular">ADD A PRODUCT</font>
<br><br>
<div class="container">
<form method='POST' name='frms' enctype='multipart/form-data'>
herb name<input type="text" placeholder="Enter herb Name" name="bname" required><br><br>
cure<input type="text" placeholder="Enter cure" name="bcure" required><br><br>
description<input type="text" placeholder="Enter herb description" name="bdes" required><br><br>
cost<input type="text" placeholder="Enter cost" name="bprice" required><br><br>
<input type="file" name="image"><br><br>
<input type="submit" name="submit" value="ADD"><br><br>
<b><a href="admin.php">ADMIN</a>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
       $pname=$_POST['bname'];
       $pcat=$_POST['bcure'];
       $pdes=$_POST['bdes'];
       $pprice=$_POST['bprice']; 
	$f=$_FILES["image"]['name'];


	move_uploaded_file($_FILES["image"]['tmp_name'],"images/".$f);
       $r=mysql_query("INSERT INTO `products`(`pname`, `pcure`, `pcost`, `pimage`, `pdescription`) VALUES ('$pname','$pcat','$pprice','$f','$pdes')");
echo"<center>!NEW ITEM ADDED!";

}
?>
           




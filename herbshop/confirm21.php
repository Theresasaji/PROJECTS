<?php
session_start();
include('dbconnection.php');
$n=$_SESSION['name'];
$ff=mysql_query("SELECT * FROM `cartdetails` WHERE uname='$n'");
while($d=mysql_fetch_array($ff))
{
	$final=0;
	$name=$_SESSION['name'];
	$price=$d[4];
	$item=$d[2];
	$cat=$d[3];
	$qu=$d[5];
	$final=($d[4]*$d[5]);
	echo $final;
	$date=date("Y/m/d");
	$status="PENDING";

$kadu=mysql_query("INSERT INTO `orderdetails`(`uname`, `bname`, `bcate`, `bprice`, `quantity`, `date`, `STATUS`) VALUES ('$name','$item','$cat','$price','$qu','$date','$status')");
}
$a=mysql_query("DELETE FROM `cartdetails` WHERE uname='$n'");
				
echo "done";				
header('location:confirm2.php');
?>












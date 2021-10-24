<?php
include('dbconnection.php');
session_start();
//margin:-20px 0px 0px 80px;
$namexx=$_SESSION['name'];
$st="PENDING";
$ncc=mysql_query("SELECT * FROM `orderdetails` where uname='$namexx' AND STATUS='$st'");
while($bmw=mysql_fetch_array($ncc))
{
	$date1=$bmw[6];
	$date2=date("Y/m/d");
	$dff=abs(strtotime($date2)-strtotime($date1));
	echo $dff;
	$vale=604799;
	if($dff>$vale)
	{
		$giri="DELIVERED";
		$love=mysql_query("UPDATE `orderdetails` SET `STATUS`='$giri' WHERE oid='$bmw[0]'");
	}
}
header('location:home.php');
?>
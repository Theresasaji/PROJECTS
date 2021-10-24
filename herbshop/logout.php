<?php
session_start();
include("dbconnection.php");
$name=$_SESSION['name'];
$annliya=mysql_query("DELETE FROM `cartdetails` WHERE uname='$name'");
unset($_SESSION['name']);
header('location:logins.php');
?>


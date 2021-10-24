<?php
$host="localhost";
$user="root";
$password="";
$db="miniproject";
$con=mysql_connect($host,$user,$password);
$dbase=mysql_select_db($db,$con);
if(!$dbase||!$con)
{
  die("could not connection or select the database");
}
?>


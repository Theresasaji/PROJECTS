<?php
session_start();
include("dbconnection.php");
if(isset($_POST['submit']))
{
    $user=$_POST['txt1'];
    $pass=$_POST['txt2'];
    $r=mysql_query("SELECT * FROM `userdetails` where uemail='$user' AND upassword='$pass'");
    $row=mysql_num_rows($r);
    if($user=="admin"||$pass=="admin")
    {
           header('location:admin.php');
    } 
    else if($row==1)
    {
	$z=mysql_fetch_array($r);
	$us=$z[1];
       $_SESSION['name']=$us;
	header('location:check.php');
    }
    else
    {
        echo "<br><br>invalid username/password";
    }
}
?>     


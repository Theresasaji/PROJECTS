<html>
<head>
<style>
      .container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
  width:1000px;
}



</style>
</head>
<body background="picc7.jpg"><font size="5" color="green">
   <center>ORDER DETAILS</center></font><br><br><br><br><br>
   <center><div class="container">
<?php
include('dbconnection.php');
echo"<center>";
$q=mysql_query("Select * from orderdetails");
echo "<table border=1 bordercolor=black>";
echo "<tr>";
echo "<td align='center'>";
echo "CUSTOMER";
echo "</td>";
echo "<td align='center'>";
echo "BOOK";
echo "</td>";
echo "<td align='center'>";
echo "PRICE";
echo "</td>";
echo "<td align='center'>";
echo "Quantity";
echo "</td>";
echo "<td align='center'>";
echo "STATUS";
echo "</td>";
echo "<td align='center'>";
echo "Date of Purchase";
echo "</td>";
echo "</tr>";
while($r=mysql_fetch_array($q))
{
   echo "<tr>";
   echo "<td align='center'>";
   echo "$r[1]";
   echo "</td>";
   echo "<td align='center'>";
   echo "$r[2]";
   echo "</td>";
   echo "<td align='center'>";
   echo "$r[4]";
   echo "</td>";
   echo "<td align='center'>";
   echo "$r[5]";
   echo "</td>";
   echo "<td align='center'>";
   echo "$r[7]";
   echo "</td>";
   echo "<td align='center'>";
   echo "$r[6]";
   echo "</td>";
   echo "</tr>";
}
echo "</table>"; 
echo"<a href='admin.php'>ADMIN PANEL</a>";
echo "</center>";
?>
</body>
</html>


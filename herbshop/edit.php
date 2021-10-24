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
<body background="picc7.jpg">
<font face='overpass'><center><h2>MANAGE HERB</h2></center>
<br><b><br><b><br><b><br><b><center>
<div class="container">
<?php
include('dbconnection.php');
$q=mysql_query("SELECT * FROM `products`");
echo "<table border=1 bordercolor=black>";
echo "<tr><x>";
echo "<td align='center'>";
echo "HERB NAME";
echo "</td>";
echo "<td align='center'>";
echo "CURE";
echo "</td>";
echo "<td align='center'>";
echo "ITEM DESCRIPTION";
echo "</td>";
echo "<td align='center'>";
echo "ITEM PRICE";
echo "</td>";
echo "</x></tr>";
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
   echo "$r[5]";
   echo "</td>";
   echo "<td align='center'>";
   echo "$r[3]";
   echo "</td>"; 
   echo "<td align='center'>";
   echo "<a href='editdetail.php?id=$r[0]'>EDIT</a>";
   echo "</td>";
   echo "<td align='center'>";
   echo "<a href='rr.php?id=$r[0]'>REMOVE</a>";
   echo "</td>";
   echo"</tr>";
}
echo "</table>"; 
echo"<b><a href='admin.php'>ADMIN PANEL</a>";
echo "</center>"; 
?>
</div>
</center>
</body>
</html>

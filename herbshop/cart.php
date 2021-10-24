<?php
session_start();
include('dbconnection.php');
?>
<html>
<head>
<style>
.main
{
	position:absolute;
}

.main .img
{
	position:absolute;
	height:800px;
	width:1500px;
	margin:-30px 0px 0px -100px;
	animation-name:narutto;
	animation-fill-mode:forwards;
	animation-duration:1500ms;
}
@keyframes narutto
{
	from{filter:blur(0px);}
	to{filter:blur(8px);}
}
body
{
overflow:hidden;
}
.tab
{
	position:absolute;
	height:30px;
	width:600px;
	margin:50px 0px 0px 369px;	
	background:#c9447450;
}
.home
{
	position:absolute;
	height:30px;
	width:100px;
	margin:0px 0px 0px 0px;	
	background:#ff373740;
	transition-duration:500ms;
	text-align:center;
}
.home a
{
	position:absolute;
	margin:6px 0px 0px -23px;	
	text-decoration:none;
	color:white;
	transition-duration:500ms;
}
.home a:hover
{
	color:black;
	margin:16px 0px 0px -23px;
}
.home:hover
{
	position:absolute;
	height:50px;
	width:100px;
	margin:-8px 0px 0px 0px;	
	background:green
	text-align:center;
	box-shadow:2px 2px 6px black;
}
.book
{
	position:absolute;
	height:30px;
	width:100px;
	margin:0px 0px 0px 100px;	
	background:#ff373740;
	transition-duration:500ms;
	text-align:center;
}

.book a
{
	position:absolute;
	margin:6px 0px 0px -23px;	
	text-decoration:none;
	color:white;
	transition-duration:500ms;
}
.book a:hover
{
	color:black;
	margin:16px 0px 0px -23px;
}
.book:hover
{
	position:absolute;
	height:50px;
	width:100px;
	background:green;
	text-align:center;
	box-shadow:2px 2px 6px black;
}



.hot
{
	position:absolute;
	height:30px;
	width:100px;
	margin:0px 0px 0px 200px;	
	background:#ff373740;
	transition-duration:500ms;
	text-align:center;
}

.hot a
{
	position:absolute;
	margin:6px 0px 0px -33px;	
	text-decoration:none;
	color:white;
	transition-duration:500ms;
}
.hot a:hover
{
	color:black;
}
.hot:hover
{
	position:absolute;
	height:50px;
	width:100px;
	background:green;
	text-align:center;
	box-shadow:2px 2px 6px black;
}



.bookings
{
	position:absolute;
	height:30px;
	width:100px;
	margin:0px 0px 0px 300px;	
	background:#ff373740;
	transition-duration:500ms;
	text-align:center;
}

.bookings a
{
	position:absolute;
	margin:6px 0px 0px -43px;	
	text-decoration:none;
	color:white;
	transition-duration:500ms;
}
.bookings a:hover
{
	color:black;
}
.bookings:hover
{
	position:absolute;
	height:50px;
	width:100px;
	background:green
	text-align:center;
	box-shadow:2px 2px 6px black;
}




.logout
{
	position:absolute;
	height:30px;
	width:100px;
	margin:0px 0px 0px 400px;	
	background:#ff373740;
	transition-duration:500ms;
	text-align:center;
}

.logout a
{
	position:absolute;
	margin:6px 0px 0px -33px;	
	text-decoration:none;
	color:white;

	transition-duration:500ms;
}
.logout a:hover
{
	color:black;
}
.logout:hover
{
	position:absolute;
	height:50px;
	width:100px;
	background:green;
	text-align:center;
	box-shadow:2px 2px 6px black;
}



.cart
{
	position:absolute;
	height:30px;
	width:100px;
	margin:0px 0px 0px 500px;	
	background:#ff373740;
	transition-duration:500ms;
	text-align:center;
}

.cart a
{
	position:absolute;
	margin:6px 0px 0px -33px;	
	text-decoration:none;
	color:white;

	transition-duration:500ms;
}
.cart a:hover
{
	color:black;
}
.cart:hover
{
	position:absolute;
	height:50px;
	width:100px;
	background:green;
	text-align:center;
	box-shadow:2px 2px 6px black;
}




.contents
{
	position:absolute;
	height:350px;

	border-left:4px solid white;
	border-right:4px solid white;
	width:520px;
	overflow-x:hidden;
	margin:206px 0px 0px 403px;
	background:#5fe6d260;
}
.php
{
position:absolute;
margin:26px 0px 0px 95px;
text-align:center;
}
.php .phpimage
{
width:100px;
height:100px;
}
.php a
{
	text-decoration:none;
	transition-duration:700ms;
	color:white;
}
.php a:hover
{
	text-shadow:3px 3px 3px green;
	text-decoration:none;
}
select{
	position:absolute;
	margin:1px 0px 0px -63px;
}
.rem
{
	text-decoration:none;
	color:green;
}
</style>
</head>
<body>
<div class='main'>
	
	<img src='picc7.jpg' class='img'>
	<div class='tab'>
		<div class='home'>
			<a href='home.php'>HOME</a>
		</div>
		<div class='book'>
			<a href='shop.php'>SHOP</a>
		</div>
		<div class='hot'>
			<a href='profile.php'>PROFILE</a>
		</div>
		<div class='bookings'>
			<a href='feedback.php'>FEEDBACK</a>
		</div>
		<div class='logout'>
			<a href='logout.php'>LOGOUT</a>
		</div>
		<div class='cart'>
			<a href='cart.php'>CART</a>
		</div>
	</div>
	<div class='contents'>
		<div class='php'>
		<?php
	$name=$_SESSION['name'];
$r=mysql_query("SELECT * FROM `cartdetails` where uname='$name'");
$oppi=mysql_num_rows($r);
echo"<br>";
echo"<br>";
echo"<br>";
if($oppi>0)
{
$total=0;
   echo"<table cellspacing=10>";
	echo "<tr>";
	echo "<th>";
	echo "Item";
echo"<br>";
	echo "</th>";
	echo "<th>";
	echo "Quantity";
echo"<br>";
	echo "</th>";
	echo "<th>";
	echo "Price";
echo"<br>";
	echo "</th>";
	echo "<th>";
	echo "ACTIONS";
echo"<br>";
	echo "</th>";
	echo "<th>";
	echo "ACTIONS";
echo"<br>";
	echo "</th>";
	echo "</tr>";
 while($b=mysql_fetch_array($r))
{
   echo"<tr>";
   echo"<td align='center'>"; 
   echo $b[2];
   echo"</td>";
   echo"<td align='center'>";
   echo $b[5];
   echo"</td>";
   echo"<td align='center'>";
   echo $b[4];
   echo"</td align='center'>";
   echo"<td align='center'>";
   echo "<a href='recart.php?id=$b[0]' class='rem'>REMOVE</a>";
   echo"</td>";
   echo"<td align='center'>";
   echo "<a href='qua.php?id=$b[0]'>Quantity</a>";
   echo"</td>";
echo"</tr>";
   $total=$total+$b[4]*$b[5];
}
   echo"</tr>";
   echo"</table>";
echo"<br>";
if($oppi>10)
{
 $total=$total-500;
echo"Total Amount is ";
echo $total;
}
else
{
echo "<xx class='x'>";
echo"Total Amount is ";
echo $total;
echo " Rs";
echo "</xx>";
}
echo "<br>";
echo "<br>";
echo "<a href='confirm.php' class='cx'>Confirm Order</a>";
}
else
{
	echo "<br><center>NOthing to buy";
}
			
		?>
		</div>
	</div>

</div>
</body>
</html>
<?php
include('dbconnection.php');
if(isset($_POST['submit']))
{
	$ii=$_GET['id'];
	$rrr=mysql_query("SELECT * FROM `products` where pid='$ii'");
	$ff=mysql_fetch_array($rrr);
	$quantity=$_POST['anjana'];
	$item=$ff[1];
	$name=$_SESSION['name'];
	$cate=$ff[2];
	$price=$ff[3];
	$quer=mysql_query("INSERT INTO `cartdetails`(`uname`, `cname`, `ccategory`, `cprice`, `quantity`) VALUES ('$name','$item','$cate','$price','$quantity')");
	echo "ITEM ADDED IN YOUR CART";
}
?>



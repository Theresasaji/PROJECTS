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
	background:red;
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
	background:red;
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
	background:red;
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
	background:red;
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
	background:red;
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
	background:red;
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
margin:26px 0px 0px 183px;
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
</style>
</head>
<body>
<div class='main'>
	
	<img src='1510311-furniture-wallpaper.jpg' class='img'>
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
			include('dbconnection.php');
			$i=$_GET['id'];
			$rr=mysql_query("SELECT * FROM `products` where pid='$i'");
			$f=mysql_fetch_array($rr);
			
				echo "<img src='images/$f[4]' class='phpimage'>";
				echo "<br><br>";
				echo $f[5];
				echo "<br>";
				echo "Type - ";
				echo $f[2];
				echo "<br>";
				echo "Price - ";
				echo $f[3];
				echo "</a>";
				echo "<br><br>";
				echo "<form method='POST' name='a'>";
				echo "<select name='anjana'>";
				echo "<option name='anjana' value='1'>1</option> ";
echo "<option name='anjana' value='2'> 2</option>";
echo "<option name='anjana' value='3'>3</option>";
echo "<option name='anjana' value='4'>4</option>";
echo "<option name='anjana' value='5'>5</option>"; 
echo "<option name='anjana' value='6'>6</option>"; 
echo "<option name='anjana' value='7'>7</option>"; 
echo "<option name='anjana' value='8'>8</option>"; 
echo "<option name='anjana' value='9'>9</option>";
echo "<option name='anjana' value='10'>10</option>";
echo "</select>";
				echo "<input type='submit' value='ADD to cart' name='submit'>";
				echo "</form>";
				echo "<a href='quickbuy.php?id=$f[0]'>";
				echo "<input type='submit' value='QUICK BUY'>";
				echo "</a>";
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



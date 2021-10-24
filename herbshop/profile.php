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
	background:green;
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
	background:green;
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
	
	<img src='6.jpg' class='img'>
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
				<font face='overpass'>
				<?php
				$name=$_SESSION['name'];
				$r=mysql_query("SELECT * FROM `userdetails` where uname='$name'");
				$anjana=mysql_fetch_array($r);
				?>
				<form method='POST'>
				Name: <input type='text' name='name' value='<?php echo $anjana[1]; ?>'><br><br>
				Email: <input type='text' value='<?php echo $anjana[2]; ?>' name='email'><br><br>
				Place: <input type='text' value='<?php echo $anjana[3]; ?>' name='place'><br><br>
				District: <input type='text' value='<?php echo $anjana[4]; ?>' name='add'><br><br>
				Phone: <input type='text' value='<?php echo $anjana[5]; ?>' name='number'><br><br>
                                Password: <input type='text' value='<?php echo $anjana[6]; ?>' name='pass'><br><br>
					<input type='submit' value='Update' name='submit'>
				</form>
				<?php
					if(isset($_POST['submit']))	
					{
						$name=$_POST['name'];
						$email=$_POST['email'];
						$plac=$_POST['place'];
						$add=$_POST['add'];
						$num=$_POST['number'];
                                                $pas=$_POST['pass'];
						$n=$_SESSION['name'];
						$ann=mysql_query("UPDATE `userdetails` SET `uname`='$name',`uemail`='$email',`uplace`='$plac',`udistrict`='$add',`uphoneno`='$num',`upassword`='$pas' WHERE uname='$n'");
						echo "<center><b><br>Profile Updated";
				}
				?>	




		</div>
	</div>

</div>
</body>
</html>



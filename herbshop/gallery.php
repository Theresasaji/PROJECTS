<html>
<head>
<style>
body{
overflow:hidden;

}
.main
{
	position:absolute;
	background:cyan;
	height:900px;	
	width:1300px;
	padding:3% 0% 0% 40%;
	animation-name:pics;
	animation-duration:2900ms;
	animation-iteration-count:100;
}
@keyframes pics
{
	from{	background:cyan; }
	to{	background:#3fccbc; }
}
.main img
{
 height:100px;
 width:140px;
	animation-name:pic;
	animation-duration:7300ms;
	animation-iteration-count:100;
}
@keyframes pic
{
	from{	margin:-100px 0px 0px 110px; }
	to{ margin:500px 0px 0px 110px; }
}
</style>
</head>
<body>
<div class='main'>
<img src='slide/1.jpg'><br><br>
<img src='slide/2.jpg'><br><br>
<img src='slide/3.jpg'><br><br>
</div>
</body>
</html>

<?php
session_start();
//include("dbcon.php");
?>
<html>
<head>
<title>gg</title>
<style>
  .navbar{
    margin-bottom: 0px;
}

#bannerImage{
    padding-top:75px;
    padding-bottom:50px;
    margin-bottom: 20px;
    text-align:center;
    color:#f8f8f8;
    background:url(intro.jpg);
    background-size:cover;
}

#bannerContent{
    position:relative;
    padding-top:6%;
    padding-bottom:6%;
    margin-top:12%;
    margin-bottom:12%;
    background-color:rgba(0,0,0,0.7);
    max-width:660px;
}

footer{
    background-color:#101010;
    color:#9d9d9d;
    font-size:14px;
    font-weight:bold;
    padding:10px;    
    bottom:0;
}

html { 
    min-height:100%;
    position:relative;    
} 

.footer { 
    position: absolute; 
    bottom:0; 
    right:0;
    left:0;
}

@media (min-width:320px){
    #autoResize{
        font-size:12px;
    }
}
@media (min-width:481px){
    #autoResize{
        font-size:16px;
    }
}
@media (min-width:641px){
    #autoResize{
        font-size:18px;
    }
}
@media (min-width:961px){
    #autoResize{
        font-size:20px;
    }
}
@media (min-width:1000px){
    #autoResize{
        font-size:26px;
    }
}
.chy
{
  position:absolute;
}
body
{
  overflow:hidden;
}
.con
{
  position:absolute;
  margin:110px 0px 0px 465px;
  width:350px;
  height:350px;
  border-radius:0px;  
  border:2px solid white;
  background:#ffffff50;
  transition-duration:1300ms;
}
.chy .vid
{
  position:absolute;
  width:1600px;
  height:800px;
  filter:blur(0px);
  margin:-40px 0px 0px -120px;
}
.vid
{


  margin:-110px 0px 0px -120px;
}
.home
{
  position:absolute;
  margin:0px 0px 0px 900px;
  height:40px;
  width:60px;
  transition-duration:600ms;
  padding:15px 10px 0px 10px;
  background:#ffffff20;
  animation-name:arsha;
  animation-fill-mode:forwards;
  animation-duration:1500ms;
  border:2px solid white;
}
@keyframes arsha
{
  from{margin:-100px 0px 0px 100px;}
  to{margin:0px 0px 0px 100px;}
}

.home a
{
  text-decoration:none;
  color:white;
}
.home:hover
{
box-shadow:4px 4px 7px black;
border-bottom-left-radius:20px;
border-bottom-right-radius:20px;
}


.about
{
  position:absolute;
  margin:0px 0px 0px 980px;
  height:40px;
  width:60px;
  transition-duration:600ms;
  padding:15px 10px 0px 10px;
  background:#ffffff20;
  animation-name:arsha2;
  animation-fill-mode:forwards;
  animation-duration:1500ms;
  border:2px solid white;
}
@keyframes arsha2
{
  from{margin:-100px 0px 0px 980px;}
  to{margin:0px 0px 0px 980px;}
}

.about a
{
  text-decoration:none;
  color:white;
}
.about:hover
{
box-shadow:4px 4px 7px black;
border-bottom-left-radius:20px;
border-bottom-right-radius:20px;
}


.login
{
  position:absolute;
  margin:0px 0px 0px 1200px;
  height:40px;
  width:60px;
  transition-duration:600ms;
  padding:15px 30px 0px 10px;
  background:#ffffff20;
  animation-name:arsha3;
  animation-fill-mode:forwards;
  animation-duration:1500ms;
  border:2px solid white;
}
@keyframes arsha3
{
  from{margin:-100px 0px 0px 1200px;}
  to{margin:0px 0px 0px 1200px;}
}

.login a
{
  text-decoration:none;
  color:white;
}
.login:hover
{
box-shadow:4px 4px 7px black;
border-bottom-left-radius:20px;
border-bottom-right-radius:20px;
}

.signup
{
  position:absolute;
  margin:0px 0px 0px 1080px;
  height:40px;
  width:60px;
  transition-duration:600ms;
  padding:15px 30px 0px 10px;
  background:#ffffff20;
  animation-name:arsha4;
  animation-fill-mode:forwards;
  animation-duration:1500ms;
  border:2px solid white;
}
@keyframes arsha4
{
  from{margin:-100px 0px 0px 1080px;}
  to{margin:0px 0px 0px 1080px;}
}

.signup a
{
  text-decoration:none;
  color:white;
}
.signup:hover
{
box-shadow:4px 4px 7px black;
border-bottom-left-radius:20px;
border-bottom-right-radius:20px;
}
.vicky2
{
  position:absolute;
  background:#00000095;
  margin:240px 0px 0px 350px;
  height:323px;
  width:700px;
  overflow:auto;
  border-radius:212px;
  animation-name:aaa;
  animation-duration:2000ms;
  animation-fill-mode:forwards;
  transition-duration:500ms;
}
@keyframes aaa
{
  from{margin:734px 0px 0px 350px; }
  to{margin:160px 0px 0px 350px; 
    box-shadow:3px 4px 8px black;}
}
.contents
{
  width:autopx;
  color:white;
  position:absolute;
  margin:60px 0px 0px 95px;
  text-align:center;
  text-decoration:none;
}
</style>
</head>
<body>
<font face='overpass'>
<div class='chy'>
<img src='hy.jpg' class='vid'>
<div class='home'>
<a href='page1.php'>HOME</a>
</div>
<div class='login'>
<a href='logins.php'>LOGIN</a>
</div>
<div class='about'>
<a href='aboutus.php'>ABOUT</a>
</div>
<div class='signup'>
<a href='userregi.php'>REGISTER</a>
</div></div></font>
  <div class='vicky2'> 
    <div class='contents'>
      <br><br><font color=green>
    <center> <h1> Welcome to Online Herbs Shopping System</h1></center></div></div>
 <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy<a href=" ">herbsstore</a>.All Rights Reserved.</p>
                   <p>This website is developed by TScreation</p>
               </center>
               </div>
           </footer>
</body>
</html>

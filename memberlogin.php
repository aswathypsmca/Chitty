<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>chitty management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    <!--<img class="logo" src="logo1.png" alt="Logo"/>-->
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
  <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">
<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>

<!--<a href="viewauction.php" >VIEW AUCTION</a>
<br><br>-->

 <div class="dropdown">
<a href="#" id="user"> VIEW</a>
<div class="dropdown-content">
		<a href=" memberprofile.php">PROFILE</a><br>
		<a href="viewauction.php">AUCTION</a>
		
		
	</div>
</div>
<br><br>
<a href="feedback.php" >FEED BACK</a><br><br>

 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
    
  </div>
<div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>
	  

    </body>
    </html>

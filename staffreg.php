<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

//header('location:index.php');
}

if(isset($_POST['submit']))
{
$a=$_POST["sname"];
$b=$_POST["sgender"];
$c=$_POST["saddress"];
$d=$_POST["phno"];

//echo $d;
$e=$_POST["dob"];
$f=$_POST["email"];
$g=$_POST["doj"];

//INSERT INTO `tbl_staff`(`s_id`, `s_name`, `s_gender`, `s_address`, `s_mob`, `dob`, `s_email`, `doj`, `log_id`)
//INSERT INTO `tbl_login`(`log_id`, `role_id`, `user_name`, `password`, `status`) VALUES
$sql1="INSERT INTO `tbl_staff`(`s_name`, `s_gender`, `s_address`, `s_mob`, `dob`, `s_email`, `doj`, `log_id`) VALUES ('$a','$b','$c','$d','$e','$f','$g','1')";
$result1=mysqli_query($con,$sql1);
//echo $sql1;
$q11 = "SELECT `s_id` FROM `tbl_staff` WHERE `s_name`=$a ";
//$result1=mysqli_query($con,$sql1);
//$result22 = $con->query($q1);
$row1 = mysqli_query($con,$q11);
//$dd=$row1['s_id'];
//echo($dd);
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$p=random_password();

$sql1="INSERT INTO `tbl_login`(`role_id`, `user_name`, `password`, `status`) VALUES ('2','$f','$p','0')";
$result1=mysqli_query($con,$sql1);

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
 <div class="body1" >
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">
<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
<!--<div class="dropdown">
<a href="#" id="user">USERS</a>
<div class="dropdown-content">
		<a href="staffreg.php">STAFF</a><br>
		<a href="memberreg.php">MEMBER</a>
		
	</div>
</div>
 <br><br>-->
 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><h2 class="login_head">-->
<div class="body_text2">

    <form method="post" name="myform" action="#" onsubmit="return false">
	<table style="width:200% cellpadding:1%  ">
	<tr><td><h3>STAFF REGISTRATION</h3></td></tr>
	<tr><td> NAME:</td> <td><input type="text" name="sname" placeholder="name" required></td></tr></br><tr></tr>
	<tr><td> GENDER:</td><td>  <input type="radio" name="sgender" value="male" checked> Male &nbsp&nbsp
                               <input type="radio" name="sgender" value="female"> Female</td></tr></br><tr></tr>
	<tr><td> ADDRESS:</td> <td><input type="text" name="saddress" placeholder="Address" required></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="phno"maxlength="10" placeholder="mob num" required id="phone"></td></tr></br><tr></tr>
	<tr><td> DOB:</td> <td><input type="date" name="dob" required></td></tr></br><tr></tr>
	<tr><td> EMAIL:</td> <td><input type="text" name="email" placeholder="mail_id" required id="email"></td></tr></br><tr></tr>
	<tr><td> DOJ:</td> <td><input type="date" name="doj"required></td></tr></br><tr></tr>
	<tr><td ><input type="submit" name="submit" value="Register">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
</form>
<script src="jquery.js">
</div></div>

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>

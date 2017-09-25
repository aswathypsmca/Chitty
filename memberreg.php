<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
if(isset($_POST['submit']))
{
$a=$_POST["cname"];
$b=$_POST["c_gender"];
$c=$_POST["caddr"];
$d=$_POST["cmob"];
$e=$_POST["cemail"];
$f=$_POST["cpan"];

$sql1="INSERT INTO `tbl_customer`( `c_name`, `c_gender`, `c_address`, `c_mob`, 
`c_email`, `pan`, `status`) VALUES ('$a','$b','$c','$d','$e','$f','0')";
$result1=mysqli_query($con,$sql1);
$q11 = "SELECT `cust_id` FROM `tbl_customer` WHERE `c_name`=$a ";
$row1 = mysqli_query($con,$q11);
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$p=random_password();

$sql1="INSERT INTO `tbl_login`(`role_id`, `user_name`, `password`, `status`) VALUES ('3','$e','$p','0')";
$result1=mysqli_query($con,$sql1);


//print_r($sql

//$result=mysqli_query($con,$sql);
//header()
//000000000000

	

}
?>


<!DOCTYPE html>
<html>
<head>

  <title>chitty management system</title>
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
<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
<a href="addchitty.php">ADD CHITTY</a><br><br>
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><h2 class="login_head">-->
<div class="body_text3">
    <form method="post" name="myform" action="#">
	<table style="width:100% cellpadding:5%  ">
	<br><br><tr><td><h3>CHITTY MEMBERS</h3></td></tr>
	<tr><td> NAME:</td> <td><input type="text" name="cname"placeholder="Name" required></td></tr></br><tr></tr>
	<tr><td> GENDER:</td><td>  <input type="radio" name="c_gender" value="male" checked> Male &nbsp&nbsp
                               <input type="radio" name="c_gender" value="female"> Female</td></tr></br><tr></tr>
	
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"placeholder="Address" required></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="phno" name="cmob" maxlength="10"placeholder="mob num" required></td></TR></br></tr><tr></tr>
	<tr><td> EMAIL:</td> <td><input type="email" name="cemail" placeholder="mail_id" required></td></tr></br><tr></tr>
	<tr><td> PAN:</td> <td><input type="text" name="cpan" placeholder="PAN" required></td></TR></br></tr><tr></tr>
	
	
<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Register">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
	
	</form>
	
</div></div>

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>

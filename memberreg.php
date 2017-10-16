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

function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$p=random_password();
$sql1="INSERT INTO `tbl_login`(`role_id`, `user_name`, `password`, `status`) VALUES ('3','$e','$p','0')";
$result1=mysqli_query($con,$sql1);
$q13 = "SELECT max(`log_id`) as id FROM `tbl_login`";
$row3 = mysqli_query($con,$q13);
$r=mysqli_fetch_array($row3);
$d1=$r['id'];

$sq="INSERT INTO `tbl_customer` (`c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status`) VALUES ('$a','$b','$c','$d','$e','$f','$d1','0')";
$resul=mysqli_query($con,$sq);
echo $sq;

}
?>


<!DOCTYPE html>
<html>
<head>

  <title>chitty management system</title>
  <link rel="stylesheet" href="logo.css">
 
  <script>
  function cnam()
{
  var cnam=/^[a-zA-Z ]{4,15}$/;
   if(document.myform.cname.value.search(cnam)==-1)
    {
	 alert("Enter correct name");
	 document.myform.cname.focus();
	 return false;
	 }
	}

	

function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.myform.cemail.value.search(email)==-1)
    {
	 alert("Enter correct email");
	 document.myform.cemail.focus();
	 return false;
	 }
	}






	function phone()
	{
	var phn=/^[0-9]{10}$/;
	var len=document.myform.cmob.value.length;
  if(document.myform.cmob.value.search(phn)==-1)
    {
		if(len!=10)
		{
	 alert("Enter correct phone no");
	 document.myform.cmob.focus();
	 return false;
	 }
	 }
	}




function vali()
{
  var cnam=/^[a-zA-Z ]{4,15}$/;
   var emaill=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
 
	 	var phn=/^[0-9]{9,14}$/;


	    if(document.myform.cname.value.search(cnam)==-1)
    {
	 alert("Enter correct name");
	 document.myform.cname.focus();
	 return false;
	 }

  

  else if(document.myform.cemail.value.search(emaill)==-1)
    {
	 alert("Enter correct login name");
	 document.myform.cemail.focus();
	 return false;
	 }

	  else if(document.myform.cmob.value.search(phn)==-1)
    {
	 alert("Enter Correct phone no");
	 document.myform.cmob.focus();
	 return false;
	 }
	 	 else
	{
	 return true;
	 }
	 }


</script>
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
<a href="addcustomer.php">ADD CHITTY</a><br><br>
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><h2 class="login_head">-->
<div class="body_text3">
    <form method="post" name="myform" action="#"onSubmit="return vali()">
	<table style="width:100% cellpadding:5%  ">
	<br><br><tr><td><h3> MEMBER REGISTRATION	</h3></td></tr>
	<tr><td> NAME:</td> <td><input type="text" name="cname"placeholder="Name" require onChange="return cnam()"></td></tr></br><tr></tr>
	<tr><td> GENDER:</td><td>  <input type="radio" name="c_gender" value="male" checked> Male &nbsp&nbsp
                               <input type="radio" name="c_gender" value="female"> Female</td></tr></br><tr></tr>
	
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"placeholder="Address" required></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="cmob" maxlength="10"placeholder="mob num" required onChange="return phone()"></td></TR></br></tr><tr></tr>
	<tr><td> EMAIL:</td> <td><input type="text" name="cemail" placeholder="mail_id" required onChange="return email()"></td></tr></br><tr></tr>
	<tr><td> PAN:</td> <td><input type="text" name="cpan" placeholder="PAN" required></td></TR></br></tr><tr></tr>
	
	
<tr><td >&nbsp&nbsp&nbsp&<input type="submit" name="submit" value="Register">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
	
	</form>
	
</div></div>

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>

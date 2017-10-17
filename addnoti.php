  <?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
$c = date('Y-m-d');
if(isset($_POST["submit"]))
{

//$b=$_POST["date"];
$a=$_POST["noti"];

$sql="INSERT INTO `notification`(  `notification`, `date`) VALUES ('$a','$c')";
$result=mysqli_query($con,$sql);
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
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b>
     <!--<b class="heading10"><strong><font color="blue" size="6">OASS</font></strong></b>-->
  



  </div>
  <!-- Div for body section -->
  <div class="body1" >
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
    <div class="body_text1">
<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
<div class="dropdown">
<a href="#" id="user">USERS</a>
<div class="dropdown-content">
		<a href="staffreg.php">STAFF</a><br>
		<a href="memberview.php">MEMBER</a>
		
	</div>
</div><br><br>
<a href="chittyreg.php">CHITTY</a>

 <br><br>
 <a href="addnoti.php">NOTIFICATION</a><br><br>
 <a href="vfeedback.php">FEEDBACK</a><br><br>
 
  <a href="logout.php">LOGOUT</a><br>



    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
  
<!--<img src="clg.png" id="ajce_img" width="800px" height="300px" >
-->
<div class="body_text2">
    <form method="post" name="myform" action="#">
	<table style="width:200% cellpadding:1%  ">
	<br><BR><BR><BR><br><br><br><tr><td><h3>ADD NOTIFICATION</h3></td></tr>
	
	
	<tr><td> Enter Notification:</td><td><input type="textarea" name="noti" required></td></tr>
	
	<!--<tr><td> START DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>-->
	<tr><td ><input type="submit" name="submit" value="SAVE">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
</form>
</div>
      </div>
      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>

